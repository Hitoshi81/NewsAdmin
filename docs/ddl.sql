-- articles
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id`      INT(4)       NOT NULL,
  `title`   VARCHAR(255) NOT NULL,
  `date`    DATE         NOT NULL,
  `content` LONGTEXT     NOT NULL,
  `link`    VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- useradmin
DROP TABLE IF EXISTS `useradmin`;
CREATE TABLE `useradmin` (
`id` int(4) NOT NULL,
`username` varchar(20) NOT NULL,
`password` varchar(20) NOT NULL,
PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO useradmin (id,username,password) VALUES (1,'test','1111');