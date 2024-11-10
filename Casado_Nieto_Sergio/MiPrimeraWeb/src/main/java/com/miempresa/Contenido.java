/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.miempresa;

import java.util.ArrayList;
import java.util.List;

public class Contenido {
    private List<String> menuItems;
    private List<String> reservas;

    // Constructor: inicializa el menú y las reservas.
    public Contenido() {
        menuItems = new ArrayList<>();
        reservas = new ArrayList<>();
        initMenu();
    }

    // Inicializa el menú con algunos elementos de ejemplo.
    private void initMenu() {
        menuItems.add("Hamburguesa Clásica");
        menuItems.add("Hamburguesa BBQ");
        menuItems.add("Hamburguesa Vegetariana");
        menuItems.add("Papas Fritas");
        menuItems.add("Refrescos y Bebidas");
    }

    public List<String> getMenuItems() {
        return menuItems;
    }

    public List<String> getReservas() {
        return reservas;
    }

    // Método para agregar una reserva
    public void addReserva(String reserva) {
        reservas.add(reserva);
    }
    // Lista de testimonios
    public static List<Testimonio> obtenerTestimonios() {
        List<Testimonio> testimonios = new ArrayList<>();

        // Agregar testimonios a la lista
        testimonios.add(new Testimonio("¡Las mejores hamburguesas de la ciudad! El servicio fue increíble y el ambiente perfecto para disfrutar con amigos.", "Juan Pérez"));
        testimonios.add(new Testimonio("Cada vez que vengo, la calidad sigue siendo excelente. ¡Definitivamente mi lugar favorito para comer!", "María González"));
        testimonios.add(new Testimonio("Una experiencia única. ¡Recomiendo la hamburguesa vegetariana, es deliciosa!", "Ana López"));

        return testimonios;
    }

    // Clase interna para almacenar los testimonios
public static class Testimonio {
        private String comentario;
        private String autor;

        // Constructor
        public Testimonio(String comentario, String autor) {
            this.comentario = comentario;
            this.autor = autor;
        }

        // Getters
        public String getComentario() {
            return comentario;
        }

        public String getAutor() {
            return autor;
        }
    }

    // Método estático para obtener las descripciones de las imágenes
    public static List<String> obtenerDescripciones() {
        List<String> descripciones = new ArrayList<>();
        descripciones.add("Hamburguesa con carne y queso");
        descripciones.add("Hamburguesa vegetariana con aguacate");
        descripciones.add("Ambiente acogedor de nuestro local");
        return descripciones;
    }
    
 public static List<String> obtenerPoliticaPrivacidad() {
        List<String> politica = new ArrayList<>();
        
        politica.add("<p><strong>Política de Privacidad</strong></p>");
        politica.add("<p>En Bite & Gill, nos comprometemos a proteger la privacidad de nuestros clientes. Esta política de privacidad explica cómo recopilamos, usamos y protegemos tu información personal. Al utilizar nuestro sitio web, aceptas los términos descritos a continuación.</p>");
        
        politica.add("<p><strong>1. Recopilación de Información</strong></p>");
        politica.add("<p>Recopilamos datos personales que proporcionas al registrarte en nuestro sitio web, hacer un pedido, reservar una mesa, o suscribirte a nuestro boletín. Los tipos de información que podríamos recopilar incluyen:</p>");
        politica.add("<ul><li>Nombre y apellidos</li><li>Información de contacto (correo electrónico y número de teléfono)</li><li>Dirección para envíos o ubicación para entregas</li><li>Preferencias de pedido y otras informaciones que puedas proporcionar voluntariamente</li></ul>");
        
        politica.add("<p><strong>2. Uso de la Información</strong></p>");
        politica.add("<p>La información que recopilamos es utilizada con los siguientes propósitos:</p>");
        politica.add("<ul><li>Procesar y completar tus pedidos o reservas.</li><li>Mejorar nuestra atención al cliente y personalizar tu experiencia.</li><li>Enviarte actualizaciones sobre el estado de tu pedido, promociones, y noticias sobre [Nombre de la Hamburguesería] (si te has suscrito).</li><li>Cumplir con requisitos legales y administrativos.</li></ul>");
        
        politica.add("<p><strong>3. Protección de la Información</strong></p>");
        politica.add("<p>Implementamos diversas medidas de seguridad para proteger tu información personal, incluida la encriptación y el almacenamiento seguro. No compartimos, vendemos ni alquilamos tu información personal a terceros, salvo cuando sea necesario para completar un pedido o cumplir con una obligación legal.</p>");
        
        politica.add("<p><strong>4. Uso de Cookies</strong></p>");
        politica.add("<p>Utilizamos cookies para mejorar tu experiencia en nuestro sitio web, facilitar el proceso de pedidos, y personalizar el contenido. Puedes desactivar las cookies a través de la configuración de tu navegador, pero esto podría afectar el funcionamiento de algunas partes de nuestro sitio web.</p>");
        
        politica.add("<p><strong>5. Proveedores de Servicios Externos</strong></p>");
        politica.add("<p>Podríamos compartir tu información con proveedores de servicios de confianza (como servicios de pago y envío) que nos ayudan a gestionar el negocio. Estos terceros están obligados a manejar tu información con confidencialidad y no pueden usarla para otros fines.</p>");
        
        politica.add("<p><strong>6. Derechos del Usuario</strong></p>");
        politica.add("<p>Tienes derecho a acceder, corregir o eliminar tu información personal en cualquier momento. Para hacerlo, contáctanos a través de nuestro correo electrónico: bite&grill@gmail.com.</p>");
        
        politica.add("<p><strong>7. Actualización de la Política de Privacidad</strong></p>");
        politica.add("<p>Esta política de privacidad puede actualizarse periódicamente. Publicaremos cualquier cambio en esta página, y si son cambios significativos, te lo notificaremos por correo electrónico o mediante un aviso en nuestro sitio web.</p>");
        
        politica.add("<p><strong>8. Contacto</strong></p>");
        politica.add("<p>Si tienes preguntas o inquietudes sobre esta política de privacidad, no dudes en contactarnos en bite&grill@gmail.com o llamándonos al 954533712.</p>");


        return politica;
    }
 
     public static List<String> obtenerSobreNosotros() {
        List<String> sobreNosotros = new ArrayList<>();
        sobreNosotros.add("<h2>Quiénes somos</h2>");
        sobreNosotros.add("<p>Somos una hamburguesería en el corazón de la ciudad, dedicada a ofrecer las mejores hamburguesas con ingredientes frescos y locales. Nos apasiona la calidad y el servicio al cliente.</p>");
        sobreNosotros.add("<h3>Nuestra misión</h3>");
        sobreNosotros.add("<p>Brindar una experiencia culinaria única con un ambiente acogedor, donde cada bocado cuente una historia de sabor y calidad.</p>");
        sobreNosotros.add("<h3>Visítanos</h3>");
        sobreNosotros.add("<p>Ven a disfrutar de nuestras especialidades. ¡Te esperamos con los brazos abiertos!</p>");
        return sobreNosotros;
    }
     
    public static List<String> obtenerTerminosYCondiciones() {
        List<String> terminosYCondiciones = new ArrayList<>();
        
        terminosYCondiciones.add("<h2>Términos y Condiciones</h2>");
        terminosYCondiciones.add("<p>Al acceder y utilizar este sitio web, aceptas cumplir con los siguientes términos y condiciones:</p>");
        terminosYCondiciones.add("<h3>Uso del Sitio Web</h3>");
        terminosYCondiciones.add("<p>El contenido de este sitio web está destinado solo para fines informativos y comerciales. El uso no autorizado de este sitio web puede dar lugar a demandas o ser considerado un delito.</p>");
        terminosYCondiciones.add("<h3>Propiedad Intelectual</h3>");
        terminosYCondiciones.add("<p>Todos los derechos sobre los contenidos, marcas y logotipos presentes en el sitio web son propiedad exclusiva de la empresa y están protegidos por las leyes de propiedad intelectual.</p>");
        terminosYCondiciones.add("<h3>Limitación de Responsabilidad</h3>");
        terminosYCondiciones.add("<p>La empresa no se hace responsable por daños derivados del uso incorrecto del sitio web o de la falta de disponibilidad del mismo. El acceso a este sitio web puede ser interrumpido sin previo aviso.</p>");
        terminosYCondiciones.add("<h3>Modificaciones</h3>");
        terminosYCondiciones.add("<p>La empresa se reserva el derecho de modificar estos términos en cualquier momento. Se recomienda revisar los términos con regularidad.</p>");
        terminosYCondiciones.add("<h3>Política de Privacidad</h3>");
        terminosYCondiciones.add("<p>Al usar este sitio web, aceptas nuestra política de privacidad, que detalla cómo recopilamos y usamos tus datos.</p>");
        terminosYCondiciones.add("<h3>Jurisdicción</h3>");
        terminosYCondiciones.add("<p>Estos términos y condiciones están sujetos a las leyes del país donde se encuentra registrada la empresa. Cualquier disputa será resuelta en los tribunales competentes.</p>");
        
        return terminosYCondiciones;
    }     
}