CREATE DATABASE user_account;
USE user_account;

CREATE TABLE user_data (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT null,
    role ENUM('admin', 'simple_user') NOT NULL DEFAULT 'simple_user'
);

INSERT INTO user_data (name, email, password, role) 
VALUES ('panu Ks.', 'admin@lion.xyz', 'admin@lion1234', 'admin');