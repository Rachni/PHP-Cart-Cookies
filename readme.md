# Project: PHP Cart and Cookies System

🌐 [**Leer en español**](#proyecto-sistema-de-carrito-y-cookies-en-php)

This project is a PHP-based web system designed to practice the use of cookies and sessions in a learning environment. The system manages user preferences (such as themes and languages) using cookies, while also providing basic shopping cart functionality. It supports multiple languages (English and Spanish) and allows users to customize their display preferences.

## ✨ LIVE DEMO 🌐
You can access a demo on Railway using this link:

🌐 [**Demo using Railway**](https://rachni-php-cart-cookies.up.railway.app/)

## Main Features
- **User Preferences**: Supports themes (light and dark) and language settings using cookies.
- **Shopping Cart**: Users can add, view, and remove products from the cart.
- **Cookies and Sessions**: Demonstrates the use of cookies and session management in PHP.
- **Multilingual Support**: Available in both English and Spanish.

## Code Overview
The project is built with **PHP** and focuses on the following concepts:

- **Cookies for the Shopping Cart**: The `cart.php` file handles the shopping cart functionality. Products added to the cart are saved in cookies to ensure persistence across page reloads.
- **Sessions for User Preferences**: The `preferences.php` file utilizes sessions to manage and store user preferences, such as theme selection (light or dark) and language settings.
- **Reusable Components**: The `header.php` file acts as a reusable header component for both the English and Spanish versions.
- **Theme Management**: Themes are managed by dynamically applying the appropriate CSS files based on user preferences.
- **Multilingual Implementation**: Separate folders (`EN` and `ES`) provide support for English and Spanish languages. Each folder contains its respective pages and assets.


## Project Structure
The project is organized as follows:

```
PHP-Cart-Cookies/
│
├── EN/                # English version
│   ├── css/           # Stylesheets for the English version
│   ├── img/           # Images used in the English version
│   ├── cart.php       # Shopping cart page
│   ├── header.php     # Reusable header
│   ├── index.php      # Main page
│   ├── login.php      # Login page
│   ├── logout.php     # Logout script
│   ├── preferences.php # User preference management
│   ├── products.php   # Product listing
│
├── ES/                # Spanish version
│   ├── css/           #
│   ├── img/           #
│   ├── carrito.php    #
│   ├── header.php     # 
│   ├── index.php      # 
│   ├── login.php      # 
│   ├── logout.php     # 
│   ├── preferencias.php # 
│   ├── productos.php  # 
│
├── Procfile           # Deployment instruction for Railway
├── composer.json      # Configuración del proyecto PHP | PHP project configuration
├── Dockerfile         # Docker deployment file
├── index.php          # Root file for automatic redirection
├── .dockerignore      # Ignore files for container
└── railway.json       # Railway specific config
└── README.md          # Project documentation

```

## Requirements
- PHP 7.4 or higher
- Web server (e.g., Apache or Nginx)
- Modern web browser

## Installation and Usage
1. Clone this repository to your local server:
   ```bash
   git clone https://github.com/Rachni/PHP-Cart-Cookies.git
   ```
2. Copy the files to your web server's root folder.
3. Ensure cookies are enabled in your browser.
4. Open a browser and access the project via `http://localhost/`.

---

## **Credenciales de Inicio de Sesión 🔑**
You can use the following credentials to simulate a login without using database systems:

| **Username**  | **Password**   | **Role**    |
|---------------|----------------|------------|
| `admin`       | `1234`         | Admin       |
| `usuario`     | `pass`         | User        |
| `Rachni`      | `pass`         | User        |

---

## Customization
### Change Themes
- Light and dark themes are defined in the `css/` folder of each language directory.

### Add New Products
- Edit the `products.php` file in the appropriate language directory.



## License
This project is licensed under the MIT License. See the `LICENSE` file for details.

---

# Proyecto: Sistema de Carrito y Cookies en PHP

🌐 [**Read in English**](#project-php-cart-and-cookies-system)

Este proyecto es un sistema web desarrollado en PHP como práctica de clase para aprender el uso de cookies y sesiones. Gestiona preferencias de usuario (temas y configuración de idiomas) utilizando cookies, además de ofrecer una funcionalidad básica de carrito de compras. Soporta múltiples idiomas (inglés y español) y permite la personalización de preferencias de visualización.

## ✨ DEMO EN VIVO 🌐
Puedes acceder a la demo a través de este link:

🌐 [**Demo using Railway**](https://rachni-php-cart-cookies.up.railway.app/)

## Características Principales
- **Preferencias de Usuario**: Admite temas (claro y oscuro) y configuración de idiomas usando cookies.
- **Carrito de Compras**: Permite agregar, ver y eliminar productos del carrito.
- **Cookies y Sesiones**: Ejemplo práctico del uso de cookies y manejo de sesiones en PHP.
- **Soporte Multilingüe**: Disponible en inglés y español.

## Descripción del Código
El proyecto se centra en los siguientes aspectos:

- **Cookies para el Carrito de Compras**: El archivo `carrito.php` maneja la lógica del carrito utilizando cookies.
- **Sesiones para Preferencias**: El archivo `preferencias.php` usa sesiones para almacenar las preferencias de idioma y tema.
- **Componentes Reutilizables**: `header.php` se utiliza como un componente de encabezado común en todas las páginas.
- **Temas Personalizados**: Los temas claro y oscuro se aplican dinámicamente usando archivos CSS.
- **Implementación Multilingüe**: Las carpetas `EN` y `ES` proporcionan versiones en inglés y español, respectivamente.

## Estructura del Proyecto
El proyecto está organizado de la siguiente manera:

```
PHP-Cart-Cookies/
│
├── EN/                # 
│   ├── css/           # 
│   ├── img/           # 
│   ├── cart.php       # 
│   ├── header.php     # 
│   ├── index.php      # 
│   ├── login.php      # 
│   ├── logout.php     # 
│   ├── preferences.php # 
│   ├── products.php   # 
│
├── ES/                # Spanish version
│   ├── css/           # Hojas de estilo para la versión en español
│   ├── img/           # Imágenes usadas en la versión en español
│   ├── carrito.php    # Página del carrito de compras
│   ├── header.php     # Encabezado reutilizable
│   ├── index.php      # Página principal
│   ├── login.php      # Página de inicio de sesión
│   ├── logout.php     # Script para cerrar sesión
│   ├── preferencias.php # Gestión de preferencias de usuario
│   ├── productos.php  # Listado de productos
│
├── Procfile           # Deployment instruction for Railway
├── composer.json      # Configuración del proyecto PHP | PHP project configuration
├── Dockerfile         # Docker deployment file
├── index.php          # Root file for automatic redirection
├── .dockerignore      # Ignorar archivos innecesarios en el contenedor
└── railway.json       # Configuración específica para Railway
└── README.md          # Documentación del proyecto | Project documentation

```

## Requisitos
- PHP 7.4 o superior
- Servidor web (por ejemplo, Apache o Nginx)
- Navegador web moderno

## Instalación y Uso
1. Clona este repositorio en tu servidor local:
   ```bash
   git clone https://github.com/Rachni/PHP-Cart-Cookies.git
   ```
2. Copia los archivos a la carpeta raíz de tu servidor web.
3. Asegúrate de que las cookies estén habilitadas en tu navegador.
4. Abre el navegador y accede al proyecto en `http://localhost/`.
---

## **Credenciales de Inicio de Sesión 🔑 **
Para simular un inicio de sesión sin base de datos, puedes usar las siguientes credenciales:  

| **Usuario**   | **Contraseña** | **Rol**    |
|---------------|----------------|------------|
| `admin`       | `1234`         | Administrador |
| `usuario`     | `pass`         | Usuario       |
| `Rachni`      | `pass`         | Usuario       |

---

## Personalización
### Cambiar Temas
- Los temas claro y oscuro están definidos en la carpeta `css/` de cada idioma.

### Agregar Nuevos Productos
- Edita el archivo `productos.php` en el directorio de idioma correspondiente.


## Licencia
Este proyecto está licenciado bajo la licencia MIT. Consulta el archivo `LICENSE` para más detalles.

---
