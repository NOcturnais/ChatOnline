DROP DATABASE IF EXISTS `Ajax_chat`;

CREATE DATABASE `Ajax_chat` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;

#DROP USER 'ajax-chat-user'@'localhost';

CREATE USER 'ajax-chat-user'@'localhost'IDENTIFIED BY 'ajax';

GRANT ALL PRIVILEGES ON  `Ajax_chat`.*  TO 'ajax-chat-user'@'localhost';

Use `Ajax_chat`;

CREATE TABLE `message` (

    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `text` TEXT NOT NULL,
    `timestamp` TIMESTAMP NOT NULL 
);




