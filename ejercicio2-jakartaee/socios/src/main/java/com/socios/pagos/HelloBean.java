package com.socios.pagos;

import jakarta.enterprise.context.ApplicationScoped;
import jakarta.inject.Named;
import java.util.*;

@Named
@ApplicationScoped
public class HelloBean {

    private List<User> usuarios;

    public HelloBean() {
        usuarios = new ArrayList<>();

        Map<String, Double> pagos1 = new LinkedHashMap<>();
        pagos1.put("Enero", 25.0);
        pagos1.put("Febrero", 25.0);
        pagos1.put("Marzo", null);
        pagos1.put("Abril", 30.0);
        pagos1.put("Mayo", 45.0);
        pagos1.put("Junio", null);
        pagos1.put("Julio", 105.0);
        pagos1.put("Agosto", null);
        pagos1.put("Septiembre", 250.5);
        pagos1.put("Octubre", null);
        pagos1.put("Noviembre", 19.6);
        pagos1.put("Diciembre", null);

        Map<String, Double> pagos2 = new LinkedHashMap<>();
        pagos2.put("Enero", null);
        pagos2.put("Febrero", null);
        pagos2.put("Marzo", 5.0);
        pagos2.put("Abril", null);
        pagos2.put("Mayo", 30.0);
        pagos2.put("Junio", null);
        pagos2.put("Julio", 15.0);
        pagos2.put("Agosto", null);
        pagos2.put("Septiembre", 35.5);
        pagos2.put("Octubre", null);
        pagos2.put("Noviembre", 1.0);
        pagos2.put("Diciembre", null);

        usuarios.add(new User("Maria", "Pérez", "12345678M", "mperez@email.com", 22, pagos1));
        usuarios.add(new User("Hector", "Baztan", "87654321B", "hbaztan@email.com", 26, pagos2));
    }

    public List<User> getUsuarios() {
        return usuarios;
    }
}
