CREATE TABLE  `db_rkiss`.`tbl_log` (
  `id` int(9) NOT NULL AUTO_INCREMENT,
  `host` char(100) NOT NULL,
  `ip` char(50) NOT NULL,
  `mode` char(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8;
