-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Jan 2018 pada 09.23
-- Versi server: 10.1.29-MariaDB
-- Versi PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id4115751_digital_touch_point`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `upload_dtp`
--

CREATE TABLE `upload_dtp` (
  `ID_UPLOAD` int(11) NOT NULL,
  `TGL_UPLOAD` date NOT NULL,
  `JUDUL_UPLOAD` text COLLATE utf8_unicode_ci NOT NULL,
  `JENIS_FILE_UPLOAD` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `JENIS_LAB_UPLOAD` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `DESKRIPSI_UPLOAD` text COLLATE utf8_unicode_ci NOT NULL,
  `NAMA_FILE_UPLOAD` text COLLATE utf8_unicode_ci NOT NULL,
  `URL` varchar(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `upload_dtp`
--

INSERT INTO `upload_dtp` (`ID_UPLOAD`, `TGL_UPLOAD`, `JUDUL_UPLOAD`, `JENIS_FILE_UPLOAD`, `JENIS_LAB_UPLOAD`, `DESKRIPSI_UPLOAD`, `NAMA_FILE_UPLOAD`, `URL`) VALUES
(1, '2017-12-28', 'Customer Experience', 'Kajian', 'IXC', 'Kajian Customer Experience IndieHome Telkom Reg III Periode Kajian III Thn 2017', 'ANALISIS CUSTOMER EXPERIENCE DENGAN IMPORTANCE PERFORMANCE ANALYSIS.pdf', ''),
(2, '2017-12-29', 'Perbandingan Perangkat Wifi USB Adaper-2', 'Kajian', 'IXC', 'Tugas Kajian Mahasiswa KP Polban July 2017', 'perbandingan perangkat Wifi USB Adapter-2.pdf', ''),
(3, '2017-12-29', 'STANDAR TRANSAKSI DIGITAL BERBASIS QR CODE', 'Dokumen Standar', 'SOB', 'Standar penggunaan QR Code, terutama untuk layanan yang berbasis cloud', 'STD D-005-2017-Standar_Sistem_QRCode_Payment.pdf', ''),
(4, '2018-01-03', 'HASIL RISET CX TW 3 INDIEHOME TELKOM REG III', 'Kajian', 'IXC', 'LAPORAN HASIL RISET KAJIAN TW III LAB IXC', 'LAPORAN SURVEY CX TELKOM III OKT-NOV 17.pdf', ''),
(5, '2018-01-08', 'Kajian Cloud Hypervisor sebagai Teknologi Dasar Cloud Infrastruktur', 'Kajian', 'CNP', '[Private] Kajian mengenai Cloud Hypervisor sebagai teknologi dasar infrastruktur cloud yang mencakup pendahuluan (cloud computing, virtualisasi & hypervisor), penentuan spesifikasi cloud infrastruktur yang tepat sesuai dengan jenis layanan yang dikembangkan, rekomendasi implementasi pada penggunaan teknologi virtualisasi, hypervisor, dan teknologi container.', '', ''),
(6, '2018-01-08', 'Kajian Arsitektur NFVI TELKOM', 'Kajian', 'CNP', '[Private] Kajian mengenai arsitektur NFV Infrastructure untuk Telkom yang mencakup 2 (dua) konteks besar, yaitu riset global dan riset internal/operasional. Riset global mencakup study standar, study solusi mitra dan benchmark operator. Sedangkan riset internal merupakan analisis kondisi eksisting dan infrastruktur node platform dan data center Telkom. Kajian ini juga menyajikan rekomendasi terkait implementasi dan topologi model.', '', ''),
(7, '2018-01-08', 'Kajian Telco CLoud & IT Cloud', 'Kajian', 'CNP', '[Private] Kajian terkait konsep Telco CLoud & IT Cloud yang mencakup pengenalan (IT & Telco Cloud dan Infrastruktur), tinjauan best practice implementasi & solusi mitra, tinjauan kondisi internal telkom, dan analisis pemodelan Telkom Cloud.', '', ''),
(8, '2018-01-08', 'Riset Private & Public Cloud Telkom', 'Kajian', 'CNP', '[Private] Riset tentang model deployment cloud (private, public & hybrid) untuk Telkom yang mencakup tentang pengenalan prinsip dasar (standarisasi & kategorisasi teknologi cloud), tinjauan best practice implementasi, tinjauan kondisi internal Telkom, serta analisis dan pemodelan model deployment untuk Telkom.', '', ''),
(9, '2018-01-08', 'Kajian Future Cloud untuk Telco & IT Cloud di Private & Public Cloud', 'Kajian', 'CNP', '[Private] Kajian Future Cloud yang mencakup tentang pendahuluan (cloud computing), tinjauan implementasi cloud, trend teknologi cloud computing global, serta tinjauan implementasi di Telkom. Kajian ini merupakan kelanjutan dan merujuk pada kajian-kajian tentang cloud yang telah dilakukan sebelumnya antara lain yaitu Kajian Cloud Hypervosir, Telco & IT Cloud, dan Private & Public Cloud', '', ''),
(10, '2018-01-11', 'Network Performance Monitoring Tools Assessment for IP & Core Network', 'Kajian', 'SOB', 'Assessment dilakukan terhadap IT Tools yg digunakan pada operasional IP & Core Network untuk dapat dilakukan penyederhanaan.', 'KJN M-038-2017Network Performance Monitoring Tools Assessment.pdf', ''),
(11, '2018-01-19', 'Secure Agile Software Development', 'Dokumen Standar', 'SOB', 'Standar sistem aplikasi yang dikembangkan untuk menjadi pedoman bagi pengembangan Software Agile', 'STD_E-003-2017_v1_20171018-1200.pdf', ''),
(12, '2018-01-19', 'SNMP Proxy', 'Kajian', 'SOB', '[Private] Telkom SNMP based Network Performance Monitoring Simplification Proposal', '', ''),
(13, '2018-01-11', 'Bandwidth on Demand', 'Prototype', 'CNP', 'Simple Portal Prototype for Internet \"Bandwidth on Demand\" Services', '', 'https://bod.telkomku.com/'),
(14, '2018-01-22', 'Kajian Click to Dial', 'Kajian', 'ISR', 'Kajian ini membahas trend perkembangan layanan click to dial untuk berbagai macam solusi bisnis, dimana hasil kajian menunjukan bahwa teknologi WebRTC akan menjadi enabler untuk solusi komunikasi click to dial, serta teknologi WebRTC menawarkan komunikasi berbasis video dan voice secara murah dan efisien. ', 'KJN I-088-2017_Kajian Click to Dial_Final.pdf', ''),
(15, '2018-01-22', 'Konsep Pengelolaan IDEX', 'Kajian', 'IXC', 'Sebuah proposal untuk membangun Living Lab Digital Connectivity yang terdiri dari 4 (empat) sub-element Living Lab yang dapat memberikan WOW experience layanan Digital Connectivity kepada para stakeholders', 'Konsep Pengelolaan IDEX.pdf', ''),
(16, '2018-01-22', 'Kajian Penyelenggara Multiplex TV Digital', 'Kajian', 'FMC', '[Private] Kajian teknis dan bisnis penyelenggaraan infrastruktur multiplexer Televisi Digital apabila Telkom ditunjuk Pemerintah RI sebagai salah satu penyelenggara di Indonesia. Dengan posisi Telkom bukan sebagai lembaga penyiaran, keuntungan secara kompetitif sebagai operator menara, sebagai provider jaringan pita lebar dan bisnis televisi berbayar dianalisis. Besaran investasi dan potensi strategis tv digital ke depan juga menjadi pertimbangan dalam memutuskan masuk ke bisnis ini.', '', ''),
(17, '2018-01-23', 'Telkom oneM2M Internet of Things Standard Version 1.0', 'Dokumen Standar', 'ISR', '[Private] Standar global oneM2M yang digunakan untuk pengembangan Platform Horizontal Internet of Things (IoT)', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pic`
--

CREATE TABLE `user_pic` (
  `id_pic` int(11) NOT NULL,
  `nama_pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lab_pic` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `no_tel_pic` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user_pic`
--

INSERT INTO `user_pic` (`id_pic`, `nama_pic`, `lab_pic`, `no_tel_pic`) VALUES
(1, 'Fidar Adjie Laksono (Manager of BCN)', 'BCN', '08122138272'),
(2, 'I Gede Astawa (Manager of BAN)', 'BAN', '082129974691'),
(3, 'David Gunawan (Manager of CNP)', 'CNP', '081312135693'),
(4, 'Mochammad Sovan (Manager of SOB)', 'SOB', '082260000286'),
(5, 'Sri Ponco Kisworo (Manager of ISR)', 'ISR', '085220681676'),
(6, 'Hazim Ahmadi (Manager of FMC)', 'FMC', '08122355175');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `upload_dtp`
--
ALTER TABLE `upload_dtp`
  ADD PRIMARY KEY (`ID_UPLOAD`);

--
-- Indeks untuk tabel `user_pic`
--
ALTER TABLE `user_pic`
  ADD PRIMARY KEY (`id_pic`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `upload_dtp`
--
ALTER TABLE `upload_dtp`
  MODIFY `ID_UPLOAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `user_pic`
--
ALTER TABLE `user_pic`
  MODIFY `id_pic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
