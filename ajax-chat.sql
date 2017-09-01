DROP DATABASE IF EXISTS `thomas_ajax_chat`;

CREATE DATABASE `thomas_ajax_chat` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


GRANT ALL PRIVILEGES ON  `thomas_ajax_chat`.*  TO 'thomas'@'simplon-db';

Use `thomas_ajax_chat`;

CREATE TABLE `message` (

    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `text` TEXT NOT NULL,
    `timestamp` TIMESTAMP NOT NULL,
     `pseudo` TEXT NOT NULL

);




