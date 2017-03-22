CREATE TABLE IF NOT EXISTS `programs` (
  id            INT UNSIGNED AUTO_INCREMENT,
  name          VARCHAR(255) NOT NULL,
  slug          VARCHAR(255) UNIQUE NOT NULL,
  type          ENUM('Bachelor', 'Pre Master', 'Master') NOT NULL,
  num_students  INT UNSIGNED,
  num_courses   INT UNSIGNED,
  num_grads     INT UNSIGNED,
  contact       VARCHAR(255) NOT NULL,

  PRIMARY KEY(id)
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `links` (
  id            INT UNSIGNED AUTO_INCREMENT,
  name          VARCHAR(255) NOT NULL,
  destination   VARCHAR(255) NOT NULL,
  program_id    INT UNSIGNED,

  PRIMARY KEY(id),

  FOREIGN KEY fk_link_program(program_id)
    REFERENCES programs(id)
    ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `pages` (
  id            INT UNSIGNED AUTO_INCREMENT,
  parent_id     INT UNSIGNED,
  name          VARCHAR(255) NOT NULL,
  slug          VARCHAR(255) UNIQUE NOT NULL,
  type          ENUM('Bachelor', 'Pre Master', 'Master') NOT NULL,

  PRIMARY KEY(id),

  FOREIGN KEY fk_page_page(parent_id)
    REFERENCES pages(id)
    ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `content` (
  id            INT UNSIGNED AUTO_INCREMENT,
  program_id    INT UNSIGNED,
  page_id       INT UNSIGNED,
  body          TEXT DEFAULT '',
  lang          ENUM('en', 'nl') DEFAULT 'en',
  updated_at    DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  created_at    DATETIME DEFAULT CURRENT_TIMESTAMP,

  PRIMARY KEY(id),

  FOREIGN KEY fk_program_content(program_id)
    REFERENCES programs(id)
    ON DELETE CASCADE,

  FOREIGN KEY fk_page_content(page_id)
    REFERENCES pages(id)
    ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `curriculi` (
  id            INT UNSIGNED AUTO_INCREMENT,
  quarter       INT UNSIGNED,
  year          INT UNSIGNED,
  name          VARCHAR(255) NOT NULL,

  PRIMARY KEY(id)
) ENGINE=InnoDB;
