ALTER TABLE users ADD COLUMN  course_id int;

ALTER TABLE users
ADD CONSTRAINT fk_course_on_user
FOREIGN KEY (course_id)
REFERENCES nt_db_php.online_courses (id);

alter table users
    drop column course_id;

ALTER TABLE online_courses ADD COLUMN tag_id int;

ALTER TABLE online_courses
    ADD CONSTRAINT fl_tags_on_courses
FOREIGN KEY (tag_id)
REFERENCES nt_db_php.tags (id);

drop table users;

