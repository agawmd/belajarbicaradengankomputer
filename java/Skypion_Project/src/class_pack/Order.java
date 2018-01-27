/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package class_pack;

import database.koneksi;

/**
 *
 * @author aga
 */
public class Order {
    private int    qtt;
    private String id,
                   num_id,
                   name,
                   addrees,
                   phone,
                   email,
                   type_service;
    private float price;
    
 
    
    public Order(int xqtt,
                 String xid,
                 String xnum,
                 String xname,
                 String xadd,
                 String xphone,
                 String xemail,
                 String xtype,
                 String xcate,
                 float xprice) {
        
        this.id             = xid;
        this.qtt            = xqtt;
        this.num_id         = xnum;
        this.name           = xname;
        this.addrees        = xadd;
        this.phone          = xphone;
        this.email          = xemail;
        this.type_service   = xtype;
        this.price          = xprice;
                 
    }
    
    public String getId() {
        return id;
    }
    
    public String getNum() {
        return num_id;
    }
    
    public String getName() {
        return name;
    }
    
    public String getAdr() {
        return addrees;
    }
    
    public String getPho() {
        return phone;
    }
    
    public String getMail() {
        return email;
    }
    
    public String getType() {
        return type_service;
    }
    
    public float getPri() {
        return price;
    }
        
}
