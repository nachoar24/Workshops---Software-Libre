# Evidencia de base de datos larabase

En esta evidencia se muestra la base de datos larabase creada para el proyecto Laravel y las tablas generadas mediante el comando php artisan migrate.

## Comando ejecutado

```bash
sudo mysql -e "USE larabase; SHOW TABLES;"
```

## Resultado obtenido

```text
+-----------------------+
| Tables_in_larabase    |
+-----------------------+
| cache                 |
| cache_locks           |
| failed_jobs           |
| job_batches           |
| jobs                  |
| migrations            |
| password_reset_tokens |
| sessions              |
| users                 |
+-----------------------+
```
