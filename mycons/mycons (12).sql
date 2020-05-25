-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Nov 2019 pada 02.24
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycons`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artis`
--

CREATE TABLE `artis` (
  `artis_id` varchar(45) NOT NULL,
  `nama_artis` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artis`
--

INSERT INTO `artis` (`artis_id`, `nama_artis`) VALUES
('a1', 'arie laso'),
('a10', 'jupe'),
('a2', 'afgan'),
('a3', 'agnes monica'),
('a4', 'anggun'),
('a5', 'rosa'),
('a6', 'raisa'),
('a7', 'judika'),
('a8', 'charlie puth'),
('a9', 'selena gomes');

-- --------------------------------------------------------

--
-- Struktur dari tabel `artis_produk`
--

CREATE TABLE `artis_produk` (
  `produk_id` varchar(45) NOT NULL,
  `artis_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `artis_produk`
--

INSERT INTO `artis_produk` (`produk_id`, `artis_id`) VALUES
('p1', 'a2'),
('p2', 'a2'),
('p3', 'a4'),
('p4', 'a6'),
('p5', 'a2'),
('p6', 'a1'),
('p7', 'a2'),
('p8', 'a3'),
('p9', 'a4'),
('p10', 'a6'),
('p11', 'a4'),
('p12', 'a5'),
('p13', 'a2'),
('p14', 'a1'),
('p15', 'a6'),
('p16', 'a3'),
('p17', 'a3'),
('p18', 'a4'),
('p19', 'a4'),
('p20', 'a7'),
('p21', 'a7'),
('p22', 'a8'),
('p23', 'a8'),
('p24', 'a9'),
('p25', 'a9'),
('p26', 'a10'),
('p27', 'a10'),
('p28', 'a2'),
('p29', 'a2'),
('p30', 'a2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `cart_id` varchar(45) NOT NULL,
  `user_id` varchar(45) NOT NULL,
  `harga_total` int(10) UNSIGNED DEFAULT NULL,
  `user_temp_id` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `harga_total`, `user_temp_id`) VALUES
('c1', 'u002', 100000, 't1'),
('c10', 'u003', 760000, 'jvcgalo987p09rq2tbspj97die'),
('c11', '', 240000, '3vquv64nbdpkfdin079gsovc33'),
('c12', 'u002', 12000, 'ilro7fskm4elcprs95a9ei8f1k'),
('c13', 'u002', 0, 'rhpl73tikv0foo8gk810t32mdp'),
('c14', '', 250000, '0kjftj91psute8pbpk8j2fcfqn'),
('c15', '', 230000, '2o3q2v7f125ehh3pkc49ol1msp'),
('c16', 'u003', 170000, 'va47q81c05vqtsb868qqcjb8on'),
('c17', 'u003', 0, 'tnsk9bpob7uqd2rot1ndrse13u'),
('c18', 'u003', 4640000, 'quahfap1h4cb3g95e4erbekedh'),
('c19', '', 30000, '523mreqdfvl9u29ei739hhj1mk'),
('c2', 'u001', 40000, ''),
('c20', '', 200000, 'vf9q5jrv54h1el01oe6e6f65p1'),
('c21', '', 20000, 'g1hp8tisjfh953ino4nhjiiie4'),
('c22', 'u003', 90000, 'fkk8gk27897ol719c9j3p2ubt2'),
('c23', '', 240000, 'l63omcn9dufoqkcmgqeh2qqhhl'),
('c24', '', 298650, 'mrhasqpvqsdh1l8pls6jrj3htf'),
('c25', '', 22000, 'bevan'),
('c26', '', 330000, 'he9lppsacs0532jh9dh8d3bolo'),
('c27', '', 44000, 'bevankevin0@gmail.com'),
('c28', '', 0, 'i4nqgih4fsljtsf3ldlopibg0u'),
('c29', 'u003', 132000, 'tcntfc00meupbc18n9mebvuqb9'),
('c3', 'u001', 120000, ''),
('c30', 'u003', 330000, 'k3rrtv7fga2pu1gn9p5bvrqn3p'),
('c31', 'u003', 55000, '001t2db8jb7a8c2ll9h1smqce0'),
('c32', 'u003', 0, '24ene6iqo0skongq9ju1v28ipg'),
('c33', '', 44000, 'isb.epic.group1@gmail.com'),
('c34', '', 0, '6s6gu1f0916mrgi7jd5oi4ud0j'),
('c35', 'u003', 0, '13f8ent3je2avh2pculv0t9jvq'),
('c36', '', 0, 'o1ssjdt1kvfgath3renmidov97'),
('c37', '', 0, 'timmnedq88qj3lsac00j3dnkkg'),
('c38', '', 0, 'lq6af7phh8f1r6sm150cq5bfcb'),
('c39', 'u003', 0, 'otpqdl4td6u2nii24h6d9jtkva'),
('c4', 'u004', 200000, ''),
('c40', 'u003', 0, 'q68tc48n48mpnqshptccbqrm3o'),
('c41', 'u003', 0, 'lvq23b7mito6t8kacfo3aon8sj'),
('c42', 'u003', 330000, 'vkslbdqtn4cptnrsbq9m32k6eu'),
('c43', 'u003', 0, 'm29h148f9r719mcudbd51t5rf7'),
('c44', '', 20000, '68tk6ijup1v7n159k3s9r9gov8'),
('c45', '', 165000, 'hk2c2noe08mgn2vsbe8pe8vuco'),
('c46', '', 44000, 'oint3rq9ie6b2jcgtd8rs9bfin'),
('c47', '', 230000, 'pl6374k8o1hc32bv2c4nvsjvut'),
('c48', '', 150000, '8kotb6rgmvg0vj5280e6l2oein'),
('c49', '', 418000, 's1685ms9pfofqslc63ua9q35nm'),
('c5', 'u003', 240000, 'ipath8ivnoko93d6hvrrua8s81'),
('c50', '', 264000, 'em28omq2js2k3bm782if69o4s6'),
('c51', '', 264000, 'mru1111n2gve95s0nolcdjjst0'),
('c52', '', 176000, 'Isb.epic.group2@gmail.com'),
('c53', '', 330000, 'epic.isbuc@gmail.com'),
('c54', '', 1650000, 'epic.isbuc@gmail.com'),
('c55', '', 22000, 'bevankevin0@gmail.com'),
('c56', '', 220000, 'epic.isbuc@gmail.com'),
('c57', '', 55000, 'bevankevin0@gmail.com'),
('c58', '', 660000, 'isb.epic.group7@gmail.com'),
('c59', '', 330000, 'epic.isbuc@gmail.com'),
('c6', '', 120000, '9agf56vaf0681brjp56sg2sloq'),
('c60', '', 66000, 'Isb.epic.group2@gmail.com'),
('c61', '', 264000, 'vgkjc9fpnru78mppnoicp9vi99'),
('c62', 'u003', 0, '426tj0s1b2umnpg70q3pj17eih'),
('c63', 'u005', 0, '6qvkuvjeg8g5m4et7q3puo7e13'),
('c64', '', 0, 'udff7ck52slch9f7knonjariej'),
('c65', 'u006', 0, 'd6kvcfrhl4baqoh9ujp6et2s23'),
('c66', '', 150000, 'pa2bjssncrpqps4l6ieggi5ahr'),
('c7', '', 150000, 'fcv1ffgm8u94udgi3dt46qjj4r'),
('c8', 'u003', 170000, 'cc23u0pcffp1usee306bbfo55j'),
('c9', '', 230000, 'c9fhhojkv95if784h14qbg5fp3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart_produk`
--

CREATE TABLE `cart_produk` (
  `cart_id` varchar(45) NOT NULL,
  `produk_id` varchar(45) NOT NULL,
  `jumlah` varchar(45) NOT NULL,
  `kursi_id` varchar(45) NOT NULL,
  `subtotal` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cart_produk`
--

INSERT INTO `cart_produk` (`cart_id`, `produk_id`, `jumlah`, `kursi_id`, `subtotal`) VALUES
('c1', 'p2', '2', 'k2', NULL),
('c2', 'p1', '2', 'k1', NULL),
('c3', 'p3', '1', 'k5', NULL),
('c4', 'p7', '1', 'k9', NULL),
('c1', 'p3', '3', 'k1', NULL),
('c5', 'p2', '1', 'k2', NULL),
('c5', 'p1', '1', 'k4', NULL),
('c5', 'p17', '2', 'k20', NULL),
('c6', 'p3', '1', 'k5', NULL),
('c7', 'p10', '1', 'k12', NULL),
('c8', 'p10', '1', 'k12', NULL),
('c8', 'p1', '1', 'k1', NULL),
('c9', 'p11', '1', 'k13', NULL),
('c10', 'p14', '5', 'k17', NULL),
('c10', 'p15', '1', 'k18', NULL),
('c10', 'p13', '1', 'k16', NULL),
('c10', 'p17', '1', 'k20', NULL),
('c10', 'p1', '1', 'k1', NULL),
('c11', 'p10', '1', 'k12', NULL),
('c11', 'p17', '1', 'k20', NULL),
('c12', 'p14', '1', 'k17', NULL),
('c12', 'p1', '1', 'k1', NULL),
('c14', 'p1', '1', 'k1', NULL),
('c14', 'p11', '1', 'k13', NULL),
('c15', 'p11', '1', 'k13', NULL),
('c16', 'p1', '1', 'k1', NULL),
('c16', 'p10', '1', 'k12', NULL),
('c18', 'p1', '3', 'k1', NULL),
('c18', 'p10', '9', 'k12', NULL),
('c19', 'p1', '1', 'k1', '20000'),
('c19', 'p1', '1', 'k4', '10000'),
('c23', 'p17', '0', 'k20', '0'),
('c23', 'p10', '0', 'k12', '0'),
('c23', 'p8', '2', 'k10', '240000'),
('c26', 'p10', '2', 'k12', '300000'),
('c27', 'p1', '2', 'k1', '40000'),
('c29', 'p8', '1', 'k10', '120000'),
('c30', 'p13', '1', 'k16', '300000'),
('c31', 'p5', '1', 'k7', '50000'),
('c33', 'p1', '2', 'k1', '40000'),
('c36', 'p10', '1', 'k12', NULL),
('c42', 'p14', '2', 'k17', '300000'),
('c44', 'p1', '1', 'k1', NULL),
('c45', 'p10', '1', 'k12', '150000'),
('c46', 'p1', '2', 'k1', '40000'),
('c47', 'p11', '1', 'k13', NULL),
('c48', 'p10', '1', 'k12', NULL),
('c49', 'p29', '2', 'k40', '380000'),
('c50', 'p3', '2', 'k5', '240000'),
('c51', 'p17', '2', 'k21', '240000'),
('c52', 'p20', '1', 'k26', '160000'),
('c53', 'p14', '2', 'k17', '300000'),
('c54', 'p17', '10', 'k22', '1500000'),
('c55', 'p1', '2', 'k4', '20000'),
('c56', 'p1', '20', 'k4', '200000'),
('c57', 'p2', '1', 'k2', '50000'),
('c58', 'p13', '2', 'k16', '600000'),
('c59', 'p10', '2', 'k12', '300000'),
('c60', 'p1', '3', 'k1', '60000'),
('c61', 'p21', '2', 'k28', '240000'),
('c66', 'p10', '1', 'k12', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `history`
--

CREATE TABLE `history` (
  `history_id` varchar(45) NOT NULL,
  `cart_id` varchar(45) NOT NULL,
  `status_id` varchar(45) DEFAULT NULL,
  `user_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis_pembayaran`
--

CREATE TABLE `jenis_pembayaran` (
  `jenis_pembayaran_id` varchar(45) NOT NULL,
  `nama_pembayaran` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jenis_pembayaran`
--

INSERT INTO `jenis_pembayaran` (`jenis_pembayaran_id`, `nama_pembayaran`) VALUES
('jp1', 'ovo'),
('jp2', 'dana'),
('jp3', 'bca'),
('jp4', 'mandiri'),
('jp5', 'visa'),
('jp6', 'mastercard'),
('jp7', 'amex');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` varchar(45) NOT NULL,
  `nama_kategori` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
('k1', 'musik'),
('k2', 'theatrical'),
('k3', 'orchestra'),
('k4', 'expo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `komisi`
--

CREATE TABLE `komisi` (
  `komisi_id` varchar(45) NOT NULL,
  `jumlah` int(10) UNSIGNED DEFAULT NULL,
  `pembayaran_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `komisi`
--

INSERT INTO `komisi` (`komisi_id`, `jumlah`, `pembayaran_id`) VALUES
('km1', 10000, 'pb1'),
('km2', 4000, 'pb2'),
('km3', 12000, 'pb3'),
('km4', 20000, 'pb4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kursi`
--

CREATE TABLE `kursi` (
  `kursi_id` varchar(45) NOT NULL,
  `kursi` varchar(45) NOT NULL,
  `harga` int(10) UNSIGNED DEFAULT NULL,
  `produk_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kursi`
--

INSERT INTO `kursi` (`kursi_id`, `kursi`, `harga`, `produk_id`) VALUES
('k1', 'reguler', 20000, 'p1'),
('k10', 'normal', 120000, 'p8'),
('k11', 'normal', 140000, 'p9'),
('k12', 'normal', 150000, 'p10'),
('k13', 'normal', 230000, 'p11'),
('k14', 'normal', 1000, 'p12'),
('k15', 'platinum', 500000, 'p12'),
('k16', 'gold', 300000, 'p13'),
('k17', 'reguler', 150000, 'p14'),
('k18', 'silver', 200000, 'p15'),
('k19', 'silver', 250000, 'p16'),
('k2', 'gold', 50000, 'p2'),
('k20', 'normal', 90000, 'p17'),
('k21', 'silver', 120000, 'p17'),
('k22', 'gold', 150000, 'p17'),
('k23', 'reguler', 120000, 'p18'),
('k24', 'reguler', 140000, 'p19'),
('k25', 'vip', 200000, 'p19'),
('k26', 'reguler', 160000, 'p20'),
('k27', 'vip', 200000, 'p20'),
('k28', 'normal', 120000, 'p21'),
('k29', 'normal', 100000, 'p22'),
('k3', 'reguler', 100000, 'p2'),
('k30', 'silver', 200000, 'p23'),
('k31', 'gold', 280000, 'p23'),
('k32', 'reguler', 200000, 'p24'),
('k33', 'reguler', 250000, 'p25'),
('k34', 'normal', 180000, 'p26'),
('k35', 'vip', 240000, 'p26'),
('k36', 'silver', 170000, 'p27'),
('k37', 'platinum', 250000, 'p27'),
('k38', 'reguler', 120000, 'p28'),
('k39', 'vip', 200000, 'p28'),
('k4', 'silver', 10000, 'p1'),
('k40', 'normal', 190000, 'p29'),
('k41', 'reguler', 300000, 'p30'),
('k5', 'normal', 120000, 'p3'),
('k6', 'normal', 40000, 'p4'),
('k7', 'normal', 50000, 'p5'),
('k8', 'normal', 120000, 'p6'),
('k9', 'normal', 200000, 'p7');

-- --------------------------------------------------------

--
-- Struktur dari tabel `member`
--

CREATE TABLE `member` (
  `member_id` varchar(45) NOT NULL,
  `member` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `member`
--

INSERT INTO `member` (`member_id`, `member`) VALUES
('m1', 'member'),
('m2', 'non member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `pembayaran_id` varchar(45) NOT NULL,
  `cart_id` varchar(45) NOT NULL,
  `jenis_pembayaran_id` varchar(45) NOT NULL,
  `status_id` varchar(45) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`pembayaran_id`, `cart_id`, `jenis_pembayaran_id`, `status_id`, `tanggal`) VALUES
('pb1', 'c1', 'jp1', 's1', '1999-12-12'),
('pb10', 'c29', 'jp2', 's1', '2019-11-24'),
('pb11', 'c30', 'jp2', 's1', '2019-11-24'),
('pb12', 'c31', 'jp7', 's1', '2019-11-24'),
('pb13', 'c33', 'jp6', 's1', '2019-11-24'),
('pb14', 'c39', 'jp1', 's1', '2019-11-27'),
('pb15', 'c48', 'jp2', 's1', '2019-11-27'),
('pb16', 'c49', 'jp2', 's3', '2019-11-27'),
('pb17', 'c52', 'jp2', 's4', '2019-11-27'),
('pb18', 'c53', 'jp7', 's4', '2019-11-27'),
('pb19', 'c54', 'jp1', 's4', '2019-11-27'),
('pb2', 'c2', 'jp2', 's1', '2019-12-12'),
('pb20', 'c55', 'jp6', 's1', '2019-11-27'),
('pb21', 'c57', 'jp5', 's4', '2019-11-27'),
('pb22', 'c58', 'jp1', 's1', '2019-11-27'),
('pb23', 'c60', 'jp1', 's1', '2019-11-27'),
('pb3', 'c3', 'jp1', 's1', '2020-11-01'),
('pb4', 'c4', 'jp3', 's2', '2021-10-10'),
('pb5', 'c5', 'jp2', 's3', '1999-12-12'),
('pb6', 'c27', 'jp6', 's1', '2019-11-24'),
('pb7', 'c27', 'jp6', 's1', '2019-11-24'),
('pb8', 'c27', 'jp7', 's1', '2019-11-24'),
('pb9', 'c27', 'jp7', 's1', '2019-11-24');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyelenggara`
--

CREATE TABLE `penyelenggara` (
  `penyelenggara_id` varchar(45) NOT NULL,
  `nama_penyelenggara` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penyelenggara`
--

INSERT INTO `penyelenggara` (`penyelenggara_id`, `nama_penyelenggara`) VALUES
('pg1', 'sony music'),
('pg2', 'bahana music'),
('pg3', 'warner music'),
('pg4', 'emi'),
('pg5', 'universal music'),
('pg6', 'bromo music');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penyelenggara_produk`
--

CREATE TABLE `penyelenggara_produk` (
  `penyelenggara_id` varchar(45) NOT NULL,
  `produk_id` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `produk_id` varchar(45) NOT NULL,
  `nama_produk` varchar(45) NOT NULL,
  `kategori_id` varchar(45) NOT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` date NOT NULL,
  `stok` varchar(45) NOT NULL,
  `kota` varchar(45) NOT NULL,
  `jam` varchar(45) NOT NULL,
  `gambar` varchar(45) NOT NULL,
  `genre` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`produk_id`, `nama_produk`, `kategori_id`, `deskripsi`, `tanggal`, `stok`, `kota`, `jam`, `gambar`, `genre`) VALUES
('p1', 'arie laso gemerlap', 'k1', 'Kendati demikian, Ari Lasso justru mengaku tak suka dugem.\r\n\r\nSecara blak-blakan, pelantun tembang Hampa itu mengatakan, dirinya tak pernah terbiasa dengan gemerlapnya kehidupan malam.\r\n\r\nHal itu diutarakan Ari beberapa waktu silam saat dirinya sedang berada di Perth, Australia bersama band-nya dan Andra Ramadhan untuk mengisi di satu acara.', '2019-11-20', '40', 'surabaya', '19.00', '1.jpg', 'pop'),
('p10', 'Jakarta Internasional Blues Festival ', 'k1', 'Hidupkan kembali musik Blues di tanah air bersama Jakarta Internasional Blues Festival! Digelar pada 7-8 Desember di Jakarta, festival ini akan menghadirkan sejumlah musisi blues lokal dan internasional favoritmu! Sebut saja Paul Gilbert Mr Big, Ken Hensley, The Calling, Ron Bumblefoot eks Guns N Roses, Miguel Balaguer, Gugun Blues Shelter, The Rollies, Adrian Adioetomo, Edwin Marshal Project, dan Shun Kikuta. Ikuti terus update-nya, ya, karena masih banyak lagi musisi papan atas yang akan diumumkan!\r\nFestival akan dibagi menjadi 3 panggung, yaitu Vintage, Iconic, dan Crossroad Stage. Di Vintage dan Iconic Stage, para musisi akan membawakan lagu blues legendaris. Sedangkan di Crossroad Stage, para musisi bisa berinteraksi lebih dekat dengan audiens. Karena, di panggung ini, para musisi akan tampil secara akustik sekaligus memberikan kelas pelatihan.\r\nFestival ini juga menyediakan sejumlah fasilitas untuk mengisi perutmu, seperti food-truck, penyeduhan kopi, toko vinil, dan toko merchandise eksklusif.\r\n', '2019-11-25', '400', 'jakarta', '14.00', '10.jpg', 'chill'),
('p11', 'Konser Ambyar Didi Kempot Jakarta', 'k1', 'Kabar baik untuk Sobat Ambyar di Jakarta. The Godfather of Broken Heart akan menggelar konser besar di Jakarta pada tahun 2019 ini! Bagi kamu pecinta lagu-lagu tradisional lantunan Didi Kempot, kamu wajib hadir untuk menikmati euforianya.\r\n', '2019-11-18', '300', 'jakarta', '19.00', '11.jpg', 'edm'),
('p12', 'Nusantara Aquatic Expo', 'k4', 'Nusantara Aquatic (Nusatic) kembali hadir dengan menyelenggarakan kontes ikan hias dari berbagai kategori yang akan di selenggarakan di Hall 1-3 pada tanggal 29 November - 1 Desember 2019 di ICE BSD City, Serpong, Tangerang Selatan. Puncaknya akan memperebutkan Piala Presiden Republik Indonesia\r\n \r\nDalam rangkaian acara tersebut, hadir pula Trubus Agro Expo 2019 yang dimeriahkan dengan pameran tanaman hias, produk agro living dan masih banyak hal menarik lainnya\r\n\r\n\r\n', '2019-11-30', '200', 'medan', '18.00', '12.jpg', 'art'),
('p13', 'ITS EXPO 2019 ', 'k4', 'merupakan multievent pertama di Indonesia yang mengangkat nilai seni,ilmu dan budaya. Dengan mengangkat tema \"Manusia Dalam Teknologi\" akan memberikan perpaduan seni budaya dan teknolohi yang berbeda.\r\nDilengkapi dengan berbagai pameran dan penampilan setiap harinya,seperti pameran seni, pameran karya terbesar mahasiswa ITS, pameran teknologi interaktif, pameran fotografi serta creative workshop dan masih banyak lagi.', '2019-12-03', '320', 'surabaya', '18.00', '13.jpg', 'talkshow'),
('p14', 'Indonesia International Pet Expo (IIPE) ', 'k4', 'Indonesia International Pet Expo (IIPE) kembali hadir. Setelah meraih sukses di tahun-tahun sebelumnya, ditahun 2019 ini IIPE hadir dengan area lebih besar (hall 5,6,7,8) dan merangkul lebih banyak komunitas hewan peliharaan (14 jenis). Selain itu, IIPE 2019 turut didukung oleh berbagai merk dan jenis barang kebutuhan hewan peliharaan baik lokal maupun internasional.\r\n\r\nIIPE 2019 akan diisi dengan berbagai acara menarik setiap harinya, seperti kompetisi, pertunjukan kebolehan, edukasi dan acara bincang-bincang seputar hewan peliharaan, dan masih banyak lagi.\r\nTunggu apalagi, segera tandai kalender anda pada tanggal 02-04 Agustus 2019 di ICE BSD City, Tangerang, jam pameran 09.00 - 21.00 WIB. Tiket hanya di jual di Tokopedia.\r\n\r\nSee you at IIPE 2019 !\r\nIndonesia International Pet Expo (IIPE) kembali hadir. Setelah meraih sukses di tahun-tahun sebelumnya, ditahun 2019 ini IIPE hadir dengan area lebih besar (hall 5,6,7,8) dan merangkul lebih banyak komunitas hewan peliharaan (14 jenis). Selain itu, IIPE 2019 turut didukung oleh berbagai merk dan jenis barang kebutuhan hewan peliharaan baik lokal maupun internasional.\r\n\r\nIIPE 2019 akan diisi dengan berbagai acara menarik setiap harinya, seperti kompetisi, pertunjukan kebolehan, edukasi dan acara bincang-bincang seputar hewan peliharaan, dan masih banyak lagi.\r\nTunggu apalagi, segera tandai kalender anda pada tanggal 02-04 Agustus 2019 di ICE BSD City, Tangerang, jam pameran 09.00 - 21.00 WIB. Tiket hanya di jual di Tokopedia.\r\n\r\nSee you at IIPE 2019 !\r\n', '2019-12-10', '320', 'medan', '19.00', '14.jpg', 'art'),
('p15', 'J.J Sampah-Sampah Kota ', 'k2', 'Jian dan Juhro adalah sepasang suami isteri. Mereka hidup di sebuah gubuk di kolong jembatan. Sehari-hari, seperti sebagian penghuni kolong jembatan lainnya, Jian bekerja sebagai kuli pengangkut sampah. Digaji harian. Tidak punya jaminan masa depan. Meski begitu dia tetap bekerja dengan jujur, rajin, giat dan gembira. Bersama Juhro, yang tengah hamil tua, dia hidup bahagia.\r\nSemua ini tak lepas dari pengawasan Mandor Kepala dan tiga mandor bawahannya, Tiga Pemutus. Mereka sudah mempelajari sekian banyak penghuni kolong jembatan. Hasil penyelidikan itu mengerucut kepada satu kandidat. Keberadaan Jian merupakan sebuah keunikan. Dan, mereka memutuskan, keunikan itu harus diuji. Semacam tes. Mereka ingin melihat sampai sejauh mana kejujuran Jian bisa bertahan.\r\nSuatu hari, Para Pemutus menjatuhkan sebuah tas berisi uang di sekitar tempat Jian bekerja. Melihat jumlah uang yang amat banyak dalam tas, Jian panik. Dia bertanya-tanya dalam hati, siapakah pemilik tas tersebut. Tapi, setelah pergumulan hebat, Jian merasa uang tersebut harus dikembalikan kepada pemiliknya. Dan ini, bagi Para Pemutus, sudah merupakan sebuah pemberontakan.\r\n', '2020-05-11', '300', 'surabaya', '17.00', '15.png', 'comedy'),
('p16', 'I LA GALIGO ', 'k2', 'Kisah ini didasarkan pada karya Rhoda Grauer dari mitos penciptaan epik Sureq Galigo dari Bugis, Sulawesi Selatan, yang ditulis antara abad 13 dan 15 dalam Bahasa Bugis.\r\nBerdasarkan materi Sureq Galigo, kisah ini mencakup tentang apa yang disebut Dunia Tengah (kemanusiaan), produksi berfokus pada satu narasi khusus, tentang prajurit Sawerigading, dan saudara kembarnya, We Tenriabeng. Mereka adalah keturunan para dewa langit dan dewa dunia bawah yang mengirim keturunan mereka untuk mendiami bumi. Saat berada di dalam rahim ibu mereka, yang disimbolkan di atas panggung, mereka ditakdirkan saling jatuh cinta. Khawatir bahwa pernikahan dengan saudara kandung ini akan menghancurkan dunia, para imam Bissu memerintahkan mereka untuk dipisahkan sesaat setelah dilahirkan.\r\nSawerigading pergi ke luar negeri tetapi akhirnya diberitahu tentang wanita tercantik di dunia. Dia kembali ke rumah dan benar-benar jatuh cinta dengan saudara kembarnya. Untuk menghindari yang terburuk, We Tenriabeng memperkenalkannya kepada seorang wanita dengan kecantikan sama, yang dinikahi untuk memiliki seorang putra bernama I La Galigo. Namun demikian, bumi dibersihkan dari semua kehidupan dan anak-anak mereka kawin lagi untuk mengisi kembali serta memulai era baru.\r\nBeberapa bagian dari cerita tersebut diceritakan secara lisan, sementara sisanya melalui tarian dan gerak tubuh aktor. Pertunjukan berdurasi 150 menit ini diiringi efek cahaya yang khas dari karya maestro teater Robert Wilson karya ansambel di atas panggung. Musik mereka terdengar tradisional, tetapi sebenarnya telah disusun untuk produksi oleh komposer Jawa Rahayu Supanggah setelah penelitian intensif di Sulawesi Selatan.\r\nUntuk ekspresi dramatis yang lebih baik, instrumen Jawa dan Bali lainnya ditambahkan pada awalnya lima instrumen Sulawesi tradisional dan yang baru dibuat, yang akhirnya berjumlah 70 instrumen dimainkan oleh 12 musisi.\r\n', '2019-08-20', '200', 'sidoarjo', '16.00', '16.jpg', 'melodrama'),
('p17', 'Dongeng Pohon Impian ', 'k2', 'Rayakan Hari Ibu dengan menyaksikan drama musikal “Dongeng Pohon Impian” persembahan Nivea. Akan ada penampilan Naura dan Nola sebagai pembukaan drama musikal. “Dongeng Pohon Impian” berkisah tentang seorang ibu, Imaji, yang selalu ingin membahagiakan anaknya yaitu Angan. Suatu hari, Imaji dan Angan harus berpetualang untuk mendapatkan kembali Pohon Impian dari Saudagar Pongah dan menghadapi berbagai rintangan. Semakin kuat ikatan di antara mereka, semakin besar pula kekuatan mereka untuk melewati rintangan tersebut.\r\nDrama musikal “Dongeng Pohon Impian” ini merupakan bagian dari kampanye NIVEA #SentuhanIbu yang diadakan untuk menginspirasi para ibu meningkatkan bonding time bersama anak, salah satunya melalui mendongeng.\r\nIkuti petualangan Angan dan Imaji dalam merebut kembali pohon impian dari Tuan Pongah di Ciputra Artpreneur!', '2019-12-14', '250', 'solo', '15.00', '17.jpg', 'comedy'),
('p18', 'Satu Hati Satu Cinta ', 'k1', 'konser persembahan Armand Maulana dan Dewi Gita dalam rangka merayakan ulang tahun pernikahan\r\nmereka yang ke-25 tahun. Sepanjang konser mereka akan menyanyikan lagu-lagu favorit perjalanan cinta mereka selama 25 tahun,\r\ntermasuk salah satunya lagu “11 Januari” yang sangat populer. Konser ini akan diramaikan oleh 25 penari dan 23 pemain musik\r\ntradisional, serta beberapa bintang tamu seperti GIGI, RAN, Marion Jola, Electroma, Kenny Gabriel, dan  masih banyak lagi.', '2019-12-24', '250', 'blitar', '15.30', '18.jpg', 'pop'),
('p19', 'Taman Ismail Marzuki', 'k1', 'Taman Ismail Marzuki (TIM) merupakan pusat kesenian dan kebudayaan dengan banyak acara seni dan\r\ngelaran budaya. Seperti pementasan drama teater, tari, dan musik, baik yang tradisional maupun seni kontemporer. Event  kesenian\r\ndiadakan di Graha Bhakti Budaya, Galeri Cipta II, Galeri Cipta III, Teater Jakarta, dan venue lain di kompleks TIM. Salah satu\r\ngelaran-nya yaitu parade seni budaya tanah air bertema “Seni Bersama Bersama Seni”. Seni daerah ditampilkan berupa tarian, lagu\r\nhingga atraksi bela diri dari Sabang hingga Merauke. Sebagian besar penampil adalah millennial sehingga menjadi daya tarik bagi\r\ngenerasi muda lainnya.', '2020-07-01', '400', 'jakarta', '16.30', '19.jpg', 'melodrama'),
('p2', 'musik festival', 'k1', 'Coachella, Summersonic, atau Reading and Leeds mungkin menjadi salah satu destinasi yang pengen banget kamu kunjungi. Pesta musik internasional ini memang sudah gak diragukan lagi kemeriahannya. Sebagai seorang penikmat musik, menyaksikan penampilan musisi favorit tentu menjadi pengalaman menarik yang tak terlupakan. Bahkan, banyak yang rela datang jauh-jauh demi menikmati kemeriahan pesta musik tahunan ini. Well, buat kamu yang belum punya waktu atau budget buat datang ke pagelaran musik di luar negeri, nggak ada salahnya kalau kamu datang ke festival musik yang ada di dalam negeri. Yuk, luangkan waktumu untuk hadir ke 5 festival musik ter-hits di Indonesia ini!', '2020-07-12', '22', 'jakarta', '18.00', '2.jpg', 'rock'),
('p20', 'carmen', 'k3', 'Opera CARMEN bercerita tentang betapa indah dan dramatisnya cinta, kisah yang selalu dekat dengan semua orang. Yang membuat pertunjukan opera ini sangat istimewa adalah persembahannya disesuaikan dengan audiens Indonesia, antara lain dengan hadirnya penutur cerita, Happy Salma, sehingga para penonton akan lebih menikmati karya ini. Pertunjukan ini akan diarahkan oleh Jos Groenier yang memang kerap menampilkan opera di banyak negara, sehingga proyek pertunjukan ini merupakan ajang yang sangat baik bagi seluruh penampil untuk menyerap pengalaman yang dibagikan oleh sutradara asal Belanda ini, sekaligus sajian indah yang membuktikan betapa musik sungguh merupakan bahasa universal dan wujud perdamaian.', '2020-04-16', '200', 'jakarta', '19.30', '20.jpg', 'symphony'),
('p21', 'The Resonanz Children`s Choir', 'k3', 'Music perfomance enlivened by The Resonanz Children’s Choir, Jakarta Concert Orchestra, and conducted by Avip Priatna.', '2019-10-20', '150', 'bandung', '16.00', '21.jpg', 'acapella'),
('p22', 'Home » Erlangga Talent Week 2019\r\nErlangga Ta', 'k3', 'Kegiatan ini merupakan event eksklusif Penerbit Erlangga bekerjasama dengan 2madison Gallery dalam rangka turut serta menumbuhkan bakat dan kreatifitas anak bangsa khususnya untuk para pelajar, guru, orang tua, masyarakat umum.', '2020-10-05', '180', 'surabaya', '15.00', '22.jpg', 'symphony'),
('p23', 'Charity Concert Series', 'k3', 'Rangkaian konser amal mendukung program Lepas Pasung', '2019-07-29', '150', 'sidoarjo', '12.00', '23.jpg', 'symphony'),
('p24', 'HEARTpreneur Festival 2019', 'k3', 'HEARTpreneur Festival Sebagai generasi yang terlahir dan tumbuh dengan perangkat teknologi di tangan mereka, Millennial atau mereka yang lahir tahun 1980-2000, dapat menemukan semua yang mereka inginkan dan butuhkan secara cepat, dan ini termasuk dengan kesehatan. Sehat bukan hanya berarti “tidak sakit”, tapi juga komitmen untuk hidup sehat dengan mengonsumsi makanan bergizi dan rutin berolahraga. Pemahaman cara menjaga kesehatan yang dimiliki generasi Millenials, perlu terus dikembangkan, diteruskan hingga ditularkan ke masyarakat luas.', '2019-09-13', '160', 'surabaya', '13.00', '24.jpg', 'speech'),
('p25', 'Operet Aku Anak Rusun – Selendang Arimbi', 'k2', 'Arimbi Pringgandani dan ibunya, Bu Shinta, baru pindah di sebuah rumah susun, setelah rumah mereka di bantaran kali kena gusur. Arimbi beruntung karena mendapat beasiswa dari sekolahnya untuk kursus menari di Sanggar Tari Atnis Ibmira yang terkenal. Arimbi sempat sedih dan putus asa, namun ia berusaha bangkit lagi. Di puncak kesedihannya, Arimbi mendapat beberapa kejutan yang tak disangka.', '2019-11-16', '150', 'jakarta', '14.00', '25.jpg', 'tragicomedy'),
('p26', 'Hiduplah Indonesia Maya', 'k3', 'Hiduplah Indonesia Maya adalah pertunjukan stand-up kompilasi bit2 Pandji Pragiwaksono dari 2010-2019 yg terkait ke-Indonesia-an & kelakuan warganya di sosmed.\r\nYg berarti Pandji Pragiwaksono bawain materi dari Bhinneka Tunggal Tawa, Merdeka Dalam Bercanda, Mesakke Bangsaku, Juru Bicara, Pragiwaksono TERMASUK #Septictank. Durasinya kurang lebih 1.5 jam.', '2019-11-30', '400', 'jakarta', '19.00', '26.jpg', 'speech'),
('p27', 'Panembahan Reso', 'k2', 'Panembahan Reso pertama kali dipentaskan Bengkel Teater pada 26-27 Agustus 1986. Lakon ini diciptakan WS Rendra sebagai kritik terhadap pemerintah Orde Baru. Menonton Panembahan Reso bagaikan menyaksikan drama kekuasaan dengan permainan atau intrik yang menyertainya.\r\n\r\nKini, setelah 34 tahun berlalu, mahakarya WS Rendra, drama Panembahan Reso akan dipentaskan kembali pada 25-26 Januari 2020, di Gedung Teater Ciputra Artpreneur, Jakarta. Mereka yang terlibat dalam pementasan ini adalah gabungan seniman teater, tari, musik yang berasal dari Solo, Yogyakarta, dan Jakarta.', '2020-01-25', '400', 'jakarta', '19.30', '27.jpg', 'melodrama'),
('p28', 'HAIRSPRAY The Broadway Musical!', 'k2', 'HAIRSPRAY began with its basis film release of HAIRSPRAY movie in 1988, written and directed by John Waters and has been a cult classic since then with critical acclaim. HAIRSPRAY film was adapted to a Broadway musical in 2002, Music was written by Marc Shaiman; Lyrics by Scott Wittman and Marc Shaiman; Book by Mark O’Donnell and Thomas Meehan and becomes a huge hit. The success leads to a box office screen adaptation of Broadway’s Hairspray in 2007, starring John Travolta, Queen Latifah, Zac Efron, and Nikki Blonsky.', '2019-12-21', '300', 'jakarta', '14.00', '28.jpg', 'melodrama'),
('p29', 'Artpreneur Talk', 'k3', 'ARTPRENEUR TALK is Ciputra Artpreneur’s annual event that provides engaging, educational and diverse content on a current hot topic.\r\n\r\nFor its debut, Artpreneur Talk presents a half-day seminar titled “Converting Millennials into New Brand Lovers”, showcasing provocative speakers, innovators and thought leaders from various industries, such as Tokopedia, Go-Jek, Unilever, Hakuhodo Network Indonesia, IDN Media amongst others to share with the audience insights and deeper understanding on millennials generation.', '2018-02-14', '200', 'bandung', '13.00', '29.jpg', 'speech'),
('p3', 'GIIAS 2019', 'k4', 'The first automotive exhibition hosted by GAIKINDO, Pameran Mobil GAIKINDO was established in 1986 and was the beginning of Indonesia’s largest automotive exhibition. In 2006, the exhibition reached a new platform by becoming an international-scale exhibition endorsed by OICA (Organisation Internationale des Constructeurs d’Automobiles) and changed its name to Indonesia International Motor Show (IIMS). Along with the fantastic more than 30 years of journey, this year we will drive the show towards a brighter future and launch the show with a new name GAIKINDO Indonesia International AUTO SHOW (GIIAS).', '2019-12-31', '1000', 'jakarta', '09.00', '3.jpg', 'art'),
('p30', 'WEEKEND AT THE MUSEUM', 'k4', 'Develop your children’s creativity and have fun in the museum through our special art workshop session!', '2018-02-24', '250', 'makassar', '10.00', '30.jpg', 'seminar'),
('p4', 'wayang kulit', 'k2', 'Wayang kulit adalah seni tradisional Indonesia yang terutama berkembang di Jawa. Wayang berasal dari kata \'Ma Hyang\' yang artinya menuju kepada roh spiritual, dewa, atau Tuhan Yang Maha Esa. Ada juga yang mengartikan wayang adalah istilah bahasa Jawa yang bermakna \'bayangan\', hal ini disebabkan karena penonton juga bisa menonton wayang dari belakang kelir atau hanya bayangannya saja. Wayang kulit dimainkan oleh seorang dalang yang juga menjadi narator dialog tokoh-tokoh wayang, dengan diiringi oleh musik gamelan yang dimainkan sekelompok nayaga dan tembang yang dinyanyikan oleh para pesinden. Dalang memainkan wayang kulit di balik kelir, yaitu layar yang terbuat dari kain putih, sementara di belakangnya disorotkan lampu listrik atau lampu minyak (blencong), sehingga para penonton yang berada di sisi lain dari layar dapat melihat bayangan wayang yang jatuh ke kelir. Untuk dapat memahami cerita wayang (lakon), penonton harus memiliki pengetahuan akan tokoh-tokoh wayang yang bayangannya tampil di layar.', '2020-09-17', '100', 'semarang', '21.00', '4.jpg', 'tragedy'),
('p5', 'drama musikal by SMAN 12', 'k2', 'Menurut penyelenggara, pertunjukan ini kelak dibagi menjadi empat sesi,dimainkan oleh kelompok ekstrakulikuler SMAN 11 Bandung ( Teater Nuansa ), SMA BPI 1 Bandung ( New Kabisa ), SMPN 11 bandung ( Sentinel ), SMPN 28 Bandung ( Bakat Parodies ).\r\n\r\nSetiap pagelaran, berdurasi 1 jam 20 menit. Kisahnya menceritakan tentang seorang wanita bernama Yuyun yang bekerja di sebuah perusahaan bernama PT. Mimpi Sejahtera. Ini perusahaan besar yang mengkoordinir pengemis–pengemis palsu. Tujuan “melenceng” perusahaan ini - meraih keuntungan dengan cara yang keliru baik secara etis maupun praktis.', '2019-12-12', '300', 'surabaya', '14.00', '5.jpg', 'tragedy'),
('p6', 'Tamagochill Festival', 'k1', 'Tamagochill Festival hadir sebagai event pertama di Jakarta dengan tema nostalgia dan karaoke night. Seperti kepanjangan namanya, it’s time to go chill, acara ini bertujuan mengundang pecinta musik untuk menikmati penampilan langsung musisi lokal dan bernyanyi bersama di malam karaoke ini.\r\nKonser ini merupakan konser Dewa 19 yang juga akan mengahdirkan Once serta Ari Lasso. Mereka akan membawakanmu 24 lagu-lagu terbaik!\r\n', '2020-01-28', '200', 'jakarta', '18.00', '6.jpg', 'chill'),
('p7', 'Remembrance 2019', 'k1', 'Acara Remembrance tahun ini mengusung tema The Journey of Faith Citra Scholastika.\r\nAcara ini menjadi simbol selebrasi kebaikan Tuhan dalam kehidupan Citra, dan kebaikan yang mendewasakannya dengan pembelajaran kehidupan yang masih berjalan. Sebuah konser yang menyanyikan lagu-lagu rohani yang mengkolaborasikan musik dan teater.\r\nDatanglah ke Balai Sarbini pada 15 November 2019 nanti dan ikut merayakan kebaikan Tuhan bersama Citra Scholastika!\r\n', '2020-09-21', '200', 'jakarta', '19.00', '7.jpg', 'chill'),
('p8', 'Michael Learns To Rock', 'k1', 'Band soft rock asal Denmark, Michael Learns to Rock akan datang kembali ke Indonesia untuk menggelar konser solonya! Kali ini, mereka akan berkunjung ke Semarang, tepatnya ke Marina Convention Center (MCC).\r\nSaksikan penampilan langsung band legendaris ini membawakan lagu-lagu kesukaanmu. Mulai dari “Sleeping Child”, “25 Minutes”, dan masih banyak lagi!\r\n\r\n', '2020-08-29', '500', 'semarang', '17.00', '8.jpg', 'rock'),
('p9', 'Tegar 2.0 Rossa & Her Stage Squad Concert Tou', 'k1', 'Siapa yang tidak sabar menonton aksi panggung salah satu diva terbaik di Indonesia, Rossa? Setelah cukup lama tidak melakukan konser tunggal, Rossa kini kembali untuk memeriahkan panggung musik Indonesia. Dan tidak hanya untuk tampil satu kali saja, tapi 4 kali di 4 kota berbeda.\r\nSelain untuk menyapa para penggemar setianya, konser yang bertajuk “Tegar 2.0” ini dibuat untuk memperingati 20 tahun lagu dan album “Tegar”. Seperti yang mungkin sudah pernah kamu dengar, album tersebut telah terjual sebanyak 600 ribu copy dan mendapatkan 4 kali Platinum. Sulit rasanya tidak ikut bersenandung atau bernyanyi saat mendengar lagu tersebut diputar!\r\n\r\n\r\n', '2020-02-24', '120', 'surabaya', '10.00', '9.jpg', 'pop');

-- --------------------------------------------------------

--
-- Struktur dari tabel `status`
--

CREATE TABLE `status` (
  `status_id` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `status`
--

INSERT INTO `status` (`status_id`, `status`) VALUES
('s1', 'berhasil'),
('s2', 'belum berhasil'),
('s3', 'proses'),
('s4', 'cancel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `user_id` varchar(45) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `no_telp` varchar(45) DEFAULT NULL,
  `alamat` varchar(200) DEFAULT NULL,
  `member_id` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`user_id`, `nama`, `email`, `password`, `no_telp`, `alamat`, `member_id`) VALUES
('u001', 'bevankevin', 'bevankevin0@gmail.com', '123', '', '', 'm1'),
('u002', 'zacky', 'zacky@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', 'm1'),
('u003', 'james', 'james@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', 'm1'),
('u004', 'priscil', 'priscil@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', 'm1'),
('u005', 'adimas', 'adimas@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', 's1'),
('u006', 'admin', 'admin@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '', '', 's1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artis`
--
ALTER TABLE `artis`
  ADD PRIMARY KEY (`artis_id`);

--
-- Indeks untuk tabel `artis_produk`
--
ALTER TABLE `artis_produk`
  ADD KEY `FK_artis_produk_1` (`produk_id`),
  ADD KEY `FK_artis_produk_2` (`artis_id`);

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `FK_user_id` (`user_id`);

--
-- Indeks untuk tabel `cart_produk`
--
ALTER TABLE `cart_produk`
  ADD KEY `FK_cart_produk_1` (`cart_id`),
  ADD KEY `FK_cart_produk_2` (`produk_id`);

--
-- Indeks untuk tabel `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`),
  ADD KEY `FK_history_1` (`cart_id`),
  ADD KEY `FK_history_2` (`user_id`),
  ADD KEY `FK_history_3` (`status_id`);

--
-- Indeks untuk tabel `jenis_pembayaran`
--
ALTER TABLE `jenis_pembayaran`
  ADD PRIMARY KEY (`jenis_pembayaran_id`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indeks untuk tabel `komisi`
--
ALTER TABLE `komisi`
  ADD PRIMARY KEY (`komisi_id`),
  ADD KEY `FK_komisi_1` (`pembayaran_id`);

--
-- Indeks untuk tabel `kursi`
--
ALTER TABLE `kursi`
  ADD PRIMARY KEY (`kursi_id`),
  ADD KEY `FK_kursi_1` (`produk_id`);

--
-- Indeks untuk tabel `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`pembayaran_id`),
  ADD KEY `FK_pembayaran_1` (`cart_id`),
  ADD KEY `FK_pembayaran_2` (`status_id`),
  ADD KEY `FK_pembayaran_3` (`jenis_pembayaran_id`);

--
-- Indeks untuk tabel `penyelenggara`
--
ALTER TABLE `penyelenggara`
  ADD PRIMARY KEY (`penyelenggara_id`);

--
-- Indeks untuk tabel `penyelenggara_produk`
--
ALTER TABLE `penyelenggara_produk`
  ADD KEY `FK_penyelenggara_produk_1` (`produk_id`),
  ADD KEY `FK_penyelenggara_produk_2` (`penyelenggara_id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD KEY `FK_produk_1` (`kategori_id`);

--
-- Indeks untuk tabel `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`status_id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `artis_produk`
--
ALTER TABLE `artis_produk`
  ADD CONSTRAINT `FK_artis_produk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`produk_id`),
  ADD CONSTRAINT `FK_artis_produk_2` FOREIGN KEY (`artis_id`) REFERENCES `artis` (`artis_id`);

--
-- Ketidakleluasaan untuk tabel `cart_produk`
--
ALTER TABLE `cart_produk`
  ADD CONSTRAINT `FK_cart_produk_2` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`produk_id`);

--
-- Ketidakleluasaan untuk tabel `history`
--
ALTER TABLE `history`
  ADD CONSTRAINT `FK_history_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `FK_history_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `FK_history_3` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`);

--
-- Ketidakleluasaan untuk tabel `komisi`
--
ALTER TABLE `komisi`
  ADD CONSTRAINT `FK_komisi_1` FOREIGN KEY (`pembayaran_id`) REFERENCES `pembayaran` (`pembayaran_id`);

--
-- Ketidakleluasaan untuk tabel `kursi`
--
ALTER TABLE `kursi`
  ADD CONSTRAINT `FK_kursi_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`produk_id`);

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `FK_pembayaran_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `FK_pembayaran_2` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`),
  ADD CONSTRAINT `FK_pembayaran_3` FOREIGN KEY (`jenis_pembayaran_id`) REFERENCES `jenis_pembayaran` (`jenis_pembayaran_id`);

--
-- Ketidakleluasaan untuk tabel `penyelenggara_produk`
--
ALTER TABLE `penyelenggara_produk`
  ADD CONSTRAINT `FK_penyelenggara_produk_1` FOREIGN KEY (`produk_id`) REFERENCES `produk` (`produk_id`),
  ADD CONSTRAINT `FK_penyelenggara_produk_2` FOREIGN KEY (`penyelenggara_id`) REFERENCES `penyelenggara` (`penyelenggara_id`);

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_produk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
