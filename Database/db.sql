CREATE TABLE users(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(255) NOT NULL,
  last_name VARCHAR(255) NOT NULL,
  email VARCHAR(255) NOT NULL UNIQUE,
  pass VARCHAR(255) NOT NULL,
  `type` ENUM('user', 'admin') NOT NULL DEFAULT 'user',  
  folder_name VARCHAR(255)  NOT NULL UNIQUE,
  created_at DATETIME NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id`)
);
CREATE TABLE files(
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR (255) NOT NULL,
  folder_name VARCHAR(255)  NOT NULL,
  updated_at DATETIME NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`id`),
  FOREIGN KEY (folder_name) REFERENCES users(folder_name)
);


INSERT INTO
  users (first_name, last_name, email, pass,type,folder_name)
VALUES
  (
    'zakaria',
    'yhia',
    'zakaria.yhia95@gmail.com',
    sha1(12345),
    'user',
    'user_2'
  );