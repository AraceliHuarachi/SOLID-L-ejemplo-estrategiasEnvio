# Documentación del Proyecto

Para más información sobre la funcionalidad del proyecto, consulta el siguiente documento:

[Documentación del Proyecto (Word)](docs/EjemploSOLID-L-ShippingStrategy.docx)

o al siguiente enlace:
[https://docs.google.com/document/d/1ltlybchDL1gVSHsCA4PZA8sjlK6yJYjJZS_vKUSwAf0/edit?usp=sharing]

# Inicialización del sistema:
Una vez se tenga clonado el proyecto y abierto en un editor de texto:
1. Instalar dependencias, en una terminal navegar a la dirección de la carpeta del proyecto y ejecutar el siguiente comando comando para instalar todas las dependencias de Composer:  composer install
2. Configurar el Archivo .env El siguiente paso es configurar el archivo .env, que contiene las variables de entorno necesarias para la aplicación. Copiar el archivo .env.example y renombrarlo como .env. 
3. Generar la Clave de la Aplicación Laravel requiere una clave de aplicación única para funcionar correctamente. Se puede generar esta clave ejecutando el siguiente comando:  php artisan key:generate

# Para probar el sistema:
1. Levantar el servicio con php artisan serve e ingresar a la ruta que nos devuelve.
2. Ingresar la ruta en la que estamos mostrando los resultados: /shipping-test.

Se puede seleccionar la estrategia de envío que se desea utilizar, entre delivery a casa o recogerlo directamente en la tienda.

Y observar como ambas clases ejecutan los mismos métodos con resultados diferentes.


