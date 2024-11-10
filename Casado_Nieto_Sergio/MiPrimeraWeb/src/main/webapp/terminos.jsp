<%-- 
    Document   : terminos
    Created on : 8 nov 2024, 13:29:32
    Author     : DAW2
--%>
<%@page import="java.util.List"%>
<%@ page contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="com.miempresa.Contenido" %>
<jsp:include page="header.jsp" />
<link rel="stylesheet" href="css/styles.css">

<div class="wrapper">
    <div class="container">
        <h1>Términos y Condiciones</h1>
        <%
            // Obtener los términos y condiciones desde Contenido.java
            List<String> terminosYCondiciones = Contenido.obtenerTerminosYCondiciones();
            for (String linea : terminosYCondiciones) {
                out.println(linea); // Imprime cada línea de los términos
            }
        %>
    </div>
</div>

<jsp:include page="footer.jsp" />