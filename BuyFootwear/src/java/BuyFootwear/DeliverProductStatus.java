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
public class DeliverProductStatus {

    int orderId;

    ShippingAddressModel sam;

    ArrayList<Product> PList=new ArrayList<Product>();
     
    public void AddProduct(ArrayList<Product> p)            
    {
        PList=p;
    }
    public  ArrayList<Product>getList()
    {
        return PList;
    }
       
    

    String PaymentThrough;

    public int getOrderId() {
        return orderId;
    }

    public void setOrderId(int orderId) {
        this.orderId = orderId;
    }

    public String getPaymentThrough() {
        return PaymentThrough;
    }

    public void setPaymentThrough(String PaymentThrough) {
        this.PaymentThrough = PaymentThrough;
    }

    public ShippingAddressModel getSam() {
        return sam;
    }

    public void setSam(ShippingAddressModel sam) {
        this.sam = sam;
    }

}
