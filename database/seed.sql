INSERT INTO `programs`
  (name, slug, type, contact) VALUES('Software Science', 'software-science', 'bachelor', 'some@email.com');
SET @ss_id = LAST_INSERT_ID();

INSERT INTO `programs`
  (name, slug, type, contact) VALUES ('Psychology & Technology', 'psychology-technology', 'bachelor', 'some@email.com');
SET @pt_id = LAST_INSERT_ID();

INSERT INTO `pages` (name_en, name_nl, slug, type) VALUES
  ('Overview', 'Overzicht', 'overview', 'bachelor'),
  ('Curriculum', 'Rooster', 'curriculum', 'bachelor'),
  ('Program Learning Objectives', 'Leerdoelen', 'learning-objectives', 'bachelor'),
  ('Professional Skills', 'Professionele Vaardigheden', 'professional-skills', 'bachelor'),
  ('Final Project', 'Afsluitend Project', 'final-project', 'bachelor'),
  ('Examination Schedules', 'Tentamenrooster', 'examination-schedules', 'bachelor'),
  ('Graduation Dates', 'Slagings data', 'graduation-dates', 'bachelor'),
  ('Coaching', 'Begeleiding', 'coaching', 'bachelor'),
  ('Regulations', 'Regelementen', 'regulations', 'bachelor'),
  ('Subsequent Masters', 'Aansluitende Masters', 'subsequent-masters', 'bachelor'),

  ('Overview', 'Overzicht', 'overview', 'pre-master'),
  ('Curriculum', 'Rooster', 'curriculum', 'pre-master'),
  ('Binding Study Recommendation', 'Bindend Studie Advies', 'study-recommendation', 'pre-master'),
  ('Bachelor before Master', 'Bachelor voor Master', 'bachelor-before-master', 'pre-master'),
  ('15 Credits Regulation', '15 Punten Regelement','15-credits-regulation', 'pre-master'),
  ('Regulations', 'Regelementen', 'regulations', 'pre-master'),

  ('Overview', 'Overzicht', 'overview', 'master'),
  ('Admission', 'Toelating', 'admission', 'master'),
  ('Curriculum', 'Rooster', 'curriculum', 'master'),
  ('Professional Skills', 'Professionele Vaardigheden', 'professional-skills', 'master'),
  ('Honors Program', 'Honors Program', 'honors-program', 'master'),
  ('Exchange Program / Internship', 'Uitwisseling / Stage', 'exchange-program-internship', 'master'),
  ('Examination Schedules', 'examination-schedules', 'Tentamen data', 'master'),
  ('Graduation', 'Slaging', 'graduation', 'master'),
  ('Prior Bachelors', 'Voorafgaande Bachelors', 'prior-bachelors', 'master'),
  ('Regulations', 'Regelementen', 'regulations', 'master'),
  ('Coaching', 'Begeleiding', 'coaching', 'master');

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

