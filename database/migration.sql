CREATE TABLE IF NOT EXISTS `programs` (
  id            INT PRIMARY KEY AUTO_INCREMENT,
  name          VARCHAR(255),
  slug          VARCHAR(255),
  type          ENUM('Bachelor', 'Pre Master', 'Master')
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `pages` (
  id            INT PRIMARY KEY AUTO_INCREMENT,
  parent_id     INT UNSIGNED,
  name          VARCHAR(255),
  slug          VARCHAR(255),
  type          ENUM('Bachelor', 'Pre Master', 'Master'),

  FOREIGN KEY fk_page(parent_id)
    REFERENCES pages(id)
    ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `content` (
  id            INT PRIMARY KEY AUTO_INCREMENT,
  program_id    INT UNSIGNED,
  page_id       INT UNSIGNED,
  body          TEXT DEFAULT '',
  updated_at    DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  created_at    DATETIME DEFAULT CURRENT_TIMESTAMP,

  FOREIGN KEY fk_program(program_id)
    REFERENCES programs(id)
    ON DELETE CASCADE,

  FOREIGN KEY fk_page(page_id)
    REFERENCES pages(id)
    ON DELETE CASCADE
) ENGINE=InnoDB;

CREATE TABLE IF NOT EXISTS `curriculi` (
  id            INT PRIMARY KEY AUTO_INCREMENT,
  quarter       ENUM(1, 2, 3, 4),
  year          ENUM(1, 2, 3),
  name          VARCHAR(255)
) ENGINE=InnoDB;
