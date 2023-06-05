-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2023 at 05:54 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_simkar`
--

-- --------------------------------------------------------

--
-- Table structure for table `access_jabatan`
--

CREATE TABLE `access_jabatan` (
  `id` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `id_user_sub_menu` int(11) NOT NULL,
  `access_read` int(11) NOT NULL,
  `access_create` int(11) NOT NULL,
  `access_update` int(11) NOT NULL,
  `access_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `access_jabatan`
--

INSERT INTO `access_jabatan` (`id`, `id_jabatan`, `id_user_sub_menu`, `access_read`, `access_create`, `access_update`, `access_delete`) VALUES
(10, 2, 3, 0, 1, 1, 1),
(11, 2, 15, 1, 1, 1, 1),
(12, 2, 18, 1, 1, 1, 1),
(13, 2, 19, 1, 1, 1, 1),
(14, 2, 32, 1, 1, 1, 1),
(15, 2, 34, 1, 1, 1, 1),
(16, 2, 42, 1, 1, 1, 1),
(17, 3, 3, 1, 0, 1, 0),
(18, 3, 15, 1, 1, 1, 1),
(19, 3, 18, 0, 0, 0, 0),
(20, 3, 19, 0, 0, 0, 0),
(21, 3, 32, 1, 0, 0, 0),
(22, 3, 42, 1, 0, 0, 0),
(23, 3, 17, 0, 0, 0, 0),
(24, 8, 5, 0, 0, 0, 0),
(25, 8, 6, 0, 0, 0, 0),
(26, 8, 17, 0, 0, 0, 0),
(27, 8, 20, 0, 0, 0, 0),
(28, 8, 21, 0, 0, 0, 0),
(29, 8, 22, 0, 0, 0, 0),
(30, 8, 25, 0, 0, 0, 0),
(31, 8, 30, 0, 0, 0, 0),
(32, 8, 33, 0, 0, 0, 0),
(33, 8, 35, 0, 0, 0, 0),
(34, 8, 15, 1, 1, 1, 1),
(35, 8, 18, 1, 1, 1, 1),
(36, 8, 19, 1, 1, 1, 1),
(37, 8, 23, 0, 0, 0, 0),
(38, 8, 32, 1, 0, 0, 0),
(39, 8, 38, 0, 0, 0, 0),
(40, 8, 13, 0, 0, 0, 0),
(41, 8, 1, 0, 0, 1, 1),
(42, 8, 42, 1, 1, 1, 1),
(43, 8, 34, 1, 1, 1, 1),
(44, 2, 38, 1, 1, 1, 1),
(45, 2, 35, 1, 1, 1, 1),
(46, 2, 33, 1, 1, 1, 1),
(47, 2, 30, 1, 1, 1, 1),
(48, 2, 25, 1, 1, 1, 1),
(49, 2, 23, 1, 1, 1, 1),
(50, 2, 22, 1, 1, 1, 1),
(51, 2, 21, 1, 1, 1, 1),
(52, 2, 20, 1, 1, 1, 1),
(53, 2, 17, 1, 1, 1, 1),
(54, 2, 13, 1, 1, 1, 1),
(55, 2, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_keluarga`
--

CREATE TABLE `data_keluarga` (
  `id_keluarga` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_keluarga` varchar(128) NOT NULL,
  `hubungan` varchar(128) NOT NULL,
  `telp_keluarga` varchar(12) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_keluarga`
--

INSERT INTO `data_keluarga` (`id_keluarga`, `user_id`, `nama_keluarga`, `hubungan`, `telp_keluarga`, `status`) VALUES
(1, 1, 'sella', 'kakak', '089659177854', 'approved'),
(2, 1, 'Dika', 'adik', '089657112254', 'review'),
(4, 4, 'Sandi', 'Anak', '089674154454', 'review'),
(6, 20, 'Ada Wong', 'Istri', '085117522255', 'review'),
(9, 5, 'Marshel', 'adik', '085661651612', 'approved'),
(10, 8, '11', '11', '11', 'approved'),
(11, 8, 'ayah', 'ayah', '123123', 'approved'),
(13, 69, 'tes', 'tes', '089657112254', 'approved'),
(14, 70, 'tes', 'tes', '054484544', 'review'),
(15, 70, 'tes', 'e', '089674154454', 'review');

-- --------------------------------------------------------

--
-- Table structure for table `data_pelatihan`
--

CREATE TABLE `data_pelatihan` (
  `id_pelatihan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_pelatihan` varchar(128) NOT NULL,
  `organisasi_penerbit` varchar(128) NOT NULL,
  `lokasi_pelatihan` varchar(128) NOT NULL,
  `deskripsi` text NOT NULL,
  `url` varchar(128) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` varchar(128) NOT NULL,
  `created_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pelatihan`
--

INSERT INTO `data_pelatihan` (`id_pelatihan`, `user_id`, `nama_pelatihan`, `organisasi_penerbit`, `lokasi_pelatihan`, `deskripsi`, `url`, `tgl_mulai`, `tgl_selesai`, `status`, `created_at`) VALUES
(1, 1, 'Kampus Merdeka', 'Dicoding', 'Online', 'Mempelajari Mengenai javascript Fundamental', 'https://www.linkedin.com/in/hengky-darmawan/', '2022-03-01', '2022-08-31', 'rejected', '2022-11-30'),
(2, 1, 'Web Master', 'Dumet School', 'Tanjung Duren', 'Mempelajari mengenai HTML, CSS, Bootstrap', 'https://getbootstrap.com/', '2022-11-01', '2022-12-01', 'approved', '2022-12-01'),
(4, 1, 'React Js', 'Digital Talent & KomInfo', 'Online', 'Mempelajari Mengenai React Js', 'https://bucket.cloud.lintasarta.co.id:8082/dts-sertifikat/sertifikat-pdf/e444dae6-c6db-46bd-8da0-23b811772f96.pdf', '2022-05-31', '2022-06-24', 'review', '2022-12-01'),
(7, 1, 'HTML', 'Progate', 'Online', 'Mempelajari tag - tag HTML', 'https://progate.com/', '2022-12-01', '2022-12-20', 'approved', '2022-12-03'),
(10, 5, 's', 's', 's', 'a', 'https://getbootstrap.com/docs/4.6/components/buttons/', '2022-12-18', '2022-12-31', 'rejected', '2022-12-22'),
(12, 3, 'Manajemen', 'Tokopedia', 'Online', 'aaa', 'https://stackoverflow.com', '2022-12-01', '2022-12-31', 'approved', '2022-12-22'),
(13, 4, 'Data Analyst', 'DQLAB', 'Online', 'SQL', 'https://digitalent.kominfo.go.id/', '2022-10-01', '2022-12-31', 'approved', '2022-12-22');

-- --------------------------------------------------------

--
-- Table structure for table `data_pengalaman`
--

CREATE TABLE `data_pengalaman` (
  `id_pengalaman` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_perusahaan` varchar(128) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_berakhir` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `alasan_berhenti` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_pengalaman`
--

INSERT INTO `data_pengalaman` (`id_pengalaman`, `user_id`, `nama_perusahaan`, `jabatan`, `tgl_mulai`, `tgl_berakhir`, `status`, `alasan_berhenti`) VALUES
(1, 1, 'PT.ABC', 'UI/UX Design', '2021-11-01', '2022-11-01', 'approved', 'kontrak habis'),
(2, 5, 'PT.Sinar Jaya', 'Web Developer', '2022-12-01', '2022-12-31', 'review', 'resign'),
(3, 4, 's', 's', '2022-12-15', '2022-12-16', 'review', 's'),
(5, 3, 'PT.QWETY', 'Akuntan', '2019-01-01', '2020-05-31', 'review', 'Kontrak Habis'),
(7, 1, 'ITBIS Digital', 'Front End Developer', '2022-01-04', '2023-05-05', 'approved', 'Mencoba tantangan baru');

-- --------------------------------------------------------

--
-- Table structure for table `master_golongan`
--

CREATE TABLE `master_golongan` (
  `id_golongan` int(11) NOT NULL,
  `nama_golongan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_golongan`
--

INSERT INTO `master_golongan` (`id_golongan`, `nama_golongan`) VALUES
(1, 'III/a'),
(2, 'III/b');

-- --------------------------------------------------------

--
-- Table structure for table `master_hukuman`
--

CREATE TABLE `master_hukuman` (
  `id` int(11) NOT NULL,
  `hukuman` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_hukuman`
--

INSERT INTO `master_hukuman` (`id`, `hukuman`) VALUES
(1, 'Surat Peringatan 1'),
(2, 'Surat Peringatan 2'),
(3, 'Surat Peringatan 3'),
(4, 'PHK');

-- --------------------------------------------------------

--
-- Table structure for table `master_jabatan`
--

CREATE TABLE `master_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `parent_jabatan_id` varchar(128) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `jabatan` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_jabatan`
--

INSERT INTO `master_jabatan` (`id_jabatan`, `parent_jabatan_id`, `paket_id`, `jabatan`, `role_id`) VALUES
(1, '0', 2, 'WR 1', 1),
(2, '1', 0, 'WR 2', 1),
(3, '1', 0, 'Manajer IT', 2),
(4, '1', 0, 'WR3', 3),
(5, '2', 0, 'WR4', 3),
(6, '1', 1, 'Biro Infrastruktur', 3),
(7, '3', 5, 'Magang', 3),
(8, '1', 0, 'Dosen', 2),
(9, '3', 0, 'pegawai', 3),
(10, '3', 0, 'pegawai2', 3),
(11, '3', 0, 'pegawai3', 3),
(16, '6', 0, 'programmer', 3),
(17, '6', 0, 'tes', 2);

-- --------------------------------------------------------

--
-- Table structure for table `master_jurusan`
--

CREATE TABLE `master_jurusan` (
  `id` int(11) NOT NULL,
  `jurusan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_jurusan`
--

INSERT INTO `master_jurusan` (`id`, `jurusan`) VALUES
(1, 'Teknik Informatika'),
(2, 'Teknik Sipil'),
(3, 'Akutansi'),
(4, 'Sastra Inggris');

-- --------------------------------------------------------

--
-- Table structure for table `master_kelompok_jabatan`
--

CREATE TABLE `master_kelompok_jabatan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `kelompok_jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_kelompok_jabatan`
--

INSERT INTO `master_kelompok_jabatan` (`id`, `user_id`, `kelompok_jabatan`) VALUES
(1, 1, '1.2.1.1'),
(2, 2, '1.0.0.3'),
(3, 1, '1.1');

-- --------------------------------------------------------

--
-- Table structure for table `master_libur`
--

CREATE TABLE `master_libur` (
  `id_libur` int(11) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_akhir` date NOT NULL,
  `keterangan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_libur`
--

INSERT INTO `master_libur` (`id_libur`, `tgl_mulai`, `tgl_akhir`, `keterangan`) VALUES
(3, '2022-12-24', '2022-12-25', 'hari natal'),
(4, '2022-12-26', '2022-12-31', 'Tahun Baru'),
(5, '2022-12-01', '2022-12-31', 'Libur Akhir Tahun');

-- --------------------------------------------------------

--
-- Table structure for table `master_paket`
--

CREATE TABLE `master_paket` (
  `id_paket` int(11) NOT NULL,
  `golongan_id` int(11) DEFAULT NULL,
  `nama_paket` varchar(128) NOT NULL,
  `gaji_pokok` int(11) DEFAULT NULL,
  `tj_jabatan_fungsional` int(11) DEFAULT NULL,
  `tj_pendidikan_s3` int(11) DEFAULT NULL,
  `tj_transport_makan` int(11) DEFAULT NULL,
  `tj_jabatan_struktural` int(11) DEFAULT NULL,
  `tj_jabatan_rangkap` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_paket`
--

INSERT INTO `master_paket` (`id_paket`, `golongan_id`, `nama_paket`, `gaji_pokok`, `tj_jabatan_fungsional`, `tj_pendidikan_s3`, `tj_transport_makan`, `tj_jabatan_struktural`, `tj_jabatan_rangkap`) VALUES
(1, NULL, 'Tipe A', 10000000, NULL, NULL, NULL, NULL, NULL),
(2, 1, 'Tipe B', 2069550, 1074468, NULL, 1800000, 1831650, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `master_parent_jabatan`
--

CREATE TABLE `master_parent_jabatan` (
  `id` int(11) NOT NULL,
  `id_parent_jabatan` varchar(128) NOT NULL,
  `parent_jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_parent_jabatan`
--

INSERT INTO `master_parent_jabatan` (`id`, `id_parent_jabatan`, `parent_jabatan`) VALUES
(7, '1', 'Rektor'),
(8, '1.1', 'WR1'),
(9, '1.2', 'WR2'),
(10, '1.3', 'WR3'),
(11, '1.4', 'WR4'),
(12, '1.2.1', 'Direktur IT'),
(13, '1.2.1.1', 'Biro Infrastruktur'),
(14, '1.2.1.2', 'Biro Sistem Informasi'),
(15, '1.2,1.3', 'Biro Layanan IT'),
(16, '1.2.1.1.1', 'Bagian Server'),
(17, '1.2.1.1.2', 'Bagian layanan');

-- --------------------------------------------------------

--
-- Table structure for table `master_pendidikan`
--

CREATE TABLE `master_pendidikan` (
  `id_pendidikan` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tingkat_pendidikan` varchar(128) NOT NULL,
  `jurusan` varchar(128) NOT NULL,
  `universitas` varchar(128) NOT NULL,
  `alamat_univ` text NOT NULL,
  `judul_skripsi` varchar(128) NOT NULL,
  `nama_dospem` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `status` varchar(255) NOT NULL,
  `tgl_mulai` date DEFAULT NULL,
  `tgl_lulus` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_pendidikan`
--

INSERT INTO `master_pendidikan` (`id_pendidikan`, `user_id`, `tingkat_pendidikan`, `jurusan`, `universitas`, `alamat_univ`, `judul_skripsi`, `nama_dospem`, `url`, `status`, `tgl_mulai`, `tgl_lulus`) VALUES
(1, 1, 'S1', 'Teknik Informatika', 'Universitas Dian Nusantara', 'Grogol', 'E-Commerce', 'Giri', 'https://www.google.com/', 'approved', '2013-01-01', '2017-01-31'),
(2, 1, 'S2', 'Teknik Informatika', 'ITB', 'Bandung', 'HRIS', 'Desi', 'https://www.google.com/', 'approved', '2023-01-12', '2018-01-31'),
(4, 3, 'S2', 'Ekonomi', 'ITB', 'Depok', 'Investasi', 'Andi', 'https://www.google.com/', 'approved', '2015-07-01', '2019-12-31'),
(5, 4, 'S1', 'Teknik Informasi', 'Universitas Indonesia', 'Depok', 'Company Profile', 'Henri', 'https://www.google.com/', 'approved', '2018-01-01', '2023-01-12'),
(6, 5, 'S1', 'Sastra Inggris', 'Universitas Gajah Mada', 'Yogyakarta', 'An Analysis of Symbols in Toba Batak Traditional House', 'Siti', 'https://www.google.com/', 'approved', '2016-01-08', '2022-01-14'),
(7, 3, 'S3', 'Teknik Mesin', 'Universitas Gajah Mada', 'bandung', 'cara mudah membuat mesin', 'Yusuf', 'https://puslit.mercubuana.ac.id/', 'approved', '2021-11-01', '2024-12-31'),
(8, 20, 'S1', 'Teknik Informatika', 'Harvad', 'Amerika', 'AI', 'Stev', 'https://disdukcapil.bandaacehkota.go.id/tinymce_upload/tinymce/plugins/imagemanager/F-1.06.pdf', 'approved', '2023-03-01', '2023-03-31'),
(13, 5, 'S2', 'Sastra Inggris', 'Universitas Gadjah Mada', 'Jl Test', 'An Analysis of Symbols in Javanese Traditional House ', 'Raymond', 'https://google.com', 'review', '2020-06-23', '2022-08-05'),
(15, 69, 'D1', 'asa', 'sas', 'sa', 'sas', 'sa', 'https://web.whatsapp.com/', 'approved', '2023-05-29', '2023-06-29');

-- --------------------------------------------------------

--
-- Table structure for table `master_seminar`
--

CREATE TABLE `master_seminar` (
  `id_seminar` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `nama_seminar` varchar(128) NOT NULL,
  `deskripsi_seminar` text NOT NULL,
  `organisasi_pelaksana` varchar(128) NOT NULL,
  `lokasi_seminar` varchar(128) NOT NULL,
  `tgl_seminar` date NOT NULL,
  `url` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_seminar`
--

INSERT INTO `master_seminar` (`id_seminar`, `user_id`, `nama_seminar`, `deskripsi_seminar`, `organisasi_pelaksana`, `lokasi_seminar`, `tgl_seminar`, `url`, `status`) VALUES
(1, 1, 'LINE TO UI/UX DESIGN', 'Have you ever wondered why some platforms are more demanding than the other? Or how can users be loyal to some products or brands? No worries! We’re gonna give you an exciting event which may answer some of your questions! ????Introducing : Find Your Line to UI/UX Design with Kak Gregorius Willy Adiguno! ????We’re here to dive deep into the world of UI UX Design with which will be held And what’s more exciting is that all participants will receive free access to Dicoding Course! ????What are you waiting for! Register yourself now!', 'dicodings', 'Online', '2022-12-09', 'https://meet.google.com/vgb-ryqi-cut', 'approved'),
(2, 3, 'tes', 'tes', 'tes', 'online', '2022-12-15', 'https://meet.google.com/vgb-ryqi-cut', 'approved'),
(5, 4, 's', 's', 's', 's', '2022-12-02', 's', 'approved'),
(6, 5, 'sa', 'sa', 'sa', 'sa', '2021-12-01', 'sa', 'rejected'),
(8, 5, 'Test', 'Test tak test dicoba', 'Test Group', 'Disana', '2022-11-10', 'https://google.com', 'review');

-- --------------------------------------------------------

--
-- Table structure for table `master_status_pegawai`
--

CREATE TABLE `master_status_pegawai` (
  `id` int(11) NOT NULL,
  `status_pegawai` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_status_pegawai`
--

INSERT INTO `master_status_pegawai` (`id`, `status_pegawai`) VALUES
(1, 'Kontrak'),
(2, 'Tetap');

-- --------------------------------------------------------

--
-- Table structure for table `master_university`
--

CREATE TABLE `master_university` (
  `id` int(11) NOT NULL,
  `universitas` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `master_university`
--

INSERT INTO `master_university` (`id`, `universitas`) VALUES
(1, 'Universitas Dian Nusantara'),
(2, 'Universitas Indonesia'),
(3, 'Institut Teknologi Bandung'),
(4, 'Universitas Gadjah Mada');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `jabatan_id` int(11) DEFAULT NULL,
  `address` varchar(128) DEFAULT NULL,
  `tmpt_lahir` varchar(128) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(128) DEFAULT NULL,
  `agama` varchar(128) DEFAULT NULL,
  `status_pernikahan` varchar(128) DEFAULT NULL,
  `nik_ktp` bigint(16) DEFAULT NULL,
  `nik_karyawan` bigint(13) DEFAULT NULL,
  `nama_bank` varchar(128) DEFAULT NULL,
  `no_rek` bigint(16) DEFAULT NULL,
  `npwp` varchar(20) DEFAULT NULL,
  `email` varchar(128) DEFAULT NULL,
  `email_undira` varchar(128) DEFAULT NULL,
  `telp` varchar(12) DEFAULT NULL,
  `nama_darurat` varchar(128) DEFAULT NULL,
  `telp_darurat` varchar(12) DEFAULT NULL,
  `no_bpjs_kesehatan` bigint(13) DEFAULT NULL,
  `no_bpjs_ketenagakerjaan` bigint(11) DEFAULT NULL,
  `jenis_pegawai` varchar(128) DEFAULT NULL,
  `image` varchar(128) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `tgl_bergabung` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `approval` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `jabatan_id`, `address`, `tmpt_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `status_pernikahan`, `nik_ktp`, `nik_karyawan`, `nama_bank`, `no_rek`, `npwp`, `email`, `email_undira`, `telp`, `nama_darurat`, `telp_darurat`, `no_bpjs_kesehatan`, `no_bpjs_ketenagakerjaan`, `jenis_pegawai`, `image`, `password`, `role_id`, `is_active`, `tgl_bergabung`, `created_at`, `approval`) VALUES
(1, 'Hengky Darmawan', 1, 'Jakarta Barat, Indonesia', 'Pontianak', '2001-02-22', 'Pria', 'Buddha', 'Singel', 3174092505520003, 1100000000011, 'BCA', 1234567891123, '12.345.678.9-101.012', 'hengky@gmail.com', 'hengkydarmawan66@gmail.com', '082186629996', 'Ani', '082196629997', 12345671111, 123456789, 'tendik', 'default.png', '$2y$10$N5bHf8.9YGi9IZjg0i2qCOePlknbmuhr7GHzATV3v4bsIpsUDm7KW', 1, 1, '2022-12-13', '2021-11-02', 'approved'),
(69, 'Hengky Admins', 2, 'Jakarta', 'Paris', '2023-06-01', 'Perempuan', 'Hindu', 'belum menikah', 6101042202010002, 3214113, 'BCA', 1221444111, '12.345.678.9-101.017', 'hengkycross172@gmail.com', 'hengkycross172@gmail.com', '089659172256', 'Eko', '085117522255', 123456722, 123456733, NULL, 'default.png', '$2y$10$YPN9CfOXfnhaCcO0SIKeoO0cQdOa.GEJbPmL5kH.vDozZ4AJsFiFW', 2, 1, '2023-06-02', NULL, 'approved'),
(70, 'Hengky Stafs', 1, 'jakarta', 'Jepang', '2023-06-01', 'Perempuan', 'Buddha', 'nikah', 61516444413211, 6151644, 'BCA', 615564641, '12.345.678.9-101.014', 'hengkydarmawan52@gmail.com', 'hengkydarmawan52@gmail.com', '0858815141', 'ada', '0812116163', 123456724, 123456724, NULL, 'default.png', '$2y$10$MbMeJkJH47kWj0nFgpTeeOHKAZZ4FF7q4opokbgHtz1J5f6Rdh8au', 3, 1, '2023-06-22', NULL, 'approved'),
(71, 'Riko (SP)', 1, 'Bandung', 'Bandung', '1999-04-07', 'pria', 'Islam', 'belum menikah', 6101042202010002, 6101042202010002, 'BCA', 1221444111, '12.345.678.9-101.020', 'rikorinaldiansyah26@gmail.com', 'rikorinaldiansyah26@gmail.com', '089659115555', 'tes', '085117522254', 123456722, 1234567, NULL, 'default.png', '$2y$10$XRV9Hx3Y.uhQdpsocTpsgOzlZnqEsbngDkQxcX34D1bHIXKW/Ee6i', 1, 1, '2023-06-05', NULL, 'approved');

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `sub_menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`, `sub_menu_id`) VALUES
(1, 1, 1, 1),
(23, 2, 17, 1),
(25, 3, 17, 1),
(27, 1, 18, 1),
(29, 3, 18, 1),
(33, 1, 17, 1),
(38, 1, 20, 1),
(42, 2, 21, 1),
(45, 3, 6, 1),
(48, 1, 6, 1),
(49, 1, 12, 1),
(50, 1, 7, 0),
(54, 1, 23, 0),
(67, 2, 2, 0),
(71, 2, 6, 0),
(73, 2, 12, 0),
(75, 2, 18, 0),
(77, 2, 23, 0),
(83, 3, 7, 0),
(87, 3, 2, 0),
(90, 2, 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_jabatan`
--

CREATE TABLE `user_jabatan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `jabatan_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_jabatan`
--

INSERT INTO `user_jabatan` (`id`, `user_id`, `jabatan_id`, `role_id`) VALUES
(1, 7, 3, 1),
(2, 7, 5, 3),
(3, 68, 7, 0),
(4, 68, 9, 0),
(7, 1, 1, 1),
(8, 1, 7, 3),
(16, 70, 1, 1),
(17, 70, 7, 3),
(18, 69, 2, 1),
(19, 69, 7, 3),
(20, 71, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Staf'),
(3, 'User'),
(4, 'Menu'),
(5, 'Laporan'),
(6, 'Absensi'),
(7, 'Gaji'),
(12, 'Master Data'),
(16, 'Sertifikat'),
(18, 'Setting'),
(23, 'Access');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Super Admin'),
(2, 'Admin'),
(3, 'Staf');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Dashboard', 'staf', 'fas fa-fw fa-tachometer-alt', 1),
(3, 3, 'Dashboard', 'user', 'fas fa-fw fa-tachometer-alt', 1),
(5, 4, 'Menu Management', 'menu', 'far fa-fw fa-folder', 1),
(6, 4, 'Sub Menu Management', 'menu/submenu', 'far fa-fw fa-folder-open', 1),
(13, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-lock', 1),
(15, 18, 'My Profile', 'setting', 'fas fa-fw fa-users-cog', 1),
(17, 12, 'Data Pegawai', 'pegawai', 'fas fa-fw fa-user-tie', 1),
(18, 18, 'Edit Profile', 'setting/edit', 'fas fa-fw fa-user-edit', 1),
(19, 18, 'Change Password', 'setting/changepassword', 'fas fa-fw fa-user-lock', 1),
(20, 12, 'Data Keluarga Pegawai', 'keluarga', 'fas fa-fw fa-house-user', 1),
(21, 12, 'Data Posisi Jabatan', 'jabatan', 'fas fa-fw fa-briefcase', 1),
(22, 12, 'Data Pendidikan', 'pendidikan', 'fas fa-fw fa-graduation-cap', 1),
(23, 12, 'Data Pelatihan', 'pelatihan', 'fas fa-fw fa-chalkboard-teacher', 1),
(25, 12, 'Data Seminar', 'seminar', 'fas fa-fw fa-laptop', 1),
(30, 12, 'Data Pengalaman', 'pengalaman', 'fas fa-fw fa-laptop-house', 1),
(32, 7, 'Slip Gaji', 'gaji/slip', 'fas fa-fw fa-wallet', 1),
(33, 12, 'Data Libur', 'libur', 'fas fa-fw fa-calendar-week', 1),
(34, 6, 'Rekap Absen', 'absensi', 'fas fa-fw fa-user-check', 1),
(35, 12, 'Data Staf', 'staf/pegawai', 'fas fa-fw fa-users', 0),
(38, 1, 'Approval User', 'approval', 'fas fa-fw fa-user-check', 1),
(42, 23, 'Access Menu', 'access', 'fas fa-fw fa-users', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `access_jabatan`
--
ALTER TABLE `access_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  ADD PRIMARY KEY (`id_keluarga`);

--
-- Indexes for table `data_pelatihan`
--
ALTER TABLE `data_pelatihan`
  ADD PRIMARY KEY (`id_pelatihan`);

--
-- Indexes for table `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  ADD PRIMARY KEY (`id_pengalaman`);

--
-- Indexes for table `master_golongan`
--
ALTER TABLE `master_golongan`
  ADD PRIMARY KEY (`id_golongan`);

--
-- Indexes for table `master_hukuman`
--
ALTER TABLE `master_hukuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_jabatan`
--
ALTER TABLE `master_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `master_jurusan`
--
ALTER TABLE `master_jurusan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_kelompok_jabatan`
--
ALTER TABLE `master_kelompok_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_libur`
--
ALTER TABLE `master_libur`
  ADD PRIMARY KEY (`id_libur`);

--
-- Indexes for table `master_paket`
--
ALTER TABLE `master_paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indexes for table `master_parent_jabatan`
--
ALTER TABLE `master_parent_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_pendidikan`
--
ALTER TABLE `master_pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `master_seminar`
--
ALTER TABLE `master_seminar`
  ADD PRIMARY KEY (`id_seminar`);

--
-- Indexes for table `master_status_pegawai`
--
ALTER TABLE `master_status_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `master_university`
--
ALTER TABLE `master_university`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_jabatan`
--
ALTER TABLE `user_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `access_jabatan`
--
ALTER TABLE `access_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `data_keluarga`
--
ALTER TABLE `data_keluarga`
  MODIFY `id_keluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `data_pelatihan`
--
ALTER TABLE `data_pelatihan`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `data_pengalaman`
--
ALTER TABLE `data_pengalaman`
  MODIFY `id_pengalaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `master_golongan`
--
ALTER TABLE `master_golongan`
  MODIFY `id_golongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_hukuman`
--
ALTER TABLE `master_hukuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_jabatan`
--
ALTER TABLE `master_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `master_jurusan`
--
ALTER TABLE `master_jurusan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `master_kelompok_jabatan`
--
ALTER TABLE `master_kelompok_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `master_libur`
--
ALTER TABLE `master_libur`
  MODIFY `id_libur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master_paket`
--
ALTER TABLE `master_paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_parent_jabatan`
--
ALTER TABLE `master_parent_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `master_pendidikan`
--
ALTER TABLE `master_pendidikan`
  MODIFY `id_pendidikan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `master_seminar`
--
ALTER TABLE `master_seminar`
  MODIFY `id_seminar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `master_status_pegawai`
--
ALTER TABLE `master_status_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `master_university`
--
ALTER TABLE `master_university`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `user_jabatan`
--
ALTER TABLE `user_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
