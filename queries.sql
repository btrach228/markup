SELECT * FROM users;

SELECT users.name , users.email, users.course_id FROM users
LEFT JOIN online_courses
ON users.course_id = online_courses.id;

SELECT online_courses.id, online_courses.title
FROM online_courses
LEFT JOIN users
ON online_courses.id = users.course_id;

SELECT t.*
FROM nt_db_php.tags t
WHERE id = 9
LIMIT 501