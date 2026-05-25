INSERT INTO lessons (course_id, title, video_url)
VALUES (2, 'Hoisting', 'some url');

INSERT INTO online_courses (title, description)
VALUES ('Java', 'e(fx)clipse tuturial');

INSERT INTO users (name, email, role, course_id)
VALUES ('Bohdan', 'bmtrach@t.ua', 'student',1);

INSERT INTO tags (name)
VALUES ('Artificial Intelligence');

INSERT INTO online_courses (title, description, tag_id)
VALUES ('ChatGPT Usage', 'Learn how to promp the best way', '9')
