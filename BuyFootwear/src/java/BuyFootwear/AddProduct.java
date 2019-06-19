/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BuyFootwear;

import java.io.IOException;
import java.io.InputStream;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.MultipartConfig;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.Part;

/**
 *
 * @author abc
 */

@MultipartConfig(maxFileSize = 16177215)
public class AddProduct extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            
           String pname=request.getParameter("pname");
           String category=request.getParameter("category");
           String pretype=request.getParameter("pretype");
           String subtype=request.getParameter("subtype");
          
           int size=Integer.parseInt(request.getParameter("size"));
           int quantity= Integer.parseInt(request.getParameter("quantity"));
           double aprice=Double.parseDouble(request.getParameter("aprice"));
           double sprice=Double.parseDouble(request.getParameter("sprice"));
           String description=request.getParameter("description");
           
           Part proimg=request.getPart("proimg");
           InputStream img=null;
           if(proimg!=null)
           {
               img=proimg.getInputStream();
               
               
           }
           BuyFootwearDatabase DB=new BuyFootwearDatabase();
           
            Boolean result=DB.AddProdct(pname,category,pretype,subtype,size,quantity,aprice,sprice,img,description);
           if(result==true)
           {
               ///RequestDispatcher req=request.getRequestDispatcher("../Pages/Login.jsp");
               ///req.forward(request, response);
               response.sendRedirect("Pages/AdminproductPg.jsp");
           }
           else
           {
              /// RequestDispatcher req=request.getRequestDispatcher("../Pages/Registration.jsp");
               //req.forward(request, response);
               response.sendRedirect("Pages/Login.jsp");
           }
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
