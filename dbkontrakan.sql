/*
SQLyog Ultimate v12.4.3 (64 bit)
MySQL - 5.7.20-log : Database - sistem kontrakan
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sistem kontrakan` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `sistem kontrakan`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `B_ID` varchar(10) NOT NULL,
  `B_Nama` varchar(30) NOT NULL,
  `B_Jumlah` smallint(6) NOT NULL,
  `Penanggungjawab_ID` varchar(4) DEFAULT NULL,
  PRIMARY KEY (`B_ID`),
  KEY `Penanggungjawab_ID` (`Penanggungjawab_ID`),
  CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`Penanggungjawab_ID`) REFERENCES `penghuni` (`Penghuni_ID`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `barang` */

insert  into `barang`(`B_ID`,`B_Nama`,`B_Jumlah`,`Penanggungjawab_ID`) values 
('B001','Kulkas',10,'PH01'),
('B002','Kran',3,'PH02'),
('B003','Kipas Angin',3,'PH01'),
('B004','Lampu',10,'PH02'),
('B005','Kunci Pintu',5,'PH03'),
('B006','Kompor Gas',1,'PH04'),
('B007','Tabung Gas 3 Kg',1,'PH05'),
('B008','Spatula',1,'PH05'),
('B009','Wajan',1,'PH05'),
('B010','Baskom',2,'PH05'),
('B011','Rak Piring',2,'PH05'),
('B012','Lemari Kayu',4,'PH10'),
('B013','Lemari Plastik',4,'PH10'),
('B014','Antena TV',1,'PH04'),
('B015','Rak Sepatu',1,'PH10'),
('B016','Rak Buku',1,'PH02'),
('B017','Gantungan Baju',10,'PH09');

/*Table structure for table `jabatan` */

DROP TABLE IF EXISTS `jabatan`;

CREATE TABLE `jabatan` (
  `Penghuni_ID` varchar(4) NOT NULL,
  `Jabatan` varchar(20) NOT NULL,
  KEY `Penghuni_ID` (`Penghuni_ID`),
  CONSTRAINT `jabatan_ibfk_1` FOREIGN KEY (`Penghuni_ID`) REFERENCES `penghuni` (`Penghuni_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `jabatan` */

insert  into `jabatan`(`Penghuni_ID`,`Jabatan`) values 
('PH07','Ketua'),
('PH08','Sekretaris'),
('PH06','Bendahara'),
('PH10','Sarpras'),
('PH03','Kebersihan'),
('PH02','Keamanan'),
('PH04','PJ PDAM'),
('PH01','PJ Listrik'),
('PH05','Pembantu Umum'),
('PH09','Pembantu Umum'),
('PH11','Pembantu Umum');

/*Table structure for table `kategori_individu` */

DROP TABLE IF EXISTS `kategori_individu`;

CREATE TABLE `kategori_individu` (
  `Kategori_ID` varchar(4) NOT NULL,
  `Kategori_Nama` varchar(30) NOT NULL,
  `Kategori_Nominal` int(10) NOT NULL,
  PRIMARY KEY (`Kategori_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `kategori_individu` */

insert  into `kategori_individu`(`Kategori_ID`,`Kategori_Nama`,`Kategori_Nominal`) values 
('KI01','Listrik Perbulan',10000),
('KI02','PDAM Perbulan',16000),
('KI03','Air Minum Perbulan',4000),
('KI04','Kontrakan Pertahun',3000000),
('KI05','Lain Lain',60000);

/*Table structure for table `kategori_komunal` */

DROP TABLE IF EXISTS `kategori_komunal`;

CREATE TABLE `kategori_komunal` (
  `KKomunal_ID` varchar(4) NOT NULL,
  `KKomunal_Nama` varchar(30) NOT NULL,
  PRIMARY KEY (`KKomunal_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `kategori_komunal` */

insert  into `kategori_komunal`(`KKomunal_ID`,`KKomunal_Nama`) values 
('KK01','Listrik Perbulan'),
('KK02','PDAM Perbulan'),
('KK03','Kontrak Tempat 1 tahun'),
('KK04','Air Minum');

/*Table structure for table `kondisi barang` */

DROP TABLE IF EXISTS `kondisi barang`;

CREATE TABLE `kondisi barang` (
  `KB_ID` varchar(5) NOT NULL,
  `B_ID` varchar(10) NOT NULL,
  `KB_Jumlah` smallint(6) NOT NULL,
  `KB_Kondisi` varchar(1) NOT NULL,
  PRIMARY KEY (`KB_ID`),
  KEY `B_ID` (`B_ID`),
  CONSTRAINT `kondisi barang_ibfk_1` FOREIGN KEY (`B_ID`) REFERENCES `barang` (`B_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `kondisi barang` */

insert  into `kondisi barang`(`KB_ID`,`B_ID`,`KB_Jumlah`,`KB_Kondisi`) values 
('KB001','B003',2,'B'),
('KB002','B003',1,'R'),
('KB003','B001',1,'B'),
('KB004','B002',2,'B'),
('KB005','B002',1,'R'),
('KB006','B004',9,'B'),
('KB007','B004',1,'R'),
('KB008','B005',5,'B'),
('KB009','B006',1,'B'),
('KB010','B007',1,'B'),
('KB011','B008',1,'B'),
('KB012','B009',1,'B'),
('KB013','B010',2,'B'),
('KB014','B011',2,'B'),
('KB015','B012',4,'B'),
('KB016','B013',4,'B'),
('KB017','B014',1,'B'),
('KB018','B015',1,'B'),
('KB019','B016',1,'B'),
('KB020','B017',10,'B');

/*Table structure for table `latestid` */

DROP TABLE IF EXISTS `latestid`;

CREATE TABLE `latestid` (
  `idpenghuni` int(11) DEFAULT NULL,
  `idpenerima` int(11) DEFAULT NULL,
  `idnotaindividu` int(11) DEFAULT NULL,
  `idnotakomunal` int(11) DEFAULT NULL,
  `idkategoriindividu` int(11) DEFAULT NULL,
  `idkategorikomunal` int(11) DEFAULT NULL,
  `idbarang` int(11) DEFAULT NULL,
  `idkondisibarang` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `latestid` */

insert  into `latestid`(`idpenghuni`,`idpenerima`,`idnotaindividu`,`idnotakomunal`,`idkategoriindividu`,`idkategorikomunal`,`idbarang`,`idkondisibarang`) values 
(11,7,151,21,5,4,17,20);

/*Table structure for table `nota individu` */

DROP TABLE IF EXISTS `nota individu`;

CREATE TABLE `nota individu` (
  `NI_ID` varchar(9) NOT NULL,
  `Penghuni_ID` varchar(4) DEFAULT NULL,
  `NI_Nominal` int(10) NOT NULL,
  `NI_tanggal` date NOT NULL,
  `Kategori_ID` varchar(4) DEFAULT NULL,
  `ID_Penerima` varchar(4) DEFAULT NULL,
  `NI_Periode` varchar(4) NOT NULL,
  PRIMARY KEY (`NI_ID`),
  KEY `Penghuni_ID` (`Penghuni_ID`),
  KEY `nota individu_ibfk_2` (`ID_Penerima`),
  KEY `nota individu_ibfk_3` (`Kategori_ID`),
  CONSTRAINT `nota individu_ibfk_1` FOREIGN KEY (`Penghuni_ID`) REFERENCES `penghuni` (`Penghuni_ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `nota individu_ibfk_2` FOREIGN KEY (`ID_Penerima`) REFERENCES `penghuni` (`Penghuni_ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `nota individu_ibfk_3` FOREIGN KEY (`Kategori_ID`) REFERENCES `kategori_individu` (`Kategori_ID`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `nota individu` */

insert  into `nota individu`(`NI_ID`,`Penghuni_ID`,`NI_Nominal`,`NI_tanggal`,`Kategori_ID`,`ID_Penerima`,`NI_Periode`) values 
('NI0000001','PH07',500000,'2017-05-25','KI04','PH07','1718'),
('NI0000002','PH05',1000000,'2017-05-29','KI04','PH07','1718'),
('NI0000003','PH04',500000,'2017-06-06','KI04','PH07','1718'),
('NI0000004','PH03',500000,'2017-06-06','KI04','PH07','1718'),
('NI0000005','PH10',200000,'2017-06-07','KI04','PH07','1718'),
('NI0000006','PH06',500000,'2017-06-07','KI04','PH07','1718'),
('NI0000007','PH01',300000,'2017-06-07','KI04','PH07','1718'),
('NI0000008','PH02',1000000,'2017-06-07','KI04','PH07','1718'),
('NI0000009','PH11',500000,'2017-06-09','KI04','PH07','1718'),
('NI0000010','PH08',300000,'2017-06-11','KI04','PH07','1718'),
('NI0000011','PH06',500000,'2017-06-26','KI04','PH07','1718'),
('NI0000012','PH07',10000,'2017-07-15','KI01','PH07','1709'),
('NI0000013','PH07',4000,'2017-07-15','KI03','PH07','1707'),
('NI0000014','PH07',10000,'2017-07-15','KI01','PH07','1707'),
('NI0000015','PH07',16000,'2017-07-15','KI02','PH07','1707'),
('NI0000016','PH07',2000,'2017-07-15','KI02','PH07','1709'),
('NI0000017','PH07',2000,'2017-07-15','KI01','PH07','1710'),
('NI0000018','PH05',1500000,'2017-07-26','KI04','PH06','1718'),
('NI0000019','PH03',1000000,'2017-07-28','KI04','PH06','1718'),
('NI0000020','PH07',500000,'2017-07-30','KI04','PH06','1718'),
('NI0000021','PH05',0,'2017-07-31','KI01','PH06','1707'),
('NI0000022','PH03',0,'2017-07-31','KI03','PH06','1707'),
('NI0000023','PH03',0,'2017-07-31','KI02','PH06','1707'),
('NI0000024','PH02',0,'2017-07-31','KI03','PH06','1707'),
('NI0000025','PH02',0,'2017-07-31','KI02','PH06','1707'),
('NI0000026','PH02',0,'2017-07-31','KI01','PH06','1707'),
('NI0000027','PH01',0,'2017-07-31','KI03','PH06','1707'),
('NI0000028','PH01',0,'2017-07-31','KI02','PH06','1707'),
('NI0000029','PH01',0,'2017-07-31','KI01','PH06','1707'),
('NI0000030','PH03',0,'2017-07-31','KI01','PH06','1707'),
('NI0000031','PH08',0,'2017-07-31','KI03','PH06','1707'),
('NI0000032','PH05',0,'2017-07-31','KI02','PH06','1707'),
('NI0000033','PH05',0,'2017-07-31','KI03','PH06','1707'),
('NI0000034','PH11',0,'2017-07-31','KI02','PH06','1707'),
('NI0000035','PH11',0,'2017-07-31','KI01','PH06','1707'),
('NI0000036','PH10',0,'2017-07-31','KI03','PH06','1707'),
('NI0000037','PH10',0,'2017-07-31','KI02','PH06','1707'),
('NI0000038','PH10',0,'2017-07-31','KI01','PH06','1707'),
('NI0000039','PH09',0,'2017-07-31','KI03','PH06','1707'),
('NI0000040','PH09',0,'2017-07-31','KI02','PH06','1707'),
('NI0000041','PH09',0,'2017-07-31','KI01','PH06','1707'),
('NI0000042','PH08',0,'2017-07-31','KI02','PH06','1707'),
('NI0000043','PH08',0,'2017-07-31','KI01','PH06','1707'),
('NI0000044','PH06',0,'2017-07-31','KI03','PH06','1707'),
('NI0000045','PH06',0,'2017-07-31','KI02','PH06','1707'),
('NI0000046','PH06',0,'2017-07-31','KI01','PH06','1707'),
('NI0000047','PH11',0,'2017-07-31','KI03','PH06','1707'),
('NI0000049','PH04',2500000,'2017-08-05','KI04','PH06','1718'),
('NI0000050','PH06',4000,'2017-08-14','KI03','PH06','1708'),
('NI0000051','PH06',16000,'2017-08-14','KI02','PH06','1708'),
('NI0000052','PH06',10000,'2017-08-14','KI01','PH06','1708'),
('NI0000053','PH04',4000,'2017-08-14','KI03','PH06','1708'),
('NI0000054','PH04',16000,'2017-08-14','KI02','PH06','1708'),
('NI0000055','PH03',10000,'2017-08-14','KI01','PH06','1708'),
('NI0000056','PH04',10000,'2017-08-14','KI01','PH06','1708'),
('NI0000057','PH03',4000,'2017-08-14','KI03','PH06','1708'),
('NI0000058','PH03',16000,'2017-08-14','KI02','PH06','1708'),
('NI0000059','PH01',500000,'2017-08-18','KI04','PH06','1718'),
('NI0000060','PH07',4000,'2017-08-20','KI03','PH06','1708'),
('NI0000061','PH08',10000,'2017-08-20','KI01','PH06','1708'),
('NI0000062','PH08',16000,'2017-08-20','KI02','PH06','1708'),
('NI0000063','PH08',4000,'2017-08-20','KI03','PH06','1708'),
('NI0000064','PH01',10000,'2017-08-20','KI01','PH06','1708'),
('NI0000065','PH07',16000,'2017-08-20','KI02','PH06','1708'),
('NI0000066','PH07',10000,'2017-08-20','KI01','PH06','1708'),
('NI0000067','PH01',4000,'2017-08-20','KI03','PH06','1708'),
('NI0000068','PH01',16000,'2017-08-20','KI02','PH06','1708'),
('NI0000069','PH05',4000,'2017-08-20','KI03','PH06','1708'),
('NI0000070','PH05',16000,'2017-08-20','KI02','PH06','1708'),
('NI0000071','PH05',10000,'2017-08-20','KI01','PH06','1708'),
('NI0000072','PH02',10000,'2017-08-20','KI01','PH06','1708'),
('NI0000073','PH02',16000,'2017-08-20','KI02','PH06','1708'),
('NI0000074','PH02',4000,'2017-08-20','KI03','PH06','1708'),
('NI0000075','PH09',4000,'2017-08-23','KI03','PH06','1708'),
('NI0000076','PH09',16000,'2017-08-23','KI02','PH06','1708'),
('NI0000077','PH09',10000,'2017-08-23','KI01','PH06','1708'),
('NI0000078','PH10',4000,'2017-08-23','KI03','PH06','1708'),
('NI0000079','PH10',16000,'2017-08-23','KI02','PH06','1708'),
('NI0000080','PH10',10000,'2017-08-23','KI01','PH06','1708'),
('NI0000081','PH11',0,'2017-08-31','KI01','PH06','1708'),
('NI0000082','PH11',0,'2017-08-31','KI02','PH06','1708'),
('NI0000084','PH11',0,'2017-08-31','KI03','PH06','1708'),
('NI0000085','PH04',4000,'2017-09-07','KI03','PH04','1707'),
('NI0000086','PH04',3000,'2017-09-07','KI02','PH04','1803'),
('NI0000087','PH04',16000,'2017-09-07','KI02','PH04','1709'),
('NI0000088','PH04',16000,'2017-09-07','KI02','PH04','1710'),
('NI0000089','PH04',10000,'2017-09-07','KI01','PH04','1709'),
('NI0000090','PH04',10000,'2017-09-07','KI01','PH04','1710'),
('NI0000091','PH04',2000,'2017-09-07','KI01','PH04','1806'),
('NI0000092','PH10',10000,'2017-09-07','KI01','PH04','1804'),
('NI0000093','PH04',16000,'2017-09-07','KI02','PH04','1801'),
('NI0000094','PH04',16000,'2017-09-07','KI02','PH04','1802'),
('NI0000095','PH04',16000,'2017-09-07','KI02','PH04','1712'),
('NI0000096','PH04',10000,'2017-09-07','KI01','PH04','1805'),
('NI0000097','PH04',10000,'2017-09-07','KI01','PH04','1803'),
('NI0000098','PH04',10000,'2017-09-07','KI01','PH04','1802'),
('NI0000099','PH04',10000,'2017-09-07','KI01','PH04','1801'),
('NI0000100','PH04',10000,'2017-09-07','KI01','PH04','1712'),
('NI0000101','PH04',10000,'2017-09-07','KI01','PH04','1711'),
('NI0000102','PH04',10000,'2017-09-07','KI01','PH04','1707'),
('NI0000103','PH04',16000,'2017-09-07','KI02','PH04','1711'),
('NI0000104','PH04',16000,'2017-09-07','KI02','PH04','1707'),
('NI0000105','PH06',10000,'2017-09-14','KI01','PH06','1709'),
('NI0000106','PH07',16000,'2017-09-14','KI02','PH06','1709'),
('NI0000107','PH07',4000,'2017-09-14','KI03','PH06','1709'),
('NI0000108','PH06',4000,'2017-09-14','KI03','PH06','1709'),
('NI0000109','PH07',10000,'2017-09-14','KI01','PH06','1709'),
('NI0000110','PH09',4000,'2017-09-14','KI03','PH06','1709'),
('NI0000111','PH09',16000,'2017-09-14','KI02','PH06','1709'),
('NI0000112','PH09',10000,'2017-09-14','KI01','PH06','1709'),
('NI0000113','PH06',16000,'2017-09-14','KI02','PH06','1709'),
('NI0000114','PH05',16000,'2017-09-16','KI02','PH06','1709'),
('NI0000115','PH05',4000,'2017-09-16','KI03','PH06','1709'),
('NI0000116','PH02',10000,'2017-09-16','KI01','PH06','1709'),
('NI0000117','PH02',16000,'2017-09-16','KI02','PH06','1709'),
('NI0000118','PH02',4000,'2017-09-16','KI03','PH06','1709'),
('NI0000119','PH10',10000,'2017-09-16','KI01','PH06','1709'),
('NI0000120','PH05',10000,'2017-09-16','KI01','PH06','1709'),
('NI0000121','PH03',4000,'2017-09-16','KI03','PH06','1709'),
('NI0000122','PH10',4000,'2017-09-16','KI03','PH06','1709'),
('NI0000123','PH03',16000,'2017-09-16','KI02','PH06','1709'),
('NI0000124','PH03',10000,'2017-09-16','KI01','PH06','1709'),
('NI0000125','PH10',16000,'2017-09-16','KI02','PH06','1709'),
('NI0000126','PH11',10000,'2017-09-17','KI01','PH06','1709'),
('NI0000127','PH11',16000,'2017-09-17','KI02','PH06','1709'),
('NI0000128','PH11',4000,'2017-09-17','KI03','PH06','1709'),
('NI0000129','PH08',0,'2017-09-30','KI02','PH06','1709'),
('NI0000130','PH08',0,'2017-09-30','KI01','PH06','1709'),
('NI0000131','PH01',0,'2017-09-30','KI03','PH06','1709'),
('NI0000132','PH01',0,'2017-09-30','KI02','PH06','1709'),
('NI0000133','PH01',0,'2017-09-30','KI01','PH06','1709'),
('NI0000134','PH04',4000,'2017-09-30','KI03','PH06','1709'),
('NI0000135','PH04',16000,'2017-09-30','KI02','PH06','1709'),
('NI0000136','PH04',10000,'2017-09-30','KI01','PH06','1709'),
('NI0000137','PH08',500000,'2017-10-21','KI04','PH06','1718'),
('NI0000138','PH09',500000,'2017-10-21','KI04','PH06','1718'),
('NI0000139','PH10',500000,'2017-10-21','KI04','PH06','1718'),
('NI0000140','PH07',500000,'2017-10-28','KI04','PH06','1718'),
('NI0000141','PH02',500000,'2017-10-28','KI04','PH06','1718'),
('NI0000142','PH06',2000000,'2017-11-23','KI04','PH06','1718'),
('NI0000143','PH08',2200000,'2017-11-23','KI04','PH06','1718'),
('NI0000144','PH07',1500000,'2017-11-23','KI04','PH06','1718'),
('NI0000145','PH05',500000,'2017-11-24','KI04','PH06','1718'),
('NI0000146','PH01',2200000,'2017-11-24','KI04','PH06','1718'),
('NI0000147','PH11',3000000,'2017-11-25','KI04','PH06','1718'),
('NI0000148','PH10',2300000,'2017-11-25','KI04','PH06','1718'),
('NI0000149','PH03',1500000,'2017-11-26','KI04','PH06','1718'),
('NI0000150','PH02',1500000,'2017-11-26','KI04','PH06','1718'),
('NI0000151','PH09',2500000,'2017-11-29','KI04','PH06','1718');

/*Table structure for table `nota komunal` */

DROP TABLE IF EXISTS `nota komunal`;

CREATE TABLE `nota komunal` (
  `NK_ID` varchar(10) NOT NULL,
  `Penghuni_ID` varchar(4) DEFAULT NULL,
  `Kategori_ID` varchar(4) DEFAULT NULL,
  `Penerima_ID` varchar(4) DEFAULT NULL,
  `NK_Nominal` int(10) NOT NULL,
  `NK_Tgl` date NOT NULL,
  `NK_Periode` varchar(4) NOT NULL,
  PRIMARY KEY (`NK_ID`),
  KEY `nota komunal_ibfk_2` (`Penghuni_ID`),
  KEY `nota komunal_ibfk_3` (`Penerima_ID`),
  KEY `nota komunal_ibfk_1` (`Kategori_ID`),
  CONSTRAINT `nota komunal_ibfk_1` FOREIGN KEY (`Penghuni_ID`) REFERENCES `penghuni` (`Penghuni_ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `nota komunal_ibfk_2` FOREIGN KEY (`Penerima_ID`) REFERENCES `penerima` (`Penerima_ID`) ON DELETE SET NULL ON UPDATE CASCADE,
  CONSTRAINT `nota komunal_ibfk_3` FOREIGN KEY (`Kategori_ID`) REFERENCES `kategori_komunal` (`KKomunal_ID`) ON DELETE SET NULL ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `nota komunal` */

insert  into `nota komunal`(`NK_ID`,`Penghuni_ID`,`Kategori_ID`,`Penerima_ID`,`NK_Nominal`,`NK_Tgl`,`NK_Periode`) values 
('NK00000001','PH07','KK03','PN01',500000,'2017-05-29','1718'),
('NK00000002','PH07','KK03','PN01',4800000,'2017-06-13','1718'),
('NK00000003','PH07','KK01','PN05',22000,'2017-07-15','1707'),
('NK00000004','PH07','KK02','PN06',18000,'2017-07-15','1707'),
('NK00000005','PH06','KK04','PN07',3500,'2017-07-16','1707'),
('NK00000006','PH07','KK01','PN05',52000,'2017-07-22','1707'),
('NK00000007','PH10','KK04','PN07',3500,'2017-07-25','1707'),
('NK00000008','PH10','KK04','PN07',3500,'2017-08-02','1708'),
('NK00000009','PH06','KK01','PN05',102000,'2017-08-04','1708'),
('NK00000010','PH04','KK04','PN07',3500,'2017-08-08','1708'),
('NK00000011','PH07','KK02','PN06',98000,'2017-08-13','1708'),
('NK00000012','PH01','KK04','PN07',3500,'2017-08-16','1708'),
('NK00000013','PH07','KK03','PN01',6500000,'2017-08-20','1718'),
('NK00000014','PH08','KK04','PN07',3500,'2017-08-25','1708'),
('NK00000015','PH10','KK04','PN07',3500,'2017-09-02','1709'),
('NK00000016','PH04','KK01','PN05',102000,'2017-09-07','1709'),
('NK00000017','PH04','KK02','PN06',115000,'2017-09-07','1709'),
('NK00000018','PH01','KK04','PN07',3500,'2017-09-08','1709'),
('NK00000019','PH08','KK04','PN07',3500,'2017-09-17','1709'),
('NK00000020','PH05','KK04','PN07',3500,'2017-09-25','1709'),
('NK00000021','PH05','KK04','PN07',3500,'2017-09-30','1709');

/*Table structure for table `penerima` */

DROP TABLE IF EXISTS `penerima`;

CREATE TABLE `penerima` (
  `Penerima_ID` varchar(4) NOT NULL,
  `Penerima_Nama` varchar(50) NOT NULL,
  `Penerima_Status` varchar(20) NOT NULL,
  `Penerima_JK` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`Penerima_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `penerima` */

insert  into `penerima`(`Penerima_ID`,`Penerima_Nama`,`Penerima_Status`,`Penerima_JK`) values 
('PN01','Nakriful','Bapak Kontrakan','L'),
('PN02','Nyulastri','Ibu Kontrakan','P'),
('PN03','Hafidh Dihas Okaviananda','Ketua Kontrakan','L'),
('PN04','Mirza Romi Setiawan','Sekretaris','L'),
('PN05','PLN','ATM/Konter','-'),
('PN06','PDAM','ATM/Konter','-'),
('PN07','Isi ulang Galon','Konter','-');

/*Table structure for table `penghuni` */

DROP TABLE IF EXISTS `penghuni`;

CREATE TABLE `penghuni` (
  `Penghuni_ID` varchar(4) NOT NULL,
  `Penghuni_Nama` varchar(50) NOT NULL,
  `Penghuni_Tgllahir` date DEFAULT NULL,
  `Penghuni_JK` varchar(1) DEFAULT NULL,
  `Penghuni_Kamar` varchar(3) NOT NULL,
  `Penghuni_NRP` varchar(15) NOT NULL,
  `Penghuni_Alamat` varchar(100) NOT NULL,
  `Penghuni_NoTelp` varchar(15) NOT NULL,
  PRIMARY KEY (`Penghuni_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `penghuni` */

insert  into `penghuni`(`Penghuni_ID`,`Penghuni_Nama`,`Penghuni_Tgllahir`,`Penghuni_JK`,`Penghuni_Kamar`,`Penghuni_NRP`,`Penghuni_Alamat`,`Penghuni_NoTelp`) values 
('PH01','Ainul Imam','1998-09-30','L','101','06111640007002','Lamongan, Jawa Timur','085708456598'),
('PH02','Ahmad Reza Hakimi','1998-10-02','L','101','02211640007002','Gresik, Jawa Timur','082257523998'),
('PH03','Minhajun Ni\'am','2000-10-12','L','101','02511640007002','Lamongan, Jawa Timur','085850129378'),
('PH04','Muhammad Abyan Dzaka\'','1998-01-30','L','102','05111640007003','Karawang, Jawa Barat','085881751588'),
('PH05','Khawari Muhammad Dzakwan','1998-11-20','L','102','05111640000088','Semarang, Jawa Tengah','08992679473'),
('PH06','Mirza Romi Setiawan','1999-06-20','L','102','06211640007001','Sidoarjo, Jawa Timur','087751655141'),
('PH07','Hafidh Dihas Okaviananda','1997-10-14','L','103','06111640007003','Mojokerto, Jawa Timur','085730993401'),
('PH08','Farhan Aji Pratama','1997-07-23','L','103','05211640007001','Blitar, Jawa Timur','085704340999'),
('PH09','Muhammad Irfan Hafidzi','1998-10-26','L','104','02511640007001','Batang, Jawa Tengah','085274103053'),
('PH10','Afif Al-Asyad','1998-11-22','L','104','02211640007001','Purwakarta, Jawa Barat','087855873328'),
('PH11','Akhmad Nizar Zulmi','1999-02-19','L','104','05111640007001','Mojokerto, Jawa Timur','081216337754');

/* Procedure structure for procedure `sp_lihatbarang` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_lihatbarang` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_lihatbarang`(p_id varchar(10))
BEGIN
		select * from `barang` where `B_ID` = p_id;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_lihatPenerima` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_lihatPenerima` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_lihatPenerima`(p_id varchar(4) )
BEGIN
		select * from `penerima` where `Penerima_ID` = p_id;
	END */$$
DELIMITER ;

/* Procedure structure for procedure `sp_lihatpenghuni` */

/*!50003 DROP PROCEDURE IF EXISTS  `sp_lihatpenghuni` */;

DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_lihatpenghuni`(p_id varchar(4))
BEGIN
		select * from `penghuni` where `Penghuni_ID` = p_id;
	END */$$
DELIMITER ;

/*Table structure for table `daftar barang rusak` */

DROP TABLE IF EXISTS `daftar barang rusak`;

/*!50001 DROP VIEW IF EXISTS `daftar barang rusak` */;
/*!50001 DROP TABLE IF EXISTS `daftar barang rusak` */;

/*!50001 CREATE TABLE  `daftar barang rusak`(
 `ID Barang` varchar(10) ,
 `Nama Barang` varchar(30) ,
 `ID Penanggungjawab` varchar(4) ,
 `Nama Penanggungjawab` varchar(50) ,
 `Jumlah Barang` smallint(6) 
)*/;

/*Table structure for table `detil jabatan` */

DROP TABLE IF EXISTS `detil jabatan`;

/*!50001 DROP VIEW IF EXISTS `detil jabatan` */;
/*!50001 DROP TABLE IF EXISTS `detil jabatan` */;

/*!50001 CREATE TABLE  `detil jabatan`(
 `Penghuni_ID` varchar(4) ,
 `Penghuni_Nama` varchar(50) ,
 `Kamar` varchar(3) ,
 `Nomor Telepon` varchar(15) ,
 `Jabatan` varchar(20) 
)*/;

/*Table structure for table `hutang penghuni` */

DROP TABLE IF EXISTS `hutang penghuni`;

/*!50001 DROP VIEW IF EXISTS `hutang penghuni` */;
/*!50001 DROP TABLE IF EXISTS `hutang penghuni` */;

/*!50001 CREATE TABLE  `hutang penghuni`(
 `ID Penghuni` varchar(4) ,
 `Periode` varchar(4) ,
 `ID Kategori` varchar(4) ,
 `Hutang` decimal(33,0) 
)*/;

/*Table structure for table `hutang penghuni total` */

DROP TABLE IF EXISTS `hutang penghuni total`;

/*!50001 DROP VIEW IF EXISTS `hutang penghuni total` */;
/*!50001 DROP TABLE IF EXISTS `hutang penghuni total` */;

/*!50001 CREATE TABLE  `hutang penghuni total`(
 `ID Penghuni` varchar(4) ,
 `Penghuni_Nama` varchar(50) ,
 `Hutang Total` decimal(55,0) 
)*/;

/*Table structure for table `jumlah uang di kas` */

DROP TABLE IF EXISTS `jumlah uang di kas`;

/*!50001 DROP VIEW IF EXISTS `jumlah uang di kas` */;
/*!50001 DROP TABLE IF EXISTS `jumlah uang di kas` */;

/*!50001 CREATE TABLE  `jumlah uang di kas`(
 `Jumlah Uang di Kas` decimal(33,0) 
)*/;

/*Table structure for table `laporan kas perbulan` */

DROP TABLE IF EXISTS `laporan kas perbulan`;

/*!50001 DROP VIEW IF EXISTS `laporan kas perbulan` */;
/*!50001 DROP TABLE IF EXISTS `laporan kas perbulan` */;

/*!50001 CREATE TABLE  `laporan kas perbulan`(
 `Periode Pemasukan Kas` varchar(4) ,
 `Jumlah Pemasukan Kas` decimal(32,0) ,
 `Jumlah Pengeluaran` decimal(32,0) ,
 `Pemasukan - Pengeluaran` decimal(33,0) 
)*/;

/*Table structure for table `pengeluaran listrik` */

DROP TABLE IF EXISTS `pengeluaran listrik`;

/*!50001 DROP VIEW IF EXISTS `pengeluaran listrik` */;
/*!50001 DROP TABLE IF EXISTS `pengeluaran listrik` */;

/*!50001 CREATE TABLE  `pengeluaran listrik`(
 `Periode` varchar(4) ,
 `Pengeluaran` int(10) 
)*/;

/*Table structure for table `pengeluaran pdam` */

DROP TABLE IF EXISTS `pengeluaran pdam`;

/*!50001 DROP VIEW IF EXISTS `pengeluaran pdam` */;
/*!50001 DROP TABLE IF EXISTS `pengeluaran pdam` */;

/*!50001 CREATE TABLE  `pengeluaran pdam`(
 `Periode` varchar(4) ,
 `Pengeluaran` int(10) 
)*/;

/*Table structure for table `uang komunal yang dibayarkan penghuni` */

DROP TABLE IF EXISTS `uang komunal yang dibayarkan penghuni`;

/*!50001 DROP VIEW IF EXISTS `uang komunal yang dibayarkan penghuni` */;
/*!50001 DROP TABLE IF EXISTS `uang komunal yang dibayarkan penghuni` */;

/*!50001 CREATE TABLE  `uang komunal yang dibayarkan penghuni`(
 `ID Penghuni` varchar(4) ,
 `Nama Penghuni` varchar(50) ,
 `Uang yang dibayarkan` decimal(32,0) 
)*/;

/*Table structure for table `uang yang diterima penerima` */

DROP TABLE IF EXISTS `uang yang diterima penerima`;

/*!50001 DROP VIEW IF EXISTS `uang yang diterima penerima` */;
/*!50001 DROP TABLE IF EXISTS `uang yang diterima penerima` */;

/*!50001 CREATE TABLE  `uang yang diterima penerima`(
 `ID Penerima` varchar(4) ,
 `Nama Penerima` varchar(50) ,
 `Uang yang diterima` decimal(32,0) 
)*/;

/*Table structure for table `uang yang diterima penghuni` */

DROP TABLE IF EXISTS `uang yang diterima penghuni`;

/*!50001 DROP VIEW IF EXISTS `uang yang diterima penghuni` */;
/*!50001 DROP TABLE IF EXISTS `uang yang diterima penghuni` */;

/*!50001 CREATE TABLE  `uang yang diterima penghuni`(
 `ID Penghuni` varchar(4) ,
 `Nama Penghuni` varchar(50) ,
 `Uang yang diterima` decimal(32,0) 
)*/;

/*View structure for view daftar barang rusak */

/*!50001 DROP TABLE IF EXISTS `daftar barang rusak` */;
/*!50001 DROP VIEW IF EXISTS `daftar barang rusak` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `daftar barang rusak` AS (select `b`.`B_ID` AS `ID Barang`,`b`.`B_Nama` AS `Nama Barang`,`b`.`Penanggungjawab_ID` AS `ID Penanggungjawab`,`c`.`Penghuni_Nama` AS `Nama Penanggungjawab`,`a`.`KB_Jumlah` AS `Jumlah Barang` from ((`kondisi barang` `a` join `barang` `b`) join `penghuni` `c`) where ((`a`.`B_ID` = `b`.`B_ID`) and (`b`.`Penanggungjawab_ID` = `c`.`Penghuni_ID`) and (`a`.`KB_Kondisi` = 'R'))) */;

/*View structure for view detil jabatan */

/*!50001 DROP TABLE IF EXISTS `detil jabatan` */;
/*!50001 DROP VIEW IF EXISTS `detil jabatan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `detil jabatan` AS (select `a`.`Penghuni_ID` AS `Penghuni_ID`,`a`.`Penghuni_Nama` AS `Penghuni_Nama`,`a`.`Penghuni_Kamar` AS `Kamar`,`a`.`Penghuni_NoTelp` AS `Nomor Telepon`,`b`.`Jabatan` AS `Jabatan` from (`penghuni` `a` join `jabatan` `b`) where (`a`.`Penghuni_ID` = `b`.`Penghuni_ID`)) */;

/*View structure for view hutang penghuni */

/*!50001 DROP TABLE IF EXISTS `hutang penghuni` */;
/*!50001 DROP VIEW IF EXISTS `hutang penghuni` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hutang penghuni` AS (select `c`.`ID Penghuni` AS `ID Penghuni`,`c`.`Periode` AS `Periode`,`c`.`ID Kategori` AS `ID Kategori`,`c`.`Hutang` AS `Hutang` from (select `b`.`Penghuni_ID` AS `ID Penghuni`,`b`.`NI_Periode` AS `Periode`,`b`.`Kategori_ID` AS `ID Kategori`,(`a`.`Kategori_Nominal` - sum(`b`.`NI_Nominal`)) AS `Hutang` from (`sistem kontrakan`.`kategori_individu` `a` join `sistem kontrakan`.`nota individu` `b`) where (`a`.`Kategori_ID` = `b`.`Kategori_ID`) group by `b`.`Penghuni_ID`,`b`.`NI_Periode`,`b`.`Kategori_ID`) `c` where (`c`.`Hutang` <> 0)) */;

/*View structure for view hutang penghuni total */

/*!50001 DROP TABLE IF EXISTS `hutang penghuni total` */;
/*!50001 DROP VIEW IF EXISTS `hutang penghuni total` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `hutang penghuni total` AS (select `c`.`ID Penghuni` AS `ID Penghuni`,`d`.`Penghuni_Nama` AS `Penghuni_Nama`,sum(`c`.`Hutang`) AS `Hutang Total` from (((select `b`.`Penghuni_ID` AS `ID Penghuni`,`b`.`NI_Periode` AS `Periode`,`b`.`Kategori_ID` AS `ID Kategori`,(`a`.`Kategori_Nominal` - sum(`b`.`NI_Nominal`)) AS `Hutang` from (`sistem kontrakan`.`kategori_individu` `a` join `sistem kontrakan`.`nota individu` `b`) where (`a`.`Kategori_ID` = `b`.`Kategori_ID`) group by `b`.`Penghuni_ID`,`b`.`NI_Periode`,`b`.`Kategori_ID`)) `c` join `sistem kontrakan`.`penghuni` `d`) where (`c`.`ID Penghuni` = `d`.`Penghuni_ID`) group by `c`.`ID Penghuni`) */;

/*View structure for view jumlah uang di kas */

/*!50001 DROP TABLE IF EXISTS `jumlah uang di kas` */;
/*!50001 DROP VIEW IF EXISTS `jumlah uang di kas` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `jumlah uang di kas` AS (select (`a`.`Pemasukan` - `b`.`Pengeluaran`) AS `Jumlah Uang di Kas` from (((select sum(`sistem kontrakan`.`nota individu`.`NI_Nominal`) AS `Pemasukan` from `sistem kontrakan`.`nota individu`)) `a` join (select sum(`sistem kontrakan`.`nota komunal`.`NK_Nominal`) AS `Pengeluaran` from `sistem kontrakan`.`nota komunal`) `b`)) */;

/*View structure for view laporan kas perbulan */

/*!50001 DROP TABLE IF EXISTS `laporan kas perbulan` */;
/*!50001 DROP VIEW IF EXISTS `laporan kas perbulan` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `laporan kas perbulan` AS (select `a`.`Periode Pemasukan Kas` AS `Periode Pemasukan Kas`,`a`.`Jumlah Pemasukan Kas` AS `Jumlah Pemasukan Kas`,`b`.`Jumlah Pengeluaran` AS `Jumlah Pengeluaran`,(`a`.`Jumlah Pemasukan Kas` - `b`.`Jumlah Pengeluaran`) AS `Pemasukan - Pengeluaran` from (((select sum(`sistem kontrakan`.`nota individu`.`NI_Nominal`) AS `Jumlah Pemasukan Kas`,`sistem kontrakan`.`nota individu`.`NI_Periode` AS `Periode Pemasukan Kas` from `sistem kontrakan`.`nota individu` group by `sistem kontrakan`.`nota individu`.`NI_Periode`)) `a` join (select `sistem kontrakan`.`nota komunal`.`NK_Periode` AS `Periode Pengeluaran Komunal`,sum(`sistem kontrakan`.`nota komunal`.`NK_Nominal`) AS `Jumlah Pengeluaran` from `sistem kontrakan`.`nota komunal` group by `sistem kontrakan`.`nota komunal`.`NK_Periode`) `b`) where (`a`.`Periode Pemasukan Kas` = `b`.`Periode Pengeluaran Komunal`)) */;

/*View structure for view pengeluaran listrik */

/*!50001 DROP TABLE IF EXISTS `pengeluaran listrik` */;
/*!50001 DROP VIEW IF EXISTS `pengeluaran listrik` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pengeluaran listrik` AS (select `b`.`NK_Periode` AS `Periode`,`b`.`NK_Nominal` AS `Pengeluaran` from `nota komunal` `b` where (`b`.`Kategori_ID` = 'KK01')) */;

/*View structure for view pengeluaran pdam */

/*!50001 DROP TABLE IF EXISTS `pengeluaran pdam` */;
/*!50001 DROP VIEW IF EXISTS `pengeluaran pdam` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pengeluaran pdam` AS (select `b`.`NK_Periode` AS `Periode`,`b`.`NK_Nominal` AS `Pengeluaran` from `nota komunal` `b` where (`b`.`Kategori_ID` = 'KK02')) */;

/*View structure for view uang komunal yang dibayarkan penghuni */

/*!50001 DROP TABLE IF EXISTS `uang komunal yang dibayarkan penghuni` */;
/*!50001 DROP VIEW IF EXISTS `uang komunal yang dibayarkan penghuni` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `uang komunal yang dibayarkan penghuni` AS (select `a`.`Penghuni_ID` AS `ID Penghuni`,`a`.`Penghuni_Nama` AS `Nama Penghuni`,sum(`b`.`NK_Nominal`) AS `Uang yang dibayarkan` from (`penghuni` `a` join `nota komunal` `b`) where (`a`.`Penghuni_ID` = `b`.`Penghuni_ID`) group by `a`.`Penghuni_ID`) */;

/*View structure for view uang yang diterima penerima */

/*!50001 DROP TABLE IF EXISTS `uang yang diterima penerima` */;
/*!50001 DROP VIEW IF EXISTS `uang yang diterima penerima` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `uang yang diterima penerima` AS (select `b`.`Penerima_ID` AS `ID Penerima`,`b`.`Penerima_Nama` AS `Nama Penerima`,sum(`a`.`NK_Nominal`) AS `Uang yang diterima` from (`nota komunal` `a` join `penerima` `b`) where (`a`.`Penerima_ID` = `b`.`Penerima_ID`) group by `b`.`Penerima_ID`) */;

/*View structure for view uang yang diterima penghuni */

/*!50001 DROP TABLE IF EXISTS `uang yang diterima penghuni` */;
/*!50001 DROP VIEW IF EXISTS `uang yang diterima penghuni` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `uang yang diterima penghuni` AS (select `a`.`Penghuni_ID` AS `ID Penghuni`,`a`.`Penghuni_Nama` AS `Nama Penghuni`,sum(`b`.`NI_Nominal`) AS `Uang yang diterima` from (`penghuni` `a` join `nota individu` `b`) where (`a`.`Penghuni_ID` = `b`.`ID_Penerima`) group by `a`.`Penghuni_ID`) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
