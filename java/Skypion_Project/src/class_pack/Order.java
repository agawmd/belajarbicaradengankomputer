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
    private int id,
                qtt;
    private String num_id,
                   name,
                   addrees,
                   phone,
                   email,
                   type_service,
                   category;
    private float price;
    private String schedule;
 
    
    public Order(int xid,
                 int xqtt,
                 String xnum,
                 String xname,
                 String xadd,
                 String xphone,
                 String xemail,
                 String xtype,
                 String xcate,
                 float xprice,
                 String xsche) {
        
        this.id             = xid;
        this.qtt            = xqtt;
        this.num_id         = xnum;
        this.name           = xname;
        this.addrees        = xadd;
        this.phone          = xphone;
        this.email          = xemail;
        this.type_service   = xtype;
        this.category       = xcate;
        this.price          = xprice;
        this.schedule       = xsche;
                 
    }
    
    public int getId() {
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
    
    public String getCate() {
        return category;
    }
    
    public float getPri() {
        return price;
    }
    
    public String getSch() {
        return schedule;
    }
    
}
