-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 15, 2020 at 03:05 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dinkes`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `artikel` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `kategori`, `judul`, `artikel`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kesehatan', 'Mengenal Pemeriksaan Deteksi Dini Kanker', '<p>Kanker adalah salah satu penyakit mematikan yang sulit dideteksi pada\r\n tahap awal. Ketika Anda mengalami gejalanya, biasanya penyakit kanker \r\nsudah mencapai stadium lanjut. Namun&nbsp; beberapa jenis kanker sebenarnya \r\nbisa dicegah dengan melakukan deteksi dini kanker.</p><p>Deteksi dini \r\nkanker tetap dapat dilakukan melalui pemeriksaan dengan dokter. Hal ini \r\nsangat membantu Anda mencegah perkembangan kanker menjadi kian parah.</p><h2><strong>Kapan harus melakukan deteksi dini kanker?</strong></h2><p>Deteksi\r\n dini kanker dapat dijalani jika Anda menyadari ada yang salah dengan \r\ntubuh Anda, karenanya langkah paling penting adalah mengetahui ada \r\ntidaknya <a href=\"https://www.sehatq.com/artikel/cermati-gejala-kanker-paru-paru-pada-wanita\" target=\"_blank\" rel=\"noopener\">gejala awal</a> dari kanker, seperti:</p><ul><li>Pendarahan yang abnormal.</li><li>Adanya benjolan.</li><li>Suara serak yang tidak kunjung hilang.</li><li>Gangguan pencernaan secara terus-menerus.</li><li>Luka yang tidak sembuh-sembuh.</li></ul><p>Idealnya,\r\n deteksi dini kanker tidak harus selalu dilakukan saat adanya gejala \r\nkanker, Anda juga bisa menjalani skrining atau pemeriksaan meski tidak \r\nmerasa ada yang aneh dengan tubuh Anda. Misalnya, rutin melakukan \r\npemeriksaan seperti mamografi. Hal ini akan membantu Anda mendeteksi \r\nkeberadaan <a href=\"https://www.sehatq.com/artikel/tinggi-sedang-rendah-apa-risiko-kanker-payudara-anda\" target=\"_blank\" rel=\"noopener\">kanker payudara</a> sedini mungkin.</p><h2><strong>Tahapan pemeriksaan dini kanker</strong></h2><p>Kanker\r\n dapat muncul di bagian tubuh mana saja. Namun untuk pemeriksaan, \r\nbiasanya tahapnya hampir sama untuk setiap jenis kanker. Berikut adalah \r\ntes-tes atau pemeriksaan yang dilakukan untuk deteksi dini kanker.</p><ul><li><h3><strong>Pemeriksaan fisik</strong></h3></li></ul><p style=\"padding-left: 30px;\">Pemeriksaan\r\n pertama yang akan dilakukan dalam langkah deteksi dini kanker adalah \r\npemeriksaan fisik sambil menanyakan keluhan yang dirasakan. Dokter akan \r\nmengecek ada tidaknya keanehan pada tubuh dengan melihat adanya \r\nbenjolan, perubahan warna kulit, atau pembengkakan.</p><ul><li><h3><strong>Tes laboratorium</strong></h3></li></ul><p style=\"padding-left: 30px;\">Langkah\r\n berikut dalam deteksi dini kanker adalah pemeriksaan laboratorium untuk\r\n mengetahui kadar senyawa atau komposisi tubuh Anda. Tes laboratorium \r\nmeliputi pemeriksaan urine, darah, dan cairan tubuh lainnya.</p><p style=\"padding-left: 30px;\">Terkadang,\r\n tes laboratorium tidak hanya meliputi cairan tubuh, tetapi juga \r\npengambilan sampel jaringan untuk memastikan ada tidaknya senyawa yang \r\nmensinyalir tumor dalam tubuh.</p><ul><li><h3><strong>Tes pencitraan</strong></h3></li></ul><p style=\"padding-left: 30px;\">Deteksi\r\n dini kanker berupa tes pencitraan menampilkan gambaran dalam tubuh Anda\r\n untuk memeriksa keberadaan tumor. Dokter dapat menggunakan berbagai tes\r\n pencitraan, seperti <em>x-ray</em>, <em>ct-scan</em>, <em>ultrasound</em>, MRI, pemeriksaan tulang, pemeriksaan nuklear, dan PET.</p><ul><li><h3><strong>Biopsi</strong></h3></li></ul><p style=\"padding-left: 30px;\">Umumnya,\r\n biopsi dilakukan untuk memeriksa ada tidaknya sel kanker dalam tubuh. \r\nBiopsi meliputi pengambilan sampel jaringan tubuh dan memeriksanya di \r\nbawah mikroskop serta melakukan berbagai tes pada jaringan tersebut.</p><p style=\"padding-left: 30px;\">Biopsi\r\n dapat dilakukan dengan menggunakan jarum suntik untuk mengambil cairan \r\natau jaringan ataupun dengan menggunakan metode endoskopi. Metode \r\nendoskopi dilakukan dengan memasukkan selang tipis yang fleksible untuk \r\nmemeriksa bagian dalam tubuh.</p><p style=\"padding-left: 30px;\">Endoskopi\r\n dalam dilakukan dengan memasukkan selang ke dalam dubur dan usus besar \r\n(kolonoskopi) atau memasukkan tabung tersebut ke dalam mulut atau hidung\r\n untuk memeriksa batang tenggorokan, saluran napas, dan paru-paru.</p><p style=\"padding-left: 30px;\">Tidak jarang, biopsi dilakukan melalui operasi. Operasi dilakukan dengan mengambil sampel sel abnormal yang berada dalam tubuh.</p><p style=\"padding-left: 30px;\">Setelah\r\n melalui deteksi dini kanker, Anda nantinya akan diberitahukan apakah \r\nAnda menderita kanker tertentu beserta stadium atau tingkat keparahan \r\nkanker yang menggerogoti Anda.</p><h2><strong>Apa yang harus dilakukan untuk mendukung kerabat yang menjalani deteksi dini kanker?</strong></h2><p>Bila\r\n Anda memiliki kerabat yang sedang mengikuti deteksi dini kanker, \r\nberikan dukungan moral serta kumpulkan berbagai informasi yang nantinya \r\nbisa Anda konfirmasi ke dokter yang melakukan pemeriksaan.</p><p>Jika \r\nkerabat dinyatakan mengalami kanker, Anda harus siap mendukung dan \r\nmenemani kerabat dalam proses penyembuhannya. Terapi yang digunakan \r\nuntuk mengobati kanker tak jarang membuat penderitanya mengalami \r\nkesedihan, depresi, serta mengubah mengalami perubahan komposisi kimiawi\r\n dalam tubuhnya.</p><p>Saat sedang menjalani pengobatan atau kanker \r\nsudah sembuh, Anda dan kerabat tetap harus beradaptasi kembali dalam \r\nmenjalani kehidupan sementara atau seusai penyembuhan kanker. Selain \r\nitu, Anda dan kerabat juga harus bersiap dengan kemungkinan kanker \r\nmuncul kembali.</p><p>Memiliki hubungan yang erat dan saling terbuka dengan satu sama lainnya adalah kunci untuk bisa melewati kanker bersama-sama.</p><p>Apabila\r\n kerabat mengalami kanker dengan stadium yang parah atau kanker yang \r\nmenyebar ke organ lainnya. Anda perlu untuk menemani dan setia \r\nmendengarkan keluh kesah dari kerabat, serta memberikan dukungan \r\nkepadanya.</p><p>Deteksi dini kanker sangat penting dilakukan untuk bisa\r\n menangkap kanker lebih awal dan mencegahnya bertambah parah atau \r\nmenyebar ke organ lainnya.</p>', '/uploads/images/beritadanartikel/artikel/1_Mengenal Pemeriksaan Deteksi Dini Kanker_1581162111.jpg', '2020-02-08 04:41:51', '2020-02-08 04:41:51'),
(2, 'Kesehatan', 'Asah Kemampuan Otak dengan Tidur Siang', '<p><b>likdokter.com, Jakarta</b>\r\n Apakah Anda sudah tidur siang hari ini? Jika belum, cobalah untuk \r\nlakukan esok hari. Hal ini bertujuan agar Anda bisa mendapatkan segudang\r\n manfaat kesehatan. Para ahli medis bahkan mengamini bahwa tidur siang \r\nsangatlah dianjurkan, baik dalam kondisi santai atau di sela aktivitas \r\nsehari-hari.</p>\r\n<p>Berdasarkan penelitian, tidur siang setiap hari selama 15–20 menit \r\ndapat membantu mengurangi stres, juga menurunkan risiko penyakit \r\njantung. Selain itu, performa kerja Anda juga akan membaik karena \r\ntingkat kewaspadaan dan fokus akan meningkat setelah tidur siang.</p><p>“Tidur siang selama 20 menit baik untuk meningkatkan fokus dan \r\nkemampuan motorik, seperti mengetik atau bermain piano. Sementara itu, \r\ntidur siang selama 30–60 menit dapat meningkatkan kemampuan dalam \r\nmembuat keputusan ataupun mengingat,” kata <strong>dr. Nadia Octavia</strong> dari <em>KlikDokter</em>.</p>\r\n<p>Lebih lanjut, dr. Nadia menambahkan bahwa tidur siang selama 60–90 menit dapat meningkatkan kemampuan <a href=\"https://www.klikdokter.com/tag/otak\" target=\"_blank\">otak</a> dalam menyelesaikan masalah ataupun bekerja kreatif.</p><h2 class=\"article-content-body__item-title\" data-component-name=\"desktop:read-page:article-content-body:section:pagetitle\">Tidur siang untuk memperkuat otak</h2><div class=\"article-content-body__item-content\" data-component-name=\"desktop:read-page:article-content-body:section:text\"><p>Senada\r\n dengan itu, sebuah penelitian baru yang diterbitkan dalam Journal of \r\nSleep Research mengatakan hal yang sama. Penelitian ini menyelidiki efek\r\n <a href=\"https://www.klikdokter.com/tag/tidur\" target=\"_blank\">tidur</a>\r\n siang singkat pada kemampuan otak untuk memproses informasi yang tidak \r\ndisadari. Para peneliti menemukan memori spesifik yang mampu memperkuat \r\norang saat sedang tertidur lewat isyarat pendengaran tertentu.</p>\r\n<p>Studi tersebut meneliti bagaimana tidur siang berdampak pada perilaku\r\n sadar dan waktu reaksi pilihan, yakni kecepatan otak saat memproses \r\ninformasi baru. Para peneliti mengukur aktivitas otak para peserta \r\nstudi, baik sebelum dan sesudah tidur siang menggunakan <em>elektroensefalogram</em>. Peneliti juga menguji sejumlah parameter lain guna mendukung hasil studi tersebut.</p>\r\n<p>Lewat serangkaian tahap, studi ini menemukan bahwa tidur siang \r\nmeningkatkan kecepatan pemrosesan otak. Terkait ini, para peneliti \r\nmengungkap bahwa waktu tidur yang singkat dapat membantu proses \r\ninformasi, meningkatkan waktu reaksi, dan berpotensi memengaruhi \r\nperilaku setelah bangun. Penemuan ini memperkuat gagasan bahwa informasi\r\n yang “dipahami\" secara tidak sadar akan diproses selama tidur untuk \r\nmembantu pengambilan keputusan ketika bangun.</p>\r\n<p>\"Penemuan ini luar biasa karena segalanya dapat terjadi tanpa adanya \r\nsuatu yang disengaja (kesadaran), yang secara implisit disajikan di \r\nbawah kesadaran para peserta,\" ujar peneliti dari Universitas Bristol \r\nMedical School di Inggris yang juga pemimpin studi, Liz Coulthard.</p>\r\n<p>Lebih lanjut, para peneliti berencana untuk melakukan lebih banyak \r\nstudi lanjutan tentang tidur siang dan kemampuan otak. Hal ini dilakukan\r\n agar para peneliti bisa mendapatkan hasil yang lebih akurat. Namun, \r\nlewat studi yang ada sekarang, peneliti percaya bahwa tidur siang memang\r\n dapat memberikan manfaat positif.</p><h2 class=\"article-content-body__item-title\" data-component-name=\"desktop:read-page:article-content-body:section:pagetitle\">Tips untuk bisa tidur siang</h2><p>Ingin memaksimalkan istirahat tengah hari dengan tidur siang? Lakukan rekomendasi dr. Nadia berikut ini:</p>\r\n<ul><li>\r\n<h3><strong>Konsisten</strong></h3>\r\n</li></ul>\r\n<p style=\"padding-left: 30px;\">Buatlah jadwal yang rutin dan konsisten \r\nterhadap kebiasaan tidur siang. Misalnya, tidur siang dari pukul 13.00 \r\nhingga 13.30 setiap hari.</p>\r\n<ul><li>\r\n<h3><strong>Cepat</strong></h3>\r\n</li></ul>\r\n<p style=\"padding-left: 30px;\">Anda tidak mau ‘<em>kan</em> dimarahi \r\natasan karena terlalu lama tidur? Pasang alarm pada ponsel selama 30 \r\nmenit atau kurang, agar tidak terburu-buru saat terbangun.</p>\r\n<ul><li>\r\n<h3><strong>Suasana</strong></h3>\r\n</li></ul>\r\n<p style=\"padding-left: 30px;\">Tidurlah di ruangan yang gelap atau gunakan penutup mata, agar Anda bisa lebih cepat tertidur.</p>\r\n<p>Sekarang Anda sudah tahu bahwa <a href=\"https://www.klikdokter.com/info-sehat/read/3616104/asah-kemampuan-otak-dengan-tidur-siang\" target=\"_blank\">tidur siang</a>\r\n membawa manfaat baik bagi otak. Jadi, apakah Anda berminat untuk \r\nmemaksimalkan istirahat siang dengan melakukan aktivitas sehat ini? \r\nIngatlah untuk tidak terlalu berlebihan, agar hal-hal yang tidak \r\ndiinginkan tak terjadi kemudian.</p></div>', '/uploads/images/beritadanartikel/artikel/2_Asah Kemampuan Otak dengan Tidur Siang_1581162351.jpg', '2020-02-08 04:45:51', '2020-02-08 04:45:51'),
(3, 'Kesehatan', 'Tips Fit Ditengah Kesibukan Kantor', '<p>Bagaimana menjaga agar tubuh tetap fit ditengah-tengah kesibukan kantor?</p>\r\n<p>Akhir-akhir ini, perawatan kesehatan menjadi topik yang hangat \r\ndiperbincangkan. Bahasannya tidak hanya seputar menjaga kesehatan di \r\nrumah namun juga saat bekerja di kantor. Beberapa perusahaan juga mulai \r\nserius dalam mempromosikan kesehatan para karyawannya.</p>\r\n<p>Bagi seorang pekerja, memiliki badan yang sehat memberi banyak \r\nmanfaat di antaranya lebih sedikit absen dari pekerjaan, produktivitas \r\nlebih besar, dan terhindar dari stres. Lalu, bagaimanakah cara agar para\r\n pekerja tetap sehat? Berikut adalah 10 aktivitas terbaik untuk menjaga \r\nkesehatan di tempat kerja.</p>\r\n<p><strong>Latihan ringan</strong><strong><br>\r\n</strong>Manfaatkan meja dan kursi kantor untuk berlatih fisik ringan. Kamu dapat melakukan&nbsp;<em>push-up&nbsp;</em>dengan bertumpu pada meja kerja yang akan melatih otot tangan, punggung, dan otot inti.</p>\r\n<p><strong>Cari kursi yang nyaman</strong></p>\r\n<p>Carilah dudukan dengan busa yang tebal dan ada penyangga tulang belakang agar kamu bisa tetap menjaga tubuhmu.</p>\r\n<p><strong>Latihan kardio di kantor</strong></p>\r\n<p>Manfaatkan tangga jika kamu mau mengunjungi rekan di lantai atas. \r\n&nbsp;Jika perlu, kamu sedikit berlari saat menaiki atau menuruninya hingga \r\nsedikit terengah seiring detak jantung yang meningkat.</p>\r\n<p><strong>Segarkan pandangan</strong></p>\r\n<p>Pada setiap 1-2 jam, layangkan pandangan kamu ke obyek yang jauh. \r\nCara ini berguna untuk menyegarkan pandangan sekaligus mengembalikan \r\nfleksibilitas otot dan lensa mata setelah lama memandangi komputer.</p>\r\n<p><strong>“Oase” sesaat</strong></p>\r\n<p>Tak hanya wanita yang boleh menempatkan barang-barang unik di meja \r\nkerja, pria juga bisa. Tujuannya adalah untuk menyegarkan pikiran saat \r\nkamu mulai merasa penat. Contoh meletakan <em>action figure</em> favorit atau pigura foto kebersamaan dengan anak, teman dan keluarga.</p>\r\n<p><strong>Atur layar monitor</strong></p>\r\n<p>Pastikan ketinggian layar monitor pas dengan mata agar tidak menyiksa\r\n otot leher kamu. Selain itu, atur pula terang dan kontras monitor agar \r\nmata kamu tak mudah lelah saat bekerja di depannya.</p>\r\n<p><strong>Relaksasi</strong></p>\r\n<p>Sempatkan untuk mencari hiburan, seperti menonton acara favorit di televise atau mendegarkan lagu favorit Anda.</p>\r\n<p><strong>Input&nbsp;dan&nbsp;output&nbsp;cairan</strong></p>\r\n<p>Suhu ruangan ber-AC memang tidak membuat kita mudah haus, tapi \r\nkondisi itu justru membuat tubuh kita dehidrasi, sehingga harus terus \r\nmendapat asupan cairan. Selain itu, kita pun harus secara teratur \r\nberkemih. Jangan ditahan karena akan memperberat kerja ginjal. Maka \r\nsebaiknya setiap pagi sebelum memulai pekerjaan, siapkan satu&nbsp;water \r\npot&nbsp;di atas meja kerja.</p>\r\n<p><strong>Duduk seimbang</strong></p>\r\n<p>Duduklah dengan seimbang, dengan posisi tubuh tegap menghadap layar komputer. Ini akan mencegah tubuh kamu jadi bongkok.</p>\r\n<p><strong>Manfaatkan peregangan</strong></p>\r\n<p>Jangan hanya jari-jari tangan dan leher, regangkan pula punggung kamu yang menopang selama duduk agar tetap seimbang.</p>', '/uploads/images/beritadanartikel/artikel/3_Tips Fit Ditengah Kesibukan Kantor_1581162480.jpg', '2020-02-08 04:48:00', '2020-02-08 04:48:00'),
(4, 'Kesehatan', '08 Februari 2020  Waspada, Ini 6 Bahaya Konsumsi Telur Puyuh Berlebihan', '<p>Kamu pastinya sudah tidak asing lagi dengan jenis makanan yang satu ini.\r\n Yup, telur puyuh memang banyak dikonsumsi di Indonesia. Berbagai menu \r\nolahan telur puyuh pastinya sangat mudah kamu temui seperti sate tusuk, \r\nsemur, atau dicampur dalam tumis sayur.</p><p>Telur puyuh memiliki bentuk yang lebih kecil dari telur ayam dan \r\nmemiliki rasa yang gurih. Pastinya telur puyuh juga memiliki berbagai \r\nmanfaat antara lain menjaga kesehatan mata, meningkatkan kesehatan gigi \r\ndan meningkatkan stamina. Namun, telur puyuh juga membahayakan kesehatan\r\n jika dikonsumsi secara berlebihan lho. Apa saja sih bahaya telur puyuh \r\nini? Yuk, simak!</p><h2>1. Menimbulkan gejala alergi</h2><p>Telur puyuh tinggi akan protein, namun bagi tubuh yang tidak kuat \r\ndengan protein hewani yang tinggi justru akan berbahaya. Tubuh yang \r\ntidak bisa menerima asupan protein hewani yang tinggi akan mengeluarkan \r\nantibodi imunoglobin yang akan melawan protein yang masuk ke dalam tubuh\r\n sehingga menyebabkan reaksi alergi.</p><p>Alergi yang ditimbulkan ini bisa bermacam-macam antara lain gatal, ruam-ruam pada kulit, sesak napas dan kepala pusing.</p><h2>2.	Gangguan pencernaan</h2><p>Sering mengonsumsi telur puyuh, sangat tidak disarankan lho. Hal ini \r\ndikarenakan telur puyuh memiliki kandungan lemak dan protein yang sangat\r\n tinggi. Apabila lemak dan protein itu tidak dapat dicerna di dalam \r\ntubuh, maka akan mengakibatkan beberapa gangguan pencernaan seperti \r\nradang lambung (gastritis) hingga diare.</p><h2>3. Tidak cocok bagi wanita hamil</h2><p>Wanita hamil tidak diperkenankan mengonsumsi telur puyuh berlebih. \r\nHal ini dikarenakan kandungan kolesterol tinggi yang memicu timbulnya \r\nlemak jahat. Selain itu telur puyuh harus dipastikan dimasak dengan \r\nmatang atau jangan setengah matang karena dikhawatirkan akan memicu \r\nbakteri salmonella yang berbahaya bagi janin.</p><p>Bakteri salmonella \r\nyang menyerang wanita hamil dapat berisiko mengakibatkan kontraksi dini \r\nsehingga bisa menyebabkan risiko keguguran jika terjadi pada trimester \r\npertama. Namun, apabila terjadi di trimester kedua dan ketiga bisa \r\nmenyebabkan kelahiran secara prematur atau lahir belum pada waktunya.</p>', '/uploads/images/beritadanartikel/artikel/4_08 Februari 2020  Waspada, Ini 6 Bahaya Konsumsi Telur Puyuh Berlebihan_1581162652.jpg', '2020-02-08 04:50:52', '2020-02-08 04:50:52'),
(6, 'Kesehatan', '9 Efek Samping Vaksin, Tidak Sebanding dengan Dampak Wabah Mematikan', '<p>Vaksin adalah inovasi yang mengubah wajah dunia akan kesehatan. Dilansir dari tulisan <em>chop.edu</em>,\r\n setidaknya vaksin ditemukan pada 1796 untuk memerangi cacar air dan \r\nseterusnya dikembangkan hingga mampu menghalangi perkembangan polio \r\nserta campak.</p><p>Kanal YouTube <em>Kurzgesagt</em> –<em> In a Nutshell</em> dalam videonya “<em>The Side Effects of Vaccines - How High is the Risk</em>?”\r\n menjelaskan bagaimana cara kerja vaksin di dalam tubuh. Pada dasarnya \r\ntubuh kita secara spontan akan membuat antibodi suatu penyakit dengan \r\ncara mengingat penyakit apakah yang masuk dalam tubuh. Namun prosesnya \r\ncukup membutuhkan waktu lama hingga sebelum terbentuk imun tubuh, bisa \r\njadi ada penyakit lebih lanjut yang masuk.</p><p>Vaksin mencoba \r\nmengatasi masalah itu dengan cara memasukkan bakteri atau virus penyakit\r\n yang sudah dilemahkan. Tubuh pun menjadi lebih mudah memprosesnya. Ini \r\nmembuat risiko penyakit parah berkurang dengan pembentukan imun yang \r\nlebih cepat.</p><p>Namun tidak bisa diabaikan, terdapat efek samping dari penerimaan vaksin. Dilansir dari <em>vaccines.gov</em> dan sumber-sumber lainnya, berikut adalah beberapa efek samping vaksin.</p><h2>1. Adanya rasa sakit, bengkak atau kemerahan pada area yang disuntik</h2><p>Salah satu efek yang paling bisa diamati dari suntikan vaksin adalah \r\nadanya bekas kemerahan di area suntikannya. Hal ini akan cepat hilang \r\ndengan sendirinya dan seharusnya tidak akan memakan waktu satu hari \r\nuntuk hilang. Rata-rata akan hilang dalam waktu 12 jam.</p><h2>2. Demam rendah</h2><p>Diambil dari<em> seattlechildrens.org</em>, demam umum didapat setelah \r\nmendapatkan vaksinasi. Itu biasa terjadi setelah 12 jam penyuntikan dan \r\ndapat berlangsung hingga dua, tiga hari lamanya. Panggil atau periksa ke\r\n dokter jika demam lebih dari tiga hari dan kembali lagi setelah kurun \r\nwaktu 24 jam.</p><h2>3. Kedinginan</h2><p>Vaksin tetanus umum memberikan efek ini. Menurut <em>Centers for Disease Control and Prevention</em> (CDC), efek samping ini hanya terjadi pada satu dari 10 anak. Tenang, gejala ini tidak sampai mengganggu kegiatan sehari-hari.</p><h2>4. Kelelahan</h2><p>Ini adalah respons paling umum yang orang-orang dapatkan. Menurut <em>Medical News Today</em>,\r\n kelelahan itu merupakan bentuk proses tubuh membentuk imunitas karena \r\nmembutuhkan energi yang cukup besar. CDC memperkirakan satu dari empat \r\norang akan merasakan ini.</p>', '/uploads/images/beritadanartikel/artikel/6_9 Efek Samping Vaksin, Tidak Sebanding dengan Dampak Wabah Mematikan_1581162903.jpg', '2020-02-08 04:55:03', '2020-02-08 04:55:03'),
(7, 'Kesehatan', 'Sindrom CRIA, Penyakit Autoinflamasi Baru', '<p>Para ilmuwan dari Australia dan AS telah menemukan dan \r\nmengidentifikasi penyebab genetik dari penyakit autoinflamasi manusia \r\nyang sebelumnya tidak diketahui.</p>\r\n\r\n<p>Para peneliti menentukan bahwa penyakit autoinflamasi, yang mereka \r\nnamakan sindrom CRIA (pembelahan tahan RIPK1 yang diinduksi \r\nautoinflamasi), disebabkan oleh mutasi pada komponen kematian sel kritis\r\n yang disebut RIPK1.</p>\r\n\r\n<p>Tim peneliti dipimpin oleh Dr. Najoua Lalaoui dan Profesor John Silke dari <a href=\"https://www.wehi.edu.au/\">Walter and Eliza Hall Institute of Medical Research</a>, Australia, dan Dr. Steven Boyden, Dr. Hirotsugu Oda dan Dr. Dan Kastner dari <a href=\"https://www.genome.gov/\">National Research Genome Research Institute</a> di National Institutes of Kesehatan (NIH), AS.</p><p>Dr. Lalaoui mengatakan tim peneliti telah mengidentifikasi penyakit \r\nautoinflamasi manusia yang baru dan mutasi terkait dalam molekul \r\nkematian sel kritis yang mendorong penyakit tersebut.</p>\r\n\r\n<p>\"Jalur kematian sel telah dikembangkan dalam serangkaian mekanisme \r\nyang mengatur sinyal inflamasi dan kematian sel, karena alternatifnya \r\nsangat berpotensi berbahaya,\" katanya. \"Namun pada penyakit ini, mutasi \r\npada RIPK1 mengatasi semua pemeriksaan dan keseimbangan normal yang ada,\r\n yang mengakibatkan kematian dan peradangan sel yang tidak terkendali.\"</p>\r\n\r\n<p>Penyakit autoinflamasi disebabkan oleh aktivasi abnormal dari sistem \r\nkekebalan tubuh bawaan, yang mengarah ke episode berulang seperti demam \r\ndan peradangan yang dapat merusak organ-organ vital.</p>\r\n\r\n<p>Dalam makalah tersebut, para peneliti menggambarkan pasien dari tiga \r\nkeluarga dengan riwayat demam tinggi episodik dan pembengkakan kelenjar \r\ngetah bening yang menyakitkan. Para pasien, yang didiagnosis dengan \r\npenyakit autoinflamasi baru (sindrom CRIA), memiliki sejumlah gejala \r\nperadangan lain yang dimulai sejak masa kanak-kanak dan berlanjut hingga\r\n usia dewasa.</p>\r\n\r\n<p>Dr Boyden mengatakan, petunjuk pertama bahwa penyakit itu terkait \r\ndengan kematian sel adalah ketika mereka menggali ke dalam eksome \r\npasien--bagian dari genom yang menyandikan semua protein dalam tubuh.</p>\r\n\r\n<p>\"Kami merangkai seluruh eksome dari setiap pasien dan menemukan \r\nmutasi unik dalam asam amino yang sama persis dengan RIPK1 di \r\nmasing-masing dari tiga keluarga,\" kata Dr Boyden. \"Ini luar biasa, \r\nseperti kilat yang menyerang tiga kali di tempat yang sama. \r\nMasing-masing dari tiga mutasi memiliki hasil yang sama--ia memblokir \r\npembelahan RIPK1--yang menunjukkan betapa pentingnya pembelahan RIPK1 \r\ndalam mempertahankan fungsi normal sel.\"</p>\r\n\r\n<p>Lalaoui mengatakan bahwa peneliti Walter dan Eliza Hall Institute \r\nmengkonfirmasi hubungan antara mutasi RIPK1 dan sindrom CRIA dalam model\r\n laboratorium. \"Kami menunjukkan bahwa dengan mutasi di lokasi yang sama\r\n seperti pada sindrom CRIA, pasien memiliki peradangan yang sama,\" \r\nkatanya.</p>\r\n\r\n<p><strong>Potensi untuk perawatan baru</strong></p>\r\n\r\n<p>Dan Kastner - secara luas dianggap sebagai \'bapak penyakit \r\nautoinflamasi\' - mengatakan tim NIH telah merawat pasien sindrom CRIA \r\ndengan sejumlah obat anti-inflamasi, termasuk kortikosteroid dan \r\nbiologik dosis tinggi. Meskipun beberapa pasien secara nyata membaik \r\ndengan penghambat interleukin-6, yang lain menanggapi dengan kurang \r\nbaik.</p>\r\n\r\n<p>\"Memahami mekanisme molekuler di mana sindrom CRIA menyebabkan \r\nperadangan memberi peluang untuk memperbaiki akar masalahnya,\" kata Dr. \r\nKastner.</p>\r\n\r\n<p>Dr. Kastner mencatat bahwa penghambat RIPK1 yang tersedia, dapat \r\nmemberikan pendekatan \'obat presisi\' yang terfokus untuk merawat pasien.</p>\r\n\r\n<p>\"Inhibitor RIPK1 mungkin tepat seperti yang diperintahkan dokter \r\nuntuk pasien ini. Penemuan sindrom CRIA juga menunjukkan kemungkinan \r\nperan RIPK1 dalam spektrum luas penyakit manusia, seperti kolitis, \r\nradang sendi, dan psoriasis.\"</p><p><strong>Kematian sel dan penyakit</strong></p>\r\n\r\n<p>Beberapa laboratorium di Walter dan Eliza Hall Institute \r\ndidedikasikan untuk mengatakan jalur rumit yang terkait dengan sel \r\nkematian. Penelitian kematian sel dimulai di Institute pada 1980-an, \r\ndengan penemuan bahwa mutasi pada protein Bcl-2 dapat menjaga sel kanker\r\n tetap hidup.</p>\r\n\r\n<p>Profesor Silke telah mempelajari kematian sel selama lebih dari 20 \r\ntahun, dan mengatakan RIPK1 adalah regulator penting peradangan dan \r\nkematian sel.</p>\r\n\r\n<p>\"RIPK1 adalah molekul yang kuat,\" kata Profesor Silke. \"Sel telah \r\nmengembangkan cara mengelola efeknya, yang meliputi membelah RIPK1 \r\nmenjadi dua bagian untuk \'melucuti\' molekul dan menghentikan aktivitas \r\nperadangannya. Pada penyakit autoinflamasi ini, mutasi mencegah molekul \r\ndari dibelah menjadi dua bagian, menghasilkan dalam kematian sel dan \r\nperadangan sel yang tidak terkendali. \"</p>\r\n\r\n<p>Profesor Silke mengatakan RIPK1 adalah protein kompleks, dengan peran dalam jalur kematian sel.</p>\r\n\r\n<p>\"Mutasi pada RIPK1 dapat mendorong peradangan yang terlalu banyak - \r\nseperti pada autoinflamasi dan penyakit autoimun, serta peradangan yang \r\nterlalu sedikit, yang mengakibatkan defisiensi imun. Masih banyak yang \r\nharus dipelajari tentang beragam peran RIPK1 dalam kematian sel, dan \r\nbagaimana kita dapat secara efektif menargetkan RIPK1 untuk mengobati \r\npenyakit, \"kata Profesor Silke.\r\n</p>', '/uploads/images/beritadanartikel/artikel/7_Sindrom CRIA, Penyakit Autoinflamasi Baru_1581163010.jpg', '2020-02-08 04:56:50', '2020-02-08 04:56:50'),
(8, 'Kesehatan', 'Teknologi Artificial Intelligence (AI) yang akan Memengaruhi Industri Kesehatan di Tahun 2020', '<p>Pada awal tahun ini, terbit satu penelitian tentang ancaman baru \r\nterhadap privasi data kesehatan masyarakat. Upaya yang bisa dibaca \r\nsebagai langkah awal untuk menangkal sisi lain dari AI. Sisi buruk yang \r\nsebenarnya merupakan keniscayaan dalam perkembangan teknologi apapun. \r\nSeperti dua sisi sekeping koin logam.</p>\r\n\r\n<p>Temuan tersebut menunjukkan bahwa dengan menggunakan kecerdasan \r\nbuatan, dimungkinkan untuk mengidentifikasi individu dengan mempelajari \r\npola harian dalam data langkah, seperti yang dikumpulkan oleh pelacak \r\naktivitas, jam tangan pintar, dan ponsel cerdas yang menghubungkannya \r\ndengan data demografis.</p>\r\n\r\n<p>\"Pada prinsipnya, Anda bisa membayangkan Facebook mengumpulkan data \r\nlangkah dari aplikasi di ponsel cerdas Anda, lalu membeli data perawatan\r\n kesehatan dari perusahaan lain dan mencocokkan keduanya,\" tambahnya. \r\n\"Sekarang mereka akan memiliki data perawatan kesehatan yang cocok \r\ndengan nama, dan mereka bisa mulai menjual iklan berdasarkan itu atau \r\nmereka dapat menjual data kepada orang lain,\" ungkap Anil Aswani, \r\npemimpin penelitian, dari UC Berkeley.</p>\r\n\r\n<p>Berbagai penelitian dan kajian pun telah banyak diterbitkan dan \r\nmenjadi peringatan sejenis baik tentang AI maupun bahaya Big data yang \r\ndikuasai para Big Tech. Namun, sudah seperti keniscayaan pula, di dalam \r\nperkembangan teknologi, inovasinya akan selalu lebih menggoda daripada \r\nberbagai bentuk pencegahan sisi buruknya. Termasuk Artificial \r\nIntelligence dalam dunia kesehatan.</p>\r\n\r\n<p>Kemajuan dalam AI membuat perusahaan lebih mudah mendapatkan akses ke\r\n data kesehatan, godaan bagi perusahaan untuk menggunakannya dengan cara\r\n ilegal atau tidak etis akan meningkat. Pengusaha, pemberi pinjaman \r\nhipotek, perusahaan kartu kredit dan lainnya berpotensi menggunakan AI \r\nuntuk melakukan diskriminasi berdasarkan status kehamilan atau cacat, \r\nmisalnya.</p>\r\n\r\n<p>\"Idealnya, apa yang ingin saya lihat dari ini adalah peraturan atau aturan baru yang melindungi data kesehatan,\" kata Aswani.</p>\r\n\r\n<p><strong>AI dan Perawatan Kesehatan 2020</strong></p>\r\n\r\n<p>Visi baru untuk perawatan kesehatan untuk tahun 2020 dan seterusnya \r\ntidak hanya akan fokus pada akses, kualitas, dan keterjangkauan tetapi \r\njuga pada model perawatan berbasis prediksi, preventif, dan hasil yang \r\nmempromosikan inklusi sosial dan finansial.</p>\r\n\r\n<p>Itulah yang menjadi dasar satu tim di Frost &amp; Sullivan \r\nTransformational Healthcare Group yang setiap tahun melakukan kajian dan\r\n melihat berbagai kemungkinan terkait tema, teknologi, dan kekuatan \r\nglobal yang akan menentukan 12 hingga 18 bulan ke depan dalam industri \r\nkesehatan.</p>\r\n\r\n<p>Untuk prediksi 2019 yang dirilis pada November 2018, enam dari \r\ndelapan prediksi mereka terwujud, sementara dua prediksi yang tersisa \r\nbelum berjalan persis seperti yang diprediksikan.</p>\r\n\r\n<p>Tahun 2020 akan menjadi pemeriksaan untuk perumusan kebijakan \r\nkesehatan nasional yang lama tertunda dan reformasi regulasi yang harus \r\nmemperkuat strategi masa depan. Tiongkok akan terus mengejar AS dalam \r\nbeberapa metrik kesehatan penting karena berusaha menjadi \"sistem \r\nkesehatan terbaik dan termurah di dunia.\"</p>\r\n\r\n<p>Berikut prediksi mereka tentang AI dan teknologi kesehatan di tahun 2020:\r\n</p>\r\n\r\n<ol><li><strong>AI mengembangkan lebih banyak kasus penggunaan dan menghadapi lebih banyak tantangan etis. Dimulai dengan radiologi.</strong></li></ol><p>\r\nMeskipun kinerja AI menjadi lebih maju dengan tingkat akurasi untuk \r\nmendiagnosis dan mendeteksi penyakit, masih ada pertanyaan yang akan \r\nmuncul: Apa yang terjadi jika terjadi kesalahan (terutama dari komunitas\r\n radiologi)?</p>\r\n\r\n<p>Cara yang dianggap paling aman bagi dokter untuk menggunakan AI, dari\r\n perspektif kewajiban, lebih sebagai \"alat konfirmasi\" untuk praktik \r\nterbaik yang ada, bukan sebagai cara untuk meningkatkan perawatan dengan\r\n wawasan baru. Sementara aplikasi AI di pasar pencitraan medis \r\ndiproyeksikan mencapai $ 400 juta pada tahun 2020, para pemula dan \r\ninovator akan dipaksa untuk memikirkan kembali penggunaan data dan \r\npelatihan, validasi, dan praktik implementasi untuk meyakinkan komunitas\r\n tentang penggunaan yang adil, etis, dan tidak membahayakan.</p>\r\n\r\n<p>Di sektor farmasi, transaksi investasi AI akan terus meningkat, terutama untuk aplikasi penemuan obat.</p>\r\n\r\n<p>Prediksi ini juga mengantisipasi molekul pertama yang ditemukan \r\nmenggunakan AI untuk memasuki uji klinis fase awal dalam 12 hingga 18 \r\nbulan ke depan.\r\n</p>\r\n\r\n<ol><li><strong>Model berbasis anuitas untuk komersialisasi terapi gen catapult</strong></li></ol><p>\r\nModel pembayaran, termasuk berbasis hasil, reasuransi, berbasis \r\npendapatan atau penetapan harga dinamis, sedang diuji coba di seluruh \r\ndunia, tetapi kekurangan seperti pemantauan yang tidak tepat, dampak \r\nterapi jangka panjang dan keterlibatan beberapa pembayar asuransi telah \r\nmencegah penggunaannya yang meluas.</p>\r\n\r\n<p>Keberlanjutan model penggantian berbasis anuitas akan membuka potensi\r\n komersialisasi terapi gen dan mencapai pendapatan $ 2 miliar pada akhir\r\n tahun 2020. Bersama perusahaan asuransi swasta terkemuka seperti Cigna \r\ndan CVS, produsen terapi gen terkemuka seperti Novartis, Bluebird Bio , \r\ndan Spark Therapeutics akan terus mengeksplorasi program penggantian \r\nkhusus berbasis anuitas untuk meringankan beban pengeluaran yang tinggi \r\noleh pasien.\r\n</p>\r\n\r\n<ol><li><strong>Mega-round pendanaan VC yang berkelanjutan menjadikan 2020 sebagai tahun promosi untuk IPO Digital Health Unicorns</strong></li></ol><p>\r\nAda dua alasan para peneliti mengharapkan peningkatan aktivitas IPO \r\ndalam 12 hingga 18 bulan ke depan. Pertama, pada pertengahan tahun 2019,\r\n ada sekitar 38 unicorn perawatan kesehatan yang didukung VC senilai \r\nvaluasi gabungan lebih dari $ 70 miliar, dan total penilaian kohort pada\r\n 2019 terus tumbuh sebagai hasil dari mega-putaran lanjutan untuk \r\nunicorn yang ada, seperti 23andme, Tempus, dan Doctolib (di AS); \r\nBenevolentAI dan Oxford Nanopore Technologies (di Inggris); Ottobock \r\n(perusahaan prosthetics Jerman); United Imaging, Yitu, Henlius, iCarbon \r\nX, dan We Doctor di Cina, dan lainnya.</p>\r\n\r\n<p>Kedua, dalam beberapa tahun terakhir, M&amp;A telah menjadi opsi \r\nkeluar yang disukai jika dibandingkan dengan IPO. Misalnya, antara \r\n2014-2019 (Q1), telah ada 576 M&amp;A dibandingkan dengan hanya 15 IPO \r\ndi ruang kesehatan digital (meskipun IPO di ruang kesehatan digital \r\nberkinerja sebanding dengan rekan-rekan mereka).</p>\r\n\r\n<p>Namun, M&amp;A ini dapat memperumit kontras yang ada saat ini dengan \r\nperusahaan inti yang mengikuti akuisisi oleh pesaing. Seiring \r\npeningkatan dan kesepakatan pembagian dana VC tahap selanjutnya, seiring\r\n dengan peningkatan aktivitas IPO selama 2019, lima unicorn kesehatan \r\ndigital diprediksi akan keluar melalui IPO pada akhir 2020.\r\n</p>\r\n\r\n<ol><li><strong>Interoperabilitas oleh vendor pure-play</strong></li></ol><p>\r\nInteroperabilitas akhirnya akan mengambil langkah besar ke depan dalam \r\nhal kebijakan pemerintah, penerimaan vendor, dan fokus strategis oleh \r\npenerima IT kesehatan.</p>\r\n\r\n<p>Solusi yang berdiri sendiri dan tidak memungkinkan mobilitas data \r\nakan kehilangan landasan signifikan atau tidak akan dibeli. Pemerintah \r\nAS akan mengambil langkah signifikan ke depan untuk memaksa industri \r\nuntuk memungkinkan interoperabilitas dalam catatan medis pasien, \r\nmenyalakan kembali pergeseran ke catatan kesehatan pribadi versus \r\ncatatan kesehatan perusahaan.</p>\r\n\r\n<p>Di kawasan Eropa, solusi interoperabilitas akan mengumpulkan \r\npermintaan yang kuat karena sistem kesehatan progresif dalam rencana Uni\r\n Eropa untuk mencapai tonggak Rencana Aksi eHealth UE 2012-2020 (EHAP), \r\ntermasuk pertukaran lintas batas data kesehatan pasien dan Peraturan \r\nPerlindungan Data Umum. Sebagian besar negara berkembang di kawasan \r\nseperti Asia dan Afrika sering ada dalam posisi \"kaya data tetapi miskin\r\n informasi.\"</p><p>Banyak dari negara-negara ini mengembangkan kebijakan eHealth \r\nnasional mereka (misalnya, India) dan cenderung merangkul sistem yang \r\ndapat dioperasikan dari tahap awal untuk memastikan skalabilitas di masa\r\n depan.</p>\r\n\r\n<p>Industri kesehatan berupaya untuk memperluas penggunaan sistem dan \r\nkerangka kerja terbuka, termasuk standar seperti API dan integrasi \r\nplatform, untuk menyelesaikan interoperabilitas sistem HIT dan tantangan\r\n integrasi data. Pada akhir dekade mendatang, catatan kesehatan pribadi \r\n(PHR) berbasis blockchain akan dianggap mendasar untuk memastikan akses \r\ndan kepemilikan data kesehatan individu.\r\n</p>\r\n\r\n<ol><li><strong>Telehealth akan berkembang melampaui fokus saat ini</strong></li></ol><p>\r\nPada akhir tahun 2020, sistem kesehatan progresif akan mulai memandang \r\ntelehealth sebagai pilihan standar perawatan untuk konsultasi virtual \r\nperawatan primer. Dalam 2-3 tahun ke depan, telehealth akan memiliki \r\npersetujuan pengaturan penuh dan dukungan dokter.</p>\r\n\r\n<p>Telemedicine berjanji untuk memecahkan masalah yang paling menantang \r\ndalam sistem perawatan kesehatan di tahun-tahun mendatang, memungkinkan \r\nakses ke perawatan dengan cara yang hemat biaya. Dengan dibukanya pintu \r\npenggantian untuk layanan telehealth di negara-negara utama ini, \r\nprospeknya telah meningkat tajam, dan lanskapnya berubah dengan beberapa\r\n proyek yang dilakukan dalam beberapa bulan terakhir.</p>\r\n\r\n<p>Layanan kesehatan AS akan menawarkan pasien lebih banyak pilihan di \r\nluar jaringan, sedangkan China berencana untuk mencakup 70% dari rumah \r\nsakit umum negara di bawah program telemedicine yang didukung pemerintah\r\n pada tahun 2022. Dalam 2-5 tahun ke depan, 5G nirkabel akan tingkatkan \r\npotensi telehealth.\r\n</p>\r\n\r\n<ol><li><strong>Pendekatan obat presisi akan membuka jalan bagi solusi analitik data kesehatan generasi berikutnya</strong></li></ol><p>\r\nDalam dekade mendatang, platform analitik kognitif yang mampu \r\nmemanfaatkan data genomik, klinis, dan gaya hidup yang tersedia untuk \r\nmemberikan wawasan klinis yang dapat ditindaklanjuti akan menjembatani \r\njarak terakhir untuk pengobatan presisi ke dalam praktik klinis.</p>\r\n\r\n<p>Pasar layanan informatika kedokteran presisi akan melewati batas $ 5 miliar pada akhir tahun 2020.</p>\r\n\r\n<p>Platform wawasan kognitif berbasis obat SaaS dengan \r\ninteroperabilitas, keamanan, dan multi-modal yang diinginkan secara \r\nfungsional dalam ekosistem yang saling terkait antara para pembayar, \r\npenyedia, dan pharma akan mendapatkan daya tarik pasar. Baik penyedia \r\naplikasi plug-in dan vendor dengan solusi analitik terintegrasi terkait \r\ndengan platform EHR atau PHM populer diharapkan untuk mendapatkan \r\npenerimaan pasar, karena sistem kesehatan yang besar, dalam peralihan ke\r\n perawatan berbasis nilai, dipaksa untuk menggunakan beberapa mitra \r\nanalitik untuk kepuasan komprehensif.\r\n</p>\r\n\r\n<ol><li><strong>Tahun 2020 akan menjadi tahun \'Ritelisasi\' untuk industri kesehatan.</strong></li></ol><p>\r\nSalah satu perubahan momentum yang mulai kita lihat dalam industri \r\nperawatan kesehatan adalah “konsumerisme kesehatan,” di mana pasien / \r\nkonsumen menuntut pengalaman pembelian seperti ritel untuk memanfaatkan \r\nlayanan dan produk perawatan kesehatan.</p>\r\n\r\n<p>\"Ritelisasi\" industri kesehatan sebagian besar didorong oleh pasien \r\nyang diberdayakan. Digitalisasi produk, layanan, dan model perdagangan \r\nmendemokratisasikan sistem perawatan kesehatan saat ini, mewujudkan \r\nkonsep pola pikir konsumen \"Pembandingan Belanja\".</p>\r\n\r\n<p>Tahun 2020 adalah tonggak yang sangat dinanti dan pasti akan menjadi \r\ntahun yang menggairahkan bagi perawatan kesehatan untuk mengkalibrasi \r\nulang tonggak dan visi strategis untuk dekade mendatang.</p>', '/uploads/images/beritadanartikel/artikel/8_Teknologi Artificial Intelligence (AI) yang akan Memengaruhi Industri Kesehatan di Tahun 2020_1581163097.png', '2020-02-08 04:58:17', '2020-02-08 04:58:17'),
(9, 'Kesehatan', 'Tantangan dan Strategi Sistem Kesehatan Digital', '<div class=\"article-content\" style=\"word-break: break-word;\">\r\n					\r\n					\r\n					<p>Lebih dari separuh orang di seluruh dunia, masih belum memiliki \r\nakses penuh kepada layanan kesehatan dasar dan hampir 100 juta orang \r\njatuh dalam kemiskinan ekstrem karena membayar perawatan kesehatan.</p>\r\n\r\n<p>Di Asia Tenggara, beberapa kemajuan positif telah dibuat dalam mencapai <a href=\"https://www.who.int/news-room/fact-sheets/detail/universal-health-coverage-(uhc)\">cakupan kesehatan universal</a> (UHC).</p>\r\n\r\n<p>Dari data yang ada, <a href=\"http://www.searo.who.int/entity/noncommunicable_diseases/en/\">62% kematian sekarang disebabkan oleh penyakit tidak menular (NCD)</a> dengan sistem perawatan primer berada pada posisi yang buruk untuk ditangani.</p>\r\n\r\n<p>Akses layanan dan model pelayanan itu sendiri, seringkali gagal untuk\r\n melayani masyarakat di daerah terpencil secara memadai. Data \r\nmenunjukkan bahwa populasi pedesaan di Asia Tenggara masih menghadapi \r\ntantangan terus-menerus dalam mengakses layanan kesehatan dasar \r\ndibandingkan dengan mereka yang berada di wilayah perkotaan.</p>\r\n\r\n<p>Untuk mengatasi tantangan tersebut dan mencapai cakupan kesehatan \r\nuniversal, para pelaku dalam sistem perawatan kesehatan harus sepenuhnya\r\n merangkul teknologi digital untuk bergerak melampaui kondisi yang \r\nselama ini terjadi.</p>\r\n\r\n<p><strong>Solusi Kesehatan Digital</strong></p>\r\n\r\n<p>Peluang dan tantangan dalam teknologi, mendorong terobosan eksplosif \r\nuntuk solusi kesehatan digital di masyarakat yang berfokus pada \r\nteknologi. Aksesibilitas, kenyamanan, dan mobilitas kesehatan digital \r\ntelah menciptakan perubahan budaya dalam cara kita menggunakan, \r\nmemproses, dan menyediakan solusi perawatan kesehatan.</p>\r\n\r\n<p>Pergeseran transformasional ini juga telah memodifikasi cara \r\nseseorang menggunakan dan memperoleh informasi dari produk dan pengguna \r\ndalam skenario dunia nyata, mendorong minat dari banyak industri.</p>\r\n\r\n<p>Kementerian Kesehatan menggelar Parade Inovasi Bidang Kesehatan 2019.\r\n Ada 92 inovasi yang dipamerkan, salah satunya peluncuran Aplikasi \r\nSehatPedia 2.0 oleh Kementerian Kesehatan.</p>\r\n\r\n<p>Aplikasi ini merupakan pengembangan dari aplikasi sebelumnya, yang \r\nberubah menjadi 8 fitur seperti health chat, health article, healthcare,\r\n live fit, E-Policy, E-Magz, E-Journal, dan Medical ID.</p>\r\n\r\n<p>Namun, aplikasi kesehatan yang tercakup dalam bagian pelayanan hanyalah satu hal.&nbsp; Dalam “<a href=\"https://www.raps.org/news-and-articles/news-articles/2019/11/emerging-digital-health-solutions-inherent-challe\">Emerging Digital Health Solutions: Inherent Challenges in the Technology Driven World</a>,”\r\n pakar perangkat dan kesehatan digital, Darin Oppenheimer, George \r\nCusatis, Suraj Ramachandran dan Jessica Hale, mengeksplorasi tantangan \r\nsolusi kesehatan digital dan menekankan kontrol yang tepat yang \r\ndiperlukan untuk membantu mengurangi risiko dan memastikan perusahaan \r\nmematuhi meningkatnya kebutuhan regulator dan praktik terbaik dalam \r\nindustri tersebut.</p>\r\n\r\n<p>Kesehatan digital terus mendominasi investasi swasta, kebijakan \r\npolitik, minat regulasi, dan percakapan publik. Meskipun masing-masing \r\npembahasan tersebut memiliki tujuan yang berbeda, satu faktor umum \r\nmenyatukan mereka — ketidakmampuan untuk mengikuti laju perubahan.</p>\r\n\r\n<p>Tahun 2019 menandai periode di mana pertemuan dari inovasi dan \r\nancaman yang ditimbulkannya, memicu perlunya memeriksa secara kritis \r\ndampak dan konsekuensi yang tidak diinginkan dari sektor “big tech” yang\r\n dinamis dan relatif tidak terkendali.</p>\r\n\r\n<p>Internet telah menyediakan cara yang mudah untuk berbagi informasi \r\nsecara global dan instan. Karena fungsi internet telah meningkat, volume\r\n data turut meningkat karena data tersedia dan diproses dari dan oleh \r\nbanyak sumber.</p>\r\n\r\n<p>Pravan Naidoo, menangani masalah rumit ini dalam “<a href=\"https://www.raps.org/news-and-articles/news-articles/2019/11/big-data-and-its-impact-on-the-pharmaceutical-indu\">Big Data and its Impact on the Pharmaceutical Industry</a>,”\r\n Beliau mengurai bahwa \'Big Data\' memiliki dampak mendalam, seperti \r\ndalam genomik, pemantauan uji klinis, pemantauan klinis, dan \r\npharmacovigilance.</p>\r\n\r\n<p>Graham Kendall dari <a href=\"https://www.digitalhealthcarecouncil.co.uk/\">Digital Health Council, UK</a>,\r\n mengatakan: “Ada empat bidang utama yang harus diperbaiki oleh \r\npemerintah jika pasien akan mendapat manfaat penuh dari penyediaan \r\nkesehatan digital. Ketika merancang perancang solusi kesehatan digital, \r\npenyedia dan pembuat kebijakan harus mengutamakan perspektif pasien \r\nlebih dulu; aturan sistem yang adil; informasi bebas dan terbuka; dan \r\npraktik berbasis bukti, kata dewan itu.</p>\r\n\r\n<p><strong>Perspektif Pasien</strong></p>\r\n\r\n<p>Keputusan harus selalu didorong terutama dari perspektif pasien, menanggapi kebutuhan dan preferensi mereka, tulis dokumen DHC.</p>\r\n\r\n<p>Digital \"ditempatkan dengan sempurna\" untuk mengalihkan perhatian \r\ndari intervensi tradisional ke intervensi yang lebih pribadi, tambahnya.</p>\r\n\r\n<p>“Dalam sistem kesehatan universal, pilihan solusi kesehatan digital \r\nharus tersedia untuk semua, dan aliran dana harus mengikuti preferensi \r\npasien tanpa merugikan mereka yang memilih untuk mengkonsumsi perawatan \r\nmereka semata-mata karena kekurangan.”</p>\r\n\r\n<p><strong>Aturan Sistem yang Adil</strong></p>\r\n\r\n<p>Prinsip ini mencakup dua bidang: Peraturan dan regulasi pasar yang \r\nberpusat pada pasien. Mereka yang membuat keputusan investasi harus \r\nmengingat pasien.</p>\r\n\r\n<p>Ia menambahkan: \"Pusat ini memiliki peran mendasar dalam mengatasi \r\ntantangan ini: ketika dihadapkan dengan peluang digital baru, kita perlu\r\n beralih dari proses pembangunan ke mendefinisikan tujuan yang berpusat \r\npada pasien.\"</p>\r\n\r\n<p>Badan profesional regulatori, seringkali dirancang untuk \"zaman \r\nanalog\", perlu beradaptasi dengan \"laju perubahan yang lebih cepat \r\ndaripada sebelumnya\".</p>\r\n\r\n<p>Pendekatan tradisional akan ditantang oleh profesi, geografi, dan \r\nperangkat, sedangkan digital dapat membantu meringankan tantangan ini.</p>\r\n\r\n<p><strong>Informasi Gratis dan Terbuka</strong></p>\r\n\r\n<p>Data seringkali tidak dapat diakses, dikunci dalam sistem tertutup \r\natau riwayat data yang hilang karena kurangnya struktur dan meta data \r\nyang buruk. DHC menyerukan pengadopsian dua pendekatan utama untuk lebih\r\n menginformasikan pengembangan solusi kesehatan digital: Data pasien \r\nadalah yang pertama dan paling utama bagi pasien serta sediakan solusi \r\nterbuka.</p>\r\n\r\n<p>\"Untuk membuat kemajuan nyata, kami merekomendasikan pendekatan \r\nberbasis insentif di mana penyedia layanan kesehatan secara finansial \r\ndihargai untuk mencapai sejumlah kecil target yang dipilih secara \r\nstrategis dan jelas yang bergantung pada penerapan interoperabilitas.\"</p>\r\n\r\n<p><strong>Praktik Berbasis Bukti</strong></p>\r\n\r\n<p>Semua solusi kesehatan digital harus didasarkan pada bukti, kata \r\ndewan. \"Secara potensial, setiap interaksi dapat menghasilkan data yang \r\nmendalam yang memberikan wawasan yang sebelumnya tak terbayangkan ke \r\ndalam perilaku pasien, dampak faktor lingkungan terhadap kesehatan dan \r\nefektivitas intervensi tertentu.\"</p>\r\n\r\n<p>Solusi kesehatan digital menawarkan keuntungan luar biasa untuk \r\nsistem kesehatan yang terbatas sumber daya di daerah pedesaan dan \r\nterpencil di negara berpenghasilan rendah dan menengah di Asia Tenggara \r\nyang berupaya mencapai target UHC 2030 dan SDG.</p>\r\n\r\n<p>Kesehatan digital memungkinkan sistem untuk memanfaatkan sumber daya \r\ndan infrastruktur yang ada, menyediakan lebih banyak layanan langsung di\r\n masyarakat melalui pendekatan <em>telemedicine</em> dan strategi penugasan petugas pelayanan kesehatan.</p>\r\n\r\n<p>Teknologi digital juga cocok untuk pendekatan pencegahan, termasuk penyaringan skala besar atau kampanye pendidikan.</p>\r\n\r\n<p>India, sebagai contoh, melakukan screening kepada setiap warga negara\r\n di bawah 30 tahun menggunakan perangkat mHealth (kesehatan seluler) \r\nuntuk berbagai faktor risiko terkait dengan NCD.</p>\r\n\r\n<p>Selain itu, dengan mengintegrasikan solusi kesehatan digital, \r\npemerintah dan sektor swasta telah meningkatkan akses ke data yang kaya \r\ndan berkualitas untuk secara akurat menginformasikan alokasi sumber daya\r\n yang langka dan melompati tantangan dari banyak sistem kesehatan yang \r\ndikembangkan.</p>\r\n\r\n<p>*</p>\r\n\r\n<p>Pemerintah dan pemangku kepentingan lainnya khususnya di Indonesia \r\nsebagai salah satu Negara terbesar di Asia Tenggara, memiliki peluang \r\nluar biasa untuk merangkul kesehatan digital dan melompati hambatan lama\r\n terhadap UHC yang ada dalam model pemberian layanan sebelumnya.</p>\r\n\r\n<p>Pengeluaran pemerintah untuk kesehatan digital menghasilkan \r\npengembalian investasi yang sangat besar, memberikan insentif yang jelas\r\n untuk investasi dalam solusi tersebut. Apa yang sekarang diperlukan \r\nadalah dukungan penuh, kerja sama, dan investasi dari sektor publik. Ini\r\n sepenuhnya akan membuka potensi kesehatan digital sebagai kekuatan \r\npendorong untuk mencapai tujuan UHC 2030.\r\n</p>\r\n\r\n<h6>Sumber:</h6>\r\n<ol><li>\r\n<h6><a href=\"https://www.raps.org/news-and-articles/news-articles/2019/11/emerging-digital-health-solutions-inherent-challe\">Emerging Digital Health Solutions: Inherent Challenges in the Technology Driven World</a></h6>\r\n</li><li>\r\n<h6><a href=\"https://www.digitalhealthcarecouncil.co.uk/\">Digital health Council&nbsp;</a></h6>\r\n</li><li>\r\n<h6><a href=\"https://www.kemkes.go.id/\">Kementerian Kesehatan Republik Indonesia</a></h6>\r\n</li><li>\r\n<h6><a href=\"https://www.who.int/news-room/fact-sheets/detail/universal-health-coverage-(uhc)\">Universal health coverage (UHC)</a></h6>\r\n</li></ol>\r\n				</div>\r\n\r\n				<h4>\r\n											<br></h4>', '/uploads/images/beritadanartikel/artikel/9_Tantangan dan Strategi Sistem Kesehatan Digital_1581163163.png', '2020-02-08 04:59:23', '2020-02-08 04:59:23');
INSERT INTO `artikel` (`id_artikel`, `kategori`, `judul`, `artikel`, `gambar`, `created_at`, `updated_at`) VALUES
(10, 'Kesehatan', 'Anemia di Awal Kehamilan Memengaruhi Perkembangan Otak pada Anak', '<div class=\"article-content\" style=\"word-break: break-word;\">\r\n					\r\n					\r\n					<p>Kekurangan zat besi di awal kehamilan menunjukan risiko gangguan\r\n perkembangan neurologi seperti gangguan spektrum autism, gangguan \r\npemusatan perhatian, hiperaktif, dan retardasi mental.</p>\r\n\r\n<p>Hasil dari studi yang diperoleh dari data populasi yang besar \r\nmenyatakan bahwa risiko dari gangguan spektrum autism, gangguan \r\npemusatan perhatian, dan hiperaktif pada anak terkait dengan ibu yang \r\nmengalami anemia di masa awal kehamilan. &nbsp;Terdapat risiko 44% gangguan \r\nspektrum autism, serta 37% gangguan pemusatan perhatian dan hiperaktif, \r\ndibandingkan dengan anak-anak yang lahir dari ibu yang tidak mengalami \r\nanemia di awal kehamilan. Sedangkan, untuk risiko retardasi mental \r\nmenunjukan sebesar 120%.</p>\r\n\r\n<p>Temuan lain yang menarik adalah anemia yang didiagnosis pada ibu \r\nhamil di atas 30 tahun tidak berkaitan dengan peningkatan berbagai \r\nrisiko tersebut.</p>\r\n\r\n<p>Sehingga, pemeriksaan berkelanjutan, terutama jika ditemukan kadar \r\nhemoglobin yang rendah pada ibu saat pemeriksaan standar antenatal. \r\nMeningkatkan zat besi yang rendah pada ibu hamil terutama di \r\nminggu-minggu awal menjadi sangat penting.</p>\r\n\r\n<p>Nutrisi pada ibu hamil sangat memengaruhi sistem saraf yang \r\nberkembang pada janin. Kekurangan nutrisi tertentu pada ibu, memiliki \r\nefek yang mendalam pada perkembangan otak dan sistem saraf anak. Hal \r\ntersebut dapat dibuktikan dangan folat yang dapat mencegah Neural Tube \r\nDefect&nbsp;(NTD)--cacat bawaan yang timbul akibat tidak sempurnanya \r\npenutupan&nbsp;neural tube&nbsp;(tabung saraf) selama pertumbuhan embryonal.</p>\r\n\r\n<p>Penelitian terbaru ini mengambil data dari Stockholm Youth Cohort, \r\nsebuah studi kohort prospektif dari individu yang lahir antara 1 Januari\r\n 1984 dan 31 Desember 2011. Penelitian yang &nbsp;melibatkan 532.232 \r\nanak-anak (51,3% laki-laki) antara usia 6 dan 29 tahun (rata-rata usia \r\n[SD], 17,6 [7,1] tahun) serta 299.768 ibu. Di antara para ibu, 5,8% \r\ndidiagnosis dengan anemia selama kehamilan; dari diagnosis ini, 5% \r\nterjadi sebelum kehamilan 30 minggu, sementara 90,9% terjadi setelah \r\nkehamilan 30 minggu.</p>\r\n\r\n<p><a href=\"https://gakken-idn.id/wp/wp-content/uploads/2019/11/Cassspture.png\"><img class=\"aligncenter wp-image-4107 size-full\" src=\"https://gakken-idn.id/wp/wp-content/uploads/2019/11/Cassspture.png\" alt=\"\" width=\"814\" height=\"289\"></a>\r\n</p>\r\n\r\n<h6>Tabel. Persentase anak yang lahir dari ibu dengan dan tanpa anemia</h6><p>\r\n_____</p>\r\n\r\n<p>Para peneliti menganalisis usia ibu, pendapatan, tingkat pendidikan, \r\nindeks massa tubuh (IMT), riwayat rawat inap psikiatris, jarak \r\nkehamilan, infeksi selama kehamilan, dan apakah anak itu adalah anak \r\npertama.</p>\r\n\r\n<p>Para peneliti menggunakan model regresi logistik bersyarat untuk \r\nmembandingkan saudara kandung yang terpapar anemia dengan saudara \r\nkandung yang tidak terpapar, menyesuaikan jenis kelamin, tahun \r\nkelahiran, dan jarak kehamilan untuk mengevaluasi kemungkinan hubungan \r\ngenetik bersama sebagai faktor yang potensial.</p>\r\n\r\n<p>Karakteristik ibu dengan anemia, dibandingkan dengan mereka yang \r\ntidak anemia, misalnya kelebihan berat badan dan obesitas, usia yang \r\nlebih tua (&gt; 40 tahun), sejarah kejiwaan, penghasilan, ibu primipara,\r\n jarak interval &gt; 5 tahun dan rawat inap kasus infeksi selama \r\nkehamilan. Sedangkan karakteristik ibu dengan anemia dini (kehamilan ≤ \r\n30 minggu) meliputi tingkat pendidikan yang lebih rendah, penghasilan \r\nlebih rendah, kurang berat badan, usia lebih muda (&lt;25 tahun).</p>\r\n\r\n<p><strong>Hasil studi</strong></p>\r\n\r\n<p>Hasil dari data yang didapatkan menunjukan bahwa anak-anak dengan ibu\r\n yang didiagnosis dengan anemia pada ≤ 30 minggu, lebih mungkin \r\ndilahirkan prematur (rasio odds [OR], 7,10; interval akurasi 95% [CI], \r\n6,28 - 8,03) atau lebih kecil menurut usia kehamilan (OR, 2,81; 95% CI, \r\n2,26 - 3,50), dibandingkan dengan mereka yang ibunya tidak didiagnosis \r\ndengan anemia.</p>\r\n\r\n<p>Di sisi lain, anak-anak yang ibunya didiagnosis dengan anemia pada \r\nusia kehamilan lebih dari 30 minggu, lebih mungkin terlahir setelah masa\r\n kehamilan normal dan lebih besar menurut usia kehamilan (OR, 1,56; 95% \r\nCI, 1,49 - 1,62; dan OR, 1,76 ; 95% CI, 1,66 - 1,87,berurutan).</p>\r\n\r\n<p>Ketika para peneliti menyesuaikan faktor sosial ekonomi, ibu, dan \r\nkehamilan, mereka menemukan bahwa anemia pada usia kehamilan ≤ 30 minggu\r\n dikaitkan dengan peningkatan risiko diagnosis gangguan spektrum \r\nautisme, gangguan pemusatan perhatian dan hiperaktif , serta retardasi \r\nmental pada keturunan (OR, 1,44; 95% CI, 1,13 - 1,84; OR, 1,37; 95% CI, \r\n1,14 - 1,64; dan OR, 2,20; 95% CI, 1,61 - 3,01, berurutan) dalam model \r\nyang mencakup tiga faktor.</p>\r\n\r\n<p>Analisis saudara kandung yang cocok menghasilkan temuan yang serupa, \r\nmeskipun hubungan tersebut lebih tinggi untuk gangguan spektrum autisme \r\ndibandingkan dengan analisis primer.</p>\r\n\r\n<p>Kelahiran prematur terutama ketika persalinan diinduksi ikut \r\nmenyumbang sekitar sepertiga dari hubungan antara anemia pada kehamilan ≤\r\n 30 minggu dan risiko gangguan spektrum autisme, gangguan pemusatan \r\nperhatian dan hiperaktif, serta retardasi mental.</p>\r\n\r\n<p>Namun, studi ini menyatakan bahwa anemia yang terjadi selama periode \r\n30 minggu pertama cenderung memiliki fenomena yang berbeda dengan anemia\r\n yang terjadi kemudian pada kehamilan setelahnya. Sebab, janin mulai \r\nmengonsumsi zat besi lebih cepat sekitar 30 minggu di awal kehamilan dan\r\n bayi yang lahir dari ibu yang didiagnosis dengan anemia pada kehamilan \r\nlebih dari 30 minggu cenderung memiliki berat lahir lebih dan \r\nkemungkinan dilahirkan cukup bulan antara 37 dan 42 minggu kehamilan.</p>\r\n\r\n<p>Selain itu, bayi yang lahir dari ibu yang didiagnosis dengan anemia \r\nsebelum 30 minggu cenderung lebih kecil dan lebih mungkin dilahirkan \r\nprematur, dan ibu juga cenderung mengalami komplikasi kehamilan.</p>\r\n\r\n<p><strong>Kesimpulan</strong></p>\r\n\r\n<p>Kekurangan zat besi atau nutrisi lain untuk jangka waktu yang lebih \r\nlama selama kehamilan memengaruhi perkembangan otak. Studi ini memberi \r\nbukti bahwa perhatian khusus pada kekurangan zat besi dalam kehamilan \r\nsangat penting untuk dievaluasi terutama individu yang berpotensi \r\nmengalami kekurangan zat besi.</p>\r\n\r\n<p>Bahkan, calon ibu yang berencana untuk program hamil perlu \r\nmemperhatikan hal ini. Namun penting bagi seorang perempuan untuk \r\nmendiskusikan asupan zat besi mereka, terutama setiap asupan zat besi \r\ntambahan untuk memastikan bahwa asupan yang mereka terima cukup dan \r\ntidak berlebihan. Karena, terlalu banyak zat besi dapat menjadi racun \r\nbagi ibu dan bayi.\r\n</p>\r\n\r\n<h6>Penulis: <a href=\"https://www.instagram.com/natasyarokot/\">dr. Natasya Trivena Rokot</a></h6>\r\n<h6>Sumber:<a href=\"https://jamanetwork.com/journals/jamapsychiatry/fullarticle/2751260\">\r\n Association of Prenatal Maternal Anemia With Neurodevelopmental \r\nDisorders. Aline Marileen Wiegersma, Christina Dalman et al. JAMA \r\nPsychiatry, 2019</a></h6>\r\n				</div>', '/uploads/images/beritadanartikel/artikel/10_Anemia di Awal Kehamilan Memengaruhi Perkembangan Otak pada Anak_1581163317.png', '2020-02-08 05:01:57', '2020-02-08 05:01:57'),
(12, 'Kesehatan', 'Penyakit Jantung di Era Pengobatan Presisi', '<p>Praktik klinis dengan pengobatan presisi yang akan hadir di waktu \r\nmendatang, dapat mempersonalisasikan perawatan gagal jantung. Metode \r\nyang akan mengidentifikasi kelompok pasien yang lebih mungkin untuk \r\nmengalami gagal jantung, serta menyesuaikan obat dan terapi mana yang \r\npaling efektif. Satu simpulan menurut <a href=\"http://www.heart.org/\">American Heart Association</a>, diterbitkan dalam jurnal <a href=\"https://www.ahajournals.org/journal/circgen\">Circulation: Genomic and Precision Medicine</a>.</p>\r\n\r\n<p>Pengobatan presisi menggunakan informasi tentang susunan genetik \r\nseseorang, metabolism, dan faktor biologis serta lingkungan lainnya \r\nuntuk menentukan strategi apa yang dapat mencegah atau mengobati kondisi\r\n kesehatan dengan lebih baik. Tujuannya adalah untuk menyediakan \r\nperawatan khusus yang lebih mungkin berhasil untuk setiap pasien, \r\ndaripada pendekatan satu ukuran untuk semua.</p>\r\n\r\n<p>Pernyataan Asosiasi Jantung Amerika ini memberikan gambaran umum \r\ntentang gagal jantung yang berkaitan dengan aspek-aspek berbeda dari \r\npengobatan presisi, termasuk bagaimana variasi gen, biomarker dalam \r\ndarah, atau bakteri dalam usus dapat memprediksi risiko penyakit \r\njantung. gagal jantung, dan bagaimana seseorang dapat merespon berbagai \r\nperawatan.</p>\r\n\r\n<p>\"Kami bertujuan untuk meningkatkan perawatan bagi semua orang yang \r\nmengalami gagal jantung dengan lebih jelas menentukan opsi perawatan \r\nterbaik untuk kelompok orang tertentu,\" kata Sharon Cresci, MD, profesor\r\n kedokteran dan genetika di Washington University di St. Louis, \r\nMissouri. \"Pernyataan ini merinci potensi obat presisi untuk \r\nmeningkatkan hasil terhadap pasien.\"</p>\r\n\r\n<p>Prognosis untuk orang dengan gagal jantung telah meningkat dalam \r\nbeberapa dekade terakhir karena studi penelitian telah menunjukkan \r\nefektivitas berbagai obat. Namun, dalam populasi uji klinis tersebut \r\nadalah kelompok orang yang cenderung kurang mendapat manfaat dari obat \r\ndan beberapa orang yang mungkin memiliki efek samping yang serius.</p>\r\n\r\n<p>\"Uji klinis utama sering kali mengobati sejumlah besar pasien dengan \r\nsatu obat, dan jika ada hasil positif, penggunaan obat itu kemungkinan \r\nakan dimasukkan ke dalam pedoman pengobatan,\" kata Cresci.</p>\r\n\r\n<p>\"Namun, dalam kelompok besar peserta uji klinis, sering ada beberapa \r\ntanpa tanggapan dan beberapa dengan tanggapan yang merugikan. Pendekatan\r\n kedokteran presisi dapat membantu kami mengidentifikasi siapa yang \r\nbukan penanggap atau penanggap buruk yang cenderung jadi kami dapat \r\nmenemukan perbedaan pilihan pengobatan untuk mereka. \"</p>\r\n\r\n<p>Untuk melakukan ini, penting bahwa uji klinis mendaftarkan kelompok peserta yang beragam, menurut Cresci.</p>\r\n\r\n<p>\"Secara historis, peserta uji klinis didominasi oleh orang kulit \r\nputih dengan varian genetik tertentu. Orang dengan ras dan etnis yang \r\nberbeda memiliki varian genetik yang berbeda, oleh karena itu, mereka \r\nmungkin tidak memiliki respons yang sama terhadap pengobatan atau \r\nperawatan lain,\" katanya. \"Para peneliti yang melakukan uji klinis \r\nmengenali masalah ini dan berusaha meningkatkan keragaman di antara \r\npeserta uji klinis sehingga kami dapat menemukan pendekatan pengobatan \r\nyang optimal untuk setiap kelompok populasi.\"</p><p>Beberapa aspek dari pengobatan presisi sudah secara rutin digunakan \r\noleh penyedia layanan kesehatan untuk mengobati gagal jantung. Sebagai \r\ncontoh, tingkat darah dari biomarker yang disebut peptida natriuretik \r\ntipe-B adalah indikator sensitif apakah gagal jantung memburuk atau jika\r\n perawatan membantu. Ini juga dapat membantu menentukan apakah gejala \r\nseperti sesak napas disebabkan oleh gagal jantung daripada masalah medis\r\n lainnya.</p>\r\n\r\n<p>\"Penggunaan biomarker mungkin merupakan aspek paling maju dari \r\npengobatan presisi yang saat ini digunakan dalam pengobatan gagal \r\njantung. Sebagian besar lainnya masih dalam masa pertumbuhan, dan kami \r\nberharap di masa depan untuk menggabungkan berbagai aspek dari \r\npengobatan presisi untuk meningkatkan perawatan dan hasil pasien,\" Kata \r\nCresci.</p><p>Karena para profesional kesehatan mungkin tidak terbiasa dengan satu \r\natau lebih pendekatan obat yang presisi, pernyataan itu bertujuan untuk \r\nmenjadi sumber daya pendidikan dengan menggabungkan informasi tentang \r\nbagaimana masing-masing berlaku untuk gagal jantung.</p>\r\n\r\n<p>\"Pernyataan ini juga menguraikan bagaimana kemajuan teknologi telah \r\ndan dapat digunakan untuk secara tepat mendefinisikan variabilitas dalam\r\n kelompok populasi, dan bagaimana kemajuan ini dapat diterapkan pada \r\npasien tertentu dengan gagal jantung,\" kata Naveen L. Pereira, MD, wakil\r\n ketua komite penulisan pernyataan ilmiah dan profesor kedokteran dan \r\nprofesor farmakologi di Mayo Clinic College of Medicine di Rochester, \r\nMinnesota.</p>\r\n\r\n<p>\"Gabungan hasil dari berbagai teknik pengobatan presisi ini juga \r\nmemungkinkan kami untuk mengidentifikasi biologi yang sebelumnya belum \r\nditemukan yang dapat mengarah pada penemuan obat-obatan baru dan \r\nperawatan untuk orang dengan gagal jantung.\"</p>\r\n\r\n<p>Menyadari nilai dari pendekatan multi-segi dan personal untuk penyakit jantung ini, American Heart Association mendirikan <a href=\"https://www.heart.org/en/professional/institute\">Institute for Precision Cardiovascular Medicine</a> pada tahun 2015. Ini menyediakan:\r\n</p>\r\n\r\n<ul><li>Pelatihan keterampilan baru yang dibutuhkan peneliti medis, seperti ilmu data dan kecerdasan buatan;</li><li>Platform berbasis cloud bagi para ilmuwan untuk berkolaborasi dan berbagi data secara internasional;</li><li>Inisiatif untuk melibatkan wanita di seluruh Amerika Serikat dalam penelitian kesehatan; dan</li><li>Sebuah pusat penemuan obat untuk menggunakan kekuatan \r\nsuperkomputer untuk secara cepat memprediksi hasil dari kemungkinan \r\nperawatan baru.</li></ul><p>\r\n\"Bidang kedokteran presisi masih dalam masa pertumbuhan, dengan \r\ninfrastruktur dan program yang akan dibangun. Kita akan membutuhkan \r\npelatihan khusus untuk dokter, proses untuk berbagi informasi di seluruh\r\n database besar dan jaminan untuk privasi pasien,\" kata Cresci. \"Sangat \r\nmenarik untuk menyadari potensi inovasi yang menyelamatkan jiwa di \r\ncakrawala melalui pengobatan presisi.\"\r\n</p><h6>Sumber: <strong>Heart Failure in the Era of Precision Medicine: A Scientific Statement From the American Heart Association</strong>.&nbsp;<em>Circulation: Genomic and Precision Medicine</em>, 2019 DOI:&nbsp;<a href=\"http://dx.doi.org/10.1161/HCG.0000000000000058\">10.1161/HCG.0000000000000058</a></h6>', '/uploads/images/beritadanartikel/artikel/11_Penyakit Jantung di Era Pengobatan Presisi_1581163581.png', '2020-02-08 05:06:21', '2020-02-08 05:06:21');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id_banner` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id_banner`, `nama`, `banner`, `created_at`, `updated_at`) VALUES
(1, 'banner1', '/uploads/images/banner/1.jpg', '2020-02-09 01:23:17', '2020-02-09 02:10:41'),
(2, 'banner 2', '/uploads/images/banner/2.jpg', '2020-02-09 01:23:29', '2020-02-09 02:11:02'),
(3, 'banner3', '/uploads/images/banner/3.jpg', '2020-02-09 01:23:41', '2020-02-09 02:11:12'),
(4, 'banner 4', '/uploads/images/banner/4.jpg', '2020-02-09 01:23:55', '2020-02-09 02:11:26');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `berita` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `kategori`, `judul`, `berita`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'Kesehatan', 'Alasan Pentingnya ke Dokter Setelah 48 Jam Gejala Flu', '<p>Jakarta, CNN Indonesia -- Jangan remehkan gejala <a href=\"https://www.cnnindonesia.com/tag/flu\" target=\"_blank\"><strong><span style=\"color: #ff0000;\">flu.</span></strong></a> Sebaiknya, segera kunjungi&nbsp;<span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/dokter\"><span style=\"color: #ff0000;\">dokter</span></a></strong></span> untuk mendapatkan perawatan dan pengobatan yang tepat saat gejala pertama muncul.&nbsp;<span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/studi\"><span style=\"color: #ff0000;\">Studi</span></a> </strong></span>bahkan menunjukkan pentingnya langsung memeriksakan flu ke dokter dalam kurun waktu 48 jam saat gejala pertama terlihat.<br><br>\"Pengobatan\r\n influenza hanya dapat membantu jika diberikan dalam 48 jam pertama \r\nsetelah gejala. Jika menunggu lebih lama, maka dapat kehilangan \r\nkesempatan untuk perawatan,\" kata ahli virologi dr Norman Moore, dikutip\r\n dari situs kesehatan <a href=\"https://www.healthline.com/health-news/think-you-have-the-flu-dont-wait-to-see-a-doctor\" target=\"_blank\"><em><span style=\"color: #0000ff;\">Healthline.</span></em></a><br><br>Dikutip dari <a href=\"https://www.cdc.gov/flu/symptoms/symptoms.htm\" target=\"_blank\"><span style=\"color: #0000ff;\">CDC,</span></a>\r\n gejala awal flu meliputi demam atau menggigil, batuk, sakit \r\ntenggorokan, ingus atau hidung tersumbat, nyeri otot atau sendi, sakit \r\nkepala, dan kelelahan.</p><p>Moore menjelaskan, jika flu ditangani secepatnya, dokter dapat \r\nmemberikan antivirus untuk menangkal virus influenza. Antivirus ini \r\ndapat melawan virus influenza dan mengurangi durasi flu saat diberikan \r\ndalam waktu 48 jam pertama.<br><br>Jika gejala flu dibiarkan lebih lama,\r\n maka flu dapat berlangsung hingga lebih dari dua pekan. Hal ini dapat \r\nmenyebabkan timbulnya komplikasi yang lebih serius, hilangnya \r\nproduktivitas, dan memberikan kerugian ekonomi.<br><br>Data Organisasi \r\nKesehatan Dunia (WHO) menunjukkan, flu di seluruh dunia setiap tahunnya \r\ndapat menyebabkan hingga 5 juta kasus penyakit parah dengan sekitar 650 \r\nribu kematian.<br><br>Antivirus juga dapat diberikan kepada anggota \r\nkeluarga yang tinggal serumah untuk mencegah flu menular. Studi \r\nmenunjukkan, memberikan pengobatan setelah paparan pada virus dan \r\nsebelum muncul gejala efektif mencegah flu 70-90 persen.</p><p>Moore menjelaskan, jika flu ditangani secepatnya, dokter dapat \r\nmemberikan antivirus untuk menangkal virus influenza. Antivirus ini \r\ndapat melawan virus influenza dan mengurangi durasi flu saat diberikan \r\ndalam waktu 48 jam pertama.<br><br>Jika gejala flu dibiarkan lebih lama,\r\n maka flu dapat berlangsung hingga lebih dari dua pekan. Hal ini dapat \r\nmenyebabkan timbulnya komplikasi yang lebih serius, hilangnya \r\nproduktivitas, dan memberikan kerugian ekonomi.<br><br>Data Organisasi \r\nKesehatan Dunia (WHO) menunjukkan, flu di seluruh dunia setiap tahunnya \r\ndapat menyebabkan hingga 5 juta kasus penyakit parah dengan sekitar 650 \r\nribu kematian.<br><br>Antivirus juga dapat diberikan kepada anggota \r\nkeluarga yang tinggal serumah untuk mencegah flu menular. Studi \r\nmenunjukkan, memberikan pengobatan setelah paparan pada virus dan \r\nsebelum muncul gejala efektif mencegah flu 70-90 persen.<br></p>', '/uploads/images/beritadanartikel/berita/1_Alasan Pentingnya ke Dokter Setelah 48 Jam Gejala Flu_1581152033.jpg', '2020-02-08 01:53:53', '2020-02-08 01:53:53'),
(2, 'Kesehatan', 'Kenali Gagal Ginjal, Penyakit yang Renggut Nyawa Allan Wangsa', '<p>Jakarta, CNN Indonesia -- YouTuber sekaligus presenter Allan Wangsa \r\nmeninggal dunia pada Selasa (4/2) malam. Allan mengembuskan napas \r\nterakhirnya akibat <a href=\"https://www.cnnindonesia.com/tag/gagal-ginjal\" target=\"_blank\"><strong><span style=\"color: #ff0000;\">gagal ginjal</span></strong></a> yang dideritanya sejak lama.<br><br>Gagal ginjal bukan sembarang penyakit. Ini merupakan kondisi saat <a href=\"https://www.cnnindonesia.com/tag/ginjal\" target=\"_blank\"><strong><span style=\"color: #ff0000;\">ginjal</span></strong></a> tak mampu menyaring racun dalam <a href=\"https://www.cnnindonesia.com/tag/darah\" target=\"_blank\"><strong><span style=\"color: #ff0000;\">darah.</span></strong></a> Saat ginjal kehilangan fungsinya, racun akan terus menumpuk dan bisa berbahaya bagi tubuh.<br><br>Mengutip <a href=\"https://www.healthline.com/health/kidney-failure#stages\" target=\"_blank\"><em><span style=\"color: #0000ff;\">Healthline,</span></em></a> banyak faktor yang menyebabkan, mulai dari paparan racun, penyakit kronis tertentu, dehidrasi parah, hingga trauma ginjal. </p><p>Umumnya, seseorang dengan gagal ginjal akan memiliki beberapa gejala. Beberapa gejala yang mungkin dialami di antaranya:<br>- jumlah urine berkurang<br>- pembengkakan pada kaki<br>- napas pendek<br>- rasa kantuk dan lelah yang berlebihan<br>- mual persisten<br>- kebingungan<br>- rasa sakit atau tekanan di dada<br>- kejang<br>- koma<br><br>Penyakit\r\n ini dapat didorong oleh beberapa kondisi atau penyebab. Beberapa orang \r\nmemiliki risiko lebih tinggi mengalami gagal ginjal. Orang dengan \r\npenyakit jantung, liver, dehidrasi, memiliki luka bakar yang parah, \r\nmengalami reaksi alergi, hingga infeksi berat seperti sepsis berisiko \r\nmengalami gagal ginjal.<br><br>Selain itu, beberapa jenis penyakit \r\nkanker juga berkontribusi terhadap risiko gagal ginjal. Sebut saja \r\nkanker prostat, usus besar, serviks, dan kandung kemih yang dapat \r\nmemblokir saluran kemih.<br><br>Kondisi lain yang dapat mengganggu buang\r\n air kecil seperti batu ginjal dan adanya gumpalan darah di saluran \r\nkemih juga dapat menyebabkan gagal ginjal.</p><p>Penyakit ini umumnya diklasifikasikan menjadi lima tahap. Mulai dari \r\nsangat ringan (tahap 1) hingga gagal ginjal lengkap (tahap 5). Gejala \r\ndan komplikasi meningkat seiring tahapannya. Berikut tahapannya:<br><br><strong>Tahap 1</strong><br>Pada\r\n tahap ini, Anda mungkin tak mengalami gejala yang terlihat. Anda juga \r\nmasih dimungkinkan untuk memulihkan gagal ginjal dengan menjalani gaya \r\nhidup sehat seperti makanan gizi seimbang, olahraga secara teratur, dan \r\ntidak merokok. Mempertahankan berat badan juga penting untuk mencegah \r\ngagal ginjal.<br><br><strong>Tahap 2</strong><br>Tahap 2 masih dianggap \r\nsebagai bentuk ringan. Namun, Anda bisa mendeteksinya lewat urine. \r\nSelain itu, kerusakan fisik pada ginjal akan terlihat lebih jelas.<br><br>Pendekatan\r\n gaya hidup sehat dapat terus dipertahankan. Berbicara dengan dokter \r\njuga bisa menjadi solusi. Dokter akan menjelaskan mengenai faktor risiko\r\n lain yang dapat membuat penyakit berkembang lebih cepat seperti \r\njantung, peradangan, dan kelainan darah.<br><br><strong>Tahap 3</strong><br>Pada\r\n tahap ini, ginjal tak berfungsi sebagaimana mestinya. Gejala mungkin \r\nterlihat lebih jelas pada tahap ini, mulai dari pembengkakan di tangan \r\ndan kaki, nyeri punggung, dan perubahan buang air kecil.<br><br>Untuk \r\nmengatasinya, pendekatan gaya hidup sehat bisa membantu. Dokter juga \r\nakan mempertimbangkan pengobatan untuk memperbaiki kondisi kegagalan.<br><br><strong>Tahap 4</strong><br>Pada\r\n tahap ini, ginjal tidak berfungsi dengan baik, tapi belum gagal \r\nsepenuhnya. Gejala yang muncul dapat termasuk komplikasi seperti anemia,\r\n tekanan darah tinggi, dan penyakit tulang.<br><br><strong>Tahap 5</strong><br>Pada\r\n tahap ini, ginjal hampir gagal sepenuhnya. Gejala akan semakin jelas \r\ntermasuk muntah dan mual, sesak napas, kulit gatal, dan masih banyak \r\nlagi.<br><br>Jika sudah memasuki stadium 5, Anda perlu rutin melakukan cuci darah atau transplantasi ginjal.</p>', '/uploads/images/beritadanartikel/berita/2_Kenali Gagal Ginjal, Penyakit yang Renggut Nyawa Allan Wangsa_1581152216.jpeg', '2020-02-08 01:56:56', '2020-02-08 01:56:56'),
(3, 'Kesehatan', '7 Kebiasaan Sederhana yang Bantu Tingkatkan Daya Tahan Tubuh', '<p>Jakarta, CNN Indonesia -- <span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/virus-corona\"><span style=\"color: #ff0000;\">Virus corona</span></a></strong></span>&nbsp;jenis terbaru atau 2019-nCov yang pertama kali diidentifikasi di Wuhan,&nbsp;<span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/china\"><span style=\"color: #ff0000;\">China</span></a></strong></span>\r\n telah menyebar ke sejumlah negara. Beberapa kasus ditemukan di \r\nnegara-negara Asia, sebagian lain ada di Amerika juga Australia. \r\nSementara Indonesia, melalui&nbsp;<span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/kementerian-kesehatan\"><span style=\"color: #ff0000;\">Kementerian Kesehatan</span></a></strong></span> mengklaim telah mengantisipasi <span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/penyebaran-virus-corona\"><span style=\"color: #ff0000;\">penyebaran virus corona</span></a></strong></span>.<br><br>Tapi\r\n selain itu, tak ada salahnya jika Anda pun ikut mengambil ancang-ancang\r\n dengan memperkuat daya tahan tubuh. Langkah ini penting, agar tubuh tak\r\n gampang terserang penyakit.<br><br>Tak perlu melakukan hal-hal besar \r\ndemi daya tahan tubuh tetap terjaga. Anda bisa melakukan kegiatan \r\nsederhana berikut agar tubuh tetap sehat dan mampu melawan virus corona.</p><p><strong>1. Hindari jadi perokok pasif</strong><br>Berdasar Centers for \r\nDisease Control and Prevention (CDC) AS, para perokok pasif tetap \r\nberpotensi mengalami gangguan kesehatan. Sekalipun, orang-orang tersebut\r\n tidak merokok.<br><br>\"Paparan asap rokok mengakibatkan peradangan di \r\nsaluran pernapasan baik bagian atas maupun bawah dan merusak kemampuan \r\nsistem imun untuk memproduksi antibodi sebagai respons paparan bakteri,\"\r\n jelas Julia Blank, dokter keluarga di Santa Monica, California, AS \r\nmengutip dari <span style=\"color: #0000ff;\"><em><a href=\"https://www.livestrong.com/article/13723669-boost-your-immune-system/\"><span style=\"color: #0000ff;\">Livestrong</span></a></em></span>.<br><br>Akibatnya,\r\n lanjut dia, ada penurunan mekanisme pembersihan bakteri dari paru-paru \r\ndan peningkatan gejala asma. Orang pun jadi rentan terkena infeksi.<br><br>Jadi sebaiknya hindari lokasi-lokasi yang membuat Anda terpapar asap rokok.</p><p><strong>2. Lebih banyak protein</strong><br>Protein membantu tubuh untuk membangun dan memperbaiki jaringan tubuh. Roger Adams, <em>personal trainer</em> sekaligus dokter nutrisi menyebut protein jadi inti dari sistem imun yang sehat.<br><br>\"Jika\r\n asupan protein kurang, ini bisa merusak kemampuan tubuh untuk \r\nmemproduksi antibodi, protein besar diproduksi oleh sistem imun dalam \r\nrespons saat ada invasi molekul asing,\" jelas Adams.<br><br><strong>3. Cuci tangan</strong><br>Pesan\r\n untuk praktik perilaku hidup bersih dan sehat (PHBS) menggema sejak \r\nvirus corona merebak. Salah satunya, dengan rajin mencuci tangan \r\nmenggunakan sabun.<br><br>Tangan merupakan alat transportasi bakteri. \r\nTanpa disadari, orang sering memegang muka, hidung atau mengucek mata. \r\nPadahal tangan belum tentu bersih.<br><br>CDC merekomendasikan untuk \r\nmencuci tangan paling tidak 20 detik untuk meminimalkan bakteri dan \r\nmenjaga sistem imun. Tak perlu memasang <em>timer</em> saat mencuci tangan. Cukup menyanyikan lagu \'<em>Happy Birthday</em>\' sembari cuci tangan dan 20 detik tak akan terasa.</p><p><strong>4. Menambah sayur</strong><br>Sayur dan buah bermanfaat untuk \r\nmeningkatkan sistem imun. Adams menyarankan untuk menambahkan sayur di \r\nporsi makan. Di samping itu pilih yang warnanya beragam dan cerah.<br><br>\"Makin\r\n banyak warna, lebih banyak antioksidan, yang mana digunakan tubuh untuk\r\n melawan radikal bebas yang bisa merusak sel,\" kata Adams.<br><br>Per hari disarankan untuk menyantap dua cangkir buah berwarna cerah dan dua hingga tiga cangkir sayuran berwarna.<br><br><strong>5. Tidur</strong><br>Tak\r\n cukup dengan makan sayur dan buah, tidur pun diperlukan agar daya tahan\r\n tubuh menguat. Satu studi pada Februari 2019 yang terbit di <em>Journal of Experimental Medicine</em>\r\n menemukan bahwa tidur malam yang nyenyak bisa meningkatkan efektivitas \r\nsel T tubuh (tipe sel darah putih yang berguna untuk melawan virus).<br><br>\"Banyak\r\n orang begadang dan melewatkan waktu untuk meningkatkan daya tahan \r\ntubuh,\" kata Shiva Lalezar, spesialis pengobatan fungsional dan \r\nantipenuaan.<br><br>Sebaiknya pasang alarm untuk menunjukkan waktu kapan Anda seharusnya tidur. Jelang tidur, pasang alarm lagi untuk jam bangun.</p><p><strong>6. Minum segelas air saat bangun tidur</strong><br>Usai \r\nmematikan alarm, sebaiknya isi aktivitas bangun tidur dengan minum \r\nsegelas air. Ini untuk menjaga tubuh tetap terhidrasi. Hidrasi sangat \r\nberhubungan dengan daya tahan tubuh.<br><br>\"Membran mukosa yang kering \r\ndan kulit pecah-pecah bisa jadi area di mana patogen bisa menyerang. \r\nTetap terhidrasi akan mengurangi kekeringan di area-area yang esensial \r\nseperti membran mukosa di hidung, dan memberikan tubuh kesempatan yang \r\nlebih baik untuk menangkal patogen,\" jelas Adams.<br><br><strong>7. Paduan jahe dan lemon</strong><br>Menurut Lalezar, jahe dan perasan lemon bisa meredam peradangan dan meningkatkan imunitas tubuh.<br><br>\"Jahe\r\n kaya akan antioksidan dan antibakteri, dan lemon kaya akan vitamin C, \r\nini juga antioksidan dan punya komponen antivirus dan antibakteri,\" \r\ntutur dia.<br><br>Campuran jahe dan lemon bisa dinikmati dalam bentuk \r\nminuman. Air rebusan jahe dicampur perasan lemon dan bisa juga ditambah \r\nmadu untuk menambah rasa manis.</p>', '/uploads/images/beritadanartikel/berita/3_7 Kebiasaan Sederhana yang Bantu Tingkatkan Daya Tahan Tubuh_1581152326.jpg', '2020-02-08 01:58:46', '2020-02-08 01:58:46'),
(4, 'Kesehatan', '5 Hal yang Perlu Diperhatikan Saat Cuci Tangan', '<p>Jakarta, CNN Indonesia -- <span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/cuci-tangan\"><span style=\"color: #ff0000;\">Mencuci tangan</span></a>&nbsp;</strong></span>dengan bersih kedengaran seperti hal remeh-temeh. Tapi jangan keliru, langkah sederhana ini terbukti sakti menangkal pelbagai&nbsp;<span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/kuman\"><span style=\"color: #ff0000;\">kuman</span></a></strong></span>&nbsp;maupun&nbsp;<span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/virus\"><span style=\"color: #ff0000;\">virus</span></a></strong></span> yang hendak menginfeksi tubuh. Bahkan, sampai-sampai&nbsp;<span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/kementerian-kesehatan\"><span style=\"color: #ff0000;\">Kementerian Kesehatan</span></a></strong></span> mengeluarkan panduan khusus terkait tahapan mencuci tangan dengan benar.<br><br>Apalagi,\r\n di tengah merebaknya virus corona jenis baru atau 2019-nCoV di beberapa\r\n negara. Indonesia hingga kini memang masih negatif kasus virus corona, \r\nnamun&nbsp;waspada tetap perlu. Selain menjaga daya tahan tubuh, mencuci \r\ntangan&nbsp;juga termasuk hal yang dianjurkan.<br><br>Tapi apakah mencuci \r\ntangan cukup dengan mengalirkan air ke tangan belaka? Ada sejumlah hal \r\nyang perlu Anda perhatikan agar cuci tangan Anda tak sia-sia.</p><p><strong>1. Basahi tangan</strong><br><br>Basuh tangan dengan air yang bersih dan mengalir selama 20 detik. Jangan gunakan air yang ada di baskom atau kubangan.<br><br><strong>2. Gunakan Sabun</strong><br><br>Setelah\r\n membasahi tangan, gunakan sabun yang mengandung antiseptik. Ini \r\npenting, karena tujuan mencuci tangan adalah menghilangkan kuman.<br><br>Ingat,\r\n sabun yang sekadar wangi atau hanya memiliki kandungan parfum, tak \r\nmanjur untuk mematikan kuman atau mikroorganisme lain yang menempel di \r\ntangan.</p><p><strong>3. Telusuri bagian tangan</strong><br><br>Jangan lupa gosokkan sabun ke telapak dan punggung tangan. Saat membersihkan tangan, telusuri pula sela-sela jari.<br><br>Selain\r\n itu jangan lupa bersihkan kuku. Anda bisa menggesekkan ujung-ujung kuku\r\n ke telapak tangan secara bergantian, satu sama lain.<br><br><strong>4. Bilas dan keringkan</strong><br><br>Setelah\r\n seluruh tahapan dilakukan, bilas tangan menggunakan air bersih dan \r\nmengalir. Setelah itu keringkan menggunakan handuk, tisu atau \r\ndianginkan.<br><br>Namun jika Anda dalam perjalanan atau daerah terpencil, bisa cukup menggunakan cairan pembersih tangan (<em>hand sanitizer</em>) atau tisu basah. Tapi pastikan keduanya harus mengandung antiseptik.</p><p><strong>5. Rutin</strong><br><br>Jadikan kebiasaan mencuci tangan dengan sabun sebagai rutinitas. Tak perlu terlalu sering, lakukan saja secara berkala.<br><br>Apalagi\r\n sehabis menyentuh pelbagai instalasi umum atau setelah&nbsp;menyambangi \r\nruang-ruang publik. Sebab Anda tak pernah tahu di mana virus dan kuman \r\nitu menempel. Maka ada baiknya sebelum menyentuh bagian tubuh yang \r\nsensitif, pastikan tangan Anda bersih.</p>', '/uploads/images/beritadanartikel/berita/4_5 Hal yang Perlu Diperhatikan Saat Cuci Tangan_1581152439.jpg', '2020-02-08 02:00:39', '2020-02-08 02:00:39'),
(5, 'Kesehatan', 'Mengenal Istilah Penyakit Endemi, Pandemi, dan Darurat Corona', '<p>Jakarta, CNN Indonesia -- Wabah&nbsp;<span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/virus-corona\" target=\"_blank\"><span style=\"color: #ff0000;\">virus corona</span></a></strong></span> menghantui seluruh dunia. Saat ini tercatat virus&nbsp;penyebab <span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/pneumonia-wuhan\" target=\"_blank\"><span style=\"color: #ff0000;\">pneumonia Wuhan</span></a></strong>&nbsp;</span>atau <span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/pneumonia-china\" target=\"_blank\"><span style=\"color: #ff0000;\">pneumonia China </span></a></strong></span>sudah menyebar sampai ke Jerman dan beberapa negara Eropa lainnya. <br><br>Di\r\n dunia epidemiologi atau ilmu yang mempelajari pola penyebaran penyakit,\r\n ada beberapa istilah yang berkaitan dengan penularan penyakit selain \r\nepidemi dan pandemi. Ada beberapa istilah yaitu wabah, endemi, epidemi, \r\ndan pandemi.<br><br><strong>Apa bedanya?</strong><br><br> <br><strong>Wabah</strong>\r\n adalah adalah munculnya penyakit di masyarakat. Berbeda dengan \r\npenularan masif, wabah dikategorikan dengan jumlah orang yang terjangkit\r\n jauh lebih banyak. Penyakit yang menyerang juga terjadi di musim-musim \r\ntertentu. <br><br>Kriteria wabah sendiri adalah penyakit baru yang tak \r\ndiketahui atau penyakit yang baru muncul di daerah tersebut. Penyakit \r\nyang sudah lama tak menjangkiti masyarakat di sana juga bisa disebut \r\nwabah. <br><br>Dalam urutan ini, wabah adalah bagian \'paling kecil\' dari penularan penyakit. </p><p>Usai penyakit mewabah, penularan selanjutnya adalah epidemi. <br><br><strong>Epidemi</strong>\r\n sebenarnya mirip dengan wabah. Hanya saja jangkauannya jauh lebih luas \r\ndan penularannya terjadi dengan cepat. Salah satu contohnya adalah kasus\r\n epidemi SARS pada 2003 lalu atau malaria di Liberia. <br><br>Di tingkat penyebaran yang lebih luas, epidemi berubah menjadi endemi. <strong>Endemi</strong> adalah pentakit yang menyerang lingkup yang lebih kecil dibanding pandemi, misalnya satu negara saja, wilayah, atau benua. <br><br>Contoh penyakit endemi adalah ebola yang berada di daerah sub-Sahara Afrika. <br><br>Mengutip berbagai sumber, WHO mendefinisikan <strong>pandemi</strong>\r\n sebagai penyebaran penyakit baru ke seluruh dunia. Tercatat ada \r\nbeberapa penyakit pandemi yang paling mematikan sepanjang sejarah, salah\r\n satunya cacar, campak, tipus, flu spanyol, black death, HIV/AIDS. <br><br>\"Epidemi\r\n itu terjadi di satu lingkungan terbatas&nbsp; atau negara saja. Pandemi \r\nseluruh dunia atau beberapa benua,\" kata Amin Soebandrio profesor \r\nspesialis mikrobiologi klinik, guru besar FKUI sekaligus kepala lembaga \r\nbiologi molekuler Eijkman kepada <em>CNNIndonesia.com,</em> Kamis (30/1).</p><p><strong>Kasus virus corona</strong><br><br>Bagaimana dengan virus \r\ncorona? Apakah virus corona penyebab pneumonia Wuhan atau pneumonia \r\nChina ini termasuk dalam kategori endemik atau pandemik? Wabah ini belum\r\n secara resmi dikonfirmasi sebagai endemi atau pandemi.<br><br>Namun Amin mengungkapkan bahwa virus corona ini tidak termasuk dalam semua kategori di atas. <br><br>\"Virus corona sekarang kalau menurut definisi WHO tidak memakai istilah endemi atau pandemi,\" ucapnya.<br><br>Dia mengatakan bahwa virus corona termasuk dalam <strong>PHEIC</strong> (public health emergency of internasional) atau kedaruratan kesehatan yang meresahkan dunia. </p><p>\"(Karena ini) Bukan benua karena ada beberapa negara termasuk dalam satu regional, WHO kalo sudah lebih dari dua itu PHEIC.\"<br><br>Berdasarkan\r\n buku saku Panduan Petugas Kesehatan Tentang International Health \r\nRegulations (IHR) 2005 Kemenkes RI ada beberapa kriteria wabah penyakit \r\ndinyatakan sebagai PHEIC&nbsp;atau darurat kesehatan.<br><br>1. Berdampak/berisiko tinggi bagi kesehatan masyarakat. <br>2. KLB atau sifat kejadian tidak diketahui. <br>3. Berpotensi menyebar secara internasional. <br>4. Berisiko terhadap perjalanan ataupun perdagangan.</p>', '/uploads/images/beritadanartikel/berita/5_Mengenal Istilah Penyakit Endemi, Pandemi, dan Darurat Corona_1581152657.jpeg', '2020-02-08 02:04:17', '2020-02-08 02:04:17'),
(6, 'Kesehatan', 'Pahami 5 Faktor Risiko Kanker Sebelum Terlambat', '<p>Jakarta, CNN Indonesia -- <span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/kanker\"><span style=\"color: #ff0000;\">Kanker</span></a></strong></span>, menjadi salah satu penyakit yang diwaspadai. Betapa tidak, saban tahun sebanyak 9,6 juta orang&nbsp;<span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/meninggal\"><span style=\"color: #ff0000;\">meninggal</span></a></strong></span>\r\n akibat kanker. Namun sebanyak 3,7 juta kasus kanker dapat diselamatkan \r\ndengan perawatan dan pengobatan secara tepat, juga deteksi dini. Anda \r\nbisa mencegah salah satunya dengan mengenali faktor <span style=\"color: #ff0000;\"><strong><a href=\"https://www.cnnindonesia.com/tag/risiko-kanker\"><span style=\"color: #ff0000;\">risiko kanker</span></a></strong></span>.<br><br>Hingga\r\n kini belum diketahui secara pasti apa yang menyebabkan kanker \r\nberkembang dalam organ tubuh manusia. Meski begitu, studi menunjukkan \r\nsejumlah faktor risiko yang bisa meningkatkan peluang seseorang terkena \r\nkanker.<br><br>Jika seseorang semakin banyak memiliki faktor risiko \r\nkanker, semakin besar pula risiko orang tersebut terkena kanker di masa \r\nmendatang. Terdapat sejumlah faktor risiko kanker yang tak bisa \r\ndihilangkan, tapi sebagian lagi bisa dihindari.</p><p>Berikut faktor risiko kanker:<br><br><strong>1. Usia</strong><br>Usia \r\nmerupakan faktor risiko kanker yang tak bisa diubah. Semakin tua usia \r\nseseorang, semakin mungkin terkena kanker. Berdasarkan statistik dari \r\nNCI, rata-rata usia seseorang saat didiagnosis terkena kanker adala 66 \r\ntahun. Sebanyak 25 persen penderita kanker bahkan didiagnosis saat \r\nberusia 65-74 tahun.<br><br>Dikutip dari <span style=\"color: #0000ff;\"><em><a href=\"https://www.cancer.gov/about-cancer/causes-prevention/risk\"><span style=\"color: #0000ff;\">National Cancer Institute</span></a></em></span>,\r\n usia rata-rata seseorang didiagnosis kanker payudara adalah 61 tahun, \r\nkanker usus besar 68 tahun, kanker paru 70 tahun, dan kanker prostat 66 \r\ntahun.<br><br>Usia muda juga tak terhindar dari kanker, leukimia dan kanker tulang umumnya menyerang usia di bawah 20 tahun.<br><br><strong>2. Rokok dan alkohol</strong><br>Merokok\r\n atau menggunakan tembakau merupakan penyebab utama kanker dan kematian \r\nakibat kanker. Orang yang merokok aktif dan pasif memiliki risiko lebih \r\ntinggi terkena kanker. Bahan kimia dalam tembakau dapat merusak DNA \r\nsehingga membuat kanker lebih cepat berkembang.</p><p>Selain rokok, orang yang mengonsumsi alkohol juga berisiko lebih tinggi \r\nterkena kanker. Alkohol dapat meningkatkan risiko kanker mulut, \r\ntenggorokan, kerongkongan, hati, dan payudara.<br><br>Rokok dan alkohol \r\nmerupakan faktor risiko yang dapat dicegah dan dihindari. Tidak merokok \r\ndan tidak mengonsumsi alkohol mengurangi risiko terkena kanker.<br><br><strong>3. Riwayat keluarga</strong><br>Riwayat\r\n keluarga merupakan catatan penyakit yang dialami keluarga sedarah, \r\nseperti orang tua, kakek dan nenek, adik dan kak, anak, om, tante, \r\nkeponakan, dan sepupu.<br><br>Pusat Pengendalian dan Pencegahan Penyakit Amerika Serikat (<span style=\"color: #0000ff;\"><em><a href=\"https://www.cdc.gov/cancer/risk_factors.htm\"><span style=\"color: #0000ff;\">CDC</span></a></em></span>)\r\n menyatakan jika memiliki riwayat keluarga yang terkena kanker, risiko \r\nseseorang terkena kanker akan lebih tinggi. Pasalnya, keluarga memiliki \r\ngen yang mirip, kebiasaan, dan lingkungan yang sama sehingga \r\nmempengaruhi risiko kanker.</p><p><strong>4. Obesitas dan diet</strong><br>Orang yang memiliki berat badan\r\n berlebih atau obesitas memiliki peningkatan risiko beberapa jenis \r\nkanker. Mulai dari payudara, usus besar, rektum, rahim, kerongkongan, \r\nginjal, pankreas, dan kantung empedu.<br><br>Diet yang tidak sehat seperti banyak mengonsumsi makanan olahan dan cepat saji juga dikaitkan dengan meningkatnya risiko kanker.<br><br><strong>5. Lingkungan</strong><br>Faktor\r\n lingkungan juga berperan dalam meningkatkan risiko kanker. Terpapar \r\nradiasi dan sinar matahari misalnya meningkatkan terkena kanker kulit.</p><p>Paparan karsinogen atau zat-zat yang dianggap menyebabkan kanker juga \r\nbakal meningkatkan risiko terkena kanker. Zat-zat karsinogen dapat \r\nmengubah DNA&nbsp;dalam tubuh sehingga dapat mengembangkan kanker.<br><br>Hindari\r\n faktor risiko yang dapat diubah seperti rokok, alkohol, obesitas, diet \r\ntidak sehat, dan lingkungan yang tidak sehat. Sebaliknya, terapkan gaya \r\nhidup sehat dan aktif berolahraga. Menghindari faktor risiko kanker \r\ndapat mengurangi peluang terkena kanker di kemudian hari.</p>', '/uploads/images/beritadanartikel/berita/6_Pahami 5 Faktor Risiko Kanker Sebelum Terlambat_1581152839.jpeg', '2020-02-08 02:07:19', '2020-02-08 02:07:19'),
(7, 'Kesehatan', 'Tren Bubble Tea dan Waspada Bahayanya bagi Kesehatan', '<p><strong>Jakarta</strong> - <a href=\"https://ttps://www.detik.com/tag/bubble-tea\">Bubble tea </a>kembali\r\n jadi perbincangan. Dalam sebuah video terlihat seorang dokter membedah \r\nsuatu organ yang isinya mirip boba. Seperti apa sih trennya dan apa \r\nwaspada bahayanya?<br><br>Bubble tea adalah minuman teh yang dicampur \r\ndengan susu dan kemudian ditambahkan dengan pearl atau boba. Boba dalam \r\nbubble tea terbuat dari tapioka sehingga menghasilkan tekstur yang \r\nkenyal.</p><p>Mengonsumsi bubble tea kini seperti kopi, sudah menjadi tren dari gaya \r\nhidup masyarakat ibu kota. Selain dikenal akan rasanya, efek negatif \r\ndari bubble tea juga disoroti.</p><p>Sebuah broadcast mengenai boba kembali viral di media sosial. Di video \r\ntersebut, seorang dokter memamerkan salah satu organ dalam seperti \r\nkantong. Ketika organ tersebut di bedah, keluarlah butiran-butiran hitam\r\n yang diyakini sebagai boba.<br><br>Namun tentu jangan langsung percaya.\r\n Karena butiran-butiran mirip boba itu bisa saja kristal batu empedu. \r\nKarena boba sebenarnya terbuat dari tapioka yang juga sulit dicerna \r\ndalam perut. Tetapi, pencernaan terjadi tidak hanya secara kimiawi di \r\nperut, tetapi dimulai dari mulut secara mekanis.<br><br>Terlepas dari \r\nvideo hoaks yang viral, ada beberapa hal yang perlu kamu waspadai \r\nterkait seringnya mengonsumsi bubble tea. Dilansir dalam <em>The Star</em> (13/08) Dr Tan Wee Yong dan ahli gizi Kong Woan Fei memberikan penjelasan:<br><br>1. Berat Badan Naik<br><br>Resep <a href=\"https://www.detik.com/tag/bubble-tea\">bubble tea </a>yang\r\n banyak digunakan adalah gula. Rasanya yang manis membuat bubble tea \r\nbisa membuat berat badan naik. Rata-rata secangkir bubble tea mengandung\r\n 20 sendok teh gula. Untuk orang dewasa yang sehat normal, disarankan \r\nuntuk mengambil tak lebih dari 8 sendok teh gula sehari.<br><br>Kong \r\njuga mengatakan, bubble tea juga dapat menambah asupan kalori harian \r\nkamu. Segelas bubble tea setidaknya mengandung 370 Kkal ditambah dengan \r\nboba 150 Kkal.<br><br>2. Berisiko Diabetes<br><br>Mengonsumsi minuman \r\nmanis secara rutin memang bisa jadi salah satu faktor pemicu diabetes. \r\nDr Tan mengatakan minum bubble tea tidak akan menyebabkan diabetes \r\nsecara langsung. Tapi kandungan gulanya dapat menimbulkan risiko tinggi \r\ntidak hanya diabetes, tetapi juga imunitas yang rendah dan kerusakan \r\ngigi.<br><br>Jika ingin minum bubble tea, ahli gizi Kong menyarankan untuk meminta lebih sedikit gula dan tidak sering mengonsumsi.</p><p>3. Kalori Kosong<br><br>Makanan atau minuman yang minim zat gizi disebut\r\n mengandung kalori kosong. Jika dilihat dari komposisi bubble tea, yang \r\nlebih banyak digunakan ialah gula. \"Tidak ada nilai gizi dari minum \r\nminuman tinggi gula,\" jelas Kong.<br><br>4. Tidak Cocok untuk Anak dan Lansia<br><br>Menurut Dr Tan,<a href=\"https://www.detik.com/tag/bubble-tea\"> bubble tea</a>\r\n tidak cocok dikonsumsi anak-anak atau lansia. Karena bubble tea \r\nmengandung pewarna dan zat tambahan makanan tertentu. Ini dapat \r\nmenyebabkan anak menjadi hiperaktif.<br><br>Untuk lansia, sistem \r\npencernaan mereka lebih lambat dan kurang aktif, sehingga zat tambahan \r\nmakanan dapat menyebabkan gangguan pencernaan. Bola-bola tapioka alias \r\nboba ini sulit dicerna.<br><br>Kong juga menambahkan, segelas bubble tea mengandung tiga kali lebih banyak gula daripada sekaleng minuman ringan.</p><p>Munculnya tren dan kegilaan para pecinta bubble tea ini disebabkan \r\nkarena minuman ini Instagramable. Meskipun harga yang ditawarkan cukup \r\nmahal, namun dikalangan anak muda, konsumsi minuman ini terlihat \r\n\"keren\".<br><br>Dari beberapa waspada bahaya<a href=\"https://www.detik.com/tag/bubble-tea\"> bubble tea,</a> tentunya kamu bisa lebih pintar memilih minuman yang sehat bagi tubuh.<br></p>', '/uploads/images/beritadanartikel/berita/7_Tren Bubble Tea dan Waspada Bahayanya bagi Kesehatan_1581152997.jpeg', '2020-02-08 02:09:57', '2020-02-08 02:09:57'),
(8, 'Kesehatan', 'WHO Sebut 13 Tantangan Kesehatan Global Terkini, Termasuk Tren Vape', '<p><strong>Jakarta</strong> - Memasuki tahun 2020, Organisasi Kesehatan Dunia (<a href=\"https://www.detik.com/tag/who\">WHO</a>)\r\n membuat daftar masalah kesehatan global yang harus diatasi bersama \r\nselama satu dekade mendatang. Ada 13 hal yang jadi perhatian WHO mulai \r\ndari mahalnya tarif jaminan kesehatan sampai tren konsumsi rokok \r\nelektrik atau <a href=\"https://www.detik.com/tag/vape\">vape</a>.<br><br>Direktur\r\n Jenderal WHO Dr Tedros Adhanom Ghebreyesus mengatakan negara, \r\nkomunitas, dan yayasan internasional harus bekerja sama untuk menangani \r\ntantangan kesehatan global.<br><br>\"Semua tantangan dalam daftar ini \r\nmembutuhkan respons tidak hanya dari sektor kesehatan. Kita menghadapi \r\nancaman yang sama dan kita harus memiliki tanggung jawab bersama untuk \r\nbertindak,\" kata Dr Tedros seperti dikutip dari situs resmi WHO.</p><p>Berikut daftar 13 tantangan kesehatan global versi WHO:<br><br><strong>1. Perubahan iklim dan cuaca ekstrem</strong><br><br>Krisis\r\n iklim yang menyebabkan berbagai cuaca ekstrem tidak menentu bisa \r\nsemakin memperparah masalah malnutrisi dan penyakit menular. Belum lagi \r\nsoal polusi udara yang semakin buruk di berbagai belahan dunia.<br><br><strong>2. Layanan di wilayah konflik</strong><br><br>Pada\r\n tahun 2019 WHO melihat pola kemunculan wabah penyakit di daerah yang \r\ndilanda konflik. Hal ini menjadi tantangan karena kadang para pekerja \r\ndan fasilitas kesehatan turut menjadi target.<br><br><strong>3. Perbaikan layanan kesehatan</strong><br><br>WHO\r\n melihat ada perbedaan layanan kesehatan mencolok di antara negara \r\nbahkan di tingkat kota. WHO mengusulkan agar kualitas layanan kesehatan \r\nditingkatkan untuk ibu dan anak, nutrisi, kesetaraan gender, kesehatan \r\nmental, akses air, serta sanitasi.</p><p><strong>4. Cakupan obat</strong><br><br>WHO memprediksi masih ada \r\nsekitar sepertiga populasi dunia kekurangan akses terhadap obat-obatan. \r\nHal ini disebut dapat membahayakan jiwa sampai memperburuk masalah \r\nresistensi obat.<br><br><strong>5. Menghentikan penyakit menular</strong><br><br>Penyakit\r\n menular seperti HIV, tuberkulosis, hepatitis, malaria, penyakit tropis \r\nterabaikan, dan penyakit menular seksual diprediksi akan membunuh \r\nsekitar 4 juta jiwa di tahun 2020.<br><br><strong>6. Persiapan hadapi wabah</strong><br><br>Setiap\r\n tahun dunia menghabiskan banyak sumber daya setiap ada wabah, bencana \r\nalam, atau masalah kesehatan darurat lainnya. WHO ingin agar negara \r\nmulai menggunakan sumber daya dalam upaya pencegahan.<br><br><strong>7. Melindungi masyarakat dari produk berbahaya</strong><br><br>WHO\r\n secara khusus menyoroti konsumsi rokok dan belakangan ini tren rokok \r\nelektrik atau vape. Saat ini WHO disebut masih bekerja sama dengan \r\nbeberapa negara untuk menghasilkan kebijakan publik berdasarkan bukti \r\nilmiah.<br><br><strong>8. Investasi tenaga kesehatan</strong><br><br>Minimnya\r\n edukasi dan gaji disebut WHO jadi pendorong masalah kurangnya tenaga \r\nkesehatan di berbagai penjuru dunia. Pada tahun 2030 diperkirakan dunia \r\nakan butuh sekitar 18 juta tenaga kesehatan termasuk di dalamnya perawat\r\n dan bidan.<br><br><strong>9. Jaga kesehatan remaja</strong><br><br>Lebih\r\n dari 1 juta remaja usia 10-19 tahun meninggal setiap tahun. Penyebabnya\r\n mulai dari kecelakaan lalu lintas, kekerasan, HIV, bunuh diri, hingga \r\npenyakit infeksi saluran napas bawah.<br><br><strong>10. Raih kepercayaan publik</strong><br><br>Beberapa\r\n informasi kesehatan yang menyesatkan di media sosial terus tumbuh subur\r\n seperti misalnya gerakan antivaksin. WHO mendorong agar para penyedia \r\nlayanan kesehatan melawan dengan merebut kepercayaan publik.<br><br><strong>11. Manfaatkan teknologi</strong><br><br>Teknologi\r\n digital yang terus berkembang pesat disebut WHO bisa dimanfaatkan untuk\r\n mencegah, mendiagnosis, dan mengobati banyak penyakit.<br><br><strong>12. Lindungi antibiotik</strong><br><br>Agar\r\n masalah resistensi antibiotik tidak cepat berkembang semakin parah \r\nmasyarakat diimbau berhati-hati menggunakan obat. Hal ini terutama \r\nberlaku bagi mereka yang bergerak di sektor pertenakan.<br><br><strong>13. Jaga sanitasi</strong><br><br>Sekitar\r\n satu dari empat fasilitas kesehatan di dunia mengalami masalah \r\nkebersihan karena minim sanitasi. Bila kebersihan tidak dijaga dengan \r\nbaik maka layanan kesehatannya juga tidak akan memadai.<br><br><strong></strong></p>', '/uploads/images/beritadanartikel/berita/8_WHO Sebut 13 Tantangan Kesehatan Global Terkini, Termasuk Tren Vape_1581153082.jpeg', '2020-02-08 02:11:22', '2020-02-08 02:11:22'),
(10, 'kesehatan', 'Menkes Terawan Lapor Kondisi Ketahanan Kesehatan Nasional ke Mahfud Md', '<p>Jakarta - Menteri Kesehatan (Menkes) Letjen (Purn) dr Terawan Agus Putranto menemui Menteri Koordinator Politik, Hukum, dan Keamanan (Menko Polhukam) Mahfud Md. Pertemuan membahas kondisi ketahanan kesehatan di Indonesia saat ini.<strong></strong><br><br>Menkes\r\n Terawan tiba di gedung Kemenko Polhukam, Jalan Medan Merdeka Barat, \r\nJakarta Pusat, Jumat (20/12/2019), sekitar pukul 09.30 WIB. Pertemuan \r\ntertutup itu berlangsung sekitar 30 menit.<br><br>Saat menemui Mahfud, \r\nTerawan melaporkan soal kondisi ketahanan kesehatan nasional saat ini. \r\nTerawan menyebut ketahanan kesehatan sangat mempengaruhi angka kematian \r\ndan kesehatan global.</p><p>\"Kami membahas mengenai ketahanan kesehatan nasional yang hubungannya \r\nini kan soal perintah Pak Presiden. Jadi mengenai pelayanan kesehatan, \r\nkemudian angka kematian ibu, anak, dan sebagainya itu kan berkaitan. \r\nKalau ketahanan kita turun, runtuh kan juga akan mempengaruhi kesehatan \r\nglobal,\" ujar Terawan setelah menemui Mahfud.<br><br>Mantan Kepala RSPAD\r\n Gatot Soebroto itu menyebut Mahfud Md meminta agar pelayanan kesehatan \r\nkepada masyarakat ditingkatkan. Selain itu, dia melaporkan soal angka \r\nkematian ibu dan bayi. \"Karena itu kita diminta untuk apa yang menjadi \r\nmasukannya supaya pelayanan kesehatan juga menjadi semakin baik melalui \r\nBPJS-nya bisa <em>diinikan</em>,\" ucapnya.<br><br>\"Kemudian mengenai \r\nangka kematian ibu, angka kematian bayi, termasuk bagaimana imunisasi, \r\nvaksinasinya. Juga mengenai stunting karena itu menyangkut ketahanan \r\njangka panjang juga. Kalau kita <em>main </em><em>power</em>-nya tidak sehat ya otomatis di kemudian hari kita tak punya ketahanan yang baik,\" lanjutnya.</p><p>Terawan menuturkan kondisi ketahanan kesehatan saat ini sudah pada \r\njalurnya. Dia menambahkan bahwa angka stunting dan kematian ibu dan bayi\r\n menurun.<br><br>\"Sudah <em>on the track</em>, kan itu kita lihat angka stunting juga mulai turun. Angka kematian ibu, kematian bayi juga mulai turun. Kita ingin lebih <em>inikan</em> lagi,\" pungkasnya.        \r\n		\r\n        <strong>(lir/aan)</strong></p>', '/uploads/images/beritadanartikel/berita/10_Menkes Terawan Lapor Kondisi Ketahanan Kesehatan Nasional ke Mahfud Md_1581153343.jpeg', '2020-02-08 02:15:43', '2020-02-09 17:50:52'),
(11, 'Kesehatan', 'Grab Rilis Layanan Kesehatan, Gandeng Good Doctor Technology', '<p><strong>Jakarta</strong> - Setelah hadir dalam aplikasinya, Grab \r\nIndonesia mengumumkan secara resmi layanan kesehatan untuk masyarakat di\r\n Indonesia bernama <a href=\"https://www.detik.com/tag/grabhealth/\">GrabHealth</a>. Grab menggandeng Good Doctor Technology untuk menyediakan beberapa layanan kesehatan dalam aplikasinya.<br><br>Presiden Direktur <a href=\"https://www.detik.com/tag/grab/\">Grab</a>\r\n Indonesia Ridzki Kramadibrata mengatakan, kehadiran GrabHealth ini \r\nseirama dengan budaya Grab yakni \'Grab For Good\'. Dengan kesamaan visi \r\ninilah maka keduanya berkolaborasi lewat teknologi, khususnya dalam hal \r\nakses kesehatan melalui platform digital.<br> <br>\"Secara tidak \r\nkebetulan, Grab memiliki misi yaitu Grab For Good, teknologi yang \r\ndiluncurkan untuk hal baik yang positif kepada masyarakat. Itu adalah \r\nkomitmen kita kepada masyarakat Indonesia bahkan kepada masyarakat di \r\nAsia Tenggara. Karena teknologi itu memang dibuat untuk memberikan hal \r\nyang baik, memberikan kemajuan kepada masyarakat. Hari ini kita buktikan\r\n bahwa sekali lagi Grab meluncurkan sesuatu yang membawa kebaikan untuk \r\nmasyarakat,\" kata Ridzki dalam peluncuran GrabHealth di Museum \r\nKebangkitan Nasional, Jakarta, Selasa (10/12/2019).</p><p>Ridzki pun membeberkan, kunjungan CEO dan Chairman Softbank Masayoshi \r\nSon Juni lalu ke Indonesia, tak lain untuk memberikan investasi langsung\r\n dalam pengembangan e-health care ini.</p><p>\"Good Doctor Technology Indonesia memiliki visi untuk menyediakan \'Satu \r\nDokter untuk Satu Keluarga (One Doctor for One Family)\' di Indonesia. \r\nKami bekerja sama dengan Grab, platform online to offline (O2O) \r\nterkemuka di Asia Tenggara yang akan memungkinkan kami dalam menyediakan\r\n akses ke dokter dan spesialis bagi seluruh keluarga di Indonesia,\" kata\r\n Adhiatma.<br><br>GrabHealth yang bekerja sama melalui Good Doctor ini \r\nmenyediakan tanya jawab kesehatan secara daring (online) dengan \r\ndokter-dokter profesional, e-commerce (perdagangan elektronik) untuk \r\nberbagai produk kesehatan &amp; kebugaran serta berbagai konten mengenai\r\n kesehatan, kebugaran dan gaya hidup yang dikurasi oleh tim dokter.<br><br>Indonesia\r\n merupakan pasar pertama Grab dalam meluncurkan layanan kesehatan \r\ndigital dalam aplikasinya. Pengguna aplikasi GrabHealth bisa merasakan \r\nkonsultasi kesehatan dengan dokter umum, termasuk konsultasi dengan \r\ndokter spesialis dalam jangka waktu 24 jam.<br></p>', '/uploads/images/beritadanartikel/berita/11_Grab Rilis Layanan Kesehatan, Gandeng Good Doctor Technology_1581153695.jpeg', '2020-02-08 02:21:35', '2020-02-08 02:21:35');

-- --------------------------------------------------------

--
-- Table structure for table `download`
--

CREATE TABLE `download` (
  `id_download` bigint(20) UNSIGNED NOT NULL,
  `nama_file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `download`
--

INSERT INTO `download` (`id_download`, `nama_file`, `file`, `created_at`, `updated_at`) VALUES
(6, 'nama file 2', '/uploads/images/kepustakaan/download/6_nama file 2_1581174992.jpg', '2020-02-07 21:15:50', '2020-02-08 08:16:32'),
(7, 'nama file 1', '/uploads/images/kepustakaan/download/7_nama file 1_1581174975.jpg', '2020-02-07 22:33:15', '2020-02-08 08:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `deskripsi`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'judul satu', 'gambar saat upacara<br>', '/uploads/images/kepustakaan/galeri/1_judul satu_1581175709.jpg', '2020-02-08 08:28:29', '2020-02-08 08:28:29'),
(2, 'judul 2', '<p>gambar saat upacara<br></p>', '/uploads/images/kepustakaan/galeri/2_judul 2_1581175726.jpg', '2020-02-08 08:28:46', '2020-02-08 08:28:46'),
(3, 'judul 3', '<p>gambar saat upacara<br></p>', '/uploads/images/kepustakaan/galeri/3_judul 3_1581175740.jpg', '2020-02-08 08:29:00', '2020-02-08 08:29:00'),
(4, 'judul 4', '<p>gambar saat upacara<br></p>', '/uploads/images/kepustakaan/galeri/4_judul 4_1581175761.jpg', '2020-02-08 08:29:21', '2020-02-08 08:29:21'),
(5, 'judul lima', '<p>gambar saat upacara<br></p>', '/uploads/images/kepustakaan/galeri/5_judul lima_1581175780.jpg', '2020-02-08 08:29:40', '2020-02-08 08:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_pelayanan`
--

CREATE TABLE `jenis_pelayanan` (
  `id_pelayanan` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_pelayanan`
--

INSERT INTO `jenis_pelayanan` (`id_pelayanan`, `nama`, `icon`, `created_at`, `updated_at`) VALUES
(4, 'Mikrobiologi', '/uploads/images/jenispelayanan/gambar.png', '2020-01-29 10:08:45', '2020-01-29 10:08:45'),
(5, 'Immunologi', '/uploads/images/jenispelayanan/gambar.png', '2020-01-29 10:08:55', '2020-01-29 10:08:55'),
(6, 'Kimia Kesehatan', '/uploads/images/jenispelayanan/gambar.png', '2020-01-29 10:09:13', '2020-01-29 10:09:13'),
(7, 'Toksikologi', '/uploads/images/jenispelayanan/gambar.png', '2020-02-03 23:48:06', '2020-02-03 23:48:06'),
(8, 'Kimia Air', '/uploads/images/jenispelayanan/gambar.png', '2020-02-03 23:48:20', '2020-02-03 23:48:20'),
(9, 'Hematologi', '/uploads/images/jenispelayanan/gambar.png', '2020-02-03 23:48:32', '2020-02-03 23:48:32'),
(10, 'Pelayanan Strain/Media/Reagen, dan Pemantapan Mutu Eksternal (PME)', '/uploads/images/jenispelayanan/gambar.png', '2020-02-03 23:49:01', '2020-02-03 23:49:01'),
(11, 'Diklat / Pelatihan, Magang, dan Penelitian', '/uploads/images/jenispelayanan/gambar.png', '2020-02-03 23:49:09', '2020-02-03 23:49:09'),
(12, 'Penggunaan Ruang untuk Pelayanan Pelatihan / Pertemuan', '/uploads/images/jenispelayanan/gambar.png', '2020-02-03 23:49:18', '2020-02-03 23:49:18'),
(13, 'Kalibrasi Alat Kesehatan', '/uploads/images/jenispelayanan/gambar.png', '2020-02-03 23:49:29', '2020-02-03 23:49:29'),
(14, 'Kimia Klinik', '/uploads/images/jenispelayanan/gambar.png', '2020-02-03 23:51:00', '2020-02-03 23:51:00');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_pelayanan`
--

CREATE TABLE `kategori_pelayanan` (
  `id_kategori` bigint(20) NOT NULL,
  `id_pelayanan` bigint(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jasa_sarana` int(11) NOT NULL,
  `jasa_pelayanan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_pelayanan`
--

INSERT INTO `kategori_pelayanan` (`id_kategori`, `id_pelayanan`, `nama`, `jasa_sarana`, `jasa_pelayanan`, `total`, `created_at`, `updated_at`) VALUES
(18, 4, 'Pemeriksaan Mikroskopis', 0, 0, 0, '2020-02-04 00:13:02', '2020-02-04 00:13:02'),
(19, 4, 'Biakan dan Identifikasi', 0, 0, 0, '2020-02-04 00:13:16', '2020-02-04 00:13:16'),
(20, 5, 'Aggutinasi/Floculasi/HA dan HI Test', 0, 0, 0, '2020-02-04 00:13:36', '2020-02-04 00:13:36'),
(21, 5, 'ELISA/ELFA', 0, 0, 0, '2020-02-04 00:13:54', '2020-02-04 00:13:54'),
(22, 7, 'Analisa Kualitatif', 0, 0, 0, '2020-02-04 00:14:06', '2020-02-04 00:14:06'),
(23, 7, 'Analisa Kuantitatif', 0, 0, 0, '2020-02-04 00:14:16', '2020-02-04 00:14:16'),
(24, 8, 'Kualitas Air', 0, 0, 0, '2020-02-04 00:14:33', '2020-02-04 00:14:33'),
(25, 8, 'Kualitas Udara', 0, 0, 0, '2020-02-04 00:14:44', '2020-02-04 00:14:44'),
(26, 8, 'Kualitas Makanan, Minuman, dan Bahannya', 0, 0, 0, '2020-02-04 00:15:02', '2020-02-04 00:15:02'),
(27, 9, 'Darah lengkap', 26000, 14000, 40000, '2020-02-04 00:16:42', '2020-02-04 00:16:42'),
(28, 9, 'Darah rutin / Darah Lengkap Tanpa LED', 21125, 11375, 32500, '2020-02-04 00:18:18', '2020-02-04 00:18:18'),
(29, 9, 'Golongan Darah (ABO dan Rhesus)', 19500, 10500, 30000, '2020-02-04 00:18:55', '2020-02-04 00:18:55'),
(30, 9, 'Hitung Jumlah Retikulosit', 14625, 7875, 22500, '2020-02-04 00:19:22', '2020-02-04 00:19:22'),
(31, 9, 'Laju Endap Darah', 8125, 4375, 12500, '2020-02-04 00:19:45', '2020-02-04 00:19:45'),
(32, 9, 'LPB', 11375, 6125, 17500, '2020-02-04 00:22:25', '2020-02-04 00:22:25'),
(33, 9, 'Masa Pembekuan', 6500, 3500, 10000, '2020-02-04 00:22:42', '2020-02-04 00:22:42'),
(34, 9, 'Masa pendarahan', 6500, 3500, 10000, '2020-02-04 00:23:01', '2020-02-04 00:23:01'),
(35, 9, 'Morfologi darah tepi', 29250, 15750, 45000, '2020-02-04 00:23:21', '2020-02-04 00:23:21'),
(36, 14, 'Albumin', 13000, 7000, 20000, '2020-02-04 00:24:08', '2020-02-04 00:24:08'),
(37, 14, 'Alkali fosfatase', 14950, 8050, 23000, '2020-02-04 00:29:56', '2020-02-04 00:29:56'),
(38, 14, 'Analisa sperma', 39000, 21000, 60000, '2020-02-04 00:31:04', '2020-02-04 00:31:04'),
(39, 14, 'Asam urat', 14950, 8050, 23000, '2020-02-04 00:31:29', '2020-02-04 00:31:29'),
(40, 14, 'Bilirubin direct', 14950, 8050, 23000, '2020-02-04 00:32:47', '2020-02-04 00:32:47'),
(41, 14, 'Bilirubin indirect', 14950, 8050, 23000, '2020-02-04 00:33:01', '2020-02-04 00:33:01'),
(42, 14, 'Bilirubin total', 14950, 8050, 23000, '2020-02-04 00:33:22', '2020-02-04 00:33:22'),
(43, 14, 'Carik celup urin', 12350, 6650, 19000, '2020-02-04 00:33:40', '2020-02-04 00:33:40'),
(44, 14, 'Cholinesterase', 29250, 15750, 45000, '2020-02-04 00:34:16', '2020-02-04 00:34:16'),
(45, 14, 'Gamma GT', 20800, 11200, 32000, '2020-02-04 00:34:28', '2020-02-04 00:34:28'),
(46, 14, 'Globulin', 13000, 7000, 20000, '2020-02-04 00:34:49', '2020-02-04 00:34:49'),
(47, 14, 'Glukosa', 13000, 7000, 20000, '2020-02-04 00:35:00', '2020-02-04 00:35:00'),
(48, 14, 'HDL', 19500, 10500, 30000, '2020-02-04 00:35:11', '2020-02-04 00:35:11'),
(49, 14, 'Kolesterol total', 11700, 6300, 18000, '2020-02-04 00:35:35', '2020-02-04 00:35:35'),
(50, 14, 'Kreatinin', 13000, 7000, 20000, '2020-02-04 00:35:51', '2020-02-04 00:35:51'),
(51, 14, 'Kreatinin kinase MB/CKMB', 21125, 11375, 32500, '2020-02-04 00:36:12', '2020-02-04 00:36:12'),
(52, 14, 'Kreatinin kinase/CPK', 20150, 10850, 31000, '2020-02-04 00:36:35', '2020-02-04 00:36:35'),
(53, 14, 'LDH', 27300, 14700, 42000, '2020-02-04 00:36:50', '2020-02-04 00:36:50'),
(54, 14, 'LDL', 19500, 10500, 30000, '2020-02-04 00:37:07', '2020-02-04 00:37:07'),
(55, 14, 'Natrium, Kalium, Klorida', 42250, 22750, 65000, '2020-02-04 00:37:22', '2020-02-04 00:37:22'),
(56, 14, 'Rasio Kolesterol Total / HDL', 10400, 5600, 16000, '2020-02-04 00:37:48', '2020-02-04 00:37:48'),
(57, 14, 'Serum Besi (Fe)', 35750, 19250, 55000, '2020-02-04 00:38:06', '2020-02-04 00:38:06'),
(58, 14, 'SGOT', 13975, 7525, 21500, '2020-02-04 00:38:24', '2020-02-04 00:38:24'),
(59, 14, 'SGPT', 13975, 7525, 21500, '2020-02-04 00:38:39', '2020-02-04 00:38:39'),
(60, 14, 'Surat Keterangan Bebas Narkoba', 16250, 8750, 25000, '2020-02-04 00:38:57', '2020-02-04 00:38:57'),
(61, 14, 'TIBC', 50050, 26950, 77000, '2020-02-04 00:39:15', '2020-02-04 00:39:15'),
(62, 14, 'Total Protein', 13975, 7525, 21500, '2020-02-04 00:40:31', '2020-02-04 00:40:31'),
(63, 14, 'Trigliserid', 13000, 7000, 20000, '2020-02-04 00:40:46', '2020-02-04 00:40:46'),
(64, 14, 'Urea', 13000, 7000, 20000, '2020-02-04 00:41:01', '2020-02-04 00:41:01'),
(65, 14, 'Urin lengkap', 14625, 7875, 22500, '2020-02-04 00:41:16', '2020-02-04 00:41:16'),
(66, 14, 'Strain/Media dan Reagen', 0, 0, 0, '2020-02-04 00:41:34', '2020-02-04 00:41:34'),
(67, 14, 'Pemantapan Mutu Eksternal (PME) Per Periode', 0, 0, 0, '2020-02-04 00:41:44', '2020-02-04 00:41:44'),
(68, 11, 'Ijin masuk PKL / Magang / Penelitian', 0, 0, 0, '2020-02-04 00:42:04', '2020-02-04 00:42:04'),
(69, 11, 'Konsultasi Dokter', 5500, 3000, 8500, '2020-02-04 00:42:21', '2020-02-04 00:42:21'),
(70, 11, 'Surat Keterangan Sehat', 6500, 3500, 10000, '2020-02-04 00:42:40', '2020-02-04 00:42:40'),
(71, 11, 'Vaksinasi Influenza (4 strain)', 185250, 99750, 285000, '2020-02-04 00:43:03', '2020-02-04 00:43:03'),
(72, 11, 'Vaksinasi Influenza (3 strain)', 130000, 70000, 200000, '2020-02-04 00:43:21', '2020-02-04 00:43:21'),
(73, 11, 'Vaksinasi meningitis', 204750, 110250, 315000, '2020-02-04 00:43:39', '2020-02-04 00:43:39'),
(74, 11, 'Vaksinasi hepatitis B (1 vial)', 97500, 52500, 150000, '2020-02-04 00:43:58', '2020-02-04 00:43:58'),
(75, 12, 'Lapangan tenis', 3900, 2100, 6000, '2020-02-04 00:44:18', '2020-02-04 00:44:18'),
(76, 12, 'Ruang Aula (Baru dan Lama)', 195000, 105000, 300000, '2020-02-04 00:46:11', '2020-02-04 00:46:11'),
(77, 12, 'Ruang Laboratorium', 32500, 17500, 50000, '2020-02-04 00:46:38', '2020-02-04 00:46:38'),
(78, 12, 'Ruang Kantin', 130000, 70000, 200000, '2020-02-04 00:46:56', '2020-02-04 00:46:56'),
(79, 13, 'Anak Timbangan (Kelas M Set)', 392925, 211575, 604500, '2020-02-04 00:47:44', '2020-02-04 00:47:44'),
(80, 13, 'Auto Clave', 157170, 84630, 241800, '2020-02-04 00:48:01', '2020-02-04 00:48:01'),
(81, 13, 'Bed Side Monitor / Pasien Monitor', 296205, 159495, 455700, '2020-02-04 00:48:27', '2020-02-04 00:48:27'),
(82, 13, 'Blood Bank', 126945, 68355, 195300, '2020-02-04 00:48:43', '2020-02-04 00:48:43'),
(83, 13, 'Blood Warmer', 108810, 58590, 167400, '2020-02-04 00:49:41', '2020-02-04 00:49:41'),
(84, 13, 'Cardiotocograph (CTG)', 169260, 91140, 260400, '2020-02-04 00:50:06', '2020-02-04 00:50:06'),
(85, 13, 'Centrifuge', 157170, 84630, 241800, '2020-02-04 00:50:25', '2020-02-04 00:50:25'),
(86, 13, 'Doppler', 108810, 58590, 167400, '2020-02-04 00:50:57', '2020-02-04 00:50:57'),
(87, 13, 'ECG / EKG', 151125, 81375, 232500, '2020-02-04 00:51:15', '2020-02-04 00:51:15'),
(88, 13, 'Infant Warmer', 205530, 110670, 316200, '2020-02-04 00:51:30', '2020-02-04 00:51:30'),
(89, 13, 'Oven', 199485, 107415, 306900, '2020-02-04 00:51:53', '2020-02-04 00:51:53'),
(90, 13, 'Pulse Oxymetri (SPO2 Monitor)', 163215, 87885, 251100, '2020-02-04 00:52:17', '2020-02-04 00:52:17'),
(91, 13, 'Sphygmomanometer/ Tensimeter', 157170, 84630, 241800, '2020-02-04 00:52:36', '2020-02-04 00:52:36'),
(92, 13, 'Sterilisator Basah/ Kering', 102765, 55335, 158100, '2020-02-04 00:53:03', '2020-02-04 00:53:03'),
(93, 13, 'Suction Pump/ Alat Hisap Medik', 139035, 74865, 213900, '2020-02-04 00:53:27', '2020-02-04 00:53:27'),
(94, 13, 'Thermometer', 120900, 65100, 186000, '2020-02-04 00:53:42', '2020-02-04 00:53:42'),
(95, 13, 'Timbangan Bayi', 90675, 48825, 139500, '2020-02-04 00:54:04', '2020-02-04 00:54:04'),
(96, 13, 'Timbangan Dewasa', 90675, 48825, 139500, '2020-02-04 00:54:33', '2020-02-04 00:54:33'),
(97, 13, 'Timbangan Elektronik (Gram Balance)', 211575, 113925, 325500, '2020-02-04 00:54:52', '2020-02-04 00:54:52'),
(98, 13, 'USG', 241800, 130200, 372000, '2020-02-04 00:55:05', '2020-02-04 00:55:05');

-- --------------------------------------------------------

--
-- Table structure for table `kompetensi_sdm`
--

CREATE TABLE `kompetensi_sdm` (
  `id_kompetensi_sdm` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kompetensi_sdm` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` bigint(20) UNSIGNED NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `alamat`, `telepon`, `fax`, `email`, `created_at`, `updated_at`) VALUES
(3, 'Balai Laboratorium Kesehatan & Kalibrasi Ngadinegaran MJ III/62 Mantrijeron', '(0274) 378187', '0274) 381582', 'labkesjogja@gmail.com', '2020-02-10 00:25:16', '2020-02-10 00:27:56');

-- --------------------------------------------------------

--
-- Table structure for table `layananaduan`
--

CREATE TABLE `layananaduan` (
  `id_layananaduan` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `topik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8_unicode_ci NOT NULL,
  `jawaban` text COLLATE utf8_unicode_ci NOT NULL,
  `status` enum('on','off') COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `layananaduan`
--

INSERT INTO `layananaduan` (`id_layananaduan`, `nama`, `email`, `telepon`, `alamat`, `topik`, `pesan`, `jawaban`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aldi', 'aldi@gmail.com', '123', 'alamate', 'topike', 'pesne', 'hi user aku admin coba jawab..', 'on', '2020-02-13 05:56:57', '2020-02-13 07:05:40'),
(2, 'second', 'second@gmail.com', '123', 'aya', 'topiknya lagi', 'pesannya', 'jawab lagi ah', 'on', '2020-02-13 06:17:49', '2020-02-14 06:55:08'),
(3, 'tes nama', 'email@email.com', '123', 'alamatnya', 'topiknya', 'pesannya', 'jawab ah', 'on', '2020-02-14 03:41:06', '2020-02-14 06:54:58'),
(4, 'namamu', 'emailmu@gmail.com', '123', 'alamatmu', 'topikmu', 'pesanmu', '', 'off', '2020-02-14 06:59:32', '2020-02-14 06:59:32');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(68, '2014_10_12_000000_create_users_table', 1),
(69, '2014_10_12_100000_create_password_resets_table', 1),
(70, '2019_08_19_000000_create_failed_jobs_table', 1),
(72, '2020_01_24_062625_create_kategori_pelayanan_table', 1),
(73, '2020_01_24_062709_create_penelitian_table', 1),
(74, '2020_01_24_062736_create_perpustakaan_table', 1),
(75, '2020_01_24_062813_create_galeri_table', 1),
(76, '2020_01_24_062821_create_download_table', 1),
(77, '2020_01_24_062840_create_berita_table', 1),
(78, '2020_01_24_062848_create_artikel_table', 1),
(79, '2020_01_24_072333_create_jenis_pelayanan_table', 2),
(80, '2020_01_24_154356_create_kontak_table', 3),
(81, '2020_01_24_154428_create_sejarah_table', 3),
(82, '2020_01_24_154442_create_visi_table', 3),
(83, '2020_01_24_154455_create_misi_table', 3),
(84, '2020_01_24_154543_create_upaya_kesehatan_table', 3),
(85, '2020_01_24_154730_create_struktur_organisasi_table', 3),
(86, '2020_01_24_154749_create_kompetensi_sdm_table', 3),
(87, '2020_02_03_060326_create_pengumuman_table', 4),
(88, '2020_02_05_094025_create_mitra_table', 5),
(89, '2020_02_05_094050_create_sertifikat_table', 5),
(90, '2020_02_06_073658_create_baner_table', 6),
(91, '2020_02_06_074302_create_banner_table', 7),
(92, '2020_02_10_025212_create_pesan_table', 8),
(93, '2020_02_10_120932_create_layananaduan_table', 9),
(94, '2020_02_14_005509_create_pengunjung_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `misi`
--

CREATE TABLE `misi` (
  `id_misi` bigint(20) UNSIGNED NOT NULL,
  `misi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `misi`
--

INSERT INTO `misi` (`id_misi`, `misi`, `created_at`, `updated_at`) VALUES
(7, '<p><strong>Memberikan pelayanan secara\r\nprofessional</strong><strong> </strong><strong>dan</strong><strong> </strong><strong>&nbsp;terjangkau </strong></p>', '2020-02-08 07:26:35', '2020-02-08 07:26:35'),
(8, '<p><strong></strong><strong>Menerapkan Sistem Manajemen Mutu.</strong></p>', '2020-02-08 07:26:53', '2020-02-08 07:26:53'),
(9, '<p><strong>Berperan </strong><strong>aktif</strong><strong>\r\n</strong><strong>dalam</strong><strong>\r\n</strong><strong>meningkatkan</strong><strong>\r\n</strong><strong>Kesehatan</strong><strong>\r\n</strong><strong>Masyarakat\r\n</strong><strong>dan</strong><strong>\r\n</strong><strong>Kesehatan</strong><strong>\r\n</strong><strong>Lingkungan</strong></p>', '2020-02-08 07:27:06', '2020-02-08 07:27:17'),
(10, '<p><strong>Men</strong><strong>erapkan</strong><strong>\r\n</strong><strong>standar</strong><strong>\r\n</strong><strong>Pelayanan</strong><strong>\r\n</strong><strong>Laboratorium</strong><strong>\r\n</strong><strong>berdasarkan </strong><strong>Ilmu</strong><strong>\r\n</strong><strong>pengetahuan</strong><strong>\r\n</strong><strong>dan</strong><strong>\r\n</strong><strong>teknologi</strong><strong>\r\n</strong><strong>terkini</strong></p>', '2020-02-08 07:27:36', '2020-02-08 07:27:36');

-- --------------------------------------------------------

--
-- Table structure for table `mitra`
--

CREATE TABLE `mitra` (
  `id_mitra` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `mitra`
--

INSERT INTO `mitra` (`id_mitra`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'mitra 1', '/uploads/images/mitra/1_mitra 1_1581150493.png', '2020-02-08 01:28:13', '2020-02-08 01:28:13'),
(2, 'mitra 2', '/uploads/images/mitra/2_mitra 2_1581150504.png', '2020-02-08 01:28:24', '2020-02-13 19:51:21');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `penelitian`
--

CREATE TABLE `penelitian` (
  `id_penelitian` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `peneliti` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `penelitian`
--

INSERT INTO `penelitian` (`id_penelitian`, `judul`, `peneliti`, `deskripsi`, `tanggal`, `created_at`, `updated_at`) VALUES
(4, 'EKSPLORASI ASPEK ANALISIS KREDIT SYARIAH', 'Bagus A. Daniel, Joy E. Tulung, Joubert B. Maramis', '<p><span style=\"font-family: &quot;arial&quot; , &quot;helvetica&quot; , sans-serif;\">Perbankan syariah\r\nmerupakan lembaga keuangan bank yang dikelola dengan sistim syariah. Perbankan\r\nsyariah terdapat risiko kredit yang disebabkan oleh kedisiplinan dalam\r\npembayaran pinjaman yang dilakukan nasabah. Tujuan penelitian ini adalah\r\nmenilai apakah faktor religiusitas, faktor ekonomi (ekspansi usaha, kemiskinan,\r\nkebutuhan), pelayanan memberikan kemudahan dan ketertarikan dalam keputusan\r\npengambilan pinjaman oleh nasabah yang berdampak terhadap tingkat risiko kredit\r\npada bank dan kepatuhan pembayaran nasabah. Penelitian yang digunakan merupakan\r\npenelitian kualitatif dengan menggunakan metode etnografi, pengambilan data\r\nmenggunakan teknik wawancara dan observasi dengan sampel pada Bank Muamalat dan\r\nBank Syariah Mandiri. Hasil penelitian menunjukkan faktor religiusitas, faktor\r\nekonomi yang didalamnya terdapat (ekspansi usaha, kemiskinan, kebutuhan),\r\nfaktor pelayanan merupakan faktor yang menyebabkan nasabah dalam mengambil\r\npinjaman pada bank syariah Muamalat dan Syariah Mandiri yang berdampak pada\r\ntingkat risiko kredit pada bank dan kepatuhan pembayaran nasabah. Kiranya\r\nfaktor yang diterapkan dapat dipertahankan dan ditingkatkan terhadap sistem dan\r\nkebijakan bank berbasis syariah.</span></p>', '08/02/2020', '2020-02-08 09:10:21', '2020-02-08 09:10:21'),
(5, 'PENGARUH BUDAYA ORGANISASI, DISIPLIN KERJA, DAN LINGKUNGAN KERJA TERHADAP KINERJA', 'Anggy Henly Kumajas, Victor P. K. Lengkong, Rudy S. Wenas', '<p><span style=\"font-family: &quot;arial&quot; , &quot;helvetica&quot; , sans-serif;\">Tujuan penelitian ini\r\nadalah untuk mengetahui pengaruh budaya organisasi, disiplin kerja, dan\r\nlingkungan kerja secara bersama-sama dan secara parsial terhadap kinerja\r\nkaryawan di PT PLN (Persero) Wilayah Suluttenggo. Penelitian ini menggunakan\r\njenis penelitian asosiatif. Lokasi penelitian di PT. PLN (Persero) Kantor\r\nWilayah Sulutenggo. Waktu penelitian selama 6 bulan. Populasi sebanyak 168\r\norang dan sampel sebanyak 63 responden. Analisis data menggunakan analisis\r\nregresi linear berganda. Hasil penelitian yaitu: secara serentak, budaya kerja,\r\ndisiplin kerja, dan lingkungan kerja berpengaruh terhadap kinerja kerja\r\nkaryawan. Budaya kerja dalam penelitian ini berpengaruh positif dan signifikan\r\nterhadap kinerja karyawan. Disiplin kerja dalam penelitian ini berpengaruh\r\npositif dan signifikan terhadap kinerja karyawan Lingkungan kerja dalam\r\npenelitian ini tidak berpengaruh positif dan signifikan terhadap kinerja\r\nkaryawan. Saran yaitu: PT. PLN (Persero) wilayah Sulutenggo Diketahui bahwa\r\ndisiplin kerja dan juga budaya kerja merupakan faktor yang penting dalam rangka\r\nmeningkatkan kinerja karyawan di perusahaan listrik negara ini. Untuk itu pihak\r\nmanajemen perlu meningkatkan disiplin kerja para karyawannya serta meningkatkan\r\nbudaya kerja yang positif terhadap para karyawannya dalam meningkatkan kinerja\r\nkaryawan.</span></p>', '05/05/2005', '2020-02-08 09:11:30', '2020-02-08 09:11:30'),
(6, 'PENGARUH PENDIDIKAN, PELATIHAN DAN PENEMPATAN KERJA TERHADAP KINERJA KARYAWAN PT. PLN (PERSERO) AREA MANADO', 'Mario R. Kandow, Lotje Kawet, Hendra N. Tawas', '<p><span style=\"font-family: &quot;arial&quot; , &quot;helvetica&quot; , sans-serif;\">Sumber daya manusia\r\nmerupakan aset terpenting perusahaan karena peranannya sebagai subjek pelaksana\r\nkebijakan dan kegiatan operasional perusahaan. Perusahaan membutuhkan karyawan\r\nyang mempunyai kinerja yang tinggi. Adapun faktor yang penting dari manajemen\r\nsumber daya manusia diantaranya berkenaan dengan pendidikan, pelatihan dan\r\npenempatan kerja yang menjadi variabel dalam penelitian ini untuk menguji\r\npengaruhnya terhadap kinerja pegawai. Tujuan dari penelitian ini untuk\r\nmengetahui pengaruh pendidikan, pelatihan, dan penempatan kerja terhadap\r\nkinerja karyawan PT. PLN (Persero) Area Manado. Sampel yang digunakan 48\r\nresponden dari 90 pegawai PT. PLN (Persero) Area Manado. Metode penelitian yang\r\ndigunakan adalah metode Kuantitatif dengan menggunakan Analisis Regresi\r\nBerganda. Hasil penelitian menunjukkan bahwa pendidikan, pelatihan dan\r\npenempatan kerja berpengaruh secara simultan terhadap kinerja karyawan. Secara\r\nparsial pendidikan berpengaruh positif dan signifikan<span style=\"mso-spacerun: yes;\">&nbsp; </span>terhadap kinerja karyawan, pelatihan\r\nberpengaruh positif dan signifikan terhadap kinerja karyawan sedangkan penempatan\r\nkerja tidak signifikan pengaruhnya terhadap kinerja karyawan pada PT. PLN\r\n(Persero) Area Manado.</span></p>', '11/11/2016', '2020-02-08 09:13:57', '2020-02-08 09:13:57'),
(7, 'PENTINGNYA SISTEM AKUNTANSI TERHADAP PERTANGGUNGJAWABAN SOSIAL PADA SUATU PERUSAHAAN', 'Anita Ludia Vivian Wauran', '<p><span style=\"font-family: &quot;arial&quot; , &quot;helvetica&quot; , sans-serif;\">Dalam menjalankan\r\nbisnis pada perusahaan, pasti terdapat aktivitas perusahaan yang didalamnya\r\ntidak hanya mementingkan cara dalam mendapatkan keuntungan tetapi juga\r\nmemperhatikan dampak-dampak lingkungan yang ada di sekitarnya. Dalam hal ini\r\nbidang akuntansi yang menguraikan tentang pengaruhnya terhadap lingkungan ialah\r\nakuntansi sosial. Dalam sistem akuntansi suatu perusahaan ada beberapa jenis\r\nyaitu perusahaan dagang, perusahaan jasa dan perusahaan manufaktur.Akuntansi\r\nmerupakan salah satu metode yang digunakan dalam setiap perusahaan dengan\r\ntujuan agar perusahaan dapat melihat berapa banyak keuntungan atau kerugian\r\nyang diperoleh dalam setiap periode. Tetapi selain itu, akuntansi dalam suatu\r\nperusahaan juga memiliki tanggungjawab terhadap kepentingan lain seperti\r\nlingkungan sosial disekitarnya.Dalam hal ini bidang akuntansi akan membahas\r\ndampak akuntansi sosial terhadap lingkungan. Dampak akuntansi sosial di\r\nmasyarakat mengungkapkan tentang kegiatan dalam suatu perusahaan, serta\r\nbagaimana interaksi yang baik antara perusahaan dan lingkungannya. Untuk itu\r\ndibutuhkan kesadaran dalam menjalankan aktivitas perusahaan yang tidak hanya\r\nmencari keuntungan saja, tetapi juga mempertimbangkan kepentingan lingkungan\r\nmasyarakat, sehingga tidak akan menimbulkan kontroversi dan masalah-masalah\r\nsosial.</span></p>', '22/02/2016', '2020-02-08 09:14:49', '2020-02-08 09:14:49');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `id_pengumuman` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengumuman` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id_pengumuman`, `judul`, `pengumuman`, `created_at`, `updated_at`) VALUES
(1, 'judul pengumuman 1', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '2020-02-03 07:53:25', '2020-02-09 06:01:47'),
(2, 'judul pengumuman 2', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '2020-02-03 07:53:36', '2020-02-09 06:02:04'),
(3, 'judul pengumuman 3', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '2020-02-09 06:01:22', '2020-02-09 06:02:18'),
(4, 'judul pengumuman 4', '<strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.', '2020-02-09 06:02:30', '2020-02-09 06:02:30'),
(5, 'judul pengumuman 5', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', '2020-02-09 06:02:40', '2020-02-09 06:02:40'),
(6, 'judul pengumuman 6', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', '2020-02-09 06:02:50', '2020-02-09 06:02:50'),
(7, 'judul pengumuman 7', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry\'s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a type specimen book. It has survived not \r\nonly five centuries, but also the leap into electronic typesetting, \r\nremaining essentially unchanged. It was popularised in the 1960s with \r\nthe release of Letraset sheets containing Lorem Ipsum passages, and more\r\n recently with desktop publishing software like Aldus PageMaker \r\nincluding versions of Lorem Ipsum.</p>', '2020-02-09 06:03:00', '2020-02-09 06:03:00');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `bulan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `ip_address`, `tanggal`, `bulan`, `tahun`, `created_at`, `updated_at`) VALUES
(1, '13.13.13', '13', 'Feb', '2020', '2020-02-12 17:00:00', NULL),
(2, '14:14:14', '14', 'Feb', '2020', '2020-02-13 17:00:00', NULL),
(3, '12:12:12', '12', 'Jan', '2020', '2020-01-11 17:00:00', NULL),
(4, '11:11:11:11', '11', 'Des', '2019', '2019-12-18 17:00:00', NULL),
(5, '127.0.0.1', '15', 'Feb', '2020', NULL, NULL),
(6, '127.0.0.1', '14', 'Feb', '2020', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `perpustakaan`
--

CREATE TABLE `perpustakaan` (
  `id_perpustakaan` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pengarang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `edisi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tahun_terbit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_halaman` int(11) NOT NULL,
  `kategori` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `resensi` text COLLATE utf8_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `perpustakaan`
--

INSERT INTO `perpustakaan` (`id_perpustakaan`, `judul`, `pengarang`, `edisi`, `tahun_terbit`, `jumlah_halaman`, `kategori`, `resensi`, `cover`, `created_at`, `updated_at`) VALUES
(1, 'CEKAL CEGAH DAN TANGKAL SAMPAI TUNTAS DEMAM BERDARAH YEKTI MUMPUNI DAN WIDAYATI LESTARI BUKU KESEHATAN BUKU KEDOKTERAN BUKU DEMAM BERDARAH', 'Dr. Yeti Mumpuni Widayati Lestari', '-', '31231', 12123, 'kesehatan', '<p>Demam berdarah adalah penyakit yang cukup tinggi di Indonesia. Penyakit ini tergolong penyakit akut yang disebabkan oleh nyamuk Aedes Aygepty dan Aedes Albopicus betina. Tak jarang penyakit ini jjuga termasuk kategori mematikan apabila tidak segera ditangani dengan baik melalui tindangan medis mapun herbal. Demam berdarah dapat diderita oleh setiap orang baik itu masnusia dewasa, anak-anak maupu bayi.</p><p>buku \"CEKAL (Cegah dan Tangkal) sampai Tuntas Demam Berdarah\" ini dengan jelas memberi informasi dan pengetahuan mengenai seluk-beluk&nbsp; demam berdarah hingga penyakit demam berdarah dapat dicegah dan dapat dilakukan penanganan dengan baik<br></p>', '/uploads/images/kepustakaan/perpustakaan/1_CEKAL CEGAH DAN TANGKAL SAMPAI TUNTAS DEMAM BERDARAH YEKTI MUMPUNI DAN WIDAYATI LESTARI BUKU KESEHATAN BUKU KEDOKTERAN BUKU DEMAM BERDARAH_1581177685.jpg', '2020-02-08 09:01:25', '2020-02-08 09:01:25');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id_pesan` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pesan` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `nama`, `email`, `pesan`, `created_at`, `updated_at`) VALUES
(1, 'tes', 'tes@tes.com', 'tes', '2020-02-09 21:11:17', '2020-02-09 21:11:17'),
(2, 'tes', 'tes@tes.com', 'tes', '2020-02-09 21:11:52', '2020-02-09 21:11:52'),
(3, 'tes', 'tes@gmail.om', 'tes', '2020-02-09 21:24:03', '2020-02-09 21:24:03'),
(4, 'tes', 'tes@gmail.om', 'tes', '2020-02-09 21:24:11', '2020-02-09 21:24:11'),
(5, 'halalala', 'hallalala@gmail.com', 'halalala', '2020-02-09 21:24:52', '2020-02-09 21:24:52'),
(6, 'tes', 'tes@tes.com', 'tes', '2020-02-09 21:26:55', '2020-02-09 21:26:55'),
(7, 'cek', 'cek@cek.cm', 'cek', '2020-02-09 21:28:18', '2020-02-09 21:28:18'),
(8, 'laggi lasdfa', 'fasdf@fasf.com', 'fsadf fasf', '2020-02-09 21:28:59', '2020-02-09 21:28:59'),
(9, 'tesi', 'tesi@gmail.com', 'tesi', '2020-02-09 21:44:12', '2020-02-09 21:44:12'),
(10, 'tez', 'tez@gmail.com', 'tez', '2020-02-09 21:46:47', '2020-02-09 21:46:47'),
(11, 'tes123', 'tes123@gmail.com', 'tes123', '2020-02-09 21:58:17', '2020-02-09 21:58:17'),
(12, 'tes', 'tes@tes.com', 'dfas', '2020-02-10 08:35:41', '2020-02-10 08:35:41'),
(13, 'cek', 'cek@gmail.com', 'cek', '2020-02-14 04:05:28', '2020-02-14 04:05:28');

-- --------------------------------------------------------

--
-- Table structure for table `sejarah`
--

CREATE TABLE `sejarah` (
  `id_sejarah` bigint(20) UNSIGNED NOT NULL,
  `sejarah` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sejarah`
--

INSERT INTO `sejarah` (`id_sejarah`, `sejarah`, `gambar`, `created_at`, `updated_at`) VALUES
(3, 'Balai Laboratorium Kesehatan&nbsp; berdiri sejak tanggal 25 Januari 1950, \r\nmerupakan Laboratorium Assaineering DIY, fakultas Teknik Universitas \r\nGadjah Mada Yogyakarta. Kemudian pada tanggal 25 Januari 1950 \r\nlaboratorium ini menerima gabungan dari bagian Kimia Laboratorium Pusat \r\nKlaten dan disebut Laboratorium Umum atau Laboratorium Kesehatan \r\nYogyakarta (SK Kem.Kes Nomor : 126/Secr.Dj/64 tanggal 25 Januari 1950), \r\nberalamat di Jl. Polowijan, Ngasem, Yogyakarta. Bagian yang dimiliki \r\nadalah Kimia (termasuk <em>Hortus Medicus </em>di Tawangmangu), \r\nBakteriologi, Serologi, dan Kesehatan Teknik serta dipimpin oleh Prof. \r\nDr. Sardjito. •1 Januari 1952 nama diubah menjadi Laboratorium Kesehatan\r\n Daerah Yogyakarta (Labkesda) dengan wilayah kerja meliputi Daerah \r\nIstimewa Yogyakarta dan Jawa Tengah bagian Selatan. Pimpinan \r\nlaboratorium pertama kali adalah M. Soepadi Sastrodarsono dengan \r\nsupervisor Prof. Dr. Sardjito \r\n\r\n\r\n\r\n<p>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n•Agustus 1952, Bagian Kimia,\r\nBakteriologi, dan Serologi pindah menempati lokasi di Jl. Malioboro 16\r\nYogyakarta. Sedangkan bagian Kesehatan Teknik bergabung dengan Laboratorium\r\nIlmu Kesehatan Teknik Bandung pada tanggal 1 Juli 1953\r\n\r\n\r\n\r\n•Balai Laboratorium Kesehatan\r\nYogyakarta yang berlokasi di Ngadinegaran MJ. III/62 Yogyakarta, merupakan Unit\r\nPelaksana Teknis Dinas (UPTD) di bawah Dinas Kesehatan Daerah Istimewa\r\nYogyakarta (DIY) yang mempunyai tugas\r\nmelaksanakan pelayanan meliputi laboratorium klinik dan laboratorium kesehatan\r\nmasyarakat\r\n\r\n\r\n\r\n\r\n\r\n</p>', '/uploads/images/profile/strukturorganisasi/3_1581165732.jpg', '2020-02-02 01:07:43', '2020-02-08 05:42:12');

-- --------------------------------------------------------

--
-- Table structure for table `sertifikat`
--

CREATE TABLE `sertifikat` (
  `id_sertifikat` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sertifikat`
--

INSERT INTO `sertifikat` (`id_sertifikat`, `nama`, `gambar`, `created_at`, `updated_at`) VALUES
(1, 'sertifikat 1', '/uploads/images/sertifikat/1_sertifikat 1_1581150401.jpg', '2020-02-08 01:26:42', '2020-02-08 01:26:42'),
(2, 'sertifikat 2', '/uploads/images/sertifikat/2_sertifikat 2_1581150416.PNG', '2020-02-08 01:26:56', '2020-02-08 01:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `struktur_organisasi`
--

CREATE TABLE `struktur_organisasi` (
  `id_struktur_organisasi` bigint(20) UNSIGNED NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `struktur_organisasi`
--

INSERT INTO `struktur_organisasi` (`id_struktur_organisasi`, `gambar`, `deskripsi`, `created_at`, `updated_at`) VALUES
(1, '/uploads/images/profile/strukturorganisasi/1_1581173549.jpg', '<p>deskripsinya ..<br></p>', '2020-02-08 07:52:29', '2020-02-08 07:52:29');

-- --------------------------------------------------------

--
-- Table structure for table `upaya_kesehatan`
--

CREATE TABLE `upaya_kesehatan` (
  `id_upaya_kesehatan` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8_unicode_ci NOT NULL,
  `upaya_kesehatan` text COLLATE utf8_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'dinkesdiy@gmail.com', NULL, 'rahasia', NULL, NULL, NULL),
(2, 'admin', 'admin@gmail.com', NULL, '$2y$10$JxCxdDddDv0QZVKGs8syfuvnqXpblY1LEFdNYcSypxet/O0Hha4qm', NULL, '2020-01-29 09:20:52', '2020-01-29 09:20:52'),
(4, 'admin', 'dinkes@gmail.com', NULL, '$2y$10$lQ7T.zRP7HOxyAbJbScrEuLrzhJejHXOzabT5iWO/xyDLn3AsvZnG', NULL, '2020-01-29 09:22:08', '2020-01-29 09:22:08'),
(5, 'nama anda', 'email@email.com', NULL, '$2y$10$lfE4rNABDmeWIt9mXRDi5uTx/OV9G6uguSVatXIPqfGovPTgSltlC', NULL, '2020-02-14 18:30:34', '2020-02-14 18:30:34');

-- --------------------------------------------------------

--
-- Table structure for table `visi`
--

CREATE TABLE `visi` (
  `id_visi` bigint(20) UNSIGNED NOT NULL,
  `visi` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `visi`
--

INSERT INTO `visi` (`id_visi`, `visi`, `created_at`, `updated_at`) VALUES
(3, '<p><strong>”</strong><strong>Menjadi pusat pelayanan laborator</strong><strong>ium</strong><strong>\r\n</strong><strong>Kesehatan</strong><strong>\r\nyang </strong><strong>berkualitas dan Terpercaya pada&nbsp; tahaun 2021”.</strong></p>', '2020-02-08 08:00:26', '2020-02-08 08:01:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id_banner`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indexes for table `download`
--
ALTER TABLE `download`
  ADD PRIMARY KEY (`id_download`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`);

--
-- Indexes for table `kategori_pelayanan`
--
ALTER TABLE `kategori_pelayanan`
  ADD PRIMARY KEY (`id_kategori`),
  ADD KEY `id_pelayanan` (`id_pelayanan`);

--
-- Indexes for table `kompetensi_sdm`
--
ALTER TABLE `kompetensi_sdm`
  ADD PRIMARY KEY (`id_kompetensi_sdm`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `layananaduan`
--
ALTER TABLE `layananaduan`
  ADD PRIMARY KEY (`id_layananaduan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `misi`
--
ALTER TABLE `misi`
  ADD PRIMARY KEY (`id_misi`);

--
-- Indexes for table `mitra`
--
ALTER TABLE `mitra`
  ADD PRIMARY KEY (`id_mitra`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `penelitian`
--
ALTER TABLE `penelitian`
  ADD PRIMARY KEY (`id_penelitian`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id_pengumuman`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  ADD PRIMARY KEY (`id_perpustakaan`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id_pesan`);

--
-- Indexes for table `sejarah`
--
ALTER TABLE `sejarah`
  ADD PRIMARY KEY (`id_sejarah`);

--
-- Indexes for table `sertifikat`
--
ALTER TABLE `sertifikat`
  ADD PRIMARY KEY (`id_sertifikat`);

--
-- Indexes for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  ADD PRIMARY KEY (`id_struktur_organisasi`);

--
-- Indexes for table `upaya_kesehatan`
--
ALTER TABLE `upaya_kesehatan`
  ADD PRIMARY KEY (`id_upaya_kesehatan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visi`
--
ALTER TABLE `visi`
  ADD PRIMARY KEY (`id_visi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id_banner` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `download`
--
ALTER TABLE `download`
  MODIFY `id_download` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_pelayanan`
--
ALTER TABLE `jenis_pelayanan`
  MODIFY `id_pelayanan` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kategori_pelayanan`
--
ALTER TABLE `kategori_pelayanan`
  MODIFY `id_kategori` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `kompetensi_sdm`
--
ALTER TABLE `kompetensi_sdm`
  MODIFY `id_kompetensi_sdm` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `layananaduan`
--
ALTER TABLE `layananaduan`
  MODIFY `id_layananaduan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `misi`
--
ALTER TABLE `misi`
  MODIFY `id_misi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mitra`
--
ALTER TABLE `mitra`
  MODIFY `id_mitra` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `penelitian`
--
ALTER TABLE `penelitian`
  MODIFY `id_penelitian` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id_pengumuman` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `perpustakaan`
--
ALTER TABLE `perpustakaan`
  MODIFY `id_perpustakaan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id_pesan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sejarah`
--
ALTER TABLE `sejarah`
  MODIFY `id_sejarah` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sertifikat`
--
ALTER TABLE `sertifikat`
  MODIFY `id_sertifikat` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `struktur_organisasi`
--
ALTER TABLE `struktur_organisasi`
  MODIFY `id_struktur_organisasi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `upaya_kesehatan`
--
ALTER TABLE `upaya_kesehatan`
  MODIFY `id_upaya_kesehatan` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `visi`
--
ALTER TABLE `visi`
  MODIFY `id_visi` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kategori_pelayanan`
--
ALTER TABLE `kategori_pelayanan`
  ADD CONSTRAINT `fk_id_layanan` FOREIGN KEY (`id_pelayanan`) REFERENCES `jenis_pelayanan` (`id_pelayanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
