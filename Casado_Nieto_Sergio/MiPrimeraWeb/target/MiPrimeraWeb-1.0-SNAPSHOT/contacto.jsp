<%-- 
    Document   : contacto
    Created on : 8 nov 2024, 13:28:44
    Author     : DAW2
--%>

<%@ page contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<jsp:include page="header.jsp" />
<link rel="stylesheet" href="css/styles.css">

<div class="wrapper">
<div class="container">
    <h1>Contacto</h1>
    <form action="enviarMensaje.jsp" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="mensaje">Mensaje:</label>
            <textarea id="mensaje" name="mensaje" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
</div>
<jsp:include page="footer.jsp" />
