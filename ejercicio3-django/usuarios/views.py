from django.shortcuts import render



def lista_usuarios(request):
    # 1. Lista de los pagos de los usuarios.
    pagos_maria = {
        "Enero": 25.0,
        "Febrero": 25.0,
        "Marzo": None,
        "Abril": 30.0,
        "Mayo": 45.0,
        "Junio": None,
        "Julio": 105.0,
        "Agosto": None,
        "Septiembre": 250.5,
        "Octubre": None,
        "Noviembre": 19.6,
        "Diciembre": None,
    }
    pagos_hector = {
        "Enero": None,
        "Febrero": None,
        "Marzo": 5.0,
        "Abril": None,
        "Mayo": 30.0,
        "Junio": None,
        "Julio": 15.0,
        "Agosto": None,
        "Septiembre": 35.5,
        "Octubre": None,
        "Noviembre": 1.0,
        "Diciembre": None,
    }

    # Función auxiliar para calcular el total de pagos de un usuario
    def calcular_total_pagos(pagos):
        
        total = 0.0
        # Bucle for para iterar sobre los valores del diccionario
        for importe in pagos.values():
            if importe is not None:
                total += importe
        return total

    # Lista principal de usuarios 
    usuarios_list = [
        {
            "nombre": "Maria",
            "apellidos": "Pérez",
            "nif": "12345678M",
            "email": "mperez@email.com",
            "edad": 22,
            "pagos": pagos_maria,
            "total_pagos": calcular_total_pagos(pagos_maria)
        },
        {
            "nombre": "Hector",
            "apellidos": "Baztan",
            "nif": "87654321B",
            "email": "hbaztan@email.com",
            "edad": 16,  
            "pagos": pagos_hector,
            "total_pagos": calcular_total_pagos(pagos_hector)
        },
    ]
    
   
    contexto = {'usuarios': usuarios_list}

    
    return render(request, 'usuarios/lista.html', contexto)