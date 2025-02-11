# Usar la imagen base de MySQL
FROM mysql:latest

# Configurar las variables de entorno para la base de datos
ENV MYSQL_ROOT_PASSWORD=contrasenyaRoot
ENV MYSQL_DATABASE=cine
ENV MYSQL_USER=usuario1
ENV MYSQL_PASSWORD=contrasenyaUsuario1

# Copiar el archivo SQL al directorio de inicialización de MySQL
COPY cine.sql /docker-entrypoint-initdb.d/