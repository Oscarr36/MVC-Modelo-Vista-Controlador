# Changelog

Todos los cambios notables de este proyecto se documentan en este archivo.

El formato sigue [Keep a Changelog](https://keepachangelog.com/es/1.0.0/)
y este proyecto usa [Versionado Semántico](https://semver.org/lang/es/).

---

## [Sin publicar]

### Añadido
- README profesional con guía de instalación y ejemplos de uso
- LICENSE (MIT)
- .gitignore para proyectos PHP
- GitHub Actions: PHP Lint, CodeQL, Release Drafter, Stale bot
- Plantillas de issues y pull requests
- CONTRIBUTING.md y SECURITY.md

---

## [1.0.0] — 2024

### Añadido
- Estructura base del framework MVC
- Enrutador automático por URL (`Core.php`)
- Clase base de controladores (`Controlador.php`)
- Clase de conexión PDO a MySQL (`Base.php`)
- Soporte para vistas y respuestas JSON
- Configuración para Apache (`.htaccess`) y Nginx
- Controladores de ejemplo: `Inicio`, `Login`
- Vista de ejemplo con header/footer reutilizables
- Assets CSS y JS en carpeta `public/`
