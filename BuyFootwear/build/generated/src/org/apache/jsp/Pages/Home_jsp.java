package org.apache.jsp.Pages;

import javax.servlet.*;
import javax.servlet.http.*;
import javax.servlet.jsp.*;
import java.util.ArrayList;
import BuyFootwear.Product;

public final class Home_jsp extends org.apache.jasper.runtime.HttpJspBase
    implements org.apache.jasper.runtime.JspSourceDependent {

  private static final JspFactory _jspxFactory = JspFactory.getDefaultFactory();

  private static java.util.List<String> _jspx_dependants;

  private org.glassfish.jsp.api.ResourceInjector _jspx_resourceInjector;

  public java.util.List<String> getDependants() {
    return _jspx_dependants;
  }

  public void _jspService(HttpServletRequest request, HttpServletResponse response)
        throws java.io.IOException, ServletException {

    PageContext pageContext = null;
    HttpSession session = null;
    ServletContext application = null;
    ServletConfig config = null;
    JspWriter out = null;
    Object page = this;
    JspWriter _jspx_out = null;
    PageContext _jspx_page_context = null;

    try {
      response.setContentType("text/html;charset=UTF-8");
      pageContext = _jspxFactory.getPageContext(this, request, response,
      			null, true, 8192, true);
      _jspx_page_context = pageContext;
      application = pageContext.getServletContext();
      config = pageContext.getServletConfig();
      session = pageContext.getSession();
      out = pageContext.getOut();
      _jspx_out = out;
      _jspx_resourceInjector = (org.glassfish.jsp.api.ResourceInjector) application.getAttribute("com.sun.appserv.jsp.resource.injector");

      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("\n");
      out.write("<!DOCTYPE html>\n");
      out.write("<html>\n");
      out.write("    <head>\n");
      out.write("        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">\n");
      out.write("        <title>Home-page</title>\n");
      out.write("         <link rel=\"stylesheet\" href=\"../css/bootstrap.css\"/>\n");
      out.write("        <link rel=\"stylesheet\" href=\"../css/bootstrap.min.css\"/>\n");
      out.write("        <style>\n");
      out.write("       .container-img {\n");
      out.write("    width: 780px;\n");
      out.write("    background: url(../Images/Bootimgwallpaper1.jpg) no-repeat center top #000;\n");
      out.write("    margin: 0 auto;\n");
      out.write("    height: 100%; \n");
      out.write("}\n");
      out.write("            \n");
      out.write("        </style>\n");
      out.write("    </head>\n");
      out.write("    ");
      org.apache.jasper.runtime.JspRuntimeLibrary.include(request, response, "../Pages/MenuBar.jsp", out, false);
      out.write("\n");
      out.write("    <body>\n");
      out.write("        \n");
      out.write("       \n");
      out.write("        \n");
      out.write("        <div class=\"container\">\n");
      out.write("            <div class=\"page-header\" style=\"\">\n");
      out.write("                <h1></h1>\n");
      out.write("                </div>\n");
      out.write("            <div class=\"row\" style=\"margin-left: 280px;\">\n");
      out.write("                <a href=\"../Pages/Home.jsp\" >\n");
      out.write("                <img src=\"../Images/18thfebHOME.jpg\" alt=\"\" class=\"img img-responsive\"/>\n");
      out.write("</a>\n");
      out.write("            </div>\n");
      out.write("            </div>\n");
      out.write("            \n");
      out.write("        \n");
      out.write("    </body>\n");
      out.write("</html>\n");
    } catch (Throwable t) {
      if (!(t instanceof SkipPageException)){
        out = _jspx_out;
        if (out != null && out.getBufferSize() != 0)
          out.clearBuffer();
        if (_jspx_page_context != null) _jspx_page_context.handlePageException(t);
        else throw new ServletException(t);
      }
    } finally {
      _jspxFactory.releasePageContext(_jspx_page_context);
    }
  }
}
