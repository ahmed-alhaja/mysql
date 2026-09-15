CREATE DATABASE `school_system`;

CREATE TABLE Students ( id INT PRIMARY KEY, name VARCHAR(100), email VARCHAR(255) UNIQUE, age INT );

CREATE TABLE IF NOT EXISTS Instructors ( instructor_id INT PRIMARY KEY AUTO_INCREMENT, name VARCHAR(100), email VARCHAR(100) UNIQUE );
CREATE TABLE Instructors ( instructor_id INT PRIMARY KEY, name VARCHAR(100), email VARCHAR(100) );

CREATE TABLE Courses ( course_id INT PRIMARY KEY, course_name VARCHAR(100), instructor_id INT );

CREATE TABLE Enrollments ( enrollment_id INT PRIMARY KEY, student_id INT, course_id INT );

-- INSERT --

INSERT INTO `students` (id, name, email) VALUES (1, 'ahmed', 'ahmed@gmail.com');
INSERT INTO `students` (id, name, email) VALUES (2, 'mohamed', 'mohamed@gmail.com');
INSERT INTO `students` (id, name, email) VALUES (3, 'mahmoud', 'mahmoud@gmail.com');
INSERT INTO `students` (id, name, email) VALUES (4, 'yasser', 'yasser@gmail.com');
INSERT INTO `students` (id, name, email) VALUES (5, 'ebrahim', 'ebrahim@gmail.com');

INSERT INTO `instructors` (name, email) VALUES ('islam', 'islam@email.com');
INSERT INTO `instructors` (name, email) VALUES ('zeyad', 'zeyad@email.com');
INSERT INTO `instructors` (name, email) VALUES ('hamdy', 'hamdy@email.com');

INSERT INTO enrollments (`student_id`, `course_id`) VALUES (1 , 3);
INSERT INTO enrollments (`student_id`, `course_id`) VALUES (2 , 1);
INSERT INTO enrollments (`student_id`, `course_id`) VALUES (3 , 2);
INSERT INTO enrollments (`student_id`, `course_id`) VALUES (4 , 1);
INSERT INTO enrollments (`student_id`, `course_id`) VALUES (5 , 2);
-- update --
ALTER TABLE Courses ADD CONSTRAINT fk_course_instructor FOREIGN KEY (instructor_id) REFERENCES Instructors(instructor_id);
ALTER TABLE enrollments ADD CONSTRAINT fk_student_enrollments FOREIGN KEY (student_id) REFERENCES students(id);
ALTER TABLE enrollments ADD CONSTRAINT fk_course_enrollments FOREIGN KEY (course_id) REFERENCES courses(course_id);