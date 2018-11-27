drop database sistemadoacoes;

use sistemadoacoes;

create database sistemadoacoes
default character set utf8
default collate utf8_general_ci;

/* 
  Eu Alterei o campo de senha do Usuario para varchar(60) 
  
  Depois criptografei as senhas com uma hash padrão para testes:

  update Usuario set senha = '$2y$10$bG4iukBpCVprVT58uacVNucoDcl/JxeXWtBwtxr9XoXrb7H7ySZ8u';

  Nova Senha -> secret 

  Alteração no campo 'situacaoString', pois tinha uma erro de caractere especial:

  update Boleto set situacaoString='não-pago' where situacaoString != 'pago';


*/

-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: 200.230.71.29    Database: sistemadoacoes
-- ------------------------------------------------------
-- Server version	5.5.30-1~dotdeb.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Boleto`
--

DROP TABLE IF EXISTS `Boleto`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Boleto` (
  `codigoBoleto` int(11) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(255) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `dataEmissao` date DEFAULT NULL,
  `dataEmissaoString` varchar(255) DEFAULT NULL,
  `dataPagamento` date DEFAULT NULL,
  `dataPagamentoString` varchar(255) DEFAULT NULL,
  `dataVencimento` date DEFAULT NULL,
  `dataVencimentoString` varchar(255) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `nossoNumero` varchar(17) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL,
  `situacaoString` varchar(255) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `valor` decimal(19,2) DEFAULT NULL,
  `codigoEntidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigoBoleto`),
  KEY `FK76EEABA19F66D09B` (`codigoEntidade`),
  CONSTRAINT `FK76EEABA19F66D09B` FOREIGN KEY (`codigoEntidade`) REFERENCES `Entidade` (`codigoEntidade`)
) ENGINE=InnoDB AUTO_INCREMENT=96 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Boleto`
--

LOCK TABLES `Boleto` WRITE;
/*!40000 ALTER TABLE `Boleto` DISABLE KEYS */;
INSERT INTO `Boleto` VALUES (1,'Jd. Samambaia','','17018-002','Bauru',NULL,'7498444771','2015-11-19','19/11/2015',NULL,NULL,'2015-11-29','29/11/2015','guerreiro@cart.invepar.com.br','Av. Issa Marar','SP','JAMES OLIVER GUERREIRO CARNEIRO','25879020000000001','2-200',1,'pago','(14) 3104-2300',7000.00,10),(2,'Quinta Ranieri','(14) 99604-1672','17055-808','Bauru',NULL,'104.798.468-71','2015-11-23','23/11/2015',NULL,NULL,'2015-12-03','03/12/2015','paula.bortolozzi@uol.com.br','rua Ricardo Pezzan casa G19','SP','Ana Paula Penteado Bortolozzi','25879020000000002','1-30',1,'pago','(14) 3276-2238',500.00,10),(3,'CENTRO','','01013-020','SAO PAULO',NULL,'211.066.228-04','2015-11-26','26/11/2015',NULL,NULL,'2015-12-06','06/12/2015','cmenina@femanet.com.br','RUA DO TESOURO 11 ANDAR ','SP','MARIA NAZARETH TREVELIN PICOLO - 211.066.228-04','25879020000000003','47',0,'no-pago','(18) 3325-1131',1010.00,2),(4,'CENTRO','','01013-020','SAO PAULO',NULL,'211.066.228-04','2015-11-26','26/11/2015',NULL,NULL,'2015-12-06','06/12/2015','cmenina@femanet.com.br','RUA DO TESOURO 11 ANDAR ','SP','MARIA NAZARETH TREVELIN PICOLO - 211.066.228-04',NULL,'47',0,'no-pago','(18) 3325-1131',1010.00,2),(5,'CENTRO','','01013-020','SAO PAULO',NULL,'002.842.548-00','2015-11-26','26/11/2015',NULL,NULL,'2015-12-06','06/12/2015','cmenina@femanet.com.br','RUA DO TESOURO 11ANDAR','SP','ANTONIO CHIQUETO PICOLO - 002.842.548-00','25879020000000005','47',0,'no-pago','(18) 3325-1131',1000.00,2),(6,'JD SÃ?O JOAO DO IPIRANGA','(14) 99810-7094','17052-580','BAURU',NULL,'268.712.988-78','2015-11-26','26/11/2015',NULL,NULL,'2015-12-06','06/12/2015','rosalina.vieira@cart.invepar.com.br','RUA LOURENCO RODRIGUES','SP','ROSALINA VIEIRA PRADO','25879020000000006','4-27',1,'pago','(14) 3104-2391',200.00,10),(7,'VILA LEME DA SILVA','','17017-280','BAURU',NULL,'029.862.666-73','2015-11-30','30/11/2015',NULL,NULL,'2015-12-10','10/12/2015','joao.couri@hotmail.com','RUA SEMI GEBARA','SP','JOAO GARCIA COURI NETO','25879020000000007','146',1,'pago','(17) 3104-2390',1000.00,10),(8,'VILA MESQUITA','(11) 99644-3719','17014-440','BAURU',NULL,'832.463.127-53','2015-11-30','30/11/2015',NULL,NULL,'2015-12-10','10/12/2015','flavio.rogerio@cart.onvepar.com.br','RUA VIRGÃ?LIO MALTA, 19-55','SP','FLÃ?VIO ROGÃ?RIO RODRIGUES DE SOUSA','25879020000000008','162',1,'pago','(14) 3208-3447',1000.00,10),(9,'COPACABANA','','22050-012','RIO DE JANEIRO',NULL,'634.968.527-04','2015-11-30','30/11/2015',NULL,NULL,'2015-12-10','10/12/2015','clara.ferraz@cart.invepar.com.br','RUA DOMINGOS FERREIRA ','RJ','CLARA MARIA DA CUNHA FERRAZ','25879020000000009','168',1,'pago','(14) 3104-2300',1000.00,10),(10,'Jardim Estoril','(14) 99749-3401','17016-240','Bauru',NULL,'289.715.747-04','2015-11-30','30/11/2015',NULL,NULL,'2015-12-10','10/12/2015','athayde.junior@cart.invepar.com.br','R. Prof. Wilson Monteiro Bonato, Quadra 2','SP','ATHAYDE CALDAS JUNIOR','25879020000000010','55',0,'no-pago','(14) 3104-2300',600.00,10),(11,'QUINTA RANIERI','(14) 99711-0400','17055-792','BAURU',NULL,'191.331.298-43','2015-11-30','30/11/2015',NULL,NULL,'2015-12-10','10/12/2015','ROBERTO.PINHEIRO@CART.INVEPAR.COM.BR','RUA CLAUDELICE ARAUJO COSTA FIGUEIREDO - QUADRA 2','SP','JOSE ROBERTO DE JESUS PINHEIRO','25879020000000011','49',1,'pago','(14) 3223-0263',1000.00,10),(12,'VILA MESQUITA','(14) 99889-8078','17014-440','BAURU',NULL,'079.978.637-37','2015-11-30','30/11/2015',NULL,NULL,'2015-12-10','10/12/2015','gpaivamaia@hotmail.com','RUA VIRGILIO MALTA, 19  55 APT 112','SP','GUILHERME PAIVA MAIA','25879020000000012','55',1,'pago','(14) 3204-1192',1000.00,10),(13,'Centro','(18) 999999','19800-000','Assis',NULL,'222.222.222-22','2015-12-01','01/12/2015',NULL,NULL,'2015-12-11','11/12/2015','doador@conselho.com.br','Rua 1 ','SP','Jose da Silva','25879020000000013','100',0,'no-pago','(18) 3322-222',1000.00,14),(14,'Vila Operaria','(18) 99678-4822','19804-180','Assis',NULL,'229.172.598-09','2015-12-01','01/12/2015',NULL,NULL,'2015-12-11','11/12/2015','vancassia08@gmail.com','Rua Cambui','SP','Vanessa de Cassia Lemes','25879020000000014','18',0,'no-pago','(18) 3323-6345',20.00,5),(15,'ZONA RURAL/FAZENDA JAGUACY','(14) 99688-7212',' 17120-000','BAURU',NULL,'281.505.408-65','2015-12-02','02/12/2015',NULL,NULL,'2015-12-12','12/12/2015','DANIEL.GOMES@CART.INVEPAR.COM.BR','RODOVIA MARECHAL RONDON, KM 355','SP','DANIEL FICOTTO GOMES','25879020000000015','S/N',1,'pago','(14) 3104-2300',200.00,10),(16,'Jardim Europa','','19814-630','Assis',NULL,'083.705.168-15','2015-12-03','03/12/2015',NULL,NULL,'2015-12-13','13/12/2015','casadacrianca@femanet.com.br','Rua Carlos Bompani','SP','Sylvio Rosa de Almeida','25879020000000016','324',1,'pago','(18) 3323-5112',500.00,17),(17,'Centro','','19800-000','Assis',NULL,'201.770.628-00','2015-12-03','03/12/2015',NULL,NULL,'2015-12-13','13/12/2015','casadacrianca@femanet.com.br','Rua Osvaldo Cruz','SP','Maria Aparecida Moreli Teixeira','25879020000000017','619',1,'pago','(18) 3325-1883',500.00,17),(19,'Jardim Europa ','','19815-155','Assis',NULL,'036.835.408-34','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com.br','Rua Prof. A. Mendonca','SP','ALIR POLETO - 036.835.408-34','25879020000000019','155',1,'pago','(18) 3325-1131',960.00,2),(20,'Centro','','19802-001','Assis',NULL,'029.525.218-91','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com.br','Rua Sao Paulo ','SP','ALVARO  BARBOSA MUZZI - 029.525.218-91','25879020000000020','383',0,'no-pago','(18) 3325-1131',720.00,2),(21,'Vila Santa  Cecilia ','','19806-180','Assis',NULL,'035.583.178-31','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com.br','Rua Joao Ramalho','SP','LUIS CLAUDIO PHREL GAMBALI - 035.583.178 - 31','25879020000000021','404',1,'pago','(18) 3325-1131',600.00,2),(22,'Vila Santo Antonio ','','19800-161','Assis ',NULL,'797.081.378-04','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com.br','Rua 15 de Novembro','SP','AROLDO SILVA SOARES - 797.081.378-04 ','25879020000000022','776',1,'pago','(18) 3325-1131',600.00,2),(23,'Centro','','19806-130','Assis',NULL,'013.294.998-91','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com.br','Rua Benjamin Constant','SP','CASSIO VISCONTI DE OLIVEIRA - 013.294.998-91','25879020000000023','64',1,'pago','(18) 3325-1131',480.00,2),(24,'Vila Santa Cecilia ','','19806-271','Assis',NULL,'797.841.788-34','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com.br','Rua  Martim Afonso ','SP','CESAR LUIZ BERTOLUCCI - 797.841.788 - 34','25879020000000024','435',1,'pago','(18) 3325-1131',600.00,2),(25,'Jardim Parana ','','19807-340','Assis',NULL,'248.556.358-63','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com.br','Rua Paranapanema ','SP','ELIANA TIEMI ITO - 248.556.358-63','25879020000000025','366',0,'no-pago','(18) 3325-1131',1800.00,2),(26,'Centro','','19814-010','Assis',NULL,'047.530.188-90','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com','Rua Smith Vasconcelos  Apto 04','SP','HELENA RIBEIRO TUCUNDUVA - 047.530.188-90','25879020000000026','722',1,'pago','(18) 3325-1131',1200.00,2),(27,'Vila Santa Elisa ','','19800-131','Assis',NULL,'277.133.509-34','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com','Rua Cap. Francisco Rodrigues Garcia ','SP','IOSHITACA OISHI - 277.133.509-34','25879020000000027','934',1,'pago','(18) 3325-1131',600.00,2),(28,'Centro','','19814-340','Assis',NULL,'010.525.439-87','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com','XV de Novembro ','SP','JOSE JERONIMO NETO - 010.525.439-87','25879020000000028','26',1,'pago','(18) 3325-1131',1400.00,2),(29,'Vila Xavier ','','19815-001','Assis',NULL,'002.026.298-13','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com','Rua Olavo Bilac','SP','LILIANE HADDAD MONTEIRO - 002.026.298-13','25879020000000029','232',1,'pago','(18) 3325-1131',600.00,2),(30,'Centro','','19800-081','Assis',NULL,'201.770.628-00','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com','Rua Osvaldo ','SP','MARIA APARECIDA MORELI TEIXEIRA - 201.770.628-00','25879020000000030','619',0,'no-pago','(18) 3325-1131',1360.00,2),(31,'Vila Central','','19800-081','Assis',NULL,'049.327.148-15','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com','Rua Amador Bueno','SP','MARIA REGINA MENDES SANFELICE - 049.327.148-15','25879020000000031','150',1,'pago','(18) 3325-1131',720.00,2),(32,'Centro','','19814-904','Assis',NULL,'036.845.558-00','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com.br','Rua Smith Vasconcelos Apto 52','SP','MARIO MIGUEL RISSO - 036.845.558-00','25879020000000032','327',1,'pago','(18) 3325-1131',720.00,2),(33,'Vila Tenis Clube','','19806-182','Assis',NULL,'274.688.788-62','2015-12-07','07/12/2015',NULL,NULL,'2015-12-17','17/12/2015','cmenina@femanet.com.br','Rua Joao Ramalho ','SP','MATHEUS TIROLLI RETT - 274.688.788-62','25879020000000033','1102',0,'no-pago','(18) 3325-1131',600.00,2),(34,'Centro','','19815-001','Assis',NULL,'246.610.638-80','2015-12-08','08/12/2015',NULL,NULL,'2015-12-18','18/12/2015','cmenina@femanet.com.br','Rua Rui Barbosa','SP','MONICA TUCUNDUVA  SPERA MANFIO - 246.610.638-80','25879020000000034','3003',1,'pago','(18) 3325-1131',1160.00,2),(35,'Centro','','19815-001','Assis',NULL,'246.610.638-80','2015-12-08','08/12/2015',NULL,NULL,'2015-12-18','18/12/2015','cmenina@femanet.com.br','Rua Rui Barbosa','SP','MONICA TUCUNDUVA  SPERA MANFIO - 246.610.638-80','25879020000000035','3003',1,'pago','(18) 3325-1131',2600.00,2),(36,'Centro ','','19815-001','Assis ',NULL,'110.790.048-40','2015-12-08','08/12/2015',NULL,NULL,'2015-12-18','18/12/2015','cmenina@femanet.com.br','Rua Duque de caxias ','SP','RENATA MARIA REGAZZINO MATIOLI OLIVEIRA -110.790.048-40','25879020000000036','350',0,'no-pago','(18) 3325-1131',1160.00,2),(37,'Vila Madalena ','','19800-310','Sao Paulo ',NULL,'222.572.018-50','2015-12-08','08/12/2015',NULL,NULL,'2015-12-18','18/12/2015','cmenina@femanet.com.br','Rua Engenheiro Mario Pamponet ','SP','RICARDO TUCUNDUVA NARDON -222.572.018-50','25879020000000037','362',1,'pago','(18) 3325-1131',2000.00,2),(38,'Vila Madalena ','','19800-310','Sao Paulo ',NULL,'027.812.048-20','2015-12-08','08/12/2015',NULL,NULL,'2015-12-18','18/12/2015','cmenina@femanet.com.br','Rua Smith Vascocelos Apt 101','SP','ROMUALDO TIROLI - 027.812.048-20','25879020000000038','602',1,'pago','(18) 3325-1131',1400.00,2),(39,'Vila Roddrigues','','19806-150','Candido Mota ',NULL,'029.525.488-20','2015-12-08','08/12/2015',NULL,NULL,'2015-12-18','18/12/2015','cmenina@femanet.com.br','Rua Candido Mota Apt 101','SP','SOFIA TEREZINHA C. SANFELICE ','25879020000000039','1070',1,'pago','(18) 3325-1131',720.00,2),(40,'San Fernando do Valley','','19800-370','Assis',NULL,'005.082.411-20','2015-12-08','08/12/2015',NULL,NULL,'2015-12-18','18/12/2015','cmenina@femanet.com.br','Rua Jose Leao Pimentel ','SP','UBIRAJARA BERTOLUCCI - 005.082.411-20','25879020000000040','67',1,'pago','(18) 3325-1131',720.00,2),(41,'CENTRO','','19814-010','ASSIS',NULL,'035.712.358-19','2015-12-09','09/12/2015',NULL,NULL,'2015-12-19','19/12/2015','bermejos@bermejos.com.br','RUA SMITH DE VASCONCELOS','SP','LUIZA ANGELA TONDATO ANTUNES DIAS','25879020000000041','834',1,'pago','(18) 3322-2999',2000.00,14),(42,'CENTRO','','19815-001','Assis',NULL,'110.790.048-40','2015-12-09','09/12/2015',NULL,NULL,'2015-12-19','19/12/2015','cmenina@femanet.com.br','Rua Duque de Caxias ','SP','RENATA MARIA REGAZINI MATIOLI OLIVEIRA -110.790.048-40','25879020000000042','350',1,'pago','(18) 3325-1131',1160.00,2),(43,'Vila Tenis Clube ','','19815-001','Assis',NULL,'274.688.788-62','2015-12-09','09/12/2015',NULL,NULL,'2015-12-19','19/12/2015','cmenina@femanet.com.br','Rua Joao Ramalho ','SP','MATHEUS TIROLLI RETT  - 274.688.788-62','25879020000000043','1102',1,'pago','(18) 3325-1131',800.00,2),(44,'Centro','','19814-340','Assis',NULL,'010.525.439-87','2015-12-09','09/12/2015',NULL,NULL,'2015-12-19','19/12/2015','cmenina@femanet.com.br','RUA XV de Novembro ','SP','JOSE JERONIMO NETO - 010.525.439-87','25879020000000044','26',1,'pago','(18) 3325-1131',400.00,2),(45,'Jardim Europa','','19814-640','Assis',NULL,'249.340.548-04','2015-12-09','09/12/2015',NULL,NULL,'2015-12-19','19/12/2015','cmenina@femanet.com.br','Rua Joao Cabianca','SP','ROMEU FERNANDES NARDON - 249.340.548-04','25879020000000045','155',1,'pago','(18) 3325-1131',1700.00,2),(46,'Centro','','19814-904','Assis',NULL,'036.845.558-00','2015-12-09','09/12/2015',NULL,NULL,'2015-12-19','19/12/2015','cmenina@femanet.com.br','Rua Smith Vasconcelos Apt 52 ','SP','MARIO MIGUEL RISSO - 036.845.558-00','25879020000000046','327',1,'pago','(18) 3325-1131',400.00,2),(47,'Vila Central','','19806-190','Assis',NULL,'050.388.718-87','2015-12-09','09/12/2015',NULL,NULL,'2015-12-19','19/12/2015','nilsecarpentieri@msn.com','Rua Amador Bueno','SP','Nilse Margarida Carpentieri','25879020000000047','100',1,'pago','(18) 3325-1503',1200.00,5),(48,'Centro','','19880-000','Assis',NULL,'074.789.098-68','2015-12-09','09/12/2015',NULL,NULL,'2015-12-19','19/12/2015','mmpnascimento@adv.oabsp.org.br','Rua Prudente de Moraes','SP','Manoel Pereira do Nascimento','25879020000000048','111',1,'pago','(18) 3322-3453',300.00,5),(49,'Centro','(18) 99775-3377','19802-150','Assis',NULL,'088.314.418-25','2015-12-09','09/12/2015',NULL,NULL,'2015-12-19','19/12/2015','khenaifes@uol.com.br','Rua Fagundes Varela','SP','Edson Khenaifes','25879020000000049','897',0,'no-pago','(18) 3322-2880',500.00,5),(50,'Jardim Europa','','19815-160','Assis',NULL,'079.016.288-12','2015-12-11','11/12/2015',NULL,NULL,'2015-12-21','21/12/2015','oraalevato@hotmail.com','Rua Hermogenes Laurindo Souza','SP','Horacina Alevato Rodrigues','25879020000000050','170',1,'pago','(18) 3322-2890',500.00,5),(51,'Vila Enbenezer','','19807-170','Assis',NULL,'341.394.468-11','2015-12-11','11/12/2015',NULL,NULL,'2015-12-21','21/12/2015','cmenina@femanet.com.br','Rua Amador Bueno ','SP','JANAYNA APARECIDA MARTINES - 341.394.468-11','25879020000000051','1320',1,'pago','(18) 3325-1131',1050.00,2),(52,'JD Parana ','','19807-340','Assis',NULL,'248.556.358-63','2015-12-14','14/12/2015',NULL,NULL,'2015-12-24','24/12/2015','cmenina@femanet.com.br','Rua Paranapanema ','SP','ELIANA TIEMI ITO - 248.556.358-63','25879020000000052','366',1,'pago','1833251131',1960.00,2),(53,'Centro','','19800-081','Assis',NULL,'201.770.628-00','2015-12-14','14/12/2015',NULL,NULL,'2015-12-24','24/12/2015','cmenina@femanet.com.br','Rua Osvaldo Cruz ','SP','Maria Aparecida Moreli Teixeira - 201.770.628-00','25879020000000053','619',1,'pago','1833251131',2360.00,2),(54,'VILA GLÃ?RIA','','19807-010','ASSIS',NULL,'028.507.868-29','2015-12-18','18/12/2015',NULL,NULL,'2015-12-28','28/12/2015','zelia@assis.unesp.br','RUA DOUTOR SOUZA COSTA','SP','ZELIA MARIA DE SOUZA BARROS','25879020000000054','202',1,'pago','(18) 3323-1254',200.00,1),(55,'x','(33) 33333333','87185-000','x',NULL,'577.915.709-04','2015-12-18','18/12/2015',NULL,NULL,'2015-12-28','28/12/2015','xxxxxxxxxxxx@xxxx.com.br','Rua x','PR','JosÃ© Aparecido Pimentel','25879020000000055','x',0,'no-pago','(44) 3333-3333',20.00,5),(56,'Vila Santo AntÃ´nio','(18) 99621-1047','19800160','ASSIS',NULL,'558.815.218-20','2015-12-20','20/12/2015',NULL,NULL,'2015-12-30','30/12/2015','beneditoantunes@uol.com.br','R QUINZE DE NOVEMBRO','SP','Benedito Antunes','25879020000000056','745',1,'pago','(18) 3325-1125',500.00,1),(57,'Centro ','','01013-020','Assis',NULL,'002.842.548-00','2015-12-21','21/12/2015',NULL,NULL,'2015-12-31','31/12/2015','cmenina@femanet.com','Rua Tesouro  11 Andar ','SP','ANTONIO CHIQUETO PICOLO - 002.842.548-00','25879020000000057','47',1,'pago','(18) 3325-1131',1000.00,2),(58,'Centro ','','01013-020','Assis',NULL,'211.066.228-04','2015-12-21','21/12/2015',NULL,NULL,'2015-12-31','31/12/2015','cmenina@femanet.com','Rua Tesouro  11 Andar ','SP','MARIA NAZARETH TREVELIN PICOLO','25879020000000058','47',1,'pago','(18) 3325-1131',1010.00,2),(60,'CENTRO','','19814-421','Assis',NULL,'383.906.470-87','2015-12-21','21/12/2015',NULL,NULL,'2015-12-31','31/12/2015','JUAROSI@UOL.COM.BR','RUA ALMIRANTE BARROSO','SP','JUAREZ DE PAULA','25879020000000060','1120',1,'pago','(18) 3322-8356',3300.00,17),(61,'Jardim Paulista','(18) 99705-4171','19815-065','Assis',NULL,'013.152.948-00','2015-12-21','21/12/2015',NULL,NULL,'2015-12-31','31/12/2015','vigilatocheles@hotmail.com','Rua Jose de Camargo','SP','Jose Vigilato Ruiz Cheles','25879020000000061','437',1,'pago','(18) 3321-1678',4000.00,5),(62,'Centro','','19800-230','Assis',NULL,'047.530.028-96','2015-12-21','21/12/2015',NULL,NULL,'2015-12-31','31/12/2015','casadacrianca@femanet.com.br','Rua Palmares','SP','Carlos Henrique Areas GonÃ§alves','25879020000000062','561',1,'pago','(18) 3322-3899',2000.00,17),(63,'DISTR INDUSTRIAL','','19880-000','CANDIDO MOTA','46.842.894/0001-68',NULL,'2015-12-22','22/12/2015',NULL,NULL,'2016-01-01','01/01/2016','ariovaldo.vizioli@contini.com.br','AV MARIA PAGOTTI CONTE','SP','CASA DI CONTI LTDA','25879020000000063','888',1,'pago','(18) 3341-9044',8000.00,14),(64,'Centro','(18) 99775-3377','19802-150','Assis',NULL,'088.314.418-25','2015-12-22','22/12/2015',NULL,NULL,'2016-01-01','01/01/2016','khenaifes@uol.com.br','Rua Fagundes Varela','SP','Edson Khenaifes','25879020000000064','897',0,'no-pago','(18) 3322-2880',500.00,5),(65,'jd  europa','(18) 99791-7539','19814-580','Assis',NULL,'080.927.101-04','2015-12-22','22/12/2015',NULL,NULL,'2016-01-01','01/01/2016','silvio.15@hotmail.com','rua antonio moreli ','SP','silvio roberto de freitas','25879020000000065','28l',1,'pago','(18) 3324-5629',1400.00,1),(66,'CENTRO','(18) 99799-2699','19806-130','ASSIS',NULL,'798.406.398-20','2015-12-23','23/12/2015',NULL,NULL,'2016-01-02','02/01/2016','wmaax@hotmail.com','R BENJAMIN CONSTANT','SP','LUIZ FERNANDO MOLINA MAX','25879020000000066','33',1,'pago','(18) 3321-1679',150.00,1),(67,'CENTRO','(18) 99799-2699','19806-130','ASSIS',NULL,'016.409.198-05','2015-12-23','23/12/2015',NULL,NULL,'2016-01-02','02/01/2016','wmaax@hotmail.com','R BENJAMIN CONSTANT','SP','JOSÃ? CARLOS MOLINA MAX','25879020000000067','33',1,'pago','1833211679',150.00,1),(68,'CENTRO','(18) 99799-2699','19806-130','ASSIS',NULL,'075.096.128-70','2015-12-23','23/12/2015',NULL,NULL,'2016-01-02','02/01/2016','wmaax@hotmail.com','R BENJAMIN CONSTANT','SP','WALDYR MAX JR','25879020000000068','33',1,'pago','1833211679',150.00,1),(69,'CENTRO','(18) 99799-2699','19806-130','ASSIS',NULL,'540.617.256-53','2015-12-23','23/12/2015',NULL,NULL,'2016-01-02','02/01/2016','wmaax@hotmail.com','R BENJAMIN CONSTANT','SP','ARMANDO MAURICIO MAX','25879020000000069','33',1,'pago','1833211679',150.00,1),(70,'Centro','','19800-000','Assis','02.559.369/0001-64',NULL,'2015-12-28','28/12/2015',NULL,NULL,'2016-01-07','07/01/2016','afscecilia@hotmail.com','Av. Marechal Deodoro ','SP','Center Foto de Assis Ltda ME','25879020000000070','244',1,'pago','(18) 3322-6959',500.00,1),(71,'Jardim Alvorada','','19800-000','Assis',NULL,'062.058.628-16','2015-12-28','28/12/2015',NULL,NULL,'2016-01-07','07/01/2016','afscecilia@hotmail.com','Rua Deolindo Menk Plens','SP','Eduardo Henrique Amancio de Souza','25879020000000071','530',1,'pago','1833226959',360.00,1),(72,'Centro','','19800-230','Assis',NULL,'047.530.028-96','2015-12-28','28/12/2015',NULL,NULL,'2016-01-07','07/01/2016','casadacrianca@femanet.com.br','Rua Palmares','SP','Carlos Henrique Areas GonÃ§alves','25879020000000072','561',0,'no-pago','(18) 3322-3899',2500.00,17),(73,'Jardim Alvorada','','19807-600','Assis',NULL,'054.551.948-95','2015-12-28','28/12/2015',NULL,NULL,'2016-01-07','07/01/2016','afscecilia@hotmail.com','Rua Deolindo Menk Plens','SP','Jose Carlos Belinotte','25879020000000073','530',1,'pago','(18) 3322-6959',550.00,1),(74,'Centro','','19800-000','Assis',NULL,'074.789.098-68','2015-12-28','28/12/2015',NULL,NULL,'2016-01-07','07/01/2016','afscecilia@hotmail.com','Rua Brasil ','SP','Manoel Pereira do Nascimento','25879020000000074','314',1,'pago','(18) 3324-6000',150.00,1),(75,'Santa Cecilia','','19800-000','Assis',NULL,'082.584.418-50','2015-12-28','28/12/2015',NULL,NULL,'2016-01-07','07/01/2016','afscecilia@hotmail.com','Rua Hermes Rodrigues da Fonseca','SP','Maria Elvira S Lopes Maldaner','25879020000000075','737',1,'pago','(18) 3322-5677',240.00,1),(76,'Jardim Alvorada','','19807-600','Assis',NULL,'015.184.048-20','2015-12-28','28/12/2015',NULL,NULL,'2016-01-07','07/01/2016','afscecilia@hotmail.com','Rua Deolindo Menk Plens','SP','Mercedes dos Santos Rosa','25879020000000076','530',1,'pago','(18) 3322-7548',360.00,1),(77,'VILA OURO VERDE','(18) 99776-2272','19816-030','ASSIS',NULL,'048.936.348-28','2015-12-28','28/12/2015',NULL,NULL,'2016-01-07','07/01/2016','alvaroanelli@caixa.gov.br','RUA CAPITAO ASSIS','SP','ALVARO ANELLI AFONSO','25879020000000077','1917',1,'pago','(18) 3323-3915',800.00,5),(78,'Vl Mariana','(11) 99113-8822','04019-000','Sao Paulo',NULL,'130.836.298-69','2015-12-29','29/12/2015',NULL,NULL,'2016-01-08','08/01/2016','arpipolo@yahoo.com.br','Rua Dr Mario Cardim','SP','Alexandre Rizzo Pipolo','25879020000000078','575',1,'pago','(11) 9113-8822',2000.00,10),(79,'Jardim Europa','','19815-200','Assis',NULL,'333.372.338-72','2015-12-29','29/12/2015',NULL,NULL,'2016-01-08','08/01/2016','carlospimentas@hotmail.com','Rua Romerio de Abreu Pinto','SP','Carlos Pimenta de Souza','25879020000000079','148',1,'pago','(18) 3323-1401',670.00,18),(80,'Centro','(18) 98137-5987','19880000','Candido Mota',NULL,'078.895.238-23','2015-12-29','29/12/2015',NULL,NULL,'2016-01-08','08/01/2016','begosso@femanet.com.br','Rua Fadlo Jabur','SP','Luiz Ricardo Begosso','25879020000000080','328',1,'pago','(18) 3341-3117',2500.00,1),(81,'JARDIM AMERICA','','01416-001','SÃ?Â?O PAULO','43.619.832/0001-01',NULL,'2015-12-30','30/12/2015',NULL,NULL,'2016-01-09','09/01/2016','ITALOFRATINI@BRANCOPERES.COM.BR','RUA DA CONSOLAÃ?Â?Ã?Â?O','SP','BRANCO PERES AÃ?Â?Ã?Â?CAR E Ã?Â?LCOOL S/A','25879020000000081','3741',1,'pago','(11) 3065-7100',4000.00,10),(82,'CENTRO','(18) 99723-6131','19814-330','ASSIS',NULL,'266.376.508-20','2015-12-30','30/12/2015',NULL,NULL,'2016-01-09','09/01/2016','bragaroli@uol.com.br','RUA ANGELO BERTONCINI','SP','EMERSOM BRAGAROLI','25879020000000082','162',1,'pago','1833246464',2000.00,16),(83,'CENTRO','(18) 99143-7286','19800-021','SP',NULL,'924.392.508-30','2015-12-30','30/12/2015',NULL,NULL,'2016-01-09','09/01/2016','ricardo@bermejos.com.br','AVENIDA NOVE DE JULHO ','SP','RICARDO DE MAIO BERMEJO','25879020000000083','793',1,'pago','1833222999',100.00,14),(84,'Jardim Europa','','19814-630','Assis',NULL,'083.705.168-15','2016-03-10','10/03/2016',NULL,NULL,'2016-03-20','20/03/2016','casadacrianca@femanet.com.br','Rua Carlos Bompani','SP','Sylvio  Rosa de Almeida','25879020000000084','324',0,'no-pago','(18) 3321-3090',500.00,17),(85,'CENTRO','(11) 98125-4757','1048100','SAO PAULO',NULL,'085.301.568-62','2016-04-29','29/04/2016',NULL,NULL,'2016-05-09','09/05/2016','hsmimoveis@gmail.com','RUA CORONEL XAVIER DE TOLEDO, 71 APT 110','SP','HELCIO SA MARQUES','25879020000000085','71',0,'no-pago','(11) 3258-2343',20.00,16),(86,'Vale do Pedregal','','72860777',' Novo Gama',NULL,'79848834400','2016-05-24','24/05/2016',NULL,NULL,'2016-06-03','03/06/2016','beneiltonsouza.com@gmail.com','Quadra 27 Lote','Go','Beneilton Brasilino de Souza','25879020000000086','01',0,'no-pago','6136281025',20.00,22),(87,'Centro','(18) 99621-2241','19806-160','Assis',NULL,'074.789.098-68','2016-06-06','06/06/2016',NULL,NULL,'2016-06-16','16/06/2016','mmpnascimento@adv.oabsp.org.br','Rua Prudente de Moraes','SP','Manoel Pereira do Nascimento','25879020000000087','111',0,'no-pago','(18) 3322-3453',300.00,5),(88,'Jardim Europa','','19814-630','Assis',NULL,'083.705.168-15','2016-06-15','15/06/2016',NULL,NULL,'2016-06-25','25/06/2016','casadacrianca@femanet.com.br','Rua Carlos Bompani','SP','Sylvio  Rosa de Almeida','25879020000000088','324',0,'no-pago','(18) 3321-3090',500.00,17),(89,'Conjunto Residencial Jose Bonifacio ','(11) 99943-1378','08255050','Sao Paulo',NULL,'228.197.448-00','2016-06-27','27/06/2016',NULL,NULL,'2016-07-07','07/07/2016','marcelo_xp@outlook.com.br','Rua Agostino Alegro','SP','MARCELO GOMES','25879020000000089','138',0,'no-pago','(11) 2521-3030',30.00,5),(90,'Conjunto Residencial JosÃ© BonifÃ¡cio ','(11) 99943-1378','08255050','SÃ£o Paulo',NULL,'228.197.448-00','2016-07-18','18/07/2016',NULL,NULL,'2016-07-28','28/07/2016','marcelo_xp@outlook.com.br','Rua Agostino Alegro','SP','MARCELO GOMES','25879020000000090','138',0,'no-pago','1125213030',30.00,5),(91,'vila operaria','(14) 64415-2051','62451-245','assis',NULL,'542.145.452-15','2016-08-10','10/08/2016',NULL,NULL,'2016-08-20','20/08/2016','abodufafj@hotmail.com','osvaldo prata','SP','Teste Abilio','25879020000000091','62',0,'no-pago','(54) 0540-5421',20.00,1),(92,'Conjunto Residencial JosÃ© BonifÃ¡cio ','(11) 99943-1378','08255050','SÃ£o Paulo',NULL,'228.197.448-00','2016-08-10','10/08/2016',NULL,NULL,'2016-08-20','20/08/2016','marcelo_xp@outlook.com.br','Rua Agostino Alegro','SP','MARCELO GOMES','25879020000000092','138',0,'no-pago','1125213030',30.00,5),(93,'sdvasdf','(32) 165489','15618-512','ASD',NULL,'339.442.858-08','2016-09-01','01/09/2016',NULL,NULL,'2016-09-11','11/09/2016','epiphanio@bb.com.br','asda','AC','Daniel Epiphanio Pereira','25879020000000093','asda',0,'no-pago','(32) 1231',30.00,1),(94,'Conjunto Residencial JosÃ© BonifÃ¡cio ','(11) 99943-1378','08255050','SÃ£o Paulo',NULL,'228.197.448-00','2016-09-06','06/09/2016',NULL,NULL,'2016-09-16','16/09/2016','marcelo_xp@outlook.com.br','Rua Agostino Alegro','SP','MARCELO GOMES','25879020000000094','138',0,'no-pago','1125213030',30.00,5),(95,'Jardim Europa','','19814-630','Assis',NULL,'083.705.168-15','2016-09-15','15/09/2016',NULL,NULL,'2016-09-25','25/09/2016','casadacrianca@femanet.com.br','Rua Carlos Bompani','SP','Sylvio  Rosa de Almeida','25879020000000095','324',0,'no-pago','1833213090',500.00,17);
/*!40000 ALTER TABLE `Boleto` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Deposito`
--

DROP TABLE IF EXISTS `Deposito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Deposito` (
  `codigoDeposito` int(11) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(100) DEFAULT NULL,
  `celular` varchar(15) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `cidade` varchar(100) DEFAULT NULL,
  `cnpj` varchar(18) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `dataString` varchar(255) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  `estado` varchar(2) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `numero` varchar(5) DEFAULT NULL,
  `numeroComprovante` varchar(20) DEFAULT NULL,
  `telefone` varchar(14) DEFAULT NULL,
  `valor` decimal(19,2) DEFAULT NULL,
  `codigoEntidade` int(11) DEFAULT NULL,
  `dataDesposito` date DEFAULT NULL,
  `situacao` varchar(255) DEFAULT NULL,
  `valorDeposito` decimal(19,2) DEFAULT NULL,
  PRIMARY KEY (`codigoDeposito`),
  KEY `FK3C1621B19F66D09B` (`codigoEntidade`),
  CONSTRAINT `FK3C1621B19F66D09B` FOREIGN KEY (`codigoEntidade`) REFERENCES `Entidade` (`codigoEntidade`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Deposito`
--

LOCK TABLES `Deposito` WRITE;
/*!40000 ALTER TABLE `Deposito` DISABLE KEYS */;
INSERT INTO `Deposito` VALUES (1,'CENTRO','(18) 99723-6131','19814-330','ASSIS',NULL,'266.376.508-20','2013-12-20','20/12/2013','bragaroli@uol.com.br','RUA ANGELO BERTONCINI','SP','EMERSOM BRAGAROLI','162','1730214218','1833225222',1200.00,16,NULL,NULL,NULL),(2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `Deposito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Entidade`
--

DROP TABLE IF EXISTS `Entidade`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Entidade` (
  `codigoEntidade` int(11) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(255) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `cnpj` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `nomeFantasia` varchar(200) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `valorBoleto` decimal(19,2) DEFAULT NULL,
  PRIMARY KEY (`codigoEntidade`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Entidade`
--

LOCK TABLES `Entidade` WRITE;
/*!40000 ALTER TABLE `Entidade` DISABLE KEYS */;
INSERT INTO `Entidade` VALUES (1,'Centro','','07.109.356/0001-07','cmdcaassis@gmail.com','Rua Candido Mota','CMDCA - Conselho Municipal dos Direitos da Crianca e do Adolescente de Assis','48',1,'',NULL),(2,'Centro','(18) 99657-1531','44.487.247/0001-50','cmenina@femanet.com.br','Rua Dr Luiz Pizza','Casa da Menina Sao Francisco de Assis','165',1,'(18) 3323-3242',NULL),(3,'Jardim Parana','','45.978.236/0001-35','projovem.assis@hotmail.com','Rua Curitiba','Comunidade Kolping de Santa Cecilia','84',1,'(18) 3322-2091',NULL),(5,'Jardim Paulista','','44.373.991/0001-23 ','apaeassis@bol.com.br','Rua Angelo Robazi de Andrade','APAE - Associacao de Pais e Amigos dos Excepcionais de Assis','321',1,'(18) 3322-2880',NULL),(7,'Vila Operaria','(18) 99715-1124','54.703.574/0001-55','aloisiobellini@hotmail.com','Rua Espirito Santo','CAPSA - Circulo dos Amigos dos Pobres do Pao de Santo Antonio','134',0,'(18) 3321-5821',NULL),(8,'Vila Xavier','','44.484.756/0001-29','nossolar2012@hotmail.com','Praca Nicolau Carpintieri','Associacao Filantropica Nosso Lar','50',1,'(18) 3322-3797',NULL),(10,'Agua do Cervo','','68.165.273/0001-20','broto-verde@femanet.com.br','Avenida Getulio Vargas','Projeto Broto Verde Flora Vale','s/n',1,'(18) 3323-6211',NULL),(13,'Vila Irma Catarina','','44.484.756/0001-29','serfilantropica@yahoo.com.br','Felix de Castro ','SER - Servico Especial de Reabilitacao','871',1,'(18) 3322-3602',NULL),(14,'Centro','','44.484.780/0001-68','contato@projetosim.org.br','Capitao Assis','SIM - Associacao Beneficente de Assis ','506',1,'(18) 3322-2477',NULL),(16,'Centro','','03.586.496/0001-15','ffuturo_plm@hotmail.com','Rua Joao Pessoa ','Fundacao Futuro - Legiao Mirim','50 B',1,'(18) 3321-3922',NULL),(17,'Jardim Alvorada','','44.365.328/0001-87','casadacrianca@femanet.com.br','Av. Getulio Vargas','Casa da Crianca Dom Antonio Jose dos Santos','1700',1,'(18) 3221-3090',NULL),(18,'Santa Cecilia','','15.523.000/0001-43','aspat.assis@gmail.com','Rua Piratiniga','Associacao de Pais e Amigos Para Apoio ao Talento','566',1,'(18) 3321-4162',NULL),(19,'Jardim Aeroporto','(18) 98202-0001','17.237.002/0001-00','projeto@projetorenovo.org','Durvalino Binato ','Projeto Renovo','275',1,'(18) 3322-7779',NULL),(21,'',NULL,NULL,NULL,NULL,'Concurso Conselho Tutelar',NULL,0,NULL,40.00),(22,'Jd Parana','','44.484.756/0001-29','redecirandaassis@gmail.com','Rua Curitiba','Projeto Rede Ciranda da Crianca e do Adolescente de Assis','37',1,'(18) 3323-1765',NULL);
/*!40000 ALTER TABLE `Entidade` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `Usuario` (
  `codigoUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `senha` varchar(100) DEFAULT NULL,
  `celular` varchar(255) DEFAULT NULL,
  `cpf` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `nome` varchar(200) DEFAULT NULL,
  `perfil` tinyint(1) DEFAULT NULL,
  `situacao` tinyint(1) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `usuario` varchar(25) DEFAULT NULL,
  `entidade_codigoEntidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`codigoUsuario`),
  KEY `FK5B4D8B0E14472F9E` (`entidade_codigoEntidade`),
  CONSTRAINT `FK5B4D8B0E14472F9E` FOREIGN KEY (`entidade_codigoEntidade`) REFERENCES `Entidade` (`codigoEntidade`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'redeciranda','(18) 3329-1765','111.111.111-11','redecirandaassis@gmail.com','Rede Ciranda da Criança e do Adolescente',2,1,'(18) 3323-1765','redeciranda',NULL),(6,'mirim99','(18) 99745-3563','373.603.568-30','rh.fundacaofuturo@hotmail.com','Igor Coutinho Prado',0,1,'(18) 3321-3922','igor',16),(7,'menina123','(18) 99635-9440','601.503.788-15','analimalimo@hotmail.com','Ana Longo de Lima',0,1,'(18) 3322-7630','ana',2),(8,'projetoser','','277.830.909-82','serfilantropica@yahoo.com.br','Marlene Zandonadi Ciciliato',0,1,'(18) 3322-3602','marlene',13),(9,'boneca1956','(18) 99715-1124','034.697.598-04','dilmacgarcia@hotmail.com','Dilma Conceicao Garcia China',0,1,'(18) 3321-5821','dilma',7),(10,'bolsaescola','','138.245.648-40','mariciaalves@yahoo.com.br','Maria Marcia Alves de Oliveira ',0,1,'(18) 3321-3090','marcia',17),(11,'sim123','(18) 99733-9747','131.954.608-07','claudiacostaedias@hotmail.com','Claudia Regina da Costa e Dias',0,1,'(18) 3322-2477','claudia',14),(12,'broto2013','(18) 99789-1123','189.273.228-94','projetobrotoverde@gmail.com','Viviane Soares Ramos',0,1,'(18) 3323-6211','viviane',10),(14,'101086','(18) 99678-4822','229.172.598-09','vancassia08@gmail.com','Vanessa de Cassia Leme',0,1,'','vanessa',5),(15,'210289','(18) 99714-3569','354.811.178-51','apaeassis@bol.com.br','Ana Carolina Joaquim Favoni',0,1,'(18) 3322-6795','carol',5),(18,'lima8179','(18) 97415596','276.773.188-51','marcel@webmanagers.net.br','Marcel Cardoso',0,1,'1833231920','marcel',19),(19,'cmdca','(18) 98114-7130','036.336.538-99','heloisahrogone@uol.com.br','Heloisa Maria Heradao Rogone',1,1,'(18) 3326-1765','Heloisa',1),(20,'menina123','(18) 99603-0186','359.805.398-32','cmenina@femanet.com.br','Claudia Aparecida de Souza',0,1,'1833251131','claudiasouza',2);
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-09-19 10:59:29

update Usuario set senha = '$2y$10$bG4iukBpCVprVT58uacVNucoDcl/JxeXWtBwtxr9XoXrb7H7ySZ8u';

update Boleto set situacaoString='não-pago' where situacaoString != 'pago';