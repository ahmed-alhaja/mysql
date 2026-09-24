INSERT INTO students (`id`, `name`, `email`, `age`) VALUES
(1, 'ahmed', 'ahmed@gmail.com', 19),
(2, 'mohamed', 'mohamed@gmail.com', NULL),
(3, 'mahmoud', 'mahmoud@gmail.com', NULL),
(4, 'yasser', 'yasser@gmail.com', NULL),
(5, 'ebrahim', 'ebrahim@gmail.com', NULL);

INSERT INTO instructors (`instructor_id`, `name`, `email`) VALUES
(1, 'islam', 'islam@email.com'),
(2, 'zeyad', 'zeyad@email.com'),
(3, 'hamdy', 'hamdy@email.com');

Update student's email UPDATE students SET email = 'ahmed.new@gmail.com' WHERE id = 1;

INSERT INTO courses (`course_id`, `course_name`, `instructor_id`) VALUES
(1, 'php', 1),
(2, 'MYSQL', 2),
(3, 'C#', 3);

INSERT INTO enrollments (student_id, course_id) VALUES (1, 2);

DELETE FROM enrollments WHERE student_id = 1 AND course_id = 2;

SELECT COUNT(*) AS total_students FROM students;

SELECT students.* FROM students JOIN enrollments ON students.id = enrollments.student_id JOIN courses ON courses.course_id = enrollments.course_id WHERE courses.course_name = 'MYSQL';

SELECT course_name, (SELECT name FROM instructors WHERE instructors.instructor_id = courses.instructor_id) AS instructor_name FROM courses;

SELECT course_id, COUNT(student_id) AS total_students FROM enrollments GROUP BY course_id;

SELECT courses.course_name FROM courses JOIN enrollments ON courses.course_id = enrollments.course_id JOIN students ON students.id = enrollments.student_id WHERE students.name = 'ahmed';

SELECT instructor_id, COUNT(course_id) AS total_courses FROM courses GROUP BY instructor_id HAVING COUNT(course_id) > 1;

SELECT * FROM students WHERE NOT EXISTS ( SELECT 1 FROM enrollments WHERE enrollments.student_id = students.id );

SELECT instructor_id, COUNT(course_id) AS total_courses FROM courses GROUP BY instructor_id;

SELECT AVG(student_count) AS average_students_per_course FROM ( SELECT course_id, COUNT(student_id) AS student_count FROM enrollments GROUP BY course_id ) AS course_counts;