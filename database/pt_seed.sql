INSERT INTO `content` (program_id, page_id, body) VALUES
  (2, (SELECT id FROM pages WHERE slug = 'overview' AND type = 'bachelor' LIMIT 1), 'the overview page'),
  (2, (SELECT id FROM pages WHERE slug = 'curriculum' AND type = 'bachelor' LIMIT 1), 'the curriculum page'),
  (2, (SELECT id FROM pages WHERE slug = 'learning-objectives' AND type = 'bachelor' LIMIT 1), 'learning objectives page'),
  (2, (SELECT id FROM pages WHERE slug = 'professional-skills' AND type = 'bachelor' LIMIT 1), 'the professional skills page'),
  (2, (SELECT id FROM pages WHERE slug = 'final-project' AND type = 'bachelor' LIMIT 1), 'final project page'),
  (2, (SELECT id FROM pages WHERE slug = 'examination-schedules' AND type = 'bachelor' LIMIT 1), 'examination schedules here'),
  (2, (SELECT id FROM pages WHERE slug = 'graduation-dates' AND type = 'bachelor' LIMIT 1), 'graduation dates page'),
  (2, (SELECT id FROM pages WHERE slug = 'coaching' AND type = 'bachelor' LIMIT 1), 'coaching page'),
  (2, (SELECT id FROM pages WHERE slug = 'regulations' AND type = 'bachelor' LIMIT 1), 'regulations page'),
  (2, (SELECT id FROM pages WHERE slug = 'subsequent-masters' AND type = 'bachelor' LIMIT 1), 'subsequent masters page');

