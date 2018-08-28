CREATE TABLE IF NOT EXISTS `emails` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `email` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL,
 PRIMARY KEY (`id`)
 );