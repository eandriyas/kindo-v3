-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 21, 2014 at 02:26 
-- Server version: 5.6.12
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `KI_db`
--
CREATE DATABASE IF NOT EXISTS `KI_db` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `KI_db`;

-- --------------------------------------------------------

--
-- Table structure for table `kompetisi`
--

CREATE TABLE IF NOT EXISTS `kompetisi` (
  `id_kompetisi` bigint(11) NOT NULL AUTO_INCREMENT,
  `judul_kompetisi` varchar(200) NOT NULL,
  `sort` varchar(500) NOT NULL,
  `poster` varchar(200) NOT NULL,
  `penyelenggara` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `tgl_buat` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL,
  `author` bigint(11) NOT NULL,
  `id_sub_kat` int(11) NOT NULL,
  `id_kat` int(11) NOT NULL,
  `deadline` date NOT NULL,
  `pengumuman` date NOT NULL,
  `total_hadiah` int(200) NOT NULL,
  `hadiah` text NOT NULL,
  `sumber` varchar(200) NOT NULL,
  `status` enum('draft','posted','waiting','reject') NOT NULL,
  PRIMARY KEY (`id_kompetisi`),
  KEY `id_sub_kat` (`id_sub_kat`),
  KEY `author` (`author`),
  KEY `id_kat` (`id_kat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `kompetisi`
--

INSERT INTO `kompetisi` (`id_kompetisi`, `judul_kompetisi`, `sort`, `poster`, `penyelenggara`, `konten`, `tgl_buat`, `tgl_edit`, `author`, `id_sub_kat`, `id_kat`, `deadline`, `pengumuman`, `total_hadiah`, `hadiah`, `sumber`, `status`) VALUES
(16, 'Fitbar Tastymonial Berhadiah Galaxy Grand', 'Berikan foto dan tastymonial kamu tentang fitbar, bagi kamu yang beruntung akan mendapatkan 1 buah galaxy grand atau voucher belanja dari fitbar keren kan.', 'fitbar_tastymonial.jpg', 'Fitbar', 'Like FanPage Fitbar (www.fb.com/FitbarHealthyTasty) dan Follow (www.twitter.com/Fitbar_ID)</br>Tulis Testimoni kamu mengenai Fitbar di blog pribadi kamu (Blogspot, WordPress, Kompasiana, Tumblr, Facebook Notes, dll).</br>Pastikan dalam postingan blog kamu terdapat foto kamu bersama dengan produk Fitbar.</br>Setelah selesai, isi form ini dengan lengkap >> http://bit.ly/FormTasty</br>Bahan kompetisi tidak diperbolehkan mengandung pornografi, sara, atau ahal-hal yang menyinggung orang/kelompok lainnya.</br>Semua materi foto dan tastimonial yang dikirimkan sepenuhnya milik</br>Promo ini tidak dikenakan biaya apapun, hati-hati penipuan.', '2014-03-17 05:05:43', '2014-03-17 06:07:18', 1, 1, 1, '2014-03-24', '2014-04-04', 4500000, 'Juara 1 Galaxy Grand untuk pemenang utama | Juara 2 - 15 Voucher belanja Kalbe Family @Rp.100rb', 'http://adf.ly/gGAsp', 'posted'),
(17, 'Smanisda Robotic and Open Debate Competition', 'Dapatkan total hadiah sampai juttaan rupiah dengan menigkuti kompetisi robotic yang diadakan oelh SMANSIDA , kompetisi ini ditujukan untuk SD samapai tingkat SMA', 'ki-logo.png', 'SMANSIDA', '<h3>SRC (Smanisda Robotic Competition)</h3></br></br>Biaya pendaftaran Rp.150.000,- /tim</br>deadline 26 Maret 2014</br>Pelaksanaan :</br>Maze solving 28 maret 2014 (Advance, SMP, SMA) 29 Maret 2014 (Junior, SD)</br>Line Tracker 30 Maret 2014</br>Pasfoto 34 2 lembar</br>fotokopi rapor bagian identitas</br>fotokopi kartu pelajar</br><br/></br></br><h3>SMASH (Smanisda Open Debate Competition)</h3></br>3 orang / tim</br>biaya Rp.400.000,-</br>pendaftaran 13 jan  30 apr 2014</br>Pelaksanaan 3-4 Mei 2014</br>Pas foto 34 lembar</br>fotokopi kartu pelajat / kartu mahasiswa</br>mahasiswa max semester 4</br><br/></br>Link pendaftaran : http://smanisdacup.esy.es/robotika/formulir-pendaftaran-peserta-smanisda-robotic-competition-src-smanisda-cup-2k14/</br>', '2014-03-17 13:58:46', '2014-03-17 14:01:32', 1, 1, 1, '2014-03-26', '2014-04-03', 10000000, 'Total hadiah jutaan rupiah', 'http://smanisdacup.esy.es/eng-debate/robotik-debate/', 'posted'),
(18, 'Kompetisi Fotografi Bismi Fair', 'Kompetisi fotografi dari bismi fair kali ini bertema tentang Heroes In Frame, Mereka Yang Berjiwa Besar Tanpa Riuh Tepuk Tangan, kompetisi ini diadakan oleh Bulan Sabit Merah Indonesia (BSMI), dalam rangka meningkatkan kepedulian kita atas tindakan-tindakan kepahlawanan.', 'kompetisi_fotografi_BSMI_fair.jpg', 'Bulan Sabit Merah Indonesia (BSMI)', 'Kompetisi ini ditujukan untuk pelajar SMA sederajat.</br>Sesuai dengan tema yaitu Heroes In Frame, Mereka Yang Berjiwa Besar Tanpa Riuh Tepuk Tangan.</br>Setiap perserta maksimal hanya bisa mengirimkan 2 buah foto.</br>Karya yang dikirimkan adalah murni ciptaan sendiri dan tidak pernah dipublikasikan di kompetisi lainnya.</br>Karya yang dikirimkan tidak mengandung unsur SARA, pornografi, sadisme serta bertentangan dengan norma sosial.</br>Foto dikirimkan dalam bentuk digital  melalui email denan format :</br>ke : lombafotobsmifair@gmail.com , diserta dengan data diri lengkap meliputi : nama, email, alamat, daerah asal, asal sekolah, dilengkapi dengan fotocopy atau scan dari kartu tanda pelajar dan KTP.</br>Ketentuan dalam bentuk digital : sisi terpendek minimal 2000 pixel, resolusi minimal 300 dpi, dikumpulkan dalam bentuk format JPGdan olah digital hanya diperbolehkan asal melakukan perubahan brightness contrass, dan tidak diperkenankan untuk melakukan perubahan yang lainnya.</br>Hak cipta tetap melekat pada fotografer bukan pada panitia.</br>Panitia berhak untuk menyeleksi foto sebelum waktu pameran.</br>Pemenang akan diumumkan pada saat pameran BSMI Fair.</br><h4>Kriteria penilaian : </h4></br>Kesesuaian dengan tema</br>tingkat kesulitan</br>mutu teknis</br>estetika</br><b>Contact Person : Adit 085782640695</b>', '2014-03-19 11:30:56', '2014-03-19 11:34:13', 1, 1, 1, '2014-03-23', '2014-03-30', 3250000, ' Juara 1 : Rp.1.5jt | Juara 2 : Rp.1jt | Juara 3 : Rp.750rb | semua juara akan mendapatkan sertifikat.', '', 'posted'),
(20, 'Lomba Logo Hari Jadi Provinsi Jawa Tengah', 'Dalam rangka memperingati hari jadi provinsi Jawa Tengah yang ke 64. Pemerintah prov jateng mengadakan lomba logo yang menggambarkan jateng yang semakin baik ', 'Lomba_Logo_Hari_Jadi_Provinsi_Jawa_Tengah_2014.png', 'Pemerintahan Provinsi Jawa Tengah', 'Kompetisi terbuka untuk pelajar, mahasiswa dan umum denga melampirkan kartu identitas penduduk / kartu mahasiswa.</br>Melampikan surat pernyataan bahwa karya yang dibikin ada ide sendiri bukan jiplakan dengan materai Rp.6000</br><h4>Ketentuan Lomba</h4></br>Desain sederhana, mudah diingat dan menggambarkan visi dan msi Jateng 2013-2018.</br>Desain logo maksimal menggunakan 4 warna buka gradasi.</br>Satu orang berhak untuk mengirimkan lebih dari satu desain.</br>Desain merupakan karya asli dan tidak mengandung unsur pornografi, sara.</br>Karya bisa dikirim dalam bentuk desain tangan atau pun desain grafis.</br><h4>Ketentuan Karya</h4></br>Desain dikirim dalam kertas ukuran A4 dan softcopy (CD, format file TIF, JPEG ) dan dimasukan kedalam amplop coklat tertutup tidak dilipat cantumkan "Lomba Desain Logo Hari Jadi Provinsi Jawa Tengah ", di pojok kiri atas dan dikirim ke Panitia Lomba desain Logo Provinsi Jawa Tengah dengan alamat : <strong>Biro Otonomi Daerah Sekretariatan Daerah Provinsi Jawa Tengah Kantor Gubernur Jawa Tengah Lantai XII Jl. Pahlawan No. 9v Semarang </strong></br></br>', '2014-03-21 13:37:33', '2014-03-21 13:38:26', 1, 1, 1, '2014-03-05', '2014-03-20', 15000000, 'Desain logo terbaik Rp.5jt | 4 desain logo pilihan Rp.2.5jt untuk masing-masing peserta', 'http://www.jatengprov.go.id', 'posted');

-- --------------------------------------------------------

--
-- Table structure for table `kompetisi_btn`
--

CREATE TABLE IF NOT EXISTS `kompetisi_btn` (
  `id_kompetisi` bigint(20) NOT NULL,
  `id_user` bigint(20) NOT NULL,
  `tandai` int(11) NOT NULL,
  `gabung` int(11) NOT NULL,
  KEY `id_kompetisi` (`id_kompetisi`,`id_user`),
  KEY `id_user` (`id_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kompetisi_btn`
--

INSERT INTO `kompetisi_btn` (`id_kompetisi`, `id_user`, `tandai`, `gabung`) VALUES
(16, 1, 0, 0),
(16, 2, 1, 1),
(17, 2, 1, 0),
(20, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `main_kat`
--

CREATE TABLE IF NOT EXISTS `main_kat` (
  `id_main_kat` int(11) NOT NULL AUTO_INCREMENT,
  `main_kat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_main_kat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `main_kat`
--

INSERT INTO `main_kat` (`id_main_kat`, `main_kat`) VALUES
(1, 'akademik'),
(2, 'desain'),
(3, 'fotografi'),
(4, 'karya tulis'),
(5, 'bakat'),
(6, 'promosi'),
(7, 'kuis'),
(8, 'undian'),
(9, 'developer'),
(10, 'blog'),
(11, 'socmed'),
(12, 'olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `content` text NOT NULL,
  `tgl_buat` date NOT NULL,
  `tgl_edit` date NOT NULL,
  `author` bigint(11) NOT NULL,
  `status` enum('post','draft') NOT NULL,
  PRIMARY KEY (`id`),
  KEY `author` (`author`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `tgl_buat`, `tgl_edit`, `author`, `status`) VALUES
(1, 'Post Pertama', 'ini adalah psot pertama. ini adalah psot pertama.ini adalah psot pertama.ini adalah psot pertama.ini adalah psot pertama.ini adalah psot pertama.\r\nsasdad\r\njsfas dsfjsfskdfjf dkkjsd\r\ndfklsdkd\r\nakdkjdfksj dskfjsdk skdsjflkjsd dflkja s\r\ndsfkslkfj ', '2014-03-01', '2014-03-01', 1, 'post'),
(10, 'About Us', '										Kami adalah														', '2014-03-10', '2014-03-10', 1, 'draft'),
(12, 'this is draft', 'this is draft', '2014-03-10', '2014-03-10', 1, 'draft'),
(16, 'Testimoni', 'Testimoni', '2014-03-10', '2014-03-10', 1, 'post'),
(17, 'Privacy Policy', '<h3>Id</h3>\n<p>\n<strong>Apa yang kami dapatkan</strong><br/>\nSemua server web melacak dasar informasi tentang pengunjung. Informasi ini mencakup, tetapi tidak terbatas pada, alamat IP, browser, waktu dan halaman pengarah. Tak satu pun dari informasi ini dapat secara spesifik mengidentifikasi pengunjung ke situs ini. Informasi yang dilacak untuk keperluan administrasi dan pemeliharaan rutin. Kompetisi Indonesia juga mendapatkan data pribadi pengunjung yang digunakan untuk melakukan pendaftaran di situ s Kompetisi Indonesia </p>\n<p>\n<strong>Cookies dan Web Beacons </strong><br/>\nJika diperlukan, Kompetisi Indonesia menggunakan cookies untuk menyimpan informasi tentang preferensi pengunjung dan sejarah dalam rangka untuk lebih melayani pengunjung dan / atau menyajikan pengunjung dengan materi yang disesuaikan. \nIklan mitra dan pihak ketiga lainnya juga dapat menggunakan cookie, skrip dan / atau web beacon untuk melacak pengunjung ke situs kami untuk menampilkan iklan dan informasi berguna lainnya. Pelacakan tersebut dilakukan langsung oleh pihak ketiga melalui server sendiri dan tunduk pada kebijakan privasi mereka sendiri.\n</p>\n<p>\n<strong>Pengaturan Privasi Anda </strong><br/>\nPerhatikan bahwa Anda dapat mengubah pengaturan browser Anda untuk menonaktifkan cookie jika Anda memiliki masalah privasi. Menonaktifkan cookie untuk semua situs tidak dianjurkan karena dapat mengganggu penggunaan beberapa situs. Pilihan terbaik adalah untuk menonaktifkan atau mengaktifkan cookies pada basis per-situs. Konsultasikan dokumentasi browser Anda untuk instruksi bagaimana untuk memblokir cookie dan mekanisme pelacakan lainnya. Ini daftar web privasi manajemen link juga dapat berguna.\n</p>	\n<p>\n<strong>Informasil Lebih Lanjut </strong><br/>\nhubungi email kontak servis kami di cs@kompetisiindonesia.com\n</p>			\n<h3>En</h3>\n<p>\n<strong>Routine Information Collection</strong><br/>		\nAll web servers track basic information about their visitors. This information includes, but is not limited to, IP addresses, browser details, timestamps and referring pages. None of this information can personally identify specific visitors to this site. The information is tracked for routine administration and maintenance purposes.\n</p>			\n<p><strong>Cookies and Web Beacons</strong><br/>\nWhere necessary, Kompetisi Indonesia uses cookies to store information about a visitors preferences and history in order to better serve the visitor and/or present the visitor with customized content.\nAdvertising partners and other third parties may also use cookies, scripts and/or web beacons to track visitors to our site in order to display advertisements and other useful information. Such tracking is done directly by the third parties through their own servers and is subject to their own privacy policies.\n</p>\n<p><strong>Controlling Your Privacy</strong><br/>\nNote that you can change your browser settings to disable cookies if you have privacy concerns. Disabling cookies for all sites is not recommended as it may interfere with your use of some sites. The best option is to disable or enable cookies on a per-site basis. Consult your browser documentation for instructions on how to block cookies and other tracking mechanisms. This list of web browser privacy management links may also be useful.\n</p>\n<p><strong>More Question</strong><br/>\nPlease contact our customer service email , cs@kompetisiindonesia.com</p>', '2014-03-10', '2014-03-15', 1, 'post'),
(18, 'Term Of Use', 'Term Of Use', '2014-03-10', '2014-03-10', 1, 'post'),
(19, 'Contact Us', '										Ada kritik saran maupun pertanyaan yang ingin anda sampaikan kepada kami, silahkan kirim email ke alamat cs@kompetisiindonesia.com\n\nAtau menggunakan form dibawah ini :	<br/>\n<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />\n<meta name="viewport" content="width=device-width, initial-scale=1">\n<link rel="stylesheet" type="text/css" href="//assets.emailmeform.com/styles/dynamic.php?t=post&enable_responsive_ui=1&RU1GLTAyLTE3LTEwMTUy" />\n<link rel="stylesheet" type="text/css" href="http://www.emailmeform.com/builder/theme_css/U332rqnpN4labx59c" />\n<style>\n#emf-container, #emf-container-outer #emf-form-shadows{box-sizing: border-box;-webkit-box-sizing: border-box;-moz-box-sizing: border-box;width:100%}\n</style>\n<div id="emf-container-outer">\n<div id="emf-container" >\n<div id="emf-logo"><a>EmailMeForm</a></div>\n<div class="emf-error-message" style=''display:none''></div>\n<form id="emf-form" target="_self" class="leftLabel" enctype="multipart/form-data" method="post" action="http://www.emailmeform.com/builder/form/U332rqnpN4labx59c"><div id="emf-form-instruction" class="emf-head-widget">\n<div id="emf-form-title" class="emf-bold">Contact Us</div><div id="emf-form-description">Ada pertanyaan, saran maupun kritik yang ingin anda sampaikan ke Kompetisi Indonesia, silahkan  isi form dibawah ini.</div>\n</div>\n<ul>\n<li id="emf-li-0" class="emf-li-field emf-field-new_name data_container   ">\n<label class="emf-label-desc" for="element_0">Name</label>\n<div class="emf-div-field"><span style="width:60px">\n<input class="validate[optional]" style="width:100%" value="" \n						id="element_2" name="element_2" type="text" />\n<label for="element_2" class="emf-bottom-label emf-text-center">First</label>\n</span><span style="width:100px">\n<input class="validate[optional]" style="width:100%" value="" \n						id="element_3" name="element_3" type="text" />\n<label for="element_3" class="emf-bottom-label emf-text-center">Last</label>\n</span></div>\n<div class="emf-clear"></div>\n</li><li id="emf-li-7" class="emf-li-field emf-field-email data_container   ">\n<label class="emf-label-desc" for="element_7">Email</label>\n<div class="emf-div-field"><input id="element_7" name="element_7"\n				class="validate[optional,custom[email]]"\n				value="" size="30" type="text" /></div>\n<div class="emf-clear"></div>\n</li><li id="emf-li-8" class="emf-li-field emf-field-textarea data_container   ">\n<label class="emf-label-desc" for="element_8">Pesan</label>\n<div class="emf-div-field"><textarea id="element_8" name="element_8" cols="45" rows="10"\n					class="validate[optional]"></textarea></div>\n<div class="emf-clear"></div>\n</li>\n<li id="emf-li-recaptcha" style="display:none;">\n<div>\n<script type="text/javascript">\n        var RecaptchaOptions = {\n	        theme: ''custom'',\n	        custom_theme_widget: ''emf-recaptcha_widget''\n		};\n</script>\n<div id=''emf-recaptcha_widget'' style=''display:none''>\n<div id=''recaptcha_image''></div>\n<div id=''recaptcha_controls''>\n<a title=''Get a new challenge'' href="javascript:Recaptcha.reload()"><img src=''//assets.emailmeform.com/images/recaptcha_refresh.png?RU1GLTAyLTE3LTEwMTUy'' alt=''Get a new challenge''></a><!--\n			--><a title=''Get an audio challenge'' href="javascript:Recaptcha.switch_type(''audio'')" class=''recaptcha_only_if_image''><img src=''//assets.emailmeform.com/images/recaptcha_audio.png?RU1GLTAyLTE3LTEwMTUy'' alt=''Get an audio challenge''></a><!--\n			--><a title=''Get a visual challenge'' href="javascript:Recaptcha.switch_type(''image'')" class=''recaptcha_only_if_audio''><img src=''//assets.emailmeform.com/images/recaptcha_image.png?RU1GLTAyLTE3LTEwMTUy'' alt=''Get a visual challenge''></a><!--\n			--><a title=''Help'' href="javascript:Recaptcha.showhelp()"><img alt=''Help'' src=''//assets.emailmeform.com/images/recaptcha_help.png?RU1GLTAyLTE3LTEwMTUy''></a>\n</div>\n<img id=''recaptcha_logo'' style='''' src=''https://www.google.com/recaptcha/api/img/clean/logo.png''>\n<input type=''text'' id=''recaptcha_response_field'' name=''recaptcha_response_field'' \n			placeholder=''Type the text''>\n</div>\n<script type="text/javascript" src="https://www.google.com/recaptcha/api/challenge?k=6LchicQSAAAAAGksQmNaDZMw3aQITPqZEsX77lT9"></script>\n<noscript>\n<iframe src="https://www.google.com/recaptcha/api/noscript?k=6LchicQSAAAAAGksQmNaDZMw3aQITPqZEsX77lT9" height="300" width="500" frameborder="0"></iframe><br/>\n<textarea name="recaptcha_challenge_field" rows="3" cols="40"></textarea>\n<input type="hidden" name="recaptcha_response_field" value="manual_challenge"/>\n</noscript></div>\n</li>\n<li id="emf-li-post-button" class="middle">\n<input  value="Submit" type="submit" onmouseover="return true;"/> \n</li>\n</ul>\n<input name="element_counts" value="9" type="hidden" />\n<input name="embed" value="forms" type="hidden" /><div style="margin-top:18px;text-align:center"><div id=''emf_advertisement''><font face="Verdana" size="2" color="#000000">Powered by</font><span style="position: relative; padding-left: 3px; bottom: -5px;"><img src="//assets.emailmeform.com/images/footer-logo.png?RU1GLTAyLTE3LTEwMTUy" /></span><font face="Verdana" size="2" color="#000000">EMF </font><a style="text-decoration:none;" href="http://www.emailmeform.com/" target="_blank"><font face="Verdana" size="2" color="#000000">Online HTML Form</font></a></div><div><font face="Verdana" size="2" color="#000000"><a style="line-height:20px;font-size:70%;text-decoration:none;" href="http://www.emailmeform.com/report-abuse.html?http://www.emailmeform.com/builder/form/U332rqnpN4labx59c" target="_blank">Report Abuse</a></font></div></div>\n</form>\n</div><img id="emf-form-shadows" src="//assets.emailmeform.com/images/themes/bottom.png?RU1GLTAyLTE3LTEwMTUy"></div>\n<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>\n<script type="text/javascript">\nif (typeof jQuery == ''undefined''){\n    document.write(unescape("%3Cscript src=''http://www.emailmeform.com/builder/js/jquery-1.8.3.min.js'' type=''text/javascript''%3E%3C/script%3E"));\n}\n</script>\n<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>\n<script type="text/javascript">\nif (typeof $.ui == ''undefined''){\n    document.write(unescape("%3Cscript src=''http://www.emailmeform.com/builder/js/jquery-ui-1.7.2.custom.min.js'' type=''text/javascript''%3E%3C/script%3E"));\n}\n</script>\n<script type="text/javascript" src="//assets.emailmeform.com/js/dynamic.php?t=post&t2=0&use_CDN=true&language=en&language_id=0&RU1GLTAyLTE3LTEwMTUy"></script>\n<script type="text/javascript">\nEMF_jQuery(window).load(function(){\n	post_message_for_frame_height("U332rqnpN4labx59c");\n});\n\nEMF_jQuery(function(){\n	$(function(){\n	do_smart_captcha(2005547)\n	});\n	generate_css_for_emf_ad();\n;\n\n	EMF_jQuery("#emf-form").validationEngine({\n		validationEventTriggers:"blur",\n		scroll:true\n	});\n	prevent_duplicate_submission(EMF_jQuery("#emf-form"));\n\n	$("input[emf_mask_input=true]").dPassword();\n\n	if(EMF_jQuery(''#captcha_image'').length>0){\n		on_captcha_image_load();\n	}\n\n	EMF_jQuery(''.emf-field-grid td'').click(function(event){\n				if(!event.target.tagName || event.target.tagName.toLowerCase()!=''td'') return;\n\n		EMF_jQuery(this).find(''input[type=checkbox],input[type=radio]'').click();\n	});\n\n\n	EMF_jQuery("#emf-form ul li").mousedown(highlight_field_on_mousedown);\n	EMF_jQuery("#emf-form ul li input, #emf-form ul li textarea, #emf-form ul li select").focus(highlight_field_on_focus);\n\n		var form_obj=EMF_jQuery("#emf-container form");\n	if(form_obj.length>0 && form_obj.attr(''action'').indexOf(''#'')==-1 && window.location.hash){\n		form_obj.attr(''action'', form_obj.attr(''action'')+window.location.hash);\n	}\n\n	init_rules();\n\n	enable_session_when_cookie_disabled();\n\n	detect_unsupported_browser();\n\n	randomize_field_content();\n\n	\n	\n	});\n\nvar emf_widgets={text : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,number : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,textarea : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,new_checkbox : \n			function(index){\n				var arr=new Array();\n				$("input[name=''element_"+index+"[]'']:checked").each(function(){\n					arr[arr.length]=this.value;\n				});\n				var result=arr.join(", ");\n				return result;\n			}\n		,radio : \n			function(index){\n				var result="";\n				$("input[name=element_"+index+"]:checked").each(function(){\n					result=this.value;\n				});\n				return result;\n			}\n		,select : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,email : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,phone : \n			function(index){\n				var arr=new Array();\n				$("input[id^=element_"+index+"_]").each(function(){\n					arr[arr.length]=this.value;\n				});\n\n				var result="";\n				if(arr.length>0){\n					result=arr.join("-");\n				}else{\n					result=$("#element_"+index).val();\n				}\n				return result;\n			}\n		,datetime : \n			function(index){\n				var result="";\n\n				var date_part="";\n				if($("#element_"+index+"_year").length==1){\n					date_part=$("#element_"+index+"_year-mm").val()+"/"+$("#element_"+index+"_year-dd").val()+"/"+$("#element_"+index+"_year").val();\n				}\n\n				var time_part="";\n				if($("#element_"+index+"_hour").length==1){\n					time_part=$("#element_"+index+"_hour").val()+":"+$("#element_"+index+"_minute").val()+" "+$("#element_"+index+"_ampm").val();\n				}\n\n				if(date_part && time_part){\n					result=date_part+" "+time_part;\n				}else{\n					result=date_part ? date_part : time_part;\n				}\n\n				return result;\n			}\n		,url : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,file : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,Image : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,new_select_multiple : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,price : \n			function(index){\n				var result="";\n				var arr=new Array();\n				$("input[id^=element_"+index+"_]").each(function(){\n					arr[arr.length]=this.value;\n				});\n				result=arr.join(".");\n				return result;\n			}\n		,hidden : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,unique_id : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,section_break : \n			function(index){\n				return "";\n			}\n		,page_break : \n			function(index){\n				return "";\n			}\n		,signature : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,star_rating : \n			function(index){\n				var result="";\n				$("input[name=element_"+index+"]:checked").each(function(){\n					result=this.value;\n				});\n				return result;\n			}\n		,scale_rating : \n			function(index){\n				var result="";\n				$("input[name=element_"+index+"]:checked").each(function(){\n					result=this.value;\n				});\n				return result;\n			}\n		,deprecated : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		,address : \n			function(index){\n				var result="";\n				var element_arr=$("input,select").filter("[name=''element_"+index+"[]'']").toArray();\n				result=element_arr[0].value+" "+element_arr[1].value+"\\n"\n					+element_arr[2].value+","+element_arr[3].value+" "+element_arr[4].value+"\\n"\n					+element_arr[5].value;\n				return result;\n			}\n		,name : \n			function(index){\n				var arr=new Array();\n				$("input[id^=element_"+index+"_]").each(function(){\n					arr[arr.length]=this.value;\n				});\n				var result=arr.join(" ");\n				return result;\n			}\n		,checkbox : \n			function(index){\n				var arr=new Array();\n				$("input[name=''element_"+index+"[]'']:checked").each(function(){\n					arr[arr.length]=this.value;\n				});\n				var result=arr.join(", ");\n				return result;\n			}\n		,select_multiple : \n			function(index){\n				return $("#element_"+index).val();\n			}\n		};\n\nvar emf_condition_id_to_js_map={5 : \n			function(field_value, value){\n				return field_value==value;\n			}\n		,6 : \n			function(field_value, value){\n				return field_value!=value;\n			}\n		,1 : \n			function(field_value, value){\n				return field_value.indexOf(value)>-1;\n			}\n		,2 : \n			function(field_value, value){\n				return field_value.indexOf(value)==-1;\n			}\n		,3 : \n			function(field_value, value){\n				return field_value.indexOf(value)==0;\n			}\n			,4 : \n			function(field_value, value){\n				return field_value.indexOf(value)==field_value.length-value.length;\n			}\n		,7 : \n		function(field_value, value){\n		return parseFloat(field_value)==parseFloat(value);\n	}\n	,8 : \n			function(field_value, value){\n				return parseFloat(field_value)>parseFloat(value);\n			}\n		,9 : \n			function(field_value, value){\n				return parseFloat(field_value) < parseFloat(value);\n			}\n		,10 : \n			function(field_value, value){\n				var date_for_field_value=Date.parse(field_value);\n				var date_for_value=Date.parse(value);\n				if(date_for_field_value && date_for_value){\n					return date_for_field_value == date_for_value;\n				}\n				return false;\n			}\n		,11 : \n			function(field_value, value){\n				var date_for_field_value=Date.parse(field_value);\n				var date_for_value=Date.parse(value);\n				if(date_for_field_value && date_for_value){\n					return date_for_field_value < date_for_value;\n				}\n				return false;\n			}\n		,12 : \n			function(field_value, value){\n				var date_for_field_value=Date.parse(field_value);\n				var date_for_value=Date.parse(value);\n				if(date_for_field_value && date_for_value){\n					return date_for_field_value > date_for_value;\n				}\n				return false;\n			}\n		};\nvar emf_group_to_field_rules_map=[];\nvar emf_group_to_page_rules_for_confirmation_map=[];\n\nvar emf_cart=null;\nvar emf_page_info={current_page_index: 0, page_element_index_min: 0, page_element_index_max: 8};\nvar emf_index_to_value_map=null;\nvar emf_form_visit_id="U332rqnpN4labx59c";\n\nvar emf_index_to_option_map=[];\n</script>					', '2014-03-10', '2014-03-15', 1, 'post'),
(20, 'Bantuan', 'Gunakan bantuan dibawah ini untuk memudahkanmu menggunakan Kompetisi Indonesia :\n<br/>\nla\n', '2014-03-10', '2014-03-10', 1, 'post'),
(21, 'Kategori', 'Kategori', '2014-03-10', '2014-03-10', 1, 'post'),
(22, 'Disclaimer', '									<h3>Id</h3><p>Kompetisi Indonesia adalah penyedia layanan info kompetisi nasional maupun internasional yang diadakan di Indonesia. Dengan menggunakan Kompetisi Indonesia anda setuju dengan pernyataan berikut ini.Dengan pernyataan ini secara khusus Pengguna mengakui Kompetisi Indonesia tidak bertanggung jawab jika terjadi penipuan, memfitnah, atu menyingging pengguna lainnya atau pihak ketiga dalam kasus-kasus yang sepenuhnya tidak hanya terjadi dalam website, seluruh resiko kesalah sepenuhnya dari pengguna  </p>				\n\n									<h3>En</h3><p>Kompetisi Indonesia is a national provider of information services or  international competition held in Indonesia. By using Kompetisi Indonesia you agree with the following statement this statement specifically ini.Dengan User acknowledges Kompetisi Indonesia is not responsible in the event of fraud, slander, atu menyingging other users or third parties in the cases were fully not only happen in the website, the entire risk entirely from user mistakes</p>												', '2014-03-15', '2014-03-15', 1, 'post');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id_req` bigint(20) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `poster` varchar(500) NOT NULL,
  `status` enum('posted','waiting','reject') NOT NULL,
  PRIMARY KEY (`id_req`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id_req`, `nama`, `email`, `link`, `poster`, `status`) VALUES
(12, 'yussan', 'yusuftwenty@gmail.com', '0', 'republik_diskon.jpg', 'waiting'),
(13, 'indah', 'indah@kalo.com', '0', 'birdy-Anthracite-large.jpg', 'waiting'),
(14, 'nana', 'nana@na.com', '0', 'Biznet.jpg', 'waiting'),
(19, 'yussan', 'yusuftwenty@gmail.com', 'http://yussan.com', '0', 'waiting');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kat`
--

CREATE TABLE IF NOT EXISTS `sub_kat` (
  `id_sub_kat` int(11) NOT NULL AUTO_INCREMENT,
  `id_main_kat` int(11) NOT NULL,
  `sub_kat` varchar(100) NOT NULL,
  PRIMARY KEY (`id_sub_kat`),
  KEY `id_main_kat` (`id_main_kat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `sub_kat`
--

INSERT INTO `sub_kat` (`id_sub_kat`, `id_main_kat`, `sub_kat`) VALUES
(1, 1, 'akademik'),
(2, 2, 'desain'),
(3, 3, 'fotografi'),
(4, 4, 'karya tulis\r\n'),
(5, 5, 'bakat'),
(6, 6, 'promosi'),
(7, 7, 'kuis'),
(8, 8, 'undian'),
(9, 9, 'developer'),
(10, 10, 'blog'),
(11, 11, 'socmed'),
(12, 12, 'olahraga\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `thumb`
--

CREATE TABLE IF NOT EXISTS `thumb` (
  `id_kompetisi` bigint(20) NOT NULL,
  `thumb` varchar(200) NOT NULL,
  KEY `id_kompetisi` (`id_kompetisi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thumb`
--

INSERT INTO `thumb` (`id_kompetisi`, `thumb`) VALUES
(1, '1.png'),
(2, '2.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` bigint(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(500) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl_gabung` date NOT NULL,
  `status` enum('banned','active') NOT NULL,
  `level` enum('admin','user') NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `id_user` (`id_user`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `fullname`, `email`, `tgl_gabung`, `status`, `level`) VALUES
(1, 'kindo', 'ac43724f16e9241d990427ab7c8f4228', 'Kompetisi Indonesia Administrator', 'cs@kompetisiindonesia.com', '2014-03-09', 'active', 'admin'),
(2, 'yussan', 'ac43724f16e9241d990427ab7c8f4228', 'Yusuf Akhsan', 'yusuftwenty@gmail.com', '2014-03-09', 'active', 'user');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kompetisi`
--
ALTER TABLE `kompetisi`
  ADD CONSTRAINT `kompetisi_ibfk_2` FOREIGN KEY (`author`) REFERENCES `user` (`id_user`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `kompetisi_ibfk_3` FOREIGN KEY (`id_sub_kat`) REFERENCES `sub_kat` (`id_sub_kat`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `kompetisi_btn`
--
ALTER TABLE `kompetisi_btn`
  ADD CONSTRAINT `kompetisi_btn_ibfk_1` FOREIGN KEY (`id_kompetisi`) REFERENCES `kompetisi` (`id_kompetisi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kompetisi_btn_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_ibfk_1` FOREIGN KEY (`author`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sub_kat`
--
ALTER TABLE `sub_kat`
  ADD CONSTRAINT `sub_kat_ibfk_1` FOREIGN KEY (`id_main_kat`) REFERENCES `main_kat` (`id_main_kat`) ON DELETE NO ACTION ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
