CREATE TABLE `story` (
	`postid` INT DEFAULT NULL,
	`title` TEXT NOT NULL,
	`alias` TEXT NOT NULL,
	`text` LONGTEXT NOT NULL,
	`tagprf` INT NOT NULL DEFAULT NULL,
	`date` DATE NOT NULL,
	`likes` INT NOT NULL,
	`views` TEXT NOT NULL,
	PRIMARY KEY (`postid`)
) ENGINE=InnoDB;

CREATE TABLE `contact` (
	`queryid` INT,
	`title` TEXT NOT NULL,
	`email` TEXT NOT NULL,
	`text` LONGTEXT NOT NULL,
	PRIMARY KEY (`queryid`)
) ENGINE=InnoDB;

CREATE TABLE `tag` (
	`postid` INT NOT NULL,
	`hashid` INT,
	PRIMARY KEY (`hashid`)
) ENGINE=InnoDB;

CREATE TABLE `name` (
	`tagid` INT NOT NULL,
	`tagname` TEXT NOT NULL,
	PRIMARY KEY (`tagid`)
) ENGINE=InnoDB;