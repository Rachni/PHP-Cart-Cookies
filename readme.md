# Project: PHP Cart and Cookies System

This project is a PHP-based web system designed to manage user preferences (such as themes and languages) using cookies, while also providing basic shopping cart functionality. It supports multiple languages (English and Spanish) and allows users to customize their display preferences.

## Main Features

- **User Preferences**: Supports themes (light and dark) and language settings using cookies.
- **Shopping Cart**: Users can add, view, and remove products from the cart.
- **Cookies for Data Persistence**: Preferences and cart information are stored using cookies.
- **Multilingual Support**: Available in both English and Spanish.

## Project Structure

The project is organized as follows:

```
PHP-Cart&Cookies/
│
├── EN/                # English version
│   ├── css/          # Stylesheets for the English version
│   ├── img/          # Images used in the English version
│   ├── cart.php   # Shopping cart page
│   ├── header.php    # Reusable header
│   ├── index.php     # Main page
│   ├── login.php     # Login page
│   ├── logout.php    # Logout script
│   ├── preferences.php # User preference management
│   ├── products.php # Product listing
│
├── ES/                # Spanish version
│   ├── css/          # Stylesheets for the Spanish version
│   ├── img/          # Images used in the Spanish version
│   ├── carrito.php   # Shopping cart page
│   ├── header.php
│   ├── index.php
│   ├── login.php
│   ├── logout.php
│   ├── preferencias.php
│   ├── productos.php
│
├── Procfile           # Deployment instruction for Railway
├── composer.json      # PHP project configuration
└── README.md          # Project documentation (this file)
```

## Requirements

- PHP 7.4 or higher
- Web server (e.g., Apache or Nginx)
- Modern web browser

## Installation and Usage

1. Clone this repository to your local server:
   ```bash
   git clone https://github.com/yourusername/php-cart-cookies.git
   ```
2. Copy the files to your web server's root folder.
3. Ensure cookies are enabled in your browser.
4. Open a browser and access the project via `http://localhost/`.

## Customization

### Change Themes

- Light and dark themes are defined in the `css/` folder of each language directory.
- Modify these files to create your own styles.

### Add New Products

- Edit the `productos.php` file in the appropriate language directory.
- Add new product details in the desired format.

## Demo


## License

This project is licensed under the MIT License. See the `LICENSE` file for details.


---

# Proyecto: Sistema de Carrito y Cookies en PHP

Este proyecto es un sistema web desarrollado en PHP para gestionar preferencias de usuario (temas y lenguaje) utilizando cookies, además de ofrecer una funcionalidad básica de carrito de compras. Soporta múltiples idiomas (inglés y español) y permite la personalización de preferencias de visualización.

## Características Principales

- **Preferencias de Usuario**: Admite temas (claro y oscuro) y configuración de idiomas usando cookies.
- **Carrito de Compras**: Permite agregar, ver y eliminar productos del carrito.
- **Cookies para Persistencia**: Las preferencias y la información del carrito se almacenan mediante cookies.
- **Soporte Multilingüe**: Disponible en inglés y español.

## Estructura del Proyecto

El proyecto está organizado de la siguiente manera:

```
PHP-Cart&Cookies/
│
├── EN/                # English version
│   ├── css/          # Stylesheets for the English version
│   ├── img/          # Images used in the English version
│   ├── cart.php   # Shopping cart page
│   ├── header.php    # Reusable header
│   ├── index.php     # Main page
│   ├── login.php     # Login page
│   ├── logout.php    # Logout script
│   ├── preferences.php # User preference management
│   ├── products.php # Product listing
│
├── ES/                # Versión en español
│   ├── css/          # Hojas de estilo para la versión en español
│   ├── img/          # Imágenes utilizadas en la versión en español
│   ├── carrito.php   # Página del carrito de compras
│   ├── header.php
│   ├── index.php
│   ├── login.php
│   ├── logout.php
│   ├── preferencias.php
│   ├── productos.php
│
├── Procfile           # Instrucción de despliegue para Railway
├── composer.json      # Configuración básica para PHP
└── README.md          # Documentación del proyecto (este archivo)
```

## Requisitos

- PHP 7.4 o superior
- Servidor web (por ejemplo, Apache o Nginx)
- Navegador web moderno

## Instalación y Uso

1. Clona este repositorio en tu servidor local:
   ```bash
   git clone https://github.com/yourusername/php-cart-cookies.git
   ```
2. Copia los archivos a la carpeta raíz de tu servidor web.
3. Asegúrate de que las cookies estén habilitadas en tu navegador.
4. Abre el navegador y accede al proyecto en `http://localhost/`.

## Personalización

### Cambiar Temas

- Los temas claro y oscuro están definidos en la carpeta `css/` de cada idioma.
- Modifica estos archivos para crear tus propios estilos.

### Agregar Nuevos Productos

- Edita el archivo `productos.php` en el directorio de idioma correspondiente.
- Agrega los detalles de los nuevos productos en el formato adecuado.

## Demo



## Licencia

Este proyecto está licenciado bajo la licencia MIT. Consulta el archivo `LICENSE` para más detalles.


---