// Interfaz con múltiples responsabilidades (violación del ISP) 
public interface Dispositivo {
    void encender();

    void apagar();

    void guardarLog(String mensaje);
}

    // Clase que representa una calefacción (violación del SRP y del OCP) 
    public class Calefaccion implements Dispositivo {
    private boolean encendida = false;

    @Override 
    public void encender() { 
    encendida = true; 
    System.out.println("Calefacción encendida"); 
    guardarLog("Calefacción encendida"); 
    }

    @Override 
    public void apagar() { 
    encendida = false; 
    System.out.println("Calefacción apagada"); 
    guardarLog("Calefacción apagada"); 
    }

    @Override 
    public void guardarLog(String mensaje) { 
    // Guardar el log en un archivo (violación de SRP, la clase tiene dos 
    //responsabilidades) 
    System.out.println("Guardando log: " + mensaje); 
    }
}

// Clase Termostato que depende directamente de la implementación concreta de
// Calefaccion (violación del OCP)
public class Termostato {
    private Calefaccion calefaccion;

    public Termostato(Calefaccion calefaccion) {
        this.calefaccion = calefaccion;
    }

    public void presionar() {
        if (calefaccion.encendida) {
            calefaccion.apagar();
        } else {
            calefaccion.encender();
        }
    }
}
