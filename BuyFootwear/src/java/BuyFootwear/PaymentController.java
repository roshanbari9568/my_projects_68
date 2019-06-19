/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package BuyFootwear;

import java.io.IOException;
import java.io.PrintWriter;
import java.util.ArrayList;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

/**
 *
 * @author abc
 */
public class PaymentController extends HttpServlet {

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
            /* TODO output your page here. You may use fo
             llowing sample code. */
            String PaymentType = request.getParameter("b1");
            String CardNo = request.getParameter("acc_no");
            String CVCNo = request.getParameter("cvc_no");
            String ExpiryDate = request.getParameter("expiry_date");
            double subtotal = Double.parseDouble(request.getParameter("subtotal"));
            double salestax = Double.parseDouble(request.getParameter("salestax"));
            double shippingtotal = Double.parseDouble(request.getParameter("netpayable"));
            HttpSession hts = request.getSession(false);
            String UserName = (String) hts.getAttribute("UserSession");
            BuyFootwearDatabase bfd = new BuyFootwearDatabase();
            if (!PaymentType.equals("cashondelivery")) {

                if (bfd.CreateOrder(UserName, subtotal, salestax, shippingtotal, CardNo, ExpiryDate, "CREATED", CVCNo)) {
                    String orderid = bfd.GetOrderId();
                    ShippingAddressModel sadm = (ShippingAddressModel) getServletContext().getAttribute("ShippingAddress");
                    Product p = (Product) getServletContext().getAttribute("Purchaser");
                    
                    if (sadm.getType().equals("purchase")) {
                        bfd.AddOrderProduct(orderid, p.getP_name(), p.getS_price(), p.getQuantity(), subtotal);
                        bfd.UpdateProduct(p.getP_name(),p.getSize(), p.getQuantity());
                        response.sendRedirect("Home.jsp");
                    } else {
                        if (sadm.getType().equals("AddToCart")) {
                            ArrayList<Product> olist = (ArrayList<Product>) getServletContext().getAttribute("cart");
                            for (Product pr : olist) {
                                bfd.AddOrderProduct(orderid, pr.getP_name(), pr.getS_price(), pr.getQuantity(), pr.getS_price() * pr.getQuantity());
                                if(bfd.UpdateProduct(pr.getP_name(),pr.getSize(), pr.getQuantity()))
                                {
                                    System.out.println("UPDATED");
                                }
                                else
                                {
                                    System.out.println("Not-UPDATED");
                                }
                            }
                        }
                    }
                    bfd.AddShippingAddress(sadm.getFname(), sadm.getLname(), sadm.getCno(), sadm.getAddress(), sadm.getPcode(), sadm.getState(), sadm.getCname(), orderid);
                    getServletContext().setAttribute("cart",null);
                    response.sendRedirect("Pages/DeliverProductStatus.jsp");
                }
            } else {
                if (bfd.CreateOrder(UserName, subtotal, salestax, shippingtotal, "Cash", "Cash", "CREATED", "Cash")) {
                    String orderid = bfd.GetOrderId();
                    ShippingAddressModel sadm = (ShippingAddressModel) getServletContext().getAttribute("ShippingAddress");
                    Product p = (Product) getServletContext().getAttribute("Purchaser");
                    if (sadm.getType().equals("purchase")) {
                        bfd.AddOrderProduct(orderid, p.getP_name(), p.getS_price(), p.getQuantity(), subtotal);
                        bfd.UpdateProduct(p.getP_name(),p.getSize(), p.getQuantity());
                        response.sendRedirect("Home.jsp");
                    } else {
                        if (sadm.getType().equals("AddToCart")) {
                            ArrayList<Product> olist = (ArrayList<Product>) getServletContext().getAttribute("cart");
                            for (Product pr : olist) {
                                bfd.AddOrderProduct(orderid, pr.getP_name(), pr.getS_price(), pr.getQuantity(), pr.getS_price() * pr.getQuantity());
                                 if(bfd.UpdateProduct(pr.getP_name(),pr.getSize(), pr.getQuantity()))
                                {
                                    System.out.println("UPDATED");
                                }
                                else
                                {
                                    System.out.println("Not-UPDATED");
                                }
                            }
                        }
                    }
                    bfd.AddShippingAddress(sadm.getFname(), sadm.getLname(), sadm.getCno(), sadm.getAddress(), sadm.getPcode(), sadm.getState(), sadm.getCname(), orderid);
                    getServletContext().setAttribute("cart",null);
                    response.sendRedirect("Pages/DeliverProductStatus.jsp");
                }
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
