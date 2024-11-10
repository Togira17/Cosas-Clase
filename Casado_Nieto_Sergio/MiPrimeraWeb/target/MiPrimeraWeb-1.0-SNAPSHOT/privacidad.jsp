<%-- 
    Document   : privacidad
    Created on : 8 nov 2024, 13:29:11
    Author     : DAW2
--%>
<%@ page contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="java.util.List" %>
<%@ page import="com.miempresa.Contenido" %>
<jsp:include page="header.jsp" />
<link rel="stylesheet" href="css/styles.css">

<div class="wrapper">
    <div class="container">
        <h1>Política de Privacidad</h1>
        <%
            List<String> politicaPrivacidad = Contenido.obtenerPoliticaPrivacidad();
            for (String linea : politicaPrivacidad) {
                out.println(linea);
            }
        %>
    </div>
</div>
<jsp:include page="footer.jsp" />

