## API Porciones de intercambio de los alimentos

El sistema de porciones de intercambio es una metodología sencilla y rápida que se utiliza para entregar indicaciones alimentarias a usuarios sanos y con patologías, ws una herramienta fundamental para los Nutricionistas tanto en el área asistencial como en el área de educación comunitaria5,18, así como también en la docencia. En este último ámbito, el sistema de porciones de intercambio es la forma predilecta de enseñanza en la formación de Nutricionistas en Chile, usando para ello la referencia “Porciones de intercambio y composición química de los alimentos de la pirámide alimentaria Chilena”, publicada en 1999 y sin actualización a la fecha.(Referencia de la API)

#Por lo que esta API puede ayudar a desarrollar aplicaciones que puedan realizar más rapido la busqueda de las porciones y los calculos asociados para crear pautas alimentarias y minutas.


![image](https://github.com/user-attachments/assets/ecda6576-c987-4baf-b72a-3b4ceb16939e)


#Endpoints

Clasificación de los alimentos

Endpoint: /categorias

Method: GET

    {
        "id": 1,
        "Nombre": "Cereales, tubérculos y leguminosas frescas",
        "Calorias": 140,
        "Carbohidratos": 30,
        "Proteinas": 3,
        "Lipidos": 1
    },
    {
        "id": 2,
        "Nombre": "Verduras generales",
        "Calorias": 30,
        "Carbohidratos": 5,
        "Proteinas": 2,
        "Lipidos": 0
    },
   

Clasificación de los alimentos por id

Endpoint: /categorias/{id}

Method: GET
    
      {
        "id": 1,
        "Nombre": "Cereales, tubérculos y leguminosas frescas",
        "Calorias": 140,
        "Carbohidratos": 30,
        "Proteinas": 3,
        "Lipidos": 1
    },
    {
        "id": 2,
        "Nombre": "Verduras generales",
        "Calorias": 30,
        "Carbohidratos": 5,
        "Proteinas": 2,
        "Lipidos": 0
    },

Todos los alimentos

Endpoint: /alimentos

Method: GET

    {
        "id": 1,
        "categoria_id": 1,
        "Nombre": "Arroz",
        "Gramos": "100",
        "Medida casera": "3/4 taza"
    },
    {
        "id": 2,
        "categoria_id": 1,
        "Nombre": "Arroz integral",
        "Gramos": "120",
        "Medida casera": "3/4 taza"
    },

Alimentos por id

Endpoint: /alimentos/{id}

Method: GET

     {
    "id": 60,
    "categoria_id": 3,
    "Nombre": "Apio",
    "Gramos": "70",
    "Medida casera": "1 taza"
    }


Alimentos por id junto a su clasificación y composición nutricional

Endpoint: /alimentosFull/{id}

Method: GET

     {
    "id": 230,
    "categoria_id": 5,
    "Nombre": "Queso gruyere",
    "Gramos": "20",
    "Medida casera": "",
    "categoria": {
        "id": 5,
        "Nombre": "Lácteos altos en grasas",
        "Calorias": 110,
        "Carbohidratos": 9,
        "Proteinas": 5,
        "Lipidos": 6
    }
    }

Realizado con laravel.
<p><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

