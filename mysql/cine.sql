CREATE DATABASE IF NOT EXISTS cine;

USE cine;


CREATE TABLE IF NOT EXISTS peliculas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(255) NOT NULL,
    descripcion TEXT,
    fecha_lanzamiento DATE,
    genero VARCHAR(100),
    duracion INT 
);


INSERT INTO peliculas (nombre, descripcion, fecha_lanzamiento, genero, duracion) VALUES
('Pelicula 1', 'Descripción de la película 1', '2023-01-01', 'Acción', 120),
('Pelicula 2', 'Descripción de la película 2', '2023-02-15', 'Comedia', 90),
('Pelicula 3', 'Descripción de la película 3', '2023-03-20', 'Drama', 105),
('Pelicula 4', 'Descripción de la película 4', '2023-04-10', 'Terror', 110),
('Pelicula 5', 'Descripción de la película 5', '2023-05-05', 'Ciencia ficción', 130);