-- schema.sql - Exercise 1
CREATE DATABASE IF NOT EXISTS lca_php_ex01;
USE lca_php_ex01;

CREATE TABLE IF NOT EXISTS students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    age INT NOT NULL,
    course VARCHAR(100) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO students (name, age, course) VALUES
('Simamkele', 22, 'Backend Development'),
('John Doe', 25, 'Frontend Development');
