# Repositorio para probar Alxarafe

Este repositorio ha sido creado tan sólo para realizar pruebas durante el desarrollo del paquete [Alxarafe](https://github.com/rsanjoseo/alxarafe).

## Primeros pasos

Si desea crear un nuevo proyecto utilizando [Alxarafe](https://github.com/rsanjoseo/alxarafe), puede seguir los siguientes pasos:

### Creación del proyecto.

Cree una carpeta para el nuevo proyecto, y si lo desea, ejecute **git init** para iniciar GIT.

### Instalar Alxarafe

Para instalar Alxarafe, basta con ejecutar el siguiente comando:

```
composer require rsanjoseo/alxarafe
```

> Es necesario tener composer instalado para poder instalar Alxarafe.

### Crear las carpetas adicionales.

Cree las siguientes carpetas:
- **Lang**, para incluir las traducciones. Los idiomas se tomarán de los archivos que haya en dicha carpeta. De no existir, se tomarán los idiomas de Alxarafe.
- **Modules**, para incluir los módulos que desea añadir en su aplicación. Dentro de las carpetas de módulos, se deberán de crear carpetas para los controladores, modelos, plantillas y traducciones. 

### Cree el archivo index.php

El archivo se ubicará en */public/index.php*. Es conveniente que la web se inicie en dicha carpeta para mantener protegido el código.

# prueba
Repositorio para probar el paquete Alxarafe durante el desarrollo e ilustrar su funcionamiento
