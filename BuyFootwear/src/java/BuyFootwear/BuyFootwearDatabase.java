package BuyFootwear;

import java.io.InputStream;
import java.sql.*;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author abc
 */
public class BuyFootwearDatabase {

    Connection con;
    Statement command;

    public BuyFootwearDatabase() {
        try {
            Class.forName("com.mysql.jdbc.Driver");

            this.con = DriverManager.getConnection("jdbc:mysql://localhost:3306/buyfootwear", "root", "root95686282");
        } catch (ClassNotFoundException ex) {
            System.out.println("Class not found");
            ex.printStackTrace();
        } catch (SQLException ex) {
            System.out.println("Mysql Error:");
            ex.printStackTrace();
        }

    }

    public Boolean AddUser(String FirstName, String LastName, String MobileNo, String Password) {
        try {
            command = con.createStatement();
            String sql = "Insert Into customertable(FirstName,LastName,MobileNo,Password) values ('" + FirstName + "','" + LastName + "','" + MobileNo + "','" + Password + "')";

            int result = command.executeUpdate(sql);
            if (result > 0) {
                 System.out.println(result);
                return true;
            } else {
                 System.out.println(result);
                return false;
            }

        } catch (SQLException ex) {
 System.out.println(ex);
            return false;
        } finally {
            try {
                con.close();
            } catch (SQLException ex) {
                Logger.getLogger(BuyFootwearDatabase.class.getName()).log(Level.SEVERE, null, ex);
            }
        }

    }

   public String LoginUser(String mobileno, String password) {
        try {
            command = con.createStatement();
              String sql = "select firstname from customertable where mobileno="+mobileno+" AND password="+password;
              
          ResultSet Rs=command.executeQuery(sql);
          
          if(Rs==null)
          {
              
              System.out.println("no user");
              
                    }
          else
          {
              while(Rs.next())
              {
                 return Rs.getString("firstname");
              }
              
          }
          
              
              
              
        } catch (SQLException ex) {
            Logger.getLogger(BuyFootwearDatabase.class.getName()).log(Level.SEVERE, null, ex);
            
            
        }
        
   return null;
    }

   
    public Boolean AddProdct(String pname,String category,String pretype,String subtype,int size,int quantity,double aprice, double sprice,InputStream proimg,String description)
    {
        try {
           
            
            String sql = "Insert Into producttable (p_name,category,pretype,subtype,size,quantity,a_prize,s_prize,p_img,p_desc) values (?,?,?,?,?,?,?,?,?,?)";
        PreparedStatement command1=con.prepareStatement(sql);
        command1.setString(1, pname);
        command1.setString(2, category);
        command1.setString(3, pretype);
        command1.setString(4, subtype);       
        command1.setInt(5, size);
        command1.setInt(6, quantity);
        command1.setDouble(7, aprice);
        command1.setDouble(8, sprice);
        command1.setBinaryStream(9, proimg);
        command1.setString(10, description );
       int result = command1.executeUpdate();
            if (result > 0) {
                 System.out.println(result);
                return true;
            } else {
                 System.out.println(result);
                return false;
            }
        } catch (SQLException ex) {
            ex.printStackTrace();
            return false;
            
        }
        
       
       
    }
    
    public ArrayList<Product> getPreType(String type)
    
    
    {
        ArrayList<Product> pretypelist=new ArrayList<Product>();
        
        String sql=" select distinct pretype, p_id from producttable where category=? group by pretype ;";
        
        try {
           PreparedStatement ps=con.prepareStatement(sql);
           ps.setString(1,type);
            ResultSet Rs=ps.executeQuery();
            
                while(Rs.next())
                {
                      Product p=new Product();
              p.setPretype(Rs.getString("pretype"));
              p.setId(Rs.getInt("p_id"));
              pretypelist.add(p);
                }
                return pretypelist;
            
            
            
        } catch (SQLException ex) {
           ex.printStackTrace();
        }
    return pretypelist;
    }
    
     public ArrayList<Product> getShowProduct(String category,String Pretype)
    
    
    {
        ArrayList<Product> pretypelist=new ArrayList<Product>();
        
        String sql="  select p_id,p_name,s_prize from producttable where pretype=? AND category=? group by p_name;";
        
        try {
           PreparedStatement ps=con.prepareStatement(sql);
           ps.setString(1,Pretype);
            ps.setString(2,category);
            ResultSet Rs=ps.executeQuery();
            
                while(Rs.next())
                {
                      Product p=new Product();
              p.setId(Rs.getInt("p_id"));
              p.setP_name(Rs.getString("p_name"));
              p.setS_price(Rs.getDouble("S_prize"));
              
              pretypelist.add(p);
                }
                return pretypelist;
            
            
            
        } catch (SQLException ex) {
           ex.printStackTrace();
        }
    return pretypelist;
    }
    
    
    public Blob getProductImageById(int i)
    {
    String sql="Select p_img from producttable where p_id=" +i;
    
    Blob image=null;
    
        try {
            command=con.createStatement();
           ResultSet rs=command.executeQuery(sql);
           while(rs.next())
           {
              image=rs.getBlob("p_img");
           }
           return image;
        } catch (SQLException ex) {
            Logger.getLogger(BuyFootwearDatabase.class.getName()).log(Level.SEVERE, null, ex);
        }
     return image;
    }
    public Product getProductDetailById(String i)
    {
        //distinct unique value per product or you can say group by per value to size
      String sql="select p_id,p_name,p_desc,s_prize, size from producttable where p_name='"+i+"' group by size";  
      Product p=new Product();
      
      ArrayList<Integer> SizeList=new ArrayList<>();
      
     try {
            command=con.createStatement();
           ResultSet rs=command.executeQuery(sql);
            
           while(rs.next())
               
          {
             
              p.setId(rs.getInt("p_id"));
              p.setP_name(rs.getString("p_name"));
              p.setP_desc(rs.getString("p_desc"));
              SizeList.add(rs.getInt("size"));
              p.setS_price(rs.getDouble("s_prize"));
           }
           p.setSizeList(SizeList);
           return p ;
        } catch (SQLException ex) {
            Logger.getLogger(BuyFootwearDatabase.class.getName()).log(Level.SEVERE, null, ex);
             
        }
     return p;
    }
     
public boolean CreateOrder(String c_id,double SubTotal,double Salestax,double NetPayble,String CardNo,String Expiry,String OrderStatus,String CVCNo){
    try{
           String sql = "Insert Into ordertable (c_id,t_amount,s_amount,n_payable,c_no,expiry,orderstatus,cvc_no) values (?,?,?,?,?,?,?,?)";
        PreparedStatement command1=con.prepareStatement(sql);
        command1.setString(1, c_id);
        command1.setDouble(2,SubTotal);
        command1.setDouble(3,Salestax);
        command1.setDouble(4,NetPayble);
        command1.setString(5,CardNo);
        command1.setString(6,Expiry);
        command1.setString(7,OrderStatus);
        command1.setString(8,CVCNo);
        
        
        int result = command1.executeUpdate();
            if (result > 0) {
                 System.out.println(result);
                return true;
            } else {
                 System.out.println(result);
                return false;
            }
    }
    catch(SQLException se){se.printStackTrace();}
    return false;
}
    
public boolean AddOrderProduct(String o_id,String p_name,double price,int quantity,double total){
    try{
           String sql = "Insert Into productordertable (o_id,p_name,price,quantity,total) values (?,?,?,?,?)";
        PreparedStatement command1=con.prepareStatement(sql);
        command1.setString(1, o_id);
        command1.setString(2,p_name);
        command1.setDouble(3,price);
        command1.setInt(4,quantity);
        command1.setDouble(5,total);
        
        
        
        int result = command1.executeUpdate();
            if (result > 0) {
                 System.out.println(result);
                return true;
            } else {
                 System.out.println(result);
                return false;
            }
    }
    catch(SQLException se){se.printStackTrace();}
    return false;
}
public String GetOrderId()
{
   String Sql="Select o_id from ordertable order by o_id desc limit 1"; 
        try {
            command=con.createStatement();
            ResultSet Rs=command.executeQuery(Sql);
            while(Rs.next())
            {
                return ""+Rs.getInt("o_id");
            }
            return null;
        } catch (SQLException ex) {
            
           ex.printStackTrace();
        }
        return null;
}
public boolean AddShippingAddress(String firstName,String lastName,String contactno,String address,String p_code,String state,String country,String o_id)
{
     try{
           String sql = "Insert Into shippingaddress (firstName,lastName,contactno,address,p_code,state,country,o_id) values (?,?,?,?,?,?,?,?)";
        PreparedStatement command1=con.prepareStatement(sql);
        command1.setString(1, firstName);
        command1.setString(2,lastName);
        command1.setString(3,contactno);
        command1.setString(4,address);
        command1.setString(5,p_code);
        command1.setString(6,state);
        command1.setString(7,country);
        command1.setString(8,o_id);
        
        
        
        int result = command1.executeUpdate();
            if (result > 0) {
                 System.out.println(result);
                return true;
            } else {
                 System.out.println(result);
                return false;
            }
    }
    catch(SQLException se){se.printStackTrace();}
    return false;
}

public boolean UpdateProduct(String p_name,int size,int quantity)
{
    String sql="update producttable set quantity = quantity - "+quantity+" where p_name ='"+p_name+"' AND size="+size+" ";
        try {
          PreparedStatement
            command=con.prepareStatement(sql);
         
          
           if( command.executeUpdate(sql)>0)
           {
               return true;
           }
           else 
           {
               return false;
           }
        } catch (SQLException ex) {
            System.out.println(ex);
            return false;
        }
}

public String getProductByName(String Name)
{
  String Sql="Select p_name from producttable where p_name like ?"; 
        try {
           PreparedStatement command=con.prepareStatement(Sql);
           command.setString(1, Name);
            ResultSet Rs=command.executeQuery();
            while(Rs.next())
            {
                return Rs.getString("p_name");
            }
            
        } catch (SQLException ex) {
            
           ex.printStackTrace();
            
        }
    return null;
   
}
    
public ArrayList<ProductReport> getProductReport()
{
    ArrayList<ProductReport> list=new ArrayList<ProductReport>();
  String Sql="select p_name,sum(quantity),sum(total) from productordertable group by p_name order by p_name"; 
        try {
           PreparedStatement command=con.prepareStatement(Sql);
       
            ResultSet Rs=command.executeQuery();
            while(Rs.next())
            {
               ProductReport pr=new ProductReport();
               pr.setP_name(Rs.getString(1));
               pr.setQuantity(Rs.getInt(2));
               pr.setTotal(Rs.getDouble(3));
               list.add(pr);
            }
            
        } catch (SQLException ex) {
            
           ex.printStackTrace();
        }
    
    return list;
}
public ArrayList<OrdersReport> getOrderStatus()
{
    ArrayList<OrdersReport> list=new ArrayList<OrdersReport>();
  String Sql="select orderstatus,count(orderstatus) from ordertable group by orderstatus"; 
        try {
           PreparedStatement command=con.prepareStatement(Sql);
       
            ResultSet Rs=command.executeQuery();
            while(Rs.next())
            {
               OrdersReport or=new OrdersReport();
          or.setOrderStatus(Rs.getString(1));
          or.setCount(Rs.getInt(2));
               list.add(or);
            }
            
        } catch (SQLException ex) {
            
           ex.printStackTrace();
        }
    
    return list;
}
public ArrayList<OrdersReport> getOrderStatusDetail()
{
    ArrayList<OrdersReport> list=new ArrayList<OrdersReport>();
  String Sql="select o_id,c_id,n_payable,orderstatus from ordertable "; 
        try {
           PreparedStatement command=con.prepareStatement(Sql);
       
            ResultSet Rs=command.executeQuery();
            while(Rs.next())
            {
               OrdersReport or=new OrdersReport();
               or.setO_id(Rs.getInt(1));
               or.setC_id(Rs.getString(2));
               or.setN_payable(Rs.getDouble(3));
               
          or.setOrderStatus(Rs.getString(4));
         
               list.add(or);
            }
            
        } catch (SQLException ex) {
            
           ex.printStackTrace();
        }
    
    return list;
}
public ArrayList<ProductReport> getOrderHistoryByUserName(String name)
{
    ArrayList<ProductReport> list=new ArrayList<ProductReport>();
  String Sql="select o.o_id,p.p_name,p.quantity,p.price,p.total,o.n_payable  from ordertable o,productordertable p where o.o_id=p.o_id AND o.c_id=?"; 
        try {
           PreparedStatement command=con.prepareStatement(Sql);
       command.setString(1, name);
       
            ResultSet Rs=command.executeQuery();
            while(Rs.next())
            {
               ProductReport pr=new ProductReport();
               pr.setP_name(Rs.getString(2));
               pr.setQuantity(Rs.getInt(3));
               pr.setTotal(Rs.getDouble(5));
               pr.setPrice(Rs.getDouble(4));
               pr.setN_payable(Rs.getDouble(6));
               pr.setOrder(Rs.getInt(1));
               list.add(pr);
            }
            
        } catch (SQLException ex) {
            
           ex.printStackTrace();
        }
    
    return list;
}
public DeliverProductStatus GetDeliverProductStatus()
{
      DeliverProductStatus dps=new DeliverProductStatus();
   String Sql="Select o_id,c_no from ordertable order by o_id desc limit 1"; 
        try {
          
            
            command=con.createStatement();
            ResultSet Rs=command.executeQuery(Sql);
            while(Rs.next())
            {
                dps.setOrderId(Rs.getInt("o_id"));
                dps.setPaymentThrough(Rs.getString("c_no"));
             
            }
            
        } catch (SQLException ex) {
            
           ex.printStackTrace();
        }
     return dps;   
}
public DeliverProductStatus getDeliverShipping(DeliverProductStatus dps)
{
   String Sql="select * from shippingaddress where o_id="+dps.getOrderId(); 
        try {
           ShippingAddressModel sam=new ShippingAddressModel();
           
           
            command=con.createStatement();
            ResultSet Rs=command.executeQuery(Sql);
            while(Rs.next())
            {
                sam.setFname(Rs.getString(1));
                sam.setLname(Rs.getString(2));
                sam.setCno(Rs.getString(3));
                sam.setAddress(Rs.getString(4));
                sam.setPcode(Rs.getString(5));
                sam.setState(Rs.getString(6));
                
                
            }
            dps.setSam(sam);
         
        } catch (SQLException ex) {
            
           ex.printStackTrace();
        }
        return dps;
}
 public DeliverProductStatus getProduct(DeliverProductStatus dps)
    {
        //distinct unique value per product or you can say group by per value to size
      String sql="select * from productordertable where o_id="+dps.getOrderId();  
      Product p=new Product();
      
      ArrayList<Product> SizeList=new ArrayList<>();
      
     try {
            command=con.createStatement();
           ResultSet rs=command.executeQuery(sql);
            
           while(rs.next())
               
          {
             
              p.setId(rs.getInt("o_id"));
              p.setP_name(rs.getString("p_name"));              
              p.setS_price(rs.getDouble("price"));
              p.setQuantity(rs.getInt("quantity"));
              p.setTotal(rs.getDouble("total"));
              SizeList.add(p);
           }
         
           
           dps.AddProduct(SizeList);
          
        } catch (SQLException ex) {
            Logger.getLogger(BuyFootwearDatabase.class.getName()).log(Level.SEVERE, null, ex);
             
        }
      return dps;
    }
 public boolean UpdatePassword(String mobileno,String mpassword)
{
    String sql="update customertable set Password = '"+mpassword+"' where MobileNo ='"+mobileno+"'  ";
        try {
          PreparedStatement
            command=con.prepareStatement(sql);
         
          
           if( command.executeUpdate(sql)>0)
           {
               return true;
           }
           else 
           {
               return false;
           }
        } catch (SQLException ex) {
            System.out.println(ex);
            return false;
        }
}

}

        
