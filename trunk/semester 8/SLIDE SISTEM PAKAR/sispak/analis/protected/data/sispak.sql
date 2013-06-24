/*
SQLyog Ultimate v9.30 
MySQL - 5.5.25a : Database - sispak
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sispak` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `sispak`;

/*Table structure for table `tb_question` */

DROP TABLE IF EXISTS `tb_question`;

CREATE TABLE `tb_question` (
  `id_quetion` int(11) NOT NULL AUTO_INCREMENT,
  `problem_question` text,
  `problem_solving` text,
  `for_age` int(1) DEFAULT NULL,
  PRIMARY KEY (`id_quetion`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

/*Data for the table `tb_question` */

insert  into `tb_question`(`id_quetion`,`problem_question`,`problem_solving`,`for_age`) values (1,'Rambut balita anda mudah kusam dan rontok ?','Jangan abaikan bila rambut balita mudah rontok dan tampak kusam. Bisa jadi dia kekurangan zat gizi tertentu, seperti vitamin B kompleks dan mineral seng (zinc). Sebaliknya, dengan rambut mengilap dan kuat, menunjukkan bahwa balita cukup gizi, serta kebersihan rambut dan kulit kepalanya terjaga.',1),(2,'Apakah di usia setahun gigi pertamanya sudah tumbuh ?','Bisa jadi balita anda kekurangan kalsium, biasakan ke dokter gigi 6 bulan sekali untuk pemeliharaan.',4),(3,'Gusi anak anda mudah berdarah ?','Anak anda kemungkinan mengalami defisiensi (kekurangan) vitamin C, silahkan tambah kandungan vitamin c pada anak anda.',5),(4,'Warna kuku merah muda ?','Mengalami anemia (kekurangan sel darah merah) dan kekurangan mineral kalsium. sialahkan menambahkan makanan bergizi untuk meningkatkan gizi anak anda.',2),(5,'Suhu tubuh antara 36,5ºC – 37,5ºC ?','Cukup amati perilakunya saja. Kelincahan dan cerianya bisa jadi pertanda suhu tubuhnya normal. Jika tampak lesu, baru cek suhu tubuh.',3);

/*Table structure for table `tb_trial` */

DROP TABLE IF EXISTS `tb_trial`;

CREATE TABLE `tb_trial` (
  `id_trial` int(11) NOT NULL AUTO_INCREMENT,
  `nama_anak` varchar(200) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `umur` int(1) DEFAULT NULL,
  `nama_ibu` varchar(200) NOT NULL,
  `alamat_rumah` text NOT NULL,
  `no_handphone` varchar(25) NOT NULL,
  `results` text,
  `date_created` datetime DEFAULT NULL,
  PRIMARY KEY (`id_trial`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `tb_trial` */

insert  into `tb_trial`(`id_trial`,`nama_anak`,`tanggal_lahir`,`umur`,`nama_ibu`,`alamat_rumah`,`no_handphone`,`results`,`date_created`) values (1,'bola','2011-03-02',2,'dsds','','',NULL,'2013-06-25 00:00:00');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
