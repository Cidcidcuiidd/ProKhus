-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 28. Maret 2013 jam 22:37
-- Versi Server: 5.1.37
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `osis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengunjung`
--

CREATE TABLE IF NOT EXISTS `pengunjung` (
  `ip_pengunjung` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `hits` int(10) NOT NULL,
  `pengunjung_ol` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengunjung`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `visi` text NOT NULL,
  `misi` text NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `profil`
--

INSERT INTO `profil` (`id_profil`, `visi`, `misi`) VALUES
(1, 'Menjadikan Organisasi di SMP N 3 SLEMAN sebagai sarana untuk mengembangkan potensi diri siswa, serta menjadikan siswa yang lebih disiplin, kreatif, bertanggung jawab, dan berakhlak mulia.', 'Meningkatkan kedisiplinan dengan mentaati peraturan yang ada serta memberikan sanksi bagi yang melanggarnya.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_adat`
--

CREATE TABLE IF NOT EXISTS `t_adat` (
  `id_adat` int(50) NOT NULL,
  `aturan` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_adat`
--

INSERT INTO `t_adat` (`id_adat`, `aturan`) VALUES
(1, 'mennisjdjs'),
(2, 'asdmnfncnmkjdjwjkf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_artikel`
--

CREATE TABLE IF NOT EXISTS `t_artikel` (
  `id_artikel` int(100) NOT NULL AUTO_INCREMENT,
  `judul_artikel` varchar(500) NOT NULL,
  `isi_artikel` text NOT NULL,
  `penulis` varchar(50) NOT NULL,
  PRIMARY KEY (`id_artikel`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `t_artikel`
--

INSERT INTO `t_artikel` (`id_artikel`, `judul_artikel`, `isi_artikel`, `penulis`) VALUES
(1, 'abc', 'Paging merupakan teknik menampilkan data dengan cara membaginya ke beberapa halaman. Teknik ini diberikan untuk mengurangi scrolling window apabila data yang disajikan terlalu banyak, sehingga akan menimbulkan kejemuan orang yang melihat dan juga akan menghasilkan page load time yang besar karena ukuran filenya besar (apabila data disajikan dalam satu halaman saja).\r\n\r\nUntuk keperluan navigasi data biasanya disajikan dengan link berupa nomor halaman atau kadang berbentuk Previous dan Next. \r\n\r\nPada tutorial ini akan dipaparkan bagaimana ide membuat advance paging ini dilakukan. Advance paging adalah paging yang navigasinya berbentuk', 'aniiiiii'),
(2, 'cdef', 'Paging merupakan teknik menampilkan data dengan cara membaginya ke beberapa halaman. Teknik ini diberikan untuk mengurangi scrolling window apabila data yang disajikan terlalu banyak, sehingga akan menimbulkan kejemuan orang yang melihat dan juga akan menghasilkan page load time yang besar karena ukuran filenya besar (apabila data disajikan dalam satu halaman saja).\r\n\r\nUntuk keperluan navigasi data biasanya d''wdhgavhbsnx a lkisajikan dengan link berupa nomor halaman atau kadang berbentuk Previous dan Next. \r\n\r\nPada tutorial ini akan dipaparkan bagaimana ide membuat advance paging ini dilakukan. Advance paging adalah paging yang navigasinya berbentuk', 'inaaaaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_berita`
--

CREATE TABLE IF NOT EXISTS `t_berita` (
  `id_berita` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_berita` date NOT NULL,
  `gbr_berita` varchar(100) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` longtext NOT NULL,
  PRIMARY KEY (`id_berita`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `t_berita`
--

INSERT INTO `t_berita` (`id_berita`, `tgl_berita`, `gbr_berita`, `judul_berita`, `isi_berita`) VALUES
(1, '2013-04-01', 'news_image_01.jpg', 'Berita 1', 'asdmbcukwdtbxniwleulxoweutfgwxvbndfcmz;qpwdiozmw,pdhwjfg3wr vyx tewguizxnlu2wenzxyuwf2debxwieundwqz,;eukh vi2wetyxnwi2uexvyt2bweignzmsdjkeyovwcbegfsjchvnasdhgabkadhnjahsdbandnzxgftyczajdnasdvbasvgdajksmd a sbgdatysgtduasj uasd7asydajsdha d ahusdgagdasdj hasdgvaikasngdjhsgd uasdyghbavdbasndaklsdjouiyatw   askdhasd masdnkajsdhhsdvajsdbkAHSDJHGDHJADBMZASMDKA'),
(2, '2013-04-02', 'templatemo_logo.png', 'Berita 2', 'asqwertopjn xcbgkjsm,bdh,,z,nnsb jdfmasgytidlomnbsjfbnskclomnifuemfjlskdvnfkli sdjjjjjjjjjjjjjjjjjjjjjjjjjfnslnfb jweh nwfjeofbceuihyom;eixm;qkwlhdabdva9s8ieu erpwoegfnoivmdmofvyuheuirtwi,wjer wirjpwler kwplirugwqe rlffjpwoer iwriwperf fm sdjfhw herjolfkmne fuiwrytyemeew riwefsdkmfhjufhyiopoewrjfhfsldkfjwlekifreop gekg eirufkewfjke awdjopqwekr nwkdfjwkejrwor weroruwrjwkfolskdrjowe wjg nwoekjqloie wfjsmkdnwjehrowefihjsnkmdfkaiwejroafkjofjwofahjihcfsjdaiosdhjahxcjzxkczixcksdjfkasdjhia'),
(3, '2013-03-07', '', 'berita 4', 'lkshjdk bciunlASKXCJLa'),
(4, '2013-03-13', '', 'berita 5', 'dgfahbxcna sucjisdj'),
(5, '2013-03-26', '', 'berita 5', 'ljsnovozcjk slodjuc'),
(6, '2013-03-27', '', 'berita 6', 'mlszxckahjasjnasmxjakskxjmamkj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_forum`
--

CREATE TABLE IF NOT EXISTS `t_forum` (
  `id_forum` int(11) NOT NULL,
  `komentar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_forum`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `t_galery`
--

CREATE TABLE IF NOT EXISTS `t_galery` (
  `id_galery` int(11) NOT NULL AUTO_INCREMENT,
  `foto_galery` varchar(100) NOT NULL,
  `ket_foto` text NOT NULL,
  PRIMARY KEY (`id_galery`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `t_galery`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kontak`
--

CREATE TABLE IF NOT EXISTS `t_kontak` (
  `id_kontak` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_kontak`
--

INSERT INTO `t_kontak` (`id_kontak`, `alamat`, `no_tlp`, `email`) VALUES
(1, 'Jalan Magelang Km 10 Tridadi Sleman, Kab. Sleman, Yogyakarta', '(0274) 868311', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_login`
--

CREATE TABLE IF NOT EXISTS `t_login` (
  `id_login` int(15) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `level` int(3) NOT NULL,
  PRIMARY KEY (`id_login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `t_login`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `t_mars`
--

CREATE TABLE IF NOT EXISTS `t_mars` (
  `id_mars` int(11) NOT NULL,
  `mars` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_mars`
--

INSERT INTO `t_mars` (`id_mars`, `mars`) VALUES
(1, 'abcdefghijklmnopqrstuvwxyz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_proker`
--

CREATE TABLE IF NOT EXISTS `t_proker` (
  `id_proker` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_proker`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data untuk tabel `t_proker`
--


-- --------------------------------------------------------

--
-- Struktur dari tabel `t_struktur`
--

CREATE TABLE IF NOT EXISTS `t_struktur` (
  `id_pengurus` int(11) NOT NULL AUTO_INCREMENT,
  `tahun_kpengurusan` varchar(10) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `nama_pengurus` varchar(50) NOT NULL,
  `tugas_pengurus` text NOT NULL,
  `foto` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pengurus`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `t_struktur`
--

INSERT INTO `t_struktur` (`id_pengurus`, `tahun_kpengurusan`, `jabatan`, `nama_pengurus`, `tugas_pengurus`, `foto`) VALUES
(1, '2013/2014', 'Ketua', 'Bayu Kuncoro', '', ''),
(2, '2013/2014', 'Wakil Ketua', 'Albert Zein S', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
