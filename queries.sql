-- queries.sql - Exercise 1
USE lca_php_ex01;

-- Select all students
SELECT * FROM students;

-- Select by age
SELECT * FROM students WHERE age > 20;

-- Count students
SELECT COUNT(*) AS total_students FROM students;

-- Update student
UPDATE students SET age = 23 WHERE name = 'Simamkele';

-- Delete example (commented)
-- DELETE FROM students WHERE id = 2;
