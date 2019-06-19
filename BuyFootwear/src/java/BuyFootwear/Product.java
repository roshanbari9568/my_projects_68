/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BuyFootwear;

import java.io.InputStream;
import java.util.ArrayList;

/**
 *
 * @author abc
 */
public class Product {
    int id;
    public InputStream img;
    String pretype,p_name,p_desc;
    int Size,quantity;
    ArrayList<Integer> SizeList=new ArrayList<>();

    public ArrayList<Integer> getSizeList() {
        return SizeList;
    }

    public void setSizeList(ArrayList<Integer> SizeList) {
        this.SizeList = SizeList;
    }

    public int getSize() {
        return Size;
    }

    public void setSize(int Size) {
        this.Size = Size;
    }

    public int getQuantity() {
        return quantity;
    }

    public void setQuantity(int quantity) {
        this.quantity = quantity;
    }

    public String getColor() {
        return color;
    }

    public void setColor(String color) {
        this.color = color;
    }
    String color;
    public String getP_desc() {
        return p_desc;
    }

    public void setP_desc(String p_desc) {
        this.p_desc = p_desc;
    }

    public String getP_name() {
        return p_name;
    }

    public void setP_name(String p_name) {
        this.p_name = p_name;
    }
    double s_price,total;

    public double getTotal() {
        return total;
    }

    public void setTotal(double total) {
        this.total = total;
    }

    public double getS_price() {
        return s_price;
    }

    public void setS_price(double s_price) {
        this.s_price = s_price;
    }
    

    public String getPretype() {
        return pretype;
    }

    public void setPretype(String pretype) {
        this.pretype = pretype;
    }
    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public InputStream getImg() {
        return img;
    }

    public void setImg(InputStream img) {
        this.img = img;
    }
    
    
}
