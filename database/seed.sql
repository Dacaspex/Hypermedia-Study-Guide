INSERT INTO `programs`
  (name, slug, type) VALUES('Software Science', 'software-science', 'Bachelor');

SET @ss_id = LAST_INSERT_ID();

INSERT INTO `programs`
  (name, slug, type) VALUES ('Psychology & Technology', 'psychology-technology', 'Bachelor');

SET @pt_id = LAST_INSERT_ID();

INSERT INTO `pages` (name, slug, type) VALUES
  ('Overview', 'overview', 'Bachelor'),
  ('Curriculum', 'curriculum', 'Bachelor'),
  ('Program Learning Objectives', 'learning-objectives', 'Bachelor'),
  ('Professional Skills', 'professional-skills', 'Bachelor'),
  ('Final Project', 'final-project', 'Bachelor')
  ('Examination Schedules', 'examination-schedules', 'Bachelor')
  ('Graduation Dates', 'graduation-dates', 'Bachelor')
  ('Coaching', 'coaching', 'Bachelor'),
  ('Regulations', 'regulations', 'Bachelor'),
  ('Subsequent Masters', 'subsequent-masters', 'Bachelor');
