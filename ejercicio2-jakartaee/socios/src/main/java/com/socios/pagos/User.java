package com.socios.pagos;

import java.util.Map;


public class User {
    private String nombre;
    private String apellidos;
    private String dni;
    private String email;
    private int edad;
    private Map<String, Double> pagos;

    public User() {}

    public User(String nombre, String apellidos, String dni, String email, int edad, Map<String, Double> pagos) {
        this.nombre = nombre;
        this.apellidos = apellidos;
        this.dni = dni;
        this.email = email;
        this.edad = edad;
        this.pagos = pagos;
    }

    // Getters y setters
    public String getNombre() { return nombre; }
    public void setNombre(String nombre) { this.nombre = nombre; }

    public String getApellidos() { return apellidos; }
    public void setApellidos(String apellidos) { this.apellidos = apellidos; }

    public String getDni() { return dni; }
    public void setDni(String dni) { this.dni = dni; }

    public String getEmail() { return email; }
    public void setEmail(String email) { this.email = email; }

    public int getEdad() { return edad; }
    public void setEdad(int edad) { this.edad = edad; }

    public Map<String, Double> getPagos() { return pagos; }
    public void setPagos(Map<String, Double> pagos) { this.pagos = pagos; }

    public double totalPagos() {
        return pagos.values().stream()
                .filter(v -> v != null)
                .mapToDouble(Double::doubleValue)
                .sum();
    }
}
