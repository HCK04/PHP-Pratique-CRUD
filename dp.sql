CREATE DATABASE gestion_util;

USE gestion_util;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

INSERT INTO users (nom, email) VALUES ('Mohamed Alaoui', 'mohamed.alaoui@example.com');
INSERT INTO users (nom, email) VALUES ('Fatima Zahra', 'fatima.zahra@example.com');
INSERT INTO users (nom, email) VALUES ('Youssef El Gharbi', 'youssef.elgharbi@example.com');
INSERT INTO users (nom, email) VALUES ('Salma Benkirane', 'salma.benkirane@example.com');
INSERT INTO users (nom, email) VALUES ('Omar Lahlou', 'omar.lahlou@example.com');
