CREATE TABLE `new_product` (
	`id` INT(50) unsigned NOT NULL AUTO_INCREMENT,
	`brand` VARCHAR(250) NOT NULL,
	`name` VARCHAR(250) NOT NULL,
	`price` INT(50) unsigned NOT NULL,
	`release` TIMESTAMP(6),
	PRIMARY KEY (`id`)
) ENGINE=InnoDB;