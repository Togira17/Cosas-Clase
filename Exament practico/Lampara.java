// Interfaz con múltiples responsabilidades (violación del ISP) 
public interface Dispositivo {
    void encender();

    void apagar();

    void guardarLog(String mensaje);
}

// Clase que representa una lámpara (violación del SRP y del OCP)
public class Lampara implements Dispositivo {
    private boolean encendida = false;

    @Override
    public void encender() {
        encendida = true;
        System.out.println("Lámpara encendida");
        guardarLog("Lámpara encendida");
    }

    @Override
    public void apagar() {
        encendida = false;
        System.out.println("Lámpara apagada");
        guardarLog("Lámpara apagada");
    }

    @Override
    public void guardarLog(String mensaje) {
        // Guardar el log en un archivo (violación de SRP, la clase tiene dos
        // responsabilidades)
        System.out.println("Guardando log: " + mensaje);
    }
}

// Clase Interruptor que depende directamente de la implementación concreta de
// Lampara (violación del OCP)
public class Interruptor {
    private Lampara lampara;

    public Interruptor(Lampara lampara) {
        this.lampara = lampara;
    }

    public void presionar() {
        if (lampara.encendida) {
            lampara.apagar();
        } else {
            lampara.encender();
        }
    }
}