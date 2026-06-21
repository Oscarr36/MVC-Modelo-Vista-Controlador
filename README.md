# MVC Personalizado — Framework PHP

![PHP](https://img.shields.io/badge/PHP-8.0%2B-777BB4?logo=php&logoColor=white)
![License](https://img.shields.io/badge/license-MIT-green)
![CI](https://github.com/Oscarr36/MVC-Modelo-Vista-Controlador/actions/workflows/php-lint.yml/badge.svg)
![CodeQL](https://github.com/Oscarr36/MVC-Modelo-Vista-Controlador/actions/workflows/codeql.yml/badge.svg)

Framework MVC ligero y personalizado para proyectos PHP. Proporciona una estructura organizada con enrutamiento automático por URL, conexión a base de datos via PDO, y soporte para respuestas JSON (API REST).

---

## Características

- Enrutamiento automático basado en URL (`/controlador/metodo/parametro`)
- Conexión a MySQL con PDO y consultas preparadas
- Separación limpia de Modelos, Vistas y Controladores
- Soporte para respuestas JSON (endpoints de API)
- Configuraciones para Apache (`.htaccess`) y Nginx
- Paginación integrada

---

## Requisitos

- PHP 8.0 o superior
- MySQL / MariaDB
- Apache (mod_rewrite activado) o Nginx
- Extensión PDO habilitada

---

## Instalación

1. Clona el repositorio:

   ```bash
   git clone https://github.com/Oscarr36/MVC-Modelo-Vista-Controlador.git
   cd MVC-Modelo-Vista-Controlador
   ```

2. Copia la carpeta `MVC/` a la raíz de tu servidor web (ej. `htdocs/` o `www/`).

3. Configura el servidor:
   - **Apache**: Renombra `Conf/Apache/-.htaccess` a `.htaccess` y cópialo a la raíz. Renombra `Conf/Apache/public/-.htaccess` a `.htaccess` y cópialo a `public/`.
   - **Nginx**: Usa la configuración en `Conf/Nginx/default.conf`.

4. Configura la aplicación (ver sección siguiente).

---

## Configuración

Edita `MVC/App/config/configurar.php`:

```php
// URL base del proyecto
define('RUTA_URL', 'http://localhost/mi-proyecto/');

// Nombre del sitio
define('NOMBRE_SITIO', 'Mi Aplicación');

// Base de datos
define('DB_HOST',     'localhost');
define('DB_USUARIO',  'root');
define('DB_PASSWORD', 'tu_password');
define('DB_NOMBRE',   'nombre_db');

// Registros por página en paginación
define('TAM_PAGINA', 10);
```

> **Nota**: Nunca subas `configurar.php` con credenciales reales. Añade el archivo a `.gitignore` o usa variables de entorno.

---

## Estructura del Proyecto

```
MVC-Modelo-Vista-Controlador/
├── Conf/
│   ├── Apache/
│   │   ├── -.htaccess          # Renombrar a .htaccess (raíz)
│   │   └── public/
│   │       └── -.htaccess      # Renombrar a .htaccess (public/)
│   └── Nginx/
│       └── default.conf        # Configuración Nginx
│
└── MVC/
    ├── App/
    │   ├── config/
    │   │   └── configurar.php  # Configuración de la app
    │   ├── controladores/      # Lógica de negocio
    │   │   ├── Inicio.php
    │   │   └── Login.php
    │   ├── helpers/
    │   │   └── funciones.php   # Funciones auxiliares globales
    │   ├── librerias/
    │   │   ├── Base.php        # Clase de conexión PDO
    │   │   ├── Controlador.php # Clase base de controladores
    │   │   └── Core.php        # Enrutador principal
    │   ├── modelos/
    │   │   └── UsuarioModelo.php
    │   ├── vistas/
    │   │   ├── inc/
    │   │   │   ├── header_no_logueado.php
    │   │   │   └── footer.php
    │   │   ├── index.php
    │   │   └── login.php
    │   └── iniciador.php       # Bootstrap de la aplicación
    └── public/
        ├── index.php           # Punto de entrada
        ├── css/
        │   ├── style.css
        │   └── style_login.css
        └── js/
            └── main.js
```

---

## Cómo funciona el enrutamiento

Las URLs se mapean automáticamente a `Controlador/Método/Parámetros`:

| URL | Controlador | Método | Parámetro |
|-----|-------------|--------|-----------|
| `/` | `Inicio` | `index` | — |
| `/login` | `Login` | `index` | — |
| `/usuario/ver/5` | `Usuario` | `ver` | `5` |

### Crear un controlador

```php
// App/controladores/Producto.php
class Producto extends Controlador {
    public function index() {
        $modelo = $this->modelo('ProductoModelo');
        $datos  = $modelo->obtenerTodos();
        $this->vista('productos/index', $datos);
    }
}
```

### Crear un modelo

```php
// App/modelos/ProductoModelo.php
class ProductoModelo extends Base {
    public function obtenerTodos() {
        $this->query('SELECT * FROM productos');
        return $this->registros();
    }
}
```

### Responder con JSON (API)

```php
public function obtener($id) {
    $modelo    = $this->modelo('ProductoModelo');
    $producto  = $modelo->obtenerPorId($id);
    $this->vistaApi($producto);
}
```

---

## Contribuir

Las contribuciones son bienvenidas. Lee [CONTRIBUTING.md](CONTRIBUTING.md) antes de abrir un PR.

---

## Seguridad

Si encuentras una vulnerabilidad, consulta nuestra [política de seguridad](SECURITY.md).

---

## Licencia

Distribuido bajo la licencia MIT. Ver [LICENSE](LICENSE) para más información.
