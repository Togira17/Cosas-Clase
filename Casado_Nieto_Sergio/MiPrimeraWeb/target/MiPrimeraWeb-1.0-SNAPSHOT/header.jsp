<%-- 
    Document   : header
    Created on : 8 nov 2024, 12:10:34
    Author     : DAW2
--%>

<%@ page contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="com.miempresa.Contenido" %>
<%
    // Crear una única instancia de Contenido y almacenarla en el request
    Contenido contenido = new Contenido();
    request.setAttribute("contenido", contenido);
%>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bite & Grill</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="images/logo.png" rel="shortcut icon">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.jsp">
                <img src="images/logo.png" width="30" height="30" alt="Logo">
                Bite & Grill
            </a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item"><a class="nav-link" href="index.jsp">Inicio</a></li>
                    <li class="nav-item"><a class="nav-link" href="sobreNosotros.jsp">Sobre Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="servicios.jsp">Servicios y Productos</a></li>
                    <li class="nav-item"><a class="nav-link" href="testimonios.jsp">Testimonios</a></li>
                    <li class="nav-item"><a class="nav-link" href="galeria.jsp">Galeria</a></li>
                    <li class="nav-item"><a class="nav-link" href="contacto.jsp">Contacto</a></li>
                    <li class="nav-item"><a class="nav-link" href="faq.jsp">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="privacidad.jsp">Politica de Privacidad</a></li>
                    <li class="nav-item"><a class="nav-link" href="terminos.jsp">Términos y condiciones</a></li>
                    
                </ul>
            </div>
        </nav>
    </header>
    <div class="container mt-4">
