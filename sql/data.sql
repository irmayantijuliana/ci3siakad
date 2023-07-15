--
-- Database: `tugasci3`
--

CREATE TABLE IF NOT EXISTS `program_studi` (
`id` int(10) NOT NULL AUTO_INCREMENT,
`nama_prodi` varchar(255) NOT NULL,
`program_pendidikan` enum('Diploma III','Diploma IV') NOT NULL,
`akreditasi` enum('Baik','Baik Sekali','Unggul') NOT NULL,
`sk_akreditasi` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nama_prodi` (`nama_prodi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `program_studi` (`nama_prodi`,`program_pendidikan`,`akreditasi`,`sk_akreditasi`) VALUES
	('Kedokteran Umum','Diploma III','Baik','KU-FK-UY-01'),
	('Teknik Informatika','Diploma IV','Baik Sekali', 'FTI-UY-05' ),
	('Akuntansi','Diploma III','Baik Sekali', 'FE-UY-04'),
	('Manajemen','Diploma IV','Unggul', 'FE-UY-04' ),
	('Ilmu Perpustakaan','Diploma III','Unggul', 'FTI-UY-05' );

CREATE TABLE IF NOT EXISTS `kota` (
`id` int(10) NOT NULL AUTO_INCREMENT,
  `kode_kota` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_kota` (`kode_kota`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `kota` (`kode_kota`, `nama`) VALUES
	('021', 'DKI Jakarta'),
	('0561', 'Pontianak');

CREATE TABLE IF NOT EXISTS `pejabat` (
`id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `golongan` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `nip` (`nip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `pejabat` (`nama`, `nip`,`golongan`, `jabatan`) VALUES
	('John', '112233','3A', 'Dosen'),
	('Doe', '223344','3C', 'Dosen'),
	('Rick', '556677','4A', 'Ketua Prodi');

CREATE TABLE IF NOT EXISTS `mata_kuliah` (
`id` int(10) NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) NOT NULL,
  `nama_mata_kuliah` varchar(255) NOT NULL,
  `sks` int(5) DEFAULT NULL,
  `nilai_angka` int(5) DEFAULT NULL,
  `nilai_huruf` varchar(255) NOT NULL,
  `semester` enum('Semester I','Semester II','Semester III','Semester III','Semester IV','Semester V','Semester VI') NOT NULL,
  PRIMARY KEY (`id`),
   KEY `kode` (`kode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `mata_kuliah` (`kode`, `nama_mata_kuliah`, `sks`, `nilai_angka`, `nilai_huruf`, `semester`) VALUES
	('01-SI', 'Algoritma Pemrograman', 3, 6, 'enam', 'Semester I'),
	('02-SI', 'Pemograman Web', 3, 7, 'tujuh', 'Semester II'),
    ('03-SI', 'Kecerdasan Buatan', 3, 2, 'dua', 'Semester III');

CREATE TABLE IF NOT EXISTS `taruna` (
`id` int(10) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `nomor_taruna` varchar(255) NOT NULL,
  `tempat_lahir` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `program_studi` int(11) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`id`),
   KEY `nama` (`nama`),
   KEY `tempat_lahir` (`tempat_lahir`),
   KEY `program_studi` (`program_studi`),
   CONSTRAINT `taruna_tempat_lahir_id_fkey` FOREIGN KEY (`tempat_lahir`) REFERENCES `kota`(`id`),
   CONSTRAINT `taruna_program_studi_id_fkey` FOREIGN KEY (`program_studi`) REFERENCES `program_studi`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `taruna` (`nama`, `nomor_taruna`, `tempat_lahir`, `tanggal_lahir`, `program_studi`, `foto`) VALUES
	('John', 'SI001', 1, '1996-12-19', 1, 'user-siluet.jpg'),
	('Rick', 'SI002', 1, '2001-07-23', 2, 'user-siluet.jpg'),
  ('Tony', 'SI003', 2, '2002-07-23', 3, 'user-siluet.jpg');

CREATE TABLE IF NOT EXISTS `ijazah` (
`id` int(10) NOT NULL AUTO_INCREMENT,
  `taruna` int(11) NOT NULL,
  `program_studi`  int(11) NOT NULL,
  `tanggal_ijazah` date NOT NULL,
  `tanggal_pengesahan` date NOT NULL,
  `gelar_akademik` varchar(255) NOT NULL,
  `nomor_sk` varchar(255) NOT NULL,
  `wakil_direktur`  int(11) NOT NULL,
  `direktur`  int(11) NOT NULL,
  `nomor_ijazah` varchar(255) NOT NULL,
  `nomor_seri` varchar(255) NOT NULL,
  `tanggal_yudisium` date NOT NULL,
  `judul_kkw` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
   KEY `taruna` (`taruna`),
   KEY `program_studi` (`program_studi`),
   KEY `wakil_direktur` (`wakil_direktur`),
   KEY `direktur` (`direktur`),
   CONSTRAINT `ijazah_taruna_fkey` FOREIGN KEY (`taruna`) REFERENCES `taruna`(`id`),
   CONSTRAINT `ijazah_program_studi_id_fkey` FOREIGN KEY (`program_studi`) REFERENCES `program_studi`(`id`),
   CONSTRAINT `ijazah_wakil_direktur_id_fkey` FOREIGN KEY (`wakil_direktur`) REFERENCES `pejabat`(`id`),
   CONSTRAINT `ijazah_direktur_id_fkey` FOREIGN KEY (`direktur`) REFERENCES `pejabat`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `ijazah` (`taruna`, `program_studi`, `tanggal_ijazah`, `tanggal_pengesahan`, `gelar_akademik`,
`nomor_sk`, `wakil_direktur`, `direktur`, `nomor_ijazah`, `nomor_seri`, `tanggal_yudisium`, `judul_kkw`) VALUES
	(1, 2, '2022-12-19', '2022-12-29','S.Ked', '01-02Ked', 1, 2, '123', '321', '2023-01-29', 'Operasi Sintesis Menggunakan Teknik Sayatan'),
	(2, 1, '2022-12-19', '2022-12-29','S.E', '01-02Eko', 2, 1, '133', '221', '2023-01-29', 'Teknik Penjualan Dan Pemasaran Dunia'),
	(3, 3, '2022-12-19', '2022-12-29','S.T', '01-02Inf', 2, 1, '233', '213', '2023-01-29', 'Prototipe Chat GPT AI');

CREATE TABLE IF NOT EXISTS `nilai` (
`id` int(10) NOT NULL AUTO_INCREMENT,
  `taruna` int(11) NOT NULL,
  `nilai_angka` int(11) NOT NULL,
  `nilai_huruf` varchar(255) NOT NULL,
  `mata_kuliah` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `taruna` (`taruna`),
  KEY `mata_kuliah` (`mata_kuliah`),
   CONSTRAINT `nilai_taruna_fkey` FOREIGN KEY (`taruna`) REFERENCES `taruna`(`id`),
   CONSTRAINT `nilai_mata_kuliah_fkey` FOREIGN KEY (`mata_kuliah`) REFERENCES `mata_kuliah`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `nilai` (`taruna`, `nilai_angka`,`nilai_huruf`, `mata_kuliah`) VALUES
	(1, 70, 'C', 2),
	(2, 80, 'B', 1),
  (3, 90, 'A', 3),
  (2, 75, 'A', 1);

CREATE TABLE IF NOT EXISTS `transkrip_nilai` (
`id` int(10) NOT NULL AUTO_INCREMENT,
  `taruna` int(11) NOT NULL,
  `ijazah` int(11) NOT NULL,
  `program_studi` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `taruna` (`taruna`),
  KEY `ijazah` (`ijazah`),
  KEY `program_studi` (`program_studi`),
   CONSTRAINT `transkrip_nilai_taruna_fkey` FOREIGN KEY (`taruna`) REFERENCES `taruna`(`id`),
   CONSTRAINT `transkrip_nilai_ijazah_fkey` FOREIGN KEY (`ijazah`) REFERENCES `ijazah`(`id`),
   CONSTRAINT `transkrip_nilai_program_studi_fkey` FOREIGN KEY (`program_studi`) REFERENCES `program_studi`(`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `transkrip_nilai` (`taruna`, `ijazah`, `program_studi`) VALUES
	(1, 1, 2),
	(2, 3, 1),
  (3, 2, 3),
  (2, 2, 1);
