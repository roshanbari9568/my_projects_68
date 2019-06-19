/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BuyFootwear;

import java.io.IOException;
import javax.servlet.http.*;
/**
 *
 * @author abc
 */

public class Search extends HttpServlet {
    
 
public void doGet(HttpServletRequest req,HttpServletResponse res) throws IOException
{
    String Name=req.getParameter("searchbtn");
    BuyFootwearDatabase bfd=new BuyFootwearDatabase();
    
   String p_id= bfd.getProductByName(Name+"%");
   if(p_id!=null)
   res.sendRedirect("Pages/ProductDetail.jsp?p_name="+p_id);
   else
  res.sendRedirect("Pages/Home.jsp");
}

    
 
}
        
       