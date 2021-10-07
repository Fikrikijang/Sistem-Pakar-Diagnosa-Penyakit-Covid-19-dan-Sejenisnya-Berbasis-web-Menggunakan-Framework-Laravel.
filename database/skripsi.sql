-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2021 pada 16.03
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aturan`
--

CREATE TABLE `aturan` (
  `penyakit_id` int(10) UNSIGNED NOT NULL,
  `gejala_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `aturan`
--

INSERT INTO `aturan` (`penyakit_id`, `gejala_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 15),
(2, 1),
(2, 2),
(2, 4),
(2, 13),
(2, 15),
(3, 1),
(3, 2),
(3, 5),
(3, 6),
(3, 7),
(3, 12),
(3, 13),
(3, 14),
(4, 1),
(4, 2),
(4, 4),
(4, 5),
(4, 7),
(4, 8),
(4, 9),
(4, 10),
(4, 11),
(4, 12),
(5, 1),
(5, 2),
(5, 5),
(5, 8),
(5, 12),
(5, 15),
(5, 16),
(6, 1),
(6, 2),
(6, 5),
(6, 6),
(6, 7),
(6, 9),
(6, 11),
(6, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `category`
--

INSERT INTO `category` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'Penyakit', 'penyakit', '2021-06-29 03:28:27', '2021-06-29 03:28:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `diagnosa`
--

CREATE TABLE `diagnosa` (
  `id` int(10) UNSIGNED NOT NULL,
  `pasien_id` int(10) UNSIGNED NOT NULL,
  `penyakit_id` int(10) UNSIGNED NOT NULL,
  `persentase` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `diagnosa`
--

INSERT INTO `diagnosa` (`id`, `pasien_id`, `penyakit_id`, `persentase`) VALUES
(1, 1, 1, 23),
(2, 1, 2, 23),
(3, 1, 3, 15),
(4, 1, 4, 12),
(5, 1, 5, 13),
(6, 1, 6, 15),
(7, 2, 1, 18),
(8, 2, 2, 24),
(9, 2, 3, 10),
(10, 2, 4, 20),
(11, 2, 5, 12),
(12, 2, 6, 16),
(13, 3, 1, 26),
(14, 3, 2, 21),
(15, 3, 3, 16),
(16, 3, 4, 10),
(17, 3, 5, 15),
(18, 3, 6, 13),
(19, 4, 1, 22),
(20, 4, 2, 22),
(21, 4, 3, 16),
(22, 4, 4, 11),
(23, 4, 5, 15),
(24, 4, 6, 14),
(25, 5, 1, 22),
(26, 5, 2, 18),
(27, 5, 3, 14),
(28, 5, 4, 13),
(29, 5, 5, 19),
(30, 5, 6, 14),
(31, 6, 1, 21),
(32, 6, 2, 18),
(33, 6, 3, 15),
(34, 6, 4, 12),
(35, 6, 5, 21),
(36, 6, 6, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `gejala`
--

CREATE TABLE `gejala` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `gejala`
--

INSERT INTO `gejala` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'demam', NULL, NULL),
(2, 'batuk', NULL, NULL),
(3, 'hilangnya indera perasa atau penciuman', NULL, NULL),
(4, 'sakit kepala', NULL, NULL),
(5, 'kesulitan bernapas atau sesak napas', NULL, NULL),
(6, 'nyeri dada atau rasa tertekan pada dada', NULL, NULL),
(7, 'tubuh mudah lelah', NULL, NULL),
(8, 'nyeri otot', NULL, NULL),
(9, 'muntah', NULL, NULL),
(10, 'mual', NULL, NULL),
(11, 'diare', NULL, NULL),
(12, 'menggigil', NULL, NULL),
(13, 'hidung tersumbat', NULL, '2021-07-09 02:30:40'),
(14, 'batuk mengeluarkan darah.', NULL, NULL),
(15, 'flu/pilek', NULL, NULL),
(16, 'sakit tenggorokan', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_01_195049_create_gejala_table', 1),
(4, '2017_07_01_195148_create_penyakit_table', 1),
(5, '2017_07_02_031810_create_gejala_penyakit_table', 1),
(6, '2017_07_02_062333_create_pasien_table', 1),
(7, '2017_07_02_085613_create_tmp_diagnosa_table', 1),
(8, '2017_07_09_081816_create_diagnosa_table', 1),
(9, '2017_07_09_111229_create_tmp_gejala_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pasien`
--

CREATE TABLE `pasien` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lokasi` text COLLATE utf8_unicode_ci NOT NULL,
  `telp` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `pasien`
--

INSERT INTO `pasien` (`id`, `nama`, `lokasi`, `telp`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Adrian Pamungkas', 'Jl. Kemanggisan Rt.09 Rw. 01, Kel. Kemanggisan Utara, Jakarta Barat, DKI Jakarta.', '08809546556', 'adrian@gmail.com', '2021-06-29 01:35:12', '2021-06-29 01:35:12'),
(2, 'Anggi Amilia Pratiwi', 'Jl. Sasak II No.70 Rt.003/Rw.02, Kel. Kelapa Dua, Kec. Kebon Jeruk.', '0978677757575', 'admin@gmail.com', '2021-07-02 23:27:56', '2021-07-02 23:27:56'),
(3, 'Dio Rizki', 'Pandeglang, Banten.', '08809546556', 'dio@gmail.com', '2021-07-08 22:52:36', '2021-07-08 22:52:36'),
(4, 'Bayu Faturahman', 'Grogol, Jakarta Barat.', '08967556656', 'bayu@gmail.com', '2021-07-10 19:46:20', '2021-07-10 19:46:20'),
(5, 'Sasti', 'Slipi, Jakarta Barat', '08809546556', 'sasti@gmail.com', '2021-07-25 18:29:21', '2021-07-25 18:29:21'),
(6, 'Muhammad Afi', 'Kebon Jeruk, Jakarta Barat.', '085811112222', 'muhammad@gmail.com', '2021-07-25 18:32:42', '2021-07-25 18:32:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyakit`
--

CREATE TABLE `penyakit` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `definisi` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `penyebab` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `penyakit`
--

INSERT INTO `penyakit` (`id`, `nama`, `definisi`, `penyebab`, `created_at`, `updated_at`) VALUES
(1, 'coronavirus (covid-19)', 'Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2) adalah virus yang menyerang sistem pernapasan. Penyakit karena infeksi virus ini disebut COVID-19. Virus Corona bisa menyebabkan gangguan ringan pada sistem pernapasan, infeksi paru-paru yang berat, hingga kematian.', 'Penyakit yang disebabkan oleh Virus Corona atau severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2)', '2021-06-29 01:00:58', '2021-06-29 01:00:58'),
(2, 'Influenza', 'Flu atau influenza adalah infeksi virus yang menyerang hidung, tenggorokan, dan paru-paru. Penderita flu akan mengalami demam, sakit kepala, pilek, hidung tersumbat, serta batuk.', 'Penyakit yang disebabkan oleh Infeksi virus', '2021-06-29 01:06:13', '2021-07-02 22:50:14'),
(3, 'Tuberkulosis', 'TBC (Tuberkulosis) yang juga dikenal dengan TB adalah penyakit paru-paru akibat kuman Mycobacterium tuberculosis. TBC akan menimbulkan gejala berupa batuk yang berlangsung lama (lebih dari 3 minggu), biasanya berdahak, dan terkadang mengeluarkan darah.', 'Penyakit yang disebabkan oleh  infeksi bakteri Mycobacterium tuberculosis.', '2021-06-29 01:13:29', '2021-06-29 01:13:29'),
(4, 'SARS', 'Severe acute respiratory syndrome atau SARS adalah infeksi saluran pernapasan yang disebabkan oleh SARS-associated coronavirus (SARS-CoV). Gejala awalnya mirip dengan influenza, namun dapat memburuk dengan cepat.', 'Penyakit yang disebabkan oleh SARS-associated coronavirus (SARS-CoV)', '2021-06-29 01:15:56', '2021-06-29 01:15:56'),
(5, 'MERS', 'Penyakit Middle East Respiratory Syndrome Coronavirus (MERS CoV) adalah penyakit saluran pernapasan yang disebabkan oleh coronavirus. Penyakit ini menular dari unta ke manusia, serta dari manusia ke manusia.', 'Penyakit yang disebabkan oleh  infeksi  infeksi coronavirus bernama MERS-CoV.', '2021-06-29 01:19:48', '2021-06-29 01:19:48'),
(6, 'Pneumonia', 'Pneumonia adalah peradangan paru-paru yang disebabkan oleh infeksi. Pneumonia bisa menimbulkan gejala yang ringan hingga berat. Beberapa gejala yang umumnya dialami penderita pneumonia adalah batuk berdahak, demam, dan sesak napas.', 'Penyakit yang disebabkan oleh Infeksi peradangan paru-paru.', '2021-06-29 01:24:19', '2021-06-29 01:24:19');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `judul`, `category_id`, `content`, `gambar`, `created_at`, `updated_at`, `slug`, `deleted_at`, `users_id`) VALUES
(1, 'Belajar HTML dari dasar', 2, 'uw0i0099r90eur90ue9', 'uploads/posts/1624964530Aufar.jpg', '2021-06-29 04:02:10', '2021-06-29 04:07:44', 'belajar-html-dari-dasar', '2021-06-29 04:07:44', 3),
(2, '10 Cara Indonesia Tangguh Melawan COVID-19', 2, 'Wabah COVID19 kembali memuncak. Naiknya mobilitas masyarakat, mengendornya prosedur dan ketaatan akan protokol kesehatan di semua lini, dan masuknya varian Alfa dan Delta yang lebih cepat penyebarannya menyebabkan kasus positif harian terus meninggi.\r\n\r\nMari pertimbangkan melakukan hal-hal berikut agar apa yg terjadi di India tidak terjadi di Indonesia kita tercinta:\r\n\r\n1. Perusahaan, perkantoran, pabrik agar memaksimalkan WFH di kala kasus harian masih naik terus. Jika sebagian tetap harus WFO, perketat prokes khususnya terkait (upgrade) masker, (memaksimalkan) ventilasi dan (pelarangan) makan bersama,. Nyawa karyawan, minimal kesehatan jangka panjang mereka, ada di tangan Anda para manajer dan direktur. Mari lindungi aset paling berharga bisnis Anda dari covid dan long covid.\r\n\r\n2. Batalkan rencana pembelajaran tatap muka (PTM) secara nasional, sampai wabah bisa dianggap terkendali. Kalaupun kebijakan PTM tidak dibatalkan, jangan kirim anak Anda untuk turut serta kecuali Anda yakin prokes bisa ditegakkan dan mitigasi sudah disiapkan jika ada kasus positif di lingkungan sekolah. Dan tentunya, Anda harus siap dengan segala konsekuensi pilihan Anda. Covid pada anak juga berbahaya dan bisa menyebabkan long covid walaupun OTG dan telah dinyatakan ‘sembuh’.\r\n\r\n3. Segera buka vaksinasi seluas-luasnya dan semudah-mudahnya untuk usia 18 tahun ke atas. Prioritaskan dosis pertama untuk sebanyak-banyaknya orang, menggunakan vaksin AstraZeneca yg terbukti 70% lebih efektif mencegah rawat inap di RS. Hapuskan syarat surat domisili, cukup KTP daerah manapun. Segeralah vaksin jika Anda sudah mendapatkan kesempatan, apapun jenis vaksinnya. Ini akan membantu mencegah fasyankes kolaps ketika jumlah kasus aktif terus meninggi.\r\n\r\n4. Sebisa mungkin di rumah saja, lakukan aktivitas sehari-hari seperti belanja secara/via daring. Lalu perketat prokes di rumah dengan memaksimalkan ventilasi udara ruangan, memakai masker jika seruangan dengan anggota keluarga yg harus rutin aktivitas di luar rumah, dan menghindari makan bersama anggota keluarga tersebut. Jika ada yang mengalami gejala batuk, demam, pilek, nyeri tenggorok atau sesak nafas, maka wajib pakai masker walaupun sedang di rumah dan hindari kontak fisik dengan anggota keluarga lainnya.\r\n\r\n5. Kegiatan apapun yg dilakukan bersama lebih dari 3 orang yg tidak tinggal serumah, usahakan dilakukan di luar ruangan atau ruang yang ventilasinya betul-betul maksimal (misal, dinding dua sisi setidaknya terbuka). Kalau harus di dalam ruangan, usahakan semua jendela dibuka, atau sistem pendingin ruangan disetel memaksimalkan sirkulasi udara luar. Tentunya prokes lain seperti masker dan jaga jarak tetap ditegakkan.\r\n\r\n6. Upgrade masker Anda. Hindari hanya memakai masker kain. Pakailah minimal masker bedah didobel masker kain. Usahakan menggunakan masker KN95 atau KF94, yang harga per maskernya sudah cukup murah. Pakai masker Anda dengan benar menutup hidung dan mulut, dengan tepian masker menempel rapat ke wajah. Apapun varian virusnya, mencegah droplet yg melayang di udara masuk ke tubuh Anda adalah cara terbaik melawan covid.\r\n\r\n7. Kalau Anda harus makan di luar rumah, hindari makan di bagian indoor restoran. Ini situasi yang sangat beresiko terjadi penularan, seandainya salah satu pelanggan/karyawan di situ positif covid walau OTG. Cari tempat duduk outdoor atau minimal yg semi-terbuka / ventilasinya bagus. Pertimbangkan makanan dibungkus untuk dimakan di kendaraan, taman atau lokasi lain yg lebih sepi, terbuka dan/atau aman.\r\n\r\n8. Maksimalkan jumlah armada angkutan umum, batasi kapasitas, buka jendela jika memungkinkan, larang penggunaan masker kain (saja) dalam kendaraan. Minimal masker bedah didobel masker kain, atau masker KN95 / KF94.\r\n\r\n9. Jangan hindari prosedur tes, pelacakan, isolasi dan perawatan. Nakes ingin menyelamatkan masyarakat, bukan ingin mengcovidkan. Anda susah dan lelah, mereka lebih-lebih lagi karena juga harus mempertaruhkan kesehatan dan nyawa dalam mengurus masyarakat yg terkena covid. Hargailah, patuhilah.\r\n\r\n10. Selalu ingat bahwa kalau Anda tertular covid, mungkin hanya OTG atau gejala ringan saja lalu sembuh sempurna. Tapi lansia, orang dewasa maupun anak yang mungkin Anda tulari, bisa sakit berkepanjangan bahkan meninggal. Kalau belum siap dengan konsekuensi dunia akhirat mengabaikan prokes, maka selalu jagalah dan sempurnakan prokes Anda.\r\n\r\nMari bersama cegah makin banyaknya kluster perkantoran, keluarga dan komunitas. Setiap kita turut bertanggung jawab dan bisa berperan dalam pengendalian wabah dan menjaga keselamatan sesama.', 'uploads/posts/1624965722POSTERCORONA2-724x1024.jpg', '2021-06-29 04:22:02', '2021-06-29 04:22:02', '10-cara-indonesia-tangguh-melawan-covid-19', NULL, 3),
(3, 'Infrastruktur Apa yang Perlu Disiapkan Sekolah New Normal?', 2, 'Di satu titik, sekolah akan tatap muka lagi. Berapa lama lagi, kita belum tahu. Tapi sekolah perlu menyiapkan infrastruktur new normal mulai sekarang agar ketika nanti sekolah dibuka, semua pihak sudah mengerti apa yang harus dilakukan.\r\n\r\nArtikel ini adalah satu dari serangkaian tulisan untuk membantu sekolah bersiap-siap (lihat “Artikel Terkait” di bagian bawah.\r\n\r\nBerikut 10 fasilitas fisik yang harus disiapkan dari sekarang:\r\n\r\nGerbang sekolah jadi area screening\r\nDi gerbang sekolah, pastikan tiap anak dan pengantar memakai masker dengan benar. Cek temperatur murid, bila di atas 37,3 cek ulang beberapa menit kemudian. Bila masih di atas 37,3, murid tersebut harus pulang. Bila perlu dijemput, murid menunggu di ruang isolasi sementara sampai dijemput (lihat poin 6). Hal ini harus dilakukan untuk menghindari murid yang kurang sehat menulari orang lain.\r\n\r\nAnak yang lolos cek temperatur langsung cuci tangan dan masuk kelas, tidak berkumpul atau ngobrol dulu dengan anak kelas lain. \r\n\r\nBuat lajur di tangga dan koridor\r\nDi tiap koridor dan tangga, perlu dibedakan jalur naik dan turun, masuk dan keluar. Perlu ada orang yang mengawasi tiap koridor dan tangga agar murid tidak berkerumun dan berinteraksi dengan murid kelas lain. Bangku panjang untuk duduk di pinggir lapangan atau koridor juga perlu ditandai agar yang duduk tetap menjaga jarak.\r\n\r\nPerbaiki jarak dan ventilasi di tiap ruangan\r\nDi tiap kelas dan ruang guru, jarak meja direnggangkan sehingga minimum 2 meter\r\nAnak selalu duduk di tempat yang sama, wali kelas punya catatan tempat duduknya\r\nBuka semua jendela dan pintu, lakukan rehat di luar kelas antar jam pelajaran agar mendapat udara segar dan ada pergantian udara dalam kelas. \r\nBila ada kursi sisa, simpan/tumpuk supaya tidak diduduki\r\nTetap wajib masker, tidak kontak fisik, tidak saling meminjam dalam ruangan\r\nPerbanyak tempat cuci tangan\r\nDengan hitungan bahwa cuci tangan minimum 20 detik, jam istirahat akan habis hanya untuk antri cuci tangan. Karenanya tempat cuci tangan harus diperbanyak dan tersambung dengan sumber air sehingga tong air tidak perlu diisi ulang secara manual.\r\n\r\nBila menambah tempat cuci tangan tidak memungkinkan, sediakan botol sanitizer di tiap kelas dan koridor.\r\n\r\nDi kantin harus jaga jarak dan tidak ngobrol ketika antri dan duduk\r\nKantin adalah tempat dimana murid dan guru perlu membuka masker untuk makan/minum. Karenanya, protokol di kantin harus diperketat untuk mencegah air liur, dan ingus menyebarkan penyakit. Caranya:\r\n\r\nWajib cuci tangan sebelum dan sesudah makan\r\nAtur jam istirahat agar kelompok umur yang sama tidak istirahat bersama, karena murid cenderung berinteraksi dengan kelompok umur yang sama. Kelas 1 dan kelas 6 kecil kemungkinannya berinteraksi, tapi kelas 3A dan 3B kemungkinan saling kenalnya besar.\r\nAtur jarak duduk minimum 2 meter. Bila tidak memungkinkan, pasang pembatas\r\nSetelah selesai pakai, anak melap meja dengan lap disinfektan\r\nPerlu ada pengawas di kantin untuk memastikan anak patuh pada aturan jaga jarak, cuci tangan, dan tidak saling ngobrol ketika tidak bermasker\r\nRuang isolasi sementara yang terpisah dari UKS\r\nKhususkan ruang Unit Kesehatan Sekolah (UKS) untuk cedera seperti luka atau keseleo. Sementara anak yang bergejala sakit (demam, batuk, pilek, ruam kulit, sesak napas) ditempatkan di Ruang Isolasi Sementara yang berlokasi di dekat gerbang sekolah (lihat poin 1), lalu orang tua dihubungi untuk segera menjemput. Selama di Ruang Isolasi Sementara, anak tidak boleh melepas masker.\r\n\r\nDi ruang ibadah, atur jarak, durasi dan ventilasi\r\nBila ada ruang ibadah, tandai area yang boleh digunakan untuk duduk atau sholat, dengan jarak 2 meter. Bagi yang Muslim, sholat menggunakan sajadah sendiri. Ibadah dibuat ringkas, tidak menyanyi bersama. Dan sama seperti kelas, pastikan ventilasi di ruang ibadah baik.\r\n\r\nAtur protokol kedatangan\r\nPengantar dan anaknya wajib mengenakan masker dengan benar. Ingatkan yang tidak pakai masker bahwa anaknya tidak bisa masuk sekolah bila pengantar dan anaknya tidak mau menggunakan masker dengan benar.\r\n\r\nTiap anak perlu membawa 2 masker cadangan yang dinamai untuk disimpan di kelas sehingga bila maskernya kotor atau rusak, ada gantinya.\r\n\r\nPengantar harus jaga jarak ketika antri dan menunggu anaknya lolos cek temperatur. Setelah anaknya masuk, harus langsung pergi, tidak berkerumun di sekitar sekolah.\r\n\r\nAtur protokol penjemputan\r\nSemua penjemput wajib antri dengan menjaga jarak dan bermasker, menunggu di tempat yang disediakan sambil menunggu anaknya keluar. \r\n\r\nAgar tidak berkerumun di gerbang sekolah, anak dipulangkan secara bertahap. Misalnya: anak kelas 1 dibubarkan, lima menit kemudian kelas 2, lalu kelas 3, dst. \r\n\r\nPerlu diingat pula bahwa semua protokol ini perlu dijalankan, tidak bisa pilih satu-dua hal yang paling mudah dilakukan. Ini karena virus COVID-19 hanya perlu satu titik lemah untuk menulari di sekolah. Karena upaya yang dilakukan banyak, sekolah perlu didukung sejumlah relawan yang bisa terdiri dari orang tua murid, warga sekitar atau tenaga honorer, untuk menegakkan protokol fisik di sekolah.', 'uploads/posts/1624966291newnormalschool.jpg', '2021-06-29 04:31:31', '2021-06-29 04:31:31', 'infrastruktur-apa-yang-perlu-disiapkan-sekolah-new-normal', NULL, 3),
(4, 'Tips Menghadapi Karantina di Rumah', 2, 'Karantina membantu memperlambat penyebaran infeksi. Siapkan sebuah Perencanaan Karantina Rumah.\r\n\r\nRingkasan\r\nDokter akan mengatakan kapan masa karantina berakhir\r\nKarantina membantu memperlambat penyebaran infeksi\r\nSiapkan sebuah Perencanaan Karantina Rumah\r\nUsahakan melakukan kegiatan sehari-hari seperti biasa dan tetap berpikiran positif\r\nPergunakan waktu karantina untuk melakukan hal-hal yang selama ini tidak pernah sempat Anda lakukan.\r\nSiapkan Sebuah Perencanaan Karantina Rumah\r\nMengkarantina diri Anda di rumah berarti Anda tinggal di dalam rumah dan menghindari kontak dengan orang lain, saat Anda terekspos atau terinfeksi suatu penyakit tertentu hingga periode infeksi tersebut lewat atau hingga Anda tidak terekspos penyakit itu lagi. Karantina membantu memperlambat penyebaran penyakit.\r\n\r\nTips menghadapi masa karantina ini hanya lah panduan. Informasi detail mengenai penyakit infeksi terutama COVID-19 bisa Anda tanyakan kepada dokter Anda.\r\n\r\nAnda mungkin akan diminta untuk tinggal di rumah selama paling tidak tujuh hari setelah menunjukkan gejala atau setelah Anda terekspos orang yang terinfeksi. Dokter akan mengatakan kapan masa karantina berakhir.\r\n\r\nSegalanya akan menjadi lebih mudah apabila Anda mempersiapkan kemungkinan harus dilakukannya karantina.\r\n\r\nAntisipasi paling tidak untuk 7 -10 hari isolasi di rumah.\r\nUsahakan memiliki persediaan makanan yang tidak mudah rusak untuk dua minggu. Stok juga makanan seperti susu bubuk, susu UHT, dan makanan kering.\r\nSiapkan persediaan tisu sekali pakai, tisu antibakteria, dan sarung tangan lateks,\r\nPeriksa kotak P3K Anda, lengkapi dengan termometer dan obat parasetamol untuk penurun demam.\r\nPastikan Anda memiliki persediaan obat-obatan yang cukup untuk paling tidak dua minggu, baik itu yang dengan resep dokter maupun yang tidak dengan resep dokter. \r\nDiskusikan dengan teman atau kerabat yang tidak tinggal serumah dengan Anda mengenai kemungkinan saling membantu di saat salah satu anggota keluarga harus dikarantina. Sebagai contoh, setuju untuk mengantarkan bahan makanan atau persediaan bahan lain dan menaruhnya di depan rumah.\r\nSaat Keluarga Dikarantina di Rumah\r\nApabila salah seorang anggota keluarga terinfeksi dan keluarga harus dikarantina, maka:\r\n\r\nSeluruh anggota keluarga harus tinggal di rumah. Jangan menerima tamu. \r\nHanya satu orang dewasa yang merawat anggota keluarga yang sakit. Usahakan bukan anggota keluarga yang sedang hamil, karena wanita hamil sedang memiliki risiko tinggi terkena komplikasi dari infeksi. \r\nUsahakan memisahkan anggota keluarga yang sakit di dalam kamar khusus dan terpisah dari yang lain, serta harus selalu menutup pintu kamarnya. Apabila terpaksa harus sharing kamar dengan anggota keluarga yang tidak sakit, mereka harus berjarak paling tidak satu meter dan menggunakan masker.\r\nUsahakan agar anggota keluarga yang sakit menggunakan satu kamar mandi khusus, apabila rumah Anda memiliki lebih dari satu kamar mandi.\r\nSimpan peralatan pribadi anggota keluarga yang sakit terpisah dari yang lain. Contohnya, anggota keluarga yang sakit dan yang sehat jangan memakai handuk dan sikat gigi yang sama dan ,jangan memakai sendok dan garpu yang sama. Simpan sikat gigi anggota keluarga yang sakit terpisah dari sikat gigi yang lain. \r\nGunakan desinfektan untuk membersihkan permukaan yang dipegang oleh anggota keluarga yang sakit, seperti meja ataupun wastafel kamar mandi. \r\nPerhatikan terus perkembangan anggota keluarga yang sakit, perhatikan apabila ada tanda-tanda yang menunjukan kondisinya memburuk. Contohnya, masalah pernafasan, kebingungan, sesak nafas. Dalam hal ini mintalah pertolongan medis. \r\nGunakan masker untuk mengurangi risiko tertular. \r\nPastikan anggota keluarga yang sakit beristirahat cukup, minum air cukup banyak, dan mengasup makanan sehat.\r\nGunakan Masker\r\nMinta petunjuk dokter dalam hal penggunaan masker, tetapi secara umum berikut cara penggunaannya:\r\n\r\nGunakan masker saat menolong anggota keluarga yang sakit.\r\nPeriksa apakah masker pas dan sealnya baik. Masker harus menutupi hidung dan mulut, dan tidak ada gap antara masker dan wajah. \r\nPastikan anggota keluarga yang sakit memakai masker saat keluar dari kamar.\r\nBuang masker sekali pakai setelah satu kali pakai. \r\nCuci tangan Anda dengan sabun dan air setelah melepaskan masker dan sebelum menyentuh barang-barang lain.\r\nTetap Semangat Saat Karantina\r\nMasa karantina bisa sangat membosankan, terutama untuk anak-anak. Berikut tips untuk menjaga semangat tetap tinggi:\r\n\r\nCari informasi terkini tentang infeksi ini dari sumber terpercaya.\r\nDiskusikan isu tentang infeksi ini dalam keluarga, karena memiliki pengetahuan tentang suatu penyakit bisa mengurangi kekhawatiran. \r\nUsahakan melakukan kegiatan sehari-hari seperti biasa.\r\nTetap berpikiran positif.\r\nIngat kembali ketika Anda pernah berhasil melewati suatu masa sulit dan yakinkan diri Anda bahwa kali ini Anda pun akan berhasil melewatinya. Ingat, masa karantina ini tidak akan lama.\r\nTetap berkomunikasi dengan keluarga dan teman lewat telepon, video call, email, atau pun media sosial.\r\nOlahraga secara teratur. Olahraga bisa Anda lakukan melalui DVD, dansa, yoga, jalan di halaman belakang, atau pun menggunakan peralatan olahraga di rumah seperti stationary bike. Olahraga sudah terbukti bisa mengatasi stress dan depresi.\r\nBosan?\r\nBerada di area yang sangat terbatas di rumah di waktu yang agak lama bisa menimbulkan kebosanan. Bagaimana mengatasinya?\r\n\r\nDiskusikan dengan atasan Anda untuk bisa bekerja dari rumah.\r\nMeminta guru anak Anda/pihak sekolah untuk mempersiapkan dan mengirimkan tugas-tugas yang bisa dikerjakan di rumah, lembar kerja, dan PR dan mengirimkannya ke rumah melalui email atau pos.\r\nPertimbangan kebutuhan setiap anggota keluarga sebaik mungkin saat Anda merencanakan kegiatan. Ingat, Anda tidak perlu melakukan kegiatan secara bersama-sama terus menerus. Pastikan setiap anggota keluarga juga memiliki waktu untuk dirinya sendiri. \r\nRencanakan waktu ‘time out’ – waktu dimana satu anggota keluarga diberi waktu untuk terpisah dari anggota keluarga yang lain untuk sementara waktu. Contohnya, membagi keluarga menjadi dua kelompok, Ayah dengan satu anak bermain di garasi sementara Ibu dan anak yang lain menghabiskan waktu di ruang keluarga. Kemudian bertukar di hari berikutnya.\r\nJangan menggantungkan kegiatan keluarga Anda pada teknologi dan TV. Pergunakan waktu karantina untuk melakukan hal-hal yang selama ini tidak pernah sempat Anda lakukan.  Contohnya, bermain board games, menggambar, dan membaca.\r\nTerima kenyataan bahwa konflik dan perselisihan kemungkinan akan terjadi. Usahakan untuk menyelesaikan isu ini dengan cepat. Gangguan bisa terjadi pada anak-anak.\r\nBagaimana Mendapat Bantuan?\r\nDokter Anda – hubungi dokter Anda sejak awal outbreak terjadi. \r\nRumah Sakit / Klinik / Puskesmas terdekat.\r\nHal-hal Yang Perlu Diingat\r\nDokter akan mengatakan kapan masa karantina berakhir\r\nKarantina membantu memperlambat penyebaran infeksi\r\nSiapkan sebuah Perencanaan Karantina Rumah\r\nUsahakan melakukan kegiatan sehari-hari seperti biasa dan tetap berpikiran positif\r\nPergunakan waktu karantina untuk melakukan hal-hal yang selama ini tidak pernah sempat Anda lakukan.', 'uploads/posts/1624966618Sabtu-18-Apr-1024x1024.jpg', '2021-06-29 04:36:58', '2021-06-29 04:36:58', 'tips-menghadapi-karantina-di-rumah', NULL, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts_tags`
--

CREATE TABLE `posts_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` int(11) NOT NULL,
  `tags_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts_tags`
--

INSERT INTO `posts_tags` (`id`, `posts_id`, `tags_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 2, NULL, NULL),
(4, 4, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tags`
--

CREATE TABLE `tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(2, 'utama', 'utama', '2021-06-29 03:16:15', '2021-06-29 03:16:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_diagnosa`
--

CREATE TABLE `tmp_diagnosa` (
  `pasien_id` int(10) UNSIGNED DEFAULT NULL,
  `penyakit_id` int(10) UNSIGNED DEFAULT NULL,
  `gejala` int(10) UNSIGNED DEFAULT NULL,
  `gejala_terpenuhi` int(10) UNSIGNED DEFAULT NULL,
  `persen` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tmp_diagnosa`
--

INSERT INTO `tmp_diagnosa` (`pasien_id`, `penyakit_id`, `gejala`, `gejala_terpenuhi`, `persen`) VALUES
(1, 1, 7, 7, 100),
(1, 2, 5, 5, 100),
(1, 3, 8, 5, 63),
(1, 4, 10, 5, 50),
(1, 5, 7, 4, 57),
(1, 6, 8, 5, 63),
(2, 1, 7, 3, 43),
(2, 2, 5, 3, 60),
(2, 3, 8, 2, 25),
(2, 4, 10, 5, 50),
(2, 5, 7, 2, 29),
(2, 6, 8, 3, 38),
(3, 1, 7, 7, 100),
(3, 2, 5, 4, 80),
(3, 3, 8, 5, 63),
(3, 4, 10, 4, 40),
(3, 5, 7, 4, 57),
(3, 6, 8, 4, 50),
(4, 1, 7, 7, 100),
(4, 2, 5, 5, 100),
(4, 3, 8, 6, 75),
(4, 4, 10, 5, 50),
(4, 5, 7, 5, 71),
(4, 6, 8, 5, 63),
(5, 1, 7, 7, 100),
(5, 2, 5, 4, 80),
(5, 3, 8, 5, 63),
(5, 4, 10, 6, 60),
(5, 5, 7, 6, 86),
(5, 6, 8, 5, 63),
(6, 1, 7, 5, 71),
(6, 2, 5, 3, 60),
(6, 3, 8, 4, 50),
(6, 4, 10, 4, 40),
(6, 5, 7, 5, 71),
(6, 6, 8, 4, 50);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `pasien_id` int(10) UNSIGNED NOT NULL,
  `gejala_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data untuk tabel `tmp_gejala`
--

INSERT INTO `tmp_gejala` (`pasien_id`, `gejala_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 15),
(1, 17),
(2, 1),
(2, 2),
(2, 4),
(2, 9),
(2, 10),
(3, 1),
(3, 2),
(3, 3),
(3, 4),
(3, 5),
(3, 6),
(3, 14),
(3, 15),
(4, 1),
(4, 2),
(4, 3),
(4, 4),
(4, 5),
(4, 6),
(4, 12),
(4, 13),
(4, 15),
(5, 1),
(5, 2),
(5, 3),
(5, 4),
(5, 5),
(5, 6),
(5, 7),
(5, 8),
(5, 15),
(5, 16),
(6, 1),
(6, 2),
(6, 3),
(6, 5),
(6, 12),
(6, 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `tipe` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `foto`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `tipe`) VALUES
(1, 'Ade Fikriatul Ilmi', 'uploads/users/1624988000FB_IMG_15773352320849655.jpg', 'adhefikri98@gmail.com', NULL, '$2y$10$K06QQSFcjg9FMqd/OQF.N.4eV7CBH3X9wirpMCGrLYOgDY/VuUECq', '4Lpvoo787tdyZctxKNxxNkyleXdBt6VMo941MA1FeTyrjar162hHkZSM5V9O', '2021-06-29 08:25:40', '2021-06-29 10:33:20', 1),
(2, 'Anggi Amilia Pratiwi', 'uploads/users/default.jpg', 'anggipratiwi@gmail.com', NULL, '$2y$10$n0NdwiGQiJMWC8lKxju1DuIFjW9uNI6wEy9w5lcjtWAdE/tAhK1DC', NULL, '2021-06-29 09:33:51', '2021-06-29 09:33:51', 0),
(3, 'Prasasti Nazwa Safitri', 'uploads/users/default.jpg', 'sasti@gmail.com', NULL, '$2y$10$neOhbjaXFfVTZ.jP0KTC0uuWypCpw.k91rnPmJcXDw4F588V0jlzu', NULL, '2021-06-29 09:44:16', '2021-06-29 09:44:16', 0),
(4, 'Adrian Pamungkas', 'uploads/posts/1624985186ikhwan.jpg', 'adrian@gmail.com', NULL, '$2y$10$UXi7taoQdmAmUeHT8SVv3uwG20ZVH4qAxFe.M55Mz6333LvQdrQIK', '3hqJhvLThFmu2iRHOVOY1NWDzsk4xVKPEUdgLFMp13CPxJa4CkHMroUWM2rW', '2021-06-29 09:45:46', '2021-06-29 09:46:26', 0),
(5, 'Dio Rizki', 'uploads/users/default.jpg', 'dio@gmail.com', NULL, '$2y$10$RPpJCpNB9E9w28BD2jqn/uzsGhEl/0NqclmZrXDkfihJ3Yjv69Y9a', 'w87ZgZM9ZIctXBn4e6MHpUTIW3ZCWBSLTvtVDRwwK1Z7K3zrfj4HD0pNCiQy', '2021-07-09 09:14:05', '2021-07-09 09:14:05', 1),
(6, 'Administrator', 'uploads/users/default.jpg', 'admin@gmail.com', NULL, '$2y$10$1JYqvtS.SDbnnB3XBrpR.uzSb9/3YDZZ3zhf1Y9o17XX0YrBnmkIW', NULL, '2021-07-10 19:30:15', '2021-07-10 19:30:15', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aturan`
--
ALTER TABLE `aturan`
  ADD PRIMARY KEY (`penyakit_id`,`gejala_id`);

--
-- Indeks untuk tabel `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD PRIMARY KEY (`id`),
  ADD KEY `diagnosa_pasien_id_foreign` (`pasien_id`),
  ADD KEY `diagnosa_penyakit_id_foreign` (`penyakit_id`);

--
-- Indeks untuk tabel `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indeks untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts_tags`
--
ALTER TABLE `posts_tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tmp_diagnosa`
--
ALTER TABLE `tmp_diagnosa`
  ADD KEY `tmp_diagnosa_pasien_id_foreign` (`pasien_id`),
  ADD KEY `tmp_diagnosa_penyakit_id_foreign` (`penyakit_id`);

--
-- Indeks untuk tabel `tmp_gejala`
--
ALTER TABLE `tmp_gejala`
  ADD PRIMARY KEY (`pasien_id`,`gejala_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `gejala`
--
ALTER TABLE `gejala`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `penyakit`
--
ALTER TABLE `penyakit`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `posts_tags`
--
ALTER TABLE `posts_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `diagnosa`
--
ALTER TABLE `diagnosa`
  ADD CONSTRAINT `diagnosa_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `diagnosa_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tmp_diagnosa`
--
ALTER TABLE `tmp_diagnosa`
  ADD CONSTRAINT `tmp_diagnosa_pasien_id_foreign` FOREIGN KEY (`pasien_id`) REFERENCES `pasien` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tmp_diagnosa_penyakit_id_foreign` FOREIGN KEY (`penyakit_id`) REFERENCES `penyakit` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
