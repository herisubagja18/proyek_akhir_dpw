CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(12) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `username_2` (`username`),
  UNIQUE KEY `email` (`email`)
);

CREATE TABLE `data_statistik` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `positif` bigint(20) NOT NULL,
  `sembuh` bigint(20) NOT NULL,
  `meninggal` bigint(20) NOT NULL,
  PRIMARY KEY (`id`)
);

CREATE TABLE `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pertanyaan` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
);
