
DROP TABLE IF EXISTS `plugins`;

CREATE TABLE `plugins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(5000) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `plugins` WRITE;

INSERT INTO `plugins` VALUES (1,'Test Plugin 1','<script>console.log(\"Test Plugin 1 is online\");</script>','active','2022-05-26 12:12:06','2022-05-26 12:32:02'),(2,'Tawk.to','<!--Start of Tawk.to Script-->\r\n<script type=\"text/javascript\">\r\nvar Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();\r\n(function(){\r\nvar s1=document.createElement(\"script\"),s0=document.getElementsByTagName(\"script\")[0];\r\ns1.async=true;\r\ns1.src=\'https://embed.tawk.to/628510d07b967b11799009c5/1g3bsjcal\';\r\ns1.charset=\'UTF-8\';\r\ns1.setAttribute(\'crossorigin\',\'*\');\r\ns0.parentNode.insertBefore(s1,s0);\r\n})();\r\n</script>\r\n<!--End of Tawk.to Script-->','active','2022-05-26 12:58:40','2022-05-26 12:58:40');

UNLOCK TABLES;

DROP TABLE IF EXISTS `receivers`;

CREATE TABLE `receivers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tnum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `receivers` WRITE;

INSERT INTO `receivers` VALUES (1,'DGS5928743','Testing Receiver','2243361919','234 Test Avenue, Prague','2022-05-24 14:32:27','2022-05-24 15:26:42');

UNLOCK TABLES;

DROP TABLE IF EXISTS `senders`;

CREATE TABLE `senders` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ss` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `se` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sec` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `su` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `spp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `senders` WRITE;
UNLOCK TABLES;

DROP TABLE IF EXISTS `settings`;

CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `settings` WRITE;

UNLOCK TABLES;

DROP TABLE IF EXISTS `shippers`;

CREATE TABLE `shippers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tnum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


LOCK TABLES `shippers` WRITE;

INSERT INTO `shippers` VALUES (1,'DGS5928743','Brenda stallion','3435216607','1107 swell avenue','2022-05-24 14:32:27','2022-05-24 14:32:27');

UNLOCK TABLES;

DROP TABLE IF EXISTS `tracking_histories`;

CREATE TABLE `tracking_histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tnum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


LOCK TABLES `tracking_histories` WRITE;

INSERT INTO `tracking_histories` VALUES (1,'DGS5928743','New York','Just arrived at the station.','station','2022-05-26 10:58:52','2022-05-26 10:58:52'),(2,'DGS5928743','Washington DC','The package has left the New York station and is in transit from the Washington DC station','transit','2022-05-26 11:29:11','2022-05-26 11:29:11');

UNLOCK TABLES;

DROP TABLE IF EXISTS `trackings`;

CREATE TABLE `trackings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tnum` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stype` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `origin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bmode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `freight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dest` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pickup_at` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


LOCK TABLES `trackings` WRITE;
INSERT INTO `trackings` VALUES (1,'DGS5928743','Phone','57','USA','paid','400','First class','GERMANY','24/05/2022','Testing add tracking features; also edit tracking','transit','2022-05-24 14:32:27','2022-05-26 11:29:12');

UNLOCK TABLES;
DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `verified` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `reset_code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '2021-12-31 23:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


LOCK TABLES `users` WRITE;
INSERT INTO `users` VALUES (22,'tysonmcrichards@gmail.com','Tyson','McRichards','admin','yes','$2y$10$MD1eVLdFX5XuIldOLuGP6uFOC1Ie4bopSBGAys83IQa3O8z4GYqYa','WHydSjUnOht5Z6b9P3mIDemWGb146U8qMlKuvYscZHuHMm6pyd7vhrqTNKWm','default','ok','2022-05-24 09:57:04','2022-05-24 09:57:04');

UNLOCK TABLES;
