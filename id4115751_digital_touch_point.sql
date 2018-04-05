-- phpMyAdmin SQL Dump
-- version 4.7.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 31 Jan 2018 pada 10.14
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
(3, '2017-12-29', 'STANDAR TRANSAKSI DIGITAL BERBASIS QR CODE', 'Dokumen Standar', 'SOB', '[Private] Standar penggunaan QR Code, terutama untuk layanan yang berbasis cloud', '', ''),
(4, '2018-01-03', 'HASIL RISET CX TW 3 INDIEHOME TELKOM REG III', 'Kajian', 'IXC', 'LAPORAN HASIL RISET KAJIAN TW III LAB IXC', 'LAPORAN SURVEY CX TELKOM III OKT-NOV 17.pdf', ''),
(5, '2018-01-08', 'Kajian Cloud Hypervisor sebagai Teknologi Dasar Cloud Infrastruktur', 'Kajian', 'CNP', '[Private] Kajian mengenai Cloud Hypervisor sebagai teknologi dasar infrastruktur cloud yang mencakup pendahuluan (cloud computing, virtualisasi & hypervisor), penentuan spesifikasi cloud infrastruktur yang tepat sesuai dengan jenis layanan yang dikembangkan, rekomendasi implementasi pada penggunaan teknologi virtualisasi, hypervisor, dan teknologi container.', '', ''),
(6, '2018-01-08', 'Kajian Arsitektur NFVI TELKOM', 'Kajian', 'CNP', '[Private] Kajian mengenai arsitektur NFV Infrastructure untuk Telkom yang mencakup 2 (dua) konteks besar, yaitu riset global dan riset internal/operasional. Riset global mencakup study standar, study solusi mitra dan benchmark operator. Sedangkan riset internal merupakan analisis kondisi eksisting dan infrastruktur node platform dan data center Telkom. Kajian ini juga menyajikan rekomendasi terkait implementasi dan topologi model.', '', ''),
(7, '2018-01-08', 'Kajian Telco CLoud & IT Cloud', 'Kajian', 'CNP', '[Private] Kajian terkait konsep Telco CLoud & IT Cloud yang mencakup pengenalan (IT & Telco Cloud dan Infrastruktur), tinjauan best practice implementasi & solusi mitra, tinjauan kondisi internal telkom, dan analisis pemodelan Telkom Cloud.', '', ''),
(8, '2018-01-08', 'Riset Private & Public Cloud Telkom', 'Kajian', 'CNP', '[Private] Riset tentang model deployment cloud (private, public & hybrid) untuk Telkom yang mencakup tentang pengenalan prinsip dasar (standarisasi & kategorisasi teknologi cloud), tinjauan best practice implementasi, tinjauan kondisi internal Telkom, serta analisis dan pemodelan model deployment untuk Telkom.', '', ''),
(9, '2018-01-08', 'Kajian Future Cloud untuk Telco & IT Cloud di Private & Public Cloud', 'Kajian', 'CNP', '[Private] Kajian Future Cloud yang mencakup tentang pendahuluan (cloud computing), tinjauan implementasi cloud, trend teknologi cloud computing global, serta tinjauan implementasi di Telkom. Kajian ini merupakan kelanjutan dan merujuk pada kajian-kajian tentang cloud yang telah dilakukan sebelumnya antara lain yaitu Kajian Cloud Hypervosir, Telco & IT Cloud, dan Private & Public Cloud', '', ''),
(10, '2018-01-11', 'Network Performance Monitoring Tools Assessment for IP & Core Network', 'Kajian', 'SOB', '[Private] Assessment dilakukan terhadap IT Tools yg digunakan pada operasional IP & Core Network untuk dapat dilakukan penyederhanaan.', '', ''),
(11, '2018-01-19', 'Secure Agile Software Development', 'Dokumen Standar', 'SOB', '[Private] Standar sistem aplikasi yang dikembangkan untuk menjadi pedoman bagi pengembangan Software Agile ', '', ''),
(12, '2018-01-19', 'SNMP Proxy', 'Kajian', 'SOB', '[Private] Telkom SNMP based Network Performance Monitoring Simplification Proposal', '', ''),
(13, '2018-01-11', 'Bandwidth on Demand', 'Prototype', 'CNP', 'Simple Portal Prototype for Internet \"Bandwidth on Demand\" Services', '', 'https://bod.telkomku.com/'),
(14, '2018-01-22', 'Kajian Click to Dial', 'Kajian', 'ISR', 'Kajian ini membahas trend perkembangan layanan click to dial untuk berbagai macam solusi bisnis, dimana hasil kajian menunjukan bahwa teknologi WebRTC akan menjadi enabler untuk solusi komunikasi click to dial, serta teknologi WebRTC menawarkan komunikasi berbasis video dan voice secara murah dan efisien. ', 'KJN I-088-2017_Kajian Click to Dial_Final.pdf', ''),
(15, '2018-01-22', 'Konsep Pengelolaan IDEX', 'Kajian', 'IXC', 'Sebuah proposal untuk membangun Living Lab Digital Connectivity yang terdiri dari 4 (empat) sub-element Living Lab yang dapat memberikan WOW experience layanan Digital Connectivity kepada para stakeholders', 'Konsep Pengelolaan IDEX.pdf', ''),
(16, '2018-01-22', 'Kajian Penyelenggara Multiplex TV Digital', 'Kajian', 'FMC', '[Private] Kajian teknis dan bisnis penyelenggaraan infrastruktur multiplexer Televisi Digital apabila Telkom ditunjuk Pemerintah RI sebagai salah satu penyelenggara di Indonesia. Dengan posisi Telkom bukan sebagai lembaga penyiaran, keuntungan secara kompetitif sebagai operator menara, sebagai provider jaringan pita lebar dan bisnis televisi berbayar dianalisis. Besaran investasi dan potensi strategis tv digital ke depan juga menjadi pertimbangan dalam memutuskan masuk ke bisnis ini.', '', ''),
(17, '2018-01-23', 'Telkom oneM2M Internet of Things Standard Version 1.0', 'Dokumen Standar', 'ISR', '[Private] Standar global oneM2M yang digunakan untuk pengembangan Platform Horizontal Internet of Things (IoT)', '', ''),
(18, '2018-01-25', 'KJN F-036-2017 Kajian Design Infrastructure Akses Untuk Implementasi Gigaband Era', 'Kajian', 'BAN', '[Private] Saat ini kebutuhan bandwidth semakin meningkat, orde kebutuhannya sudah di tataran gigabit yang ingin dirasakan oleh pelanggan. Tidak salah kalau disebutkan dengan istilah memasuki ‘gigaband era’, karena kebutuhan ini harus bisa disolusikan oleh semua media disisi last mile baik itu wireline, wireless maupun jaringan mobile. Terkait kebutuhan akan bandwidth layanan yang terus meningkat, khususnya di area wireline agar tidak tertinggal dari perkembangan dunia wireless (WiFi) dan mobile (5G), diperlukan teknologi yang dapat men-deliver layanan dengan bandwidth yang besar dengan performansi yang reliable tentunya. Dengan mempertimbangkan platform existing XGPON yang sudah Telkom miliki di last mile access, implementasi gigaband era harus bisa mengoptimalkan platform existing ini sambil menyiapkan kemampuan lebihnya sesuai roadmap teknologi yang ada. Beberapa hal yang dapat disimpulkan dari penjelasan dalam dokumen kajian ini adalah sebagai berikut: 1. Bahwa roadmap penyiapan last mile access sudah mengakomodir untuk bisa melayani kebutuhan ‘gigaband era’ yaitu dengan upgrade capability jaringan FTTx dengan beberapa staging teknologi yaitu XGPON, XGSPON & NG-PON2. 2. Tahap awal implementasi gigaband era bisa dilakukan dengan menggabungkan GPON dan XGPON untuk bisa memberikan layanan ke pelanggan. Penggabungan dilakukan dengan tambahan WDM1r serta pembelian ONT XGPON. Pengaturan pelanggannya sebagai berikut: a. GPON untuk pelanggan Home dengan kebutuhan s/d 100M b. XGPON untuk pelanggan Home dan pelanggan Enterprise/Backhaul dengan layanan asimetris dengan kebutuhan 100M - 1G 3. Untuk kebutuhan pelanggan bisnis, enterprise dan backhaul yang membutuhkan layanan traﬁc data tinggi (100M - 1G) yang simetris bisa disolusikan dengan XGSPON. 4. Kedepannya apabila kebutuhan bandwidth pelanggan enterprise dan backhaul mobile broadband sampai dengan 10G bisa dilayani dengan NGPON2, sesuai dengan data kesiapan mitra akses solusi ini sudah siap di 2018. Beberapa hal yang dapat direkomendasikan dari penjelasan dalam dokumen kajian ini adalah sebagai berikut: 1. Untuk implementasi layanan gigabit bisa dilakukan dengan memanfaatkan platform existing GPON & XGPON yang dilakukan secara overlay/coexistence menggunakan WDM1r. 2. Harus segera disiapkan ‘standard implementation guideline’ agar implementasi GPON & XGPON bisa optimal dilakukan. 3. Untuk solusi XGSPON dan TWDM-PON perlu dilakukan trial lab terlebih dahulu untuk memastikan kompatibilitas terhadap infrastructure akses existing. \r\n', '', ''),
(19, '2018-01-25', 'PED F-023-2017 Guideline Implementasi Layanan 1G pada OLT Existing ', 'Dokumen Standar', 'BAN', '[Private] Alternatif Solusi Jaringan Akses Untuk Layanan Gigabit Akses (1)Review Kondisi eksisting Perangkat Akses : GPON: Downlink maksimum  2.5G & Uplink maksimum 1G ONT GPON retail bervariasi tergantung typenya ada yang support GE dan ada juga yang hanya support FE XGPON: Downlink maksimum  10G & Uplink maksimum 2,5G ONT XGPON belum ada di operasional, XGPON interface hanya digunakan untuk uplink MDU. (2)Beberapa kemungkinan solusi di node akses untuk memenuhi kebutuhan BW Ethernet 1G atau lebih: Memakai Modul P2P Ethernet 1G di OLT, tetapi boros dalam pemakaian ﬁber dan kerumitan integrasi ke perangkat customer. Koneksi dengan existing GPON dengan ONT yang mempunyai interface GE Koneksi dengan existing XGPON dengan pembelian ONT XGPON Menggunakan solusi Mini OLT dengan XGPON Capability ODN tetap menggunakan Existing dengan Tambahan WDM1r untuk menggabungkan existing GPON & XGPON pada link optic ODN yang sama. Penggunaan Modul baru COMBO yang bisa support GPON & XGPON. Kemungkinan solusi upgrade perangkat akses menjadi XGS-PON (single 10G) dan NGPON2 (multiple 10G) ', '', ''),
(20, '2018-01-26', 'Kajian IoT Connectivity LoRa', 'Kajian', 'FMC', '[Private] Diversitas Use Case IoT mempunyai tantangan tersendiri sehingga konektivitas IoT yang digunakan harus sesuai dengan kebutuhan dengan usecase. LoRa merupakan salah satu teknologi IoT connectivity yang cakupannya luas dan daya konsumsi baterai yang rendah. Beberapa hal yang perlu diperhatikan ketika ingin mengimplementasikan LoRa yaitu regulasi, kapasitas LoRa, daya konsumsi baterai untuk use case continue, dan juga roadmap teknologi.', '', ''),
(21, '2018-01-26', 'Kajian Ultra Mobile Broadband', 'Kajian', 'FMC', '[Private] Perkembangan data sangat cepat dan cara untuk mengatasinya yaitu dengan menambah spektrum frekuensi, menambah jumlah BTS, dan mengimplementasikan teknologi yang lebih efisien. Perkembangan teknologi ada dua yaitu konvergensi WiFi dengan LTE dan juga teknologi baru 5G. Varian konvergensi LTE dangan WiFi yaitu LTE-WiFI Aggregation (LWA), Licensed Assisted Access (LAA), dan MulteFire. Status perkembangan standar 5G menjadi 2 fase yaitu fase 1 yang fokus pada arsitektur dasar 5G akan release Q2 2018 dan fase 2 yang fokus pada enhancement 5G dan aplikasinya akan release pada 2020. ', '', ''),
(22, '2018-01-26', 'Kajian IoT Connectivity SRD for Smart Home/Building', 'Kajian', 'FMC', '[Private]  \r\n\r\nHighlight Kajian IoT Connectivity SRD for Smart Home/Building:\r\n1. Panduan Implementasi smart home:\r\n- Menggunakan gateway untuk mengontrol sensor/device.\r\n- Gateway menggunakan teknologi zigbee/z-wave untuk mengontrol sensor.\r\n- Menggunakan wifi untuk connectivity camera.\r\n- Menggunakan topologi star\r\n- Layanan berupa bundling/add on layanan connectivity\r\n\r\n2. Berdasarkan PM 28 dan 35 tahun 2015, maka penggunaan SRD IoT connectivity:\r\n- WiFi : 2.4 GHz\r\n- Bluetooth/BLE : 2.4 GHz\r\n- Zigbee : 2.4 GHz\r\n- Z-wave : 923-925 MHz\r\n\r\n3. Pengukuran cakupan layanan secara efektif zigbee mencapai 46 meter.\r\n\r\nRekomendasi implementasi SRD IoT Connectivity untuk Telkom Group sebaiknya:\r\n\r\n1. Untuk device IoT yang membutuhkan data rate besar (seperti camera, dsb) sebaiknya menggunakan wifi.\r\n2. Penggunaan gateway sebaiknya untuk sensor data rate rendah dan menggunakan baterai.\r\n3. Konektivitas gateway dengan sensor mandatori menggunakan zigbee (2.4 GHz) atau z-wave (923-925 MHz)', '', ''),
(23, '2018-01-26', 'Standard System IoT Connectivity LoRa', 'Dokumen Standar', 'FMC', '[Private] Standard System Implementasi IoT Connectivity untuk teknologi LoRa', '', ''),
(24, '2018-01-29', 'Kajian Soft Client Untuk Enterprise', 'Kajian', 'ISR', '[Private] Kajian ini membahas trend perkembangan softclient untuk solusi enterprises, hasil kajian menunjukan bahwa teknologi WebRTC akan menjadi enabler untuk solusi komunikasi softclient untuk enterprises, teknologi WebRTC menawarkan komunikasi berbasis video dan voice secara murah dan efisien.', '', ''),
(25, '2018-01-29', 'Mengkaji Teknis ‘Sharing Tools’ Berbasis WebRTC', 'Kajian', 'ISR', 'Kajian mengenai aplikasi website broadcast conference yang di design untuk memudahkan pengguna dalam melakukan broadcast conference berbasis website.', 'Kajian Sharing Tools WebRTC.pdf', ''),
(27, '2018-01-30', 'Kajian', 'Kajian', 'IXC', '[Private] Kajian', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_pic`
--

CREATE TABLE `user_pic` (
  `id_pic` int(11) NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `lab_pic` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `user_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `user_pic`
--

INSERT INTO `user_pic` (`id_pic`, `username`, `password`, `lab_pic`, `user_type`) VALUES
(1, 'lutfi', 'lutfi', 'IXC', 'User P.I.C');

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
  MODIFY `ID_UPLOAD` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `user_pic`
--
ALTER TABLE `user_pic`
  MODIFY `id_pic` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
