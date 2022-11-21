CREATE DATABASE IF NOT EXISTS `data_karyawan`;
use data_karyawan;
CREATE TABLE `karyawan` (
    `id` int(10) NOT NULL auto_increment,
    `name` varchar(255) NOT NULL,
    `email` varchar(255) NOT NULL,
    `telepon` varchar(15),
    `alamat` text NOT NULL,
    `jenis_kelamin` enum('pria', 'wanita') NOT NULL,
    `tempat_lahir` varchar(100) NOT NULL,
    `tanggal_lahir` date NOT NULL,
    PRIMARY KEY (`id`)
);