# Iniciar aplicación

1. **Clonar el repositorio:**

   ```bash
   git clone <url-repositorio>
   cd php-app
   ```

2. **Montar la imagen de Docker:**

   ```bash
   docker build -t php-app .
   ```

3. **Levantar el contenedor:**

   ```bash
   docker-compose up
   ```

4. **Acceder a la aplicacion:**

   Abrir la aplicacion en el navegador: <http://localhost:8000/>.

## Estructura

- `src/index.php`: Aplicación PHP.
- `Dockerfile`: Instrucciones para montar la imagen de Docker.
- `docker-compose.yml`: Configuracion de los contenedores de Docker.
