-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Agu 2023 pada 18.58
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `85_syauqillah hadie ahsana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(150) NOT NULL,
  `password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'bpsdmp');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `isi` varchar(5000) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `last_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `kegiatan`
--

INSERT INTO `kegiatan` (`id`, `judul`, `isi`, `gambar`, `created_date`, `last_updated`) VALUES
(2, 'BPSDMP Kominfo Surabaya bersama Dinas Kominfo Pamekasan Resmi Buka Pelatihan dan Sertifikasi Kompetensi berbasis SKKNI', 'Balai Pengembangan Sumber Daya Manusia dan Penelitian (BPSDMP) Kominfo Surabaya, Selasa 9/3/2021 membuka secara resmi pelaksanaan kegiatan Pelatihan dan Sertifikasi Kompetensi berbasis SKKNI bidang TIK bagi Angkatan Kerja Muda. Kegiatan yang dilaksanakan di FrontOne Hotel Pamekasan ini di dahului dengan pelaksanaan Kegiatan Rapid Test, Senin 8/3/2021, yang diikuti oleh sekitar 40 peserta angkatan kerja muda baru di wilayah Kabupaten Pamekasan dan Sumenep. <br><br>\r\n\r\nKepala BPSDMP Kominfo Surabaya Ibu Eka Handayani dalam sambutannya mengatakan bahwa Indonesia saat ini mengalami permasalahan ketenagakerjaan terutama dalam hal skill gaps, dimana kebutuhan tenaga kerja ahli dalam biang teknologi masih belum tercukupi.<br><br>\r\n\r\n\"Laporan World Bank Tahun 2016 bahwa saat ini Indonesia mengalami kekurangan tenaga kerja semi terampil sebesar 9 juta tahun 2015-2030, sementara di sisi lain Indonesia justru diproyeksikan menjadi Negara ekonom terbesar ke 7 tahun 2030.\", Ucapnya dihadapan peserta pelatihan.<br><br>\r\n\r\nKemenkominfo RI masih menurut Kepala BPSDMP-Kominfo Surabaya ini mempunyai program strategis lainnya seperti, Vocational School Graduate Academy (VSGA), Fresh Graduate Academy (FGA), Thematic Academy (TA), Digital Enterpreneurship Academy (DEA), Profesional Academy (PRO) dan Government Transformation Academy (GTA), informasi lengkapnya bisa dibuka di laman website digitalent.kominfo.go.id.<br><br>\r\n\r\nSementara itu Kepala Dinas Komunikasi dan Informatika Pemkab Pamekasan dalam sambutannya yang juga sekaligus membuka acara pelatihan dan jadi Narasumber kegiatan ini menekankan kepada peserta untuk benar benar dimanfaatkan dan digunakan dengan sebaik baiknya, karena pelatihan ini adalah Gratis untuk peserta sebagai angkatan kerja muda di wilayah Pamekasan dan Sumenep.<br><br>\r\n\r\nDirinya juga memberikan mensosialisasikan terkait dengan Program dari Kemenkominfo RI yakni Program Digital Talent Scholarship (DTS) yaitu pelatihan intensif kepada ASN, pelaku industry, lulusan SMK/Diploma/Sarjana dengan tema tema yang menjadi inti pengembangan indsutri 4.0.', '64da59f23b66b.jpg', '2023-08-14', '2023-08-14'),
(3, 'Pelatihan dan Sertifikasi Kompetensi Berbasis SKKNI Hadir di Mojokerto', 'BPSDMP Kominfo Surabaya dan Dinas Komunikasi dan Informatika Kota Mojokerto menyelenggarakan kegiatan Pelatihan dan Sertifikasi Kompetensi berbasis SKKNI bidang TIK bagi Angkatan Kerja Muda. Kegiatan yang diadakan di Hotel Ayola Sunrise Mojokerto dibuka oleh Walikota Mojokerto (Ibu Hj. Ika Puspitasari, SE) dan turut pula dihadiri oleh Bapak Gaguk Tri Prasetyo, AMT, MM selaku Kepala Dinas Kominfo Kota Mojokerto, Ibu Dra. Ec. Nirmala Dewi, MM selaku perwakilan Kepala Dinas Kominfo Jawa Timur serta didampingi oleh Kepala BPSDMP Kominfo Surabaya, Ibu Eka Handayani, SE., MM. <br><br>\r\n\r\nKegiatan ini diikuti oleh 70 orang peserta yang telah melalui proses seleksi administrasi dan protokol kesehatan yang ketat, seluruh peserta sebelum mengikuti pelatihan diwajibkan untuk mengikuti Rapid Test Antigen yang telah disediakan panitia penyelenggara dan menerapkan 5M. <br><br>\r\n\r\nPelatihan ini terbagi menjadi 3 skema yaitu; skema junior graphic design, skema staf manajemen data dan terampil menggunakan teknologi digital bagi perempuan dan ibu rumah tangga, yang bertujuan untuk meningkatkan keterampilan khususnya bagi angkatan kerja muda Indonesia dibidang TIK. <br><br>\r\n\r\n“Kemampuan dibidang TIK seperti halnya pelatihan ini sangat penting di era digital (Industri 4.0). Saat ini tidak ada lagi masyarakat yang tidak melek teknologi. Usia berapa pun harus mengenal teknologi, apalagi usia angkatan muda, teknologi digital adalah hal yang wajib diketahui dan dipahami. Karena saat ini dibidang apapun tidak ada yang tidak menggunakan TIK,” ujar Ning Ita sapaan akrab Wali Kota Mojokerto dalam sambutannya. <br><br>\r\n\r\nKepala BPSDMP Kominfo Surabaya Ibu Eka Handayani memaparkan dalam sambutannya bahwa, “saat ini Indonesia masih mengalami permasalahan ketenagakerjaan khususnya dalam skills gap dimana kebutuhan tenaga kerja ahli dalam bidang teknologi belum tercukupi. Salah satu faktor yang berkontribusi dalam kurang terserapnya tenaga kerja adalah minimnya tenaga kerja terampil terutama SDM yang dapat mengembangkan teknologi digital. Padahal perkembangan teknologi digital saat ini semakin pesat dan kebutuhan tenaga ahli digital semakin meningkat.” <br><br>\r\n\r\nOleh karena itu, peran Kominfo sangat penting dalam mengembangkan talenta masyarakat khususnya dibidang digital. Salah satu upaya Kementerian Kominfo adalah dengan mengadakan kegiatan pelatihan dan sertifikasi kompetensi bidang SKKNI ini. Ibu Eka Handayani dalam sambutannya berharap, peserta pelatihan dapat meningkatkan keterampilannya dan bisa lulus dalam uji sertifikasi kompetensi.', '64da5a63cebe2.jpg', '2023-08-14', '2023-08-14'),
(4, 'Pelatihan Pengenalan Digital Marketing', 'BPSDMP Kominfo Surabaya dan Gapura Digital bekerjasama menyelenggarakan pelatihan pengenalan digital marketing diikuti oleh 153 orang peserta melalui aplikasi zoom meeting dan youtube channel BPSDMP Kominfo Surabaya. Pelatihan ini bertujuan agar dapat meningkatkan dan memajukan bisnis serta menambah kemampuan dan pengetahuan tentang pemasaran digital. <br><br>\r\n\r\nKegiatan ini dibuka oleh Kepala BPSDMP Kominfo Surabaya, Ibu Eka Handayani dan dihadiri oleh Kepala Badan Litbang SDM Hary Budiarto yang memberikan tambahan ilmu tentang ekonomi digital.<br><br>\r\n\r\nDalam sambutannya, Bapak Hary Budiarto menyampaikan bahwa meskipun sedang dilanda pandemi kita tidak boleh bermalas-malasan dan menyerah, kita harus mampu memanfaatkan waktu dengan mengasah kemampuan melalui pelatihan-pelatihan. Salah satu contohnya adalah pelatihan yang diadakan oleh BPSDMP Kominfo Surabaya.<br><br>\r\n\r\nBapak Hary Budiarto juga menyampaikan bahwa inovasi teknologi akan berdampak pada seluruh aspek kehidupan manusia, perkembangan ekonomi digital yang begitu cepat dapat menjadi salah satu pendorong pertumbuhan ekonomi Indonesia pada 5 tahun kedepan. Itulah alasan pentingnya kita mengenal dan menguasai digital marketing.<br><br>\r\n\r\nPelatihan ini disampaikan oleh Ina Dwiana, Fasilitator Google Gapura Digital. Ina Dwianamenekankan pentingnya UKM Go Online karena dapat membantu menekan biaya operasional, mengatur biaya pemasaran sesuai kebutuhan dan dapat lebih cepat untuk memulai bisnis dengan meminimalisasi risiko. Adapun tools yang dapat digunakan untuk menunjang digital marketing diantaranya adalah Google Bisnisku, website, Google Ads, dan Media Sosial.', '64da5ac5411a3.png', '2023-08-14', '2023-08-14'),
(5, 'Pembukaan Government Transformation Academy Tahun 2021 dan Penandatangan MOU dengan Gubernur NTB', 'Senin, 25 Oktober 2021. Kementerian Komunikasi dan Informatika melalui Badan Penelitian dan Pengembangan Sumber Daya Manusia (Balitbang SDM) menyelenggarakan kegiatan Pembukaan Pelatihan Government Transformation Academy (GTA) Tahun 2021. Kegiatan pembukaan dan orientasi ini diselenggarakan secara tatap muka (langsung) di Kota Mataram NTB dan online via aplikasi video conference di berberapa daerah diantaranya Palangkaraya, Jember dan Mamuju. <br> <br>\r\n\r\nKegiatan yang diadakan di Kantor BPSDMD Provinsi NTB ini dibuka secara resmi oleh Wakil Gubernur NTB, Ibu Dr. Ir. Hj. Sitti Rohmi Djalilah, M.Pd. Dihadiri oleh Kepala Badan Litbang SDM Kemenkominfo Bapak Harry Budiarto, Sekretaris Balitbang SDM, Kepala BPSDMP Kominfo Surabaya, Kapokja GTA, dan beberapa Kepala OPD Provinsi NTB.<br> <br>\r\n\r\nDalam sambutan Wakil Gubernur NTB, beliau menyampaikan bahwa NTB sangat menyambut baik kegiatan DTS GTA di NTB karena pelatihan ini merupakan suatu kebutuhan. Khususnya di masa pandemi kemampuan digitalisasi sangat membantu pekerjaan pemerintah. Pelatihan ini diharapkan dapat dimanfaatkan untuk meningkatkan kemampuan para ASN dalam menghadapi perkembangan teknologi.<br> <br>\r\n\r\nSkema pelatihan pada program GTA dirancang mulai dari tingkat basic skill yang berkaitan dengan literasi digital, intermediate skill yang menekankan peningkatan kompetensi teknis, hingga advance skill yang menyasar ke para pengambil keputusan. Pelatihan GTA ini berlangsung secara online dan blended yang memadukan metode online dan offline. Durasi pelatihan berbeda-beda sesuai dengan tema pelatihan. Pada pelatihan online, peserta dapat mengatur sendiri waktu belajar secara mandiri dalam batas waktu pelatihan.<br> <br>\r\n\r\nSebagai informasi tambahan, Pelatihan GTA tahun 2021 berfokus pada 13 (tiga belas) skema pelatihan yakni Get Connected, IT Essential, Cybersecurity Essentials, WI-lenial, IT Business Analyst, IT Project Management, Digital Public Relations, Social Media Analyst, Business Process Engineer, Network Administrator, Junior Graphic Designer, Data Mining Fundamental, dan Analis Kota Cerdas SNI ISO 37122:2019.', '64da5bc0d8440.png', '2023-08-14', '2023-08-14'),
(6, 'BPSDMP Kominfo Surabaya Resmi Tutup Pelatihan Sertifikasi Kompetensi 2021 di Pamekasan', 'Setelah berlangsung hampir selama 5 hari pelaksanaan pelatihan sertfikasi kompetensi sejak selasa hingga sabtu, 9 sampai dengan 13 Maret 2021, Balai Pengembangan Sumber Daya Manusia dan Penelitian (BPSDMP) Kominfo Surabaya, akhirnya resmi tutup pelatihan sertifikasi kompetensi tahun 2021 di Pamekasan, Sabtu 13/3/2021.<br><br>\r\n\r\nBPSDMP-Kominfo Surabaya 2 tahun ini sudah menjalin kemitraan dengan Kabupaten Pamekasan khususnya dengan Dinas Kominfo Pamekasan dan beberapa kali melaksanakan pelatihan yang berbeda, ini semata mata karena memang program pusat juga diplihnya Pamekasan karena masyarakat di Pamekasan Dinamis sekali, Ucap Bagus Winarko dari BPSDMP Kominfo Surabaya.’’<br><br>\r\n\r\n“Dipilihnya Kabupaten Pamekasan, selain memang Kabupaten dengan sebutan Gerbang Salam ini sudah menjadi prioritas dari Kementerian Kominfo Pusat, juga karena proses perizinan di daerah ini simple dan tidak berberlit belit, terbukti kami dari BPSDMP-Kominfo Surabaya sudah beberapa kali melaksanakan kegiatan pelatihan, selain memang faktor utama dipilihnya Kabupaten Pamekasan memang memiliki masyarakat yang antusias terhadap perkembangan Dunia Digital, termasuk ibu ibu rumah tangganya yang kami juga bidik dalam skema terampil menggunakan teknologi, para pelaku UMKM juga pernah kita laksanakan di Pamekasan ini, Ucap pria Low Profile ini.’’<br><br>\r\n\r\nBagus sapaan akrabnya, juga mengatakan bahwa pelatihan yang sekarang ini (dengan 2 skema yakni Junior Grpahic Designer dan Staf Manajemen Data) semua proses pendaftaran termasuk verifikasi administrasi dari calon peserta ini murni Pusat yang memilih, kami dan Dinas Kominfo Pamekasan menerima semua konsep terkait dengan kepesertaan pelatihan kali ini, dirinya juga mengatakan sangat berterima kasih sekali kepada Jajaran Pemerintah Kabupaten Pamekasan lebih lebih kepada Dinas Kominfo Pamekasan.<br><br>\r\n\r\nPelatihan sertifikasi dan Kompetensi ini, sebelumnya di dahului dengan pelaksanaan Rapid Test oleh Panitia BPSDMP Kominfo Surabaya dengan Dinas Kominfo Pamekasan kepada Peserta yang sudah dinyatakan lolos, dengan pelaksanaan Rapid Test Antigen, yang dilaksanakan Senin 8/3/2021 dihalaman Parkir Timur FrontOne Hotel.', '64da5c400ceb4.png', '2023-08-14', '2023-08-14');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
