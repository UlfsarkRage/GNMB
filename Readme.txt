Generador de documentos con PHP/////

Para los empleados activos en la empresa (Registrados en la base de datos este aplicativo permite generar;

-Certificado Laboral
-Carta para solicitud de retiro de cesantias
-Carta para apertura de cuenta bancaria

Guarda los archivos en una ruta local (..\Documentos_Generados\) y guarda el registro de uso en una base de datos que permite visualizar la hora y el tipo de solicitud realizada.

En la base de datos guarda el archivo solicitado codificado en Base64.

Mediante una Query de Excel se puede generar una tabla dinamica para visualizar el uso de la app de forma mas sencilla, o tambien desde una interfaz de PowerBI.

El aplicativo tiene una hoja de código configurable apra poder enviar los archivos generados al correo del destinatario y del remitente (es necesario configurar el archivo con un correo y una contraseña para que esta parte del código funcione)


Al ser un aplicativo de prueba el codigo se ejecuta mediante la app de Xampp y PHPmyadmin.

Ruta de guardado de archivos(C:\xampp\htdocs\Proyectos\Documentos_Generados\)

Cargar los archivos.sql en PHPMyadmin