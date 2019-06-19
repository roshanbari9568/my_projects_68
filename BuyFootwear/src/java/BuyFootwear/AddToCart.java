/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BuyFootwear;

import java.util.ArrayList;

/**
 *
 * @author abc
 */
public class AddToCart {
    
    
    ArrayList<Product> ProductList=new ArrayList<>();
    
    public void addProduct(Product p)
    
    {
    ProductList.add(p);
        
    }
    
    public void removeProduct(int i)
    
    {
        
        ProductList.remove(i);
    }
    public ArrayList<Product> getProduct()
            
    {
        return ProductList;
    }
    
    public void setProductList(ArrayList<Product> abc)
    {
    this.ProductList=abc;
    }
    
}
