• Descripción del sistema

Se desarolla un sistema en el cual se introducen usuarios con distintos roles, ya sea
"alumno" o "administrador" y, de acuerdo al rol, se tienen diferentes atributos.

Tenemos la clase padre "Usuario", que contiene atributos que comparten tanto alumno como
administrador (nombre y correo) así como validación de correo para asegurarse que el correo
que se introduzca es válido y control de excepciones en caso de ser incorrecto. Tenemos como clases hijas las clases Admin y Alumno, que 
contienen sus métodos propios (Admin teniendo el método getRol() que regresa "Administrador"
y alumno con el atributo adicional de matricula y un getRol() que regresa "alumno"

• Explicación del flujo de clases

En la clase padre, Usuario, se definen nombre y correo, atributos que poseen
cualquier tipo de usuario, sea alumno o admin, esta clase también contiene un constructor, 
getters, setters y validación de correo.

Las clases Alumno y Admin son clases hijas de Usuario, ambas heredan los métodos y propiedades,
aunque también contienen sus propios métodos como getRol() y atributos propios (matrícula
en el caso de Alumno)

En el index.php se cargan las clases Alumno y Admin con require_once, ve si es posible
crear objetos dentro de bloques try/catch, en caso de tener datos válidos, estos se
muestran usando un echo, en caso de que el correo sea inválido, se lanza la excepción 
de Usuario, con el catch se "atrapa" la excepción y se muestra un mensaje


• Evidencia del manejo de errores

Ruta: http://localhost/Desarrollo-Web-Avanzado-Fimaz-UAS/Parcial-1-poo/practica-3/index.php

<img width="921" height="488" alt="image" src="https://github.com/user-attachments/assets/fdc78fcc-1c78-4d18-9215-22801cb01088" />
