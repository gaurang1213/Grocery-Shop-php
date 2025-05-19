create database grocery_shop;

use grocery_shop;

CREATE TABLE Items (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    description TEXT,
    price DECIMAL(10,2),
    image VARCHAR(255)
);

CREATE TABLE Consumer (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

INSERT INTO Items (name, description, price, image) VALUES
('Apple', 'Fresh red apples', 120.00, 'apple.jpg'),
('Milk', '1 litre full cream milk', 60.00, 'milk.jpg'),
('Bread', 'Whole wheat bread', 40.00, 'bread.jpg');
