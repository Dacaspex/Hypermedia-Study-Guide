CREATE TABLE IF NOT EXISTS `content` (
  id            INT PRIMARY KEY AUTO_INCREMENT,
  program_id    INT UNSIGNED,
  page_id       INT UNSIGNED,
  body          TEXT,
  updated_at    DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  created_at    DATETIME DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS `program` (
  id            INT PRIMARY KEY AUTO_INCREMENT,
  name          VARCHAR(255),
  type          ENUM('Bachelor', 'Pre Master', 'Master')
);