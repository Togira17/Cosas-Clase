<%-- 
    Document   : galeria
    Created on : 8 nov 2024, 13:28:31
    Author     : DAW2
--%>
<%@ page contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="java.util.List" %>
<%@ page import="com.miempresa.Contenido" %>
<jsp:include page="header.jsp" />
<link rel="stylesheet" href="css/styles.css">

<div class="wrapper">
    <div class="container">
        <h1>Galería</h1>
        
        <!-- Obtener las descripciones desde Contenido.java -->
        <%
            List<String> descripciones = Contenido.obtenerDescripciones();
        %>

        <div class="row">
            <!-- Imagen 1 -->
            <div class="col-md-4 mb-4">
                <div class="image-card">
                    <img src="images/Hamburguesa1.jpg" class="img-fluid gallery-image" alt="Hamburguesa 1">
                    <p class="text-center"><%= descripciones.get(0) %></p>
                </div>
            </div>

            <!-- Imagen 2 -->
            <div class="col-md-4 mb-4">
                <div class="image-card">
                    <img src="images/hamburguesa2.jpg" class="img-fluid gallery-image" alt="Hamburguesa 2">
                    <p class="text-center"><%= descripciones.get(1) %></p>
                </div>
            </div>

            <!-- Imagen 3 -->
            <div class="col-md-4 mb-4">
                <div class="image-card">
                    <img src="images/Local.jpg" class="img-fluid gallery-image" alt="Local">
                    <p class="text-center"><%= descripciones.get(2) %></p>
                </div>
            </div>
        </div>
    </div>
</div>

<jsp:include page="footer.jsp" />
