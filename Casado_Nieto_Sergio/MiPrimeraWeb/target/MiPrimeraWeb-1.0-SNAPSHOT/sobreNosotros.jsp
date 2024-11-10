<%-- 
    Document   : sobreNosotros
    Created on : 8 nov 2024, 13:27:39
    Author     : DAW2
--%>

<%@ page contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<%@ page import="java.util.List" %>
<%@ page import="com.miempresa.Contenido" %>
<jsp:include page="header.jsp" />
<link rel="stylesheet" href="css/styles.css">


<div class="wrapper">
<div class="container">
    <h1>Sobre Nosotros</h1>
        <%
            // Obtener el contenido de "Sobre Nosotros" desde Contenido.java
            List<String> sobreNosotros = Contenido.obtenerSobreNosotros();
            for (String linea : sobreNosotros) {
                out.println(linea); // Imprime cada línea de contenido
            }
        %>
</div>
</div>

<jsp:include page="footer.jsp" />

