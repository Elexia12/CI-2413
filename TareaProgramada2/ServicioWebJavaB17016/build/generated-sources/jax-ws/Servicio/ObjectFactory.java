
package Servicio;

import javax.xml.bind.annotation.XmlRegistry;


/**
 * This object contains factory methods for each 
 * Java content interface and Java element interface 
 * generated in the Servicio package. 
 * <p>An ObjectFactory allows you to programatically 
 * construct new instances of the Java representation 
 * for XML content. The Java representation of XML 
 * content can consist of schema derived interfaces 
 * and classes representing the binding of schema 
 * type definitions, element declarations and model 
 * groups.  Factory methods for each of these are 
 * provided in this class.
 * 
 */
@XmlRegistry
public class ObjectFactory {


    /**
     * Create a new ObjectFactory that can be used to create new instances of schema derived classes for package: Servicio
     * 
     */
    public ObjectFactory() {
    }

    /**
     * Create an instance of {@link ServidorEstampillaDeTiempo }
     * 
     */
    public ServidorEstampillaDeTiempo createServidorEstampillaDeTiempo() {
        return new ServidorEstampillaDeTiempo();
    }

    /**
     * Create an instance of {@link UltimoSaludo }
     * 
     */
    public UltimoSaludo createUltimoSaludo() {
        return new UltimoSaludo();
    }

    /**
     * Create an instance of {@link UltimoSaludoReturn }
     * 
     */
    public UltimoSaludoReturn createUltimoSaludoReturn() {
        return new UltimoSaludoReturn();
    }

    /**
     * Create an instance of {@link SaludeReturn }
     * 
     */
    public SaludeReturn createSaludeReturn() {
        return new SaludeReturn();
    }

    /**
     * Create an instance of {@link ServidorEstampillaDeTiempoReturn }
     * 
     */
    public ServidorEstampillaDeTiempoReturn createServidorEstampillaDeTiempoReturn() {
        return new ServidorEstampillaDeTiempoReturn();
    }

    /**
     * Create an instance of {@link Salude }
     * 
     */
    public Salude createSalude() {
        return new Salude();
    }

}
