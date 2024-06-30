CREATE DATABASE clinic_management;

USE clinic_management;

CREATE TABLE patients (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    gender VARCHAR(10) NOT NULL,
    contact VARCHAR(100) NOT NULL,
    address TEXT NOT NULL
);