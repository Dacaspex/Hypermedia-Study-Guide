TRUNCATE `programs`;
TRUNCATE `pages`;
TRUNCATE `content`;
TRUNCATE `links`;
TRUNCATE `curriculi`;

INSERT INTO `programs`
  (name, slug, type, contact) VALUES('Software Science', 'software-science', 'bachelor', 'some@email.com');
SET @ss_id = LAST_INSERT_ID();

INSERT INTO `programs`
  (name, slug, type, contact) VALUES ('Psychology & Technology', 'psychology-technology', 'bachelor', 'some@email.com');
SET @pt_id = LAST_INSERT_ID();

INSERT INTO `pages` (name, slug, type) VALUES
  ('Overview', 'overview', 'bachelor'),
  ('Curriculum', 'curriculum', 'bachelor'),
  ('Program Learning Objectives', 'learning-objectives', 'bachelor'),
  ('Professional Skills', 'professional-skills', 'bachelor'),
  ('Final Project', 'final-project', 'bachelor'),
  ('Examination Schedules', 'examination-schedules', 'bachelor'),
  ('Graduation Dates', 'graduation-dates', 'bachelor'),
  ('Coaching', 'coaching', 'bachelor'),
  ('Regulations', 'regulations', 'bachelor'),
  ('Subsequent Masters', 'subsequent-masters', 'bachelor'),

  ('Overview', 'overview', 'pre-master'),
  ('Curriculum', 'curriculum', 'pre-master'),
  ('Binding Study Recommendation', 'study-recommendation', 'pre-master'),
  ('Bachelor before Master', 'bachelor-before-master', 'pre-master'),
  ('15 Credits Regulation', '15-credits-regulation', 'pre-master'),
  ('Regulations', 'regulations', 'pre-master'),

  ('Overview', 'overview', 'master'),
  ('Admission', 'admission', 'master'),
  ('Curriculum', 'curriculum', 'master'),
  ('Professional Skills', 'professional-skills', 'master'),
  ('Honors Program', 'honors-program', 'master'),
  ('Exchange Program / Internship', 'exchange-program-internship', 'master'),
  ('Examination Schedules', 'examination-schedules', 'master'),
  ('Graduation', 'graduation', 'master'),
  ('Prior Bachelors', 'prior-bachelors', 'master'),
  ('Regulations', 'regulations', 'master'),
  ('Coaching', 'coaching', 'master');

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
