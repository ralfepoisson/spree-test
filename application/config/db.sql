CREATE DATABASE `spree`;

GRANT ALL PRIVILEGES ON `spree`.* TO 'spree'@'localhost' IDENTIFIED BY 'spree';

USE `spree`;

CREATE TABLE `comments` (
	`uid` int(11) auto_increment,
	`datetime` datetime NOT NULL default '0000-00-00 00:00:00',
	`author` varchar(100) NOT NULL default '',
	`email` varchar(255) NOT NULL default '',
	`comment` text,
	`parent_id` int(11) NOT NULL default 0,
	`active` int(1) NOT NULL default 1,
	PRIMARY KEY (`uid`)
)Engine=InnoDB;


