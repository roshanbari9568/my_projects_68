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
public class AddToCartController extends HttpServlet {

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
            int size = Integer.parseInt(request.getParameter("s1"));
            int quantity = Integer.parseInt(request.getParameter("quantity"));
            String color = "DefaultColor";
            double prize = Double.parseDouble(request.getParameter("prize"));
            String pname = request.getParameter("pname");
            int pid = Integer.parseInt(request.getParameter("pid"));
            String button = request.getParameter("BuyFootwear");

            Product p = new Product();
            AddToCart atc = new AddToCart();
            p.setId(pid);
            p.setP_name(pname);
            p.setS_price(prize);

            p.setSize(size);
            p.setQuantity(quantity);
            p.setColor(color);

            HttpSession hts = request.getSession(false);
          
            if (getServletContext().getAttribute("cart") != null) {
                if (button.equals("Purchase") && hts.getAttribute("UserSession") != null) {
                    getServletContext().setAttribute("Purchaser", p);
                    response.sendRedirect("Pages/ShippingAddress.jsp?type=purchase");
                } else if (button.equals("Purchase") && hts.getAttribute("UserSession") == null) {
                    response.sendRedirect("Pages/Login.jsp");
                } else {
                    ArrayList<Product> abc = (ArrayList<Product>) getServletContext().getAttribute("cart");
                    atc.setProductList(abc);
                    atc.addProduct(p);
                    getServletContext().setAttribute("cart", atc.getProduct());
                    response.sendRedirect("Pages/AddToCart.jsp");
                }
            } else {

                atc.addProduct(p);
                getServletContext().setAttribute("cart", atc.getProduct());
                response.sendRedirect("Pages/AddToCart.jsp");

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
