INSERT INTO `programs`
  (name, slug, type, contact) VALUES('Software Science', 'software-science', 'Bachelor', 'some@email.com');

SET @ss_id = LAST_INSERT_ID();

INSERT INTO `programs`
  (name, slug, type, contact) VALUES ('Psychology & Technology', 'psychology-technology', 'Bachelor', 'some@email.com');

SET @pt_id = LAST_INSERT_ID();

INSERT INTO `pages` (name, slug, type) VALUES
  ('Overview', 'overview', 'Bachelor'),
  ('Curriculum', 'curriculum', 'Bachelor'),
  ('Program Learning Objectives', 'learning-objectives', 'Bachelor'),
  ('Professional Skills', 'professional-skills', 'Bachelor'),
  ('Final Project', 'final-project', 'Bachelor'),
  ('Examination Schedules', 'examination-schedules', 'Bachelor'),
  ('Graduation Dates', 'graduation-dates', 'Bachelor'),
  ('Coaching', 'coaching', 'Bachelor'),
  ('Regulations', 'regulations', 'Bachelor'),
  ('Subsequent Masters', 'subsequent-masters', 'Bachelor');

INSERT INTO `content` (program_id, page_id, body) VALUES
  (@ss_id, (SELECT id FROM pages WHERE slug = 'overview'), 'the overview page'),
  (@ss_id, (SELECT id FROM pages WHERE slug = 'curriculum'), 'the curriculum page'),
  (@ss_id, (SELECT id FROM pages WHERE slug = 'learning-objectives'), 'learning objectives page'),
  (@ss_id, (SELECT id FROM pages WHERE slug = 'professional-skills'), 'the professional skills page'),
  (@ss_id, (SELECT id FROM pages WHERE slug = 'final-project'), 'final project page'),
  (@ss_id, (SELECT id FROM pages WHERE slug = 'examination-schedules'), 'examination schedules here'),
  (@ss_id, (SELECT id FROM pages WHERE slug = 'graduation-dates'), 'graduation dates page'),
  (@ss_id, (SELECT id FROM pages WHERE slug = 'coaching'), 'coaching page'),
  (@ss_id, (SELECT id FROM pages WHERE slug = 'regulations'), 'regulations page'),
  (@ss_id, (SELECT id FROM pages WHERE slug = 'subsequent-masters'), 'subsequent masters page');