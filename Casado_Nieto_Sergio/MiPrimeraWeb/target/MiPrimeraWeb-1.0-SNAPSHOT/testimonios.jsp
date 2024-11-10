<%-- 
    Document   : testimonios
    Created on : 8 nov 2024, 13:28:17
    Author     : DAW2
--%>

<%@page import="com.miempresa.Contenido.Testimonio"%>
<%@page import="java.util.List"%>
<%@page import="com.miempresa.Contenido"%>
<%@ page contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%
    // Obtener la lista de testimonios desde Contenido.java
    List<Contenido.Testimonio> testimonios = Contenido.obtenerTestimonios();
%>
<jsp:include page="header.jsp" />
<link rel="stylesheet" href="css/styles.css">


<div class="container mt-5">
    <h2 class="text-center mb-4">Testimonios</h2>
    
    <!-- Fila de testimonios -->
    <div class="row">
        <%
            // Iterar sobre la lista de testimonios y mostrarlos en HTML
            for (Contenido.Testimonio testimonio : testimonios) {
        %>
                <!-- Testimonio individual -->
                <div class="col-md-4 mb-4">
                    <div class="testimonial-card p-4 rounded shadow-lg">
                        <p class="testimonial-text"><%= testimonio.getComentario() %></p>
                        <p class="testimonial-author text-right"><strong><%= testimonio.getAutor() %></strong></p>
                    </div>
                </div>
        <%
            }
        %>
    </div>
</div>

<jsp:include page="footer.jsp" />
