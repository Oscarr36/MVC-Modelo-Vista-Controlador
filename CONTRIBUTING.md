# Contribuir

Gracias por tu interés en contribuir a este proyecto.

## Flujo de trabajo

1. Haz un fork del repositorio
2. Crea una rama para tu cambio:
   ```bash
   git checkout -b feat/mi-nueva-funcionalidad
   ```
3. Haz tus cambios y añade commits descriptivos
4. Abre un Pull Request describiendo qué cambiaste y por qué

## Convención de ramas

| Tipo | Prefijo | Ejemplo |
|------|---------|---------|
| Nueva funcionalidad | `feat/` | `feat/paginacion-avanzada` |
| Corrección de bug | `fix/` | `fix/error-conexion-db` |
| Documentación | `docs/` | `docs/actualizar-readme` |
| Refactorización | `refactor/` | `refactor/clase-core` |

## Convención de commits

Usa mensajes cortos y en español o inglés:

```
feat: añadir paginación al modelo base
fix: corregir typo en header de respuesta JSON
docs: actualizar guía de configuración
```

## Estilo de código

- PHP 8.0+
- Nombres de clases en `PascalCase`
- Nombres de métodos y variables en `camelCase`
- Indentación con 4 espacios

## Reportar bugs

Usa la plantilla de [bug report](.github/ISSUE_TEMPLATE/bug_report.md) al abrir un issue.
