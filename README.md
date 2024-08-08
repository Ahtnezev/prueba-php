# Todo list con PHP (sin frameworks)

## 💡 Para poder ejecutar el siguiente repositorio:

### Pre-requisitos:
- PHP
- MySQL

1. Clonar repositorio.
2. Ejecutar script que se encuentra en: `database\tables.sql`, con el siguiente comando:
   1. `mysql -u tu_usuario -p tu_base_de_datos < ruta/al/archivo.sql`.
   2. También puedes copiar el script y ejecutarlo en tu `RDBMS` de preferencia.
3. Ejecutar el siguiente comando: `php -S localhost:8000 -t public` para levantar el servidor.
4. ✅ Listo, puedes comenzar hacer uso del to-do en > `http://127.0.0.1:8000/` (o el puerto que se te asigne).
