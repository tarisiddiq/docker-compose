CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nim` char(8) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `fakultas` varchar(50) DEFAULT NULL,
  `jurusan` varchar(50) DEFAULT NULL,
  `ipk` decimal(3,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
)