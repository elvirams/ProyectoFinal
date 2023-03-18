-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.10.2-MariaDB-1:10.10.2+maria~ubu2204 - mariadb.org binary distribution
-- SO del servidor:              debian-linux-gnu
-- HeidiSQL Versión:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para database
CREATE DATABASE IF NOT EXISTS `database` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `database`;

-- Volcando estructura para tabla database.Productos
CREATE TABLE IF NOT EXISTS `Productos` (
  `id_producto` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) DEFAULT '0',
  `Precio` float DEFAULT NULL,
  `Descripcion` longtext DEFAULT NULL,
  `FechaLanzamiento` varchar(50) DEFAULT '',
  `Pantalla` varchar(50) DEFAULT '0',
  `Procesador` varchar(50) DEFAULT '0',
  `Ram` char(5) DEFAULT '0',
  `Almacenamiento` varchar(50) DEFAULT '0',
  `Camara` varchar(50) DEFAULT '0',
  `Imagen` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_producto`)
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Productos: ~8 rows (aproximadamente)
INSERT INTO `Productos` (`id_producto`, `Nombre`, `Precio`, `Descripcion`, `FechaLanzamiento`, `Pantalla`, `Procesador`, `Ram`, `Almacenamiento`, `Camara`, `Imagen`) VALUES
	(1, 'Xiaomi Redmi Note 11 Pro 5G ', 237, 'El Xiaomi Redmi Note 11 Pro vio la luz China el tercer cuatrimestre del año 2021, un terminal que entra de lleno en el segmento de la gama media', 'Octubre 2021', 'Amoled', '	Qualcomm Snapdragon 695', '6 GB', '128 GB', '	108 Mpx', 'assets/FotosMoviles/XiaomiRedmiNote11pro5G.jpg'),
	(54, 'Google Pixel 7 Pro', 705, 'Google Pixel 7 Pro, el nuevo terminal de gama alta de la marca Google. Un móvil pensado para todos aquellos usuarios que quieren un terminal innovador con todas las últimas novedades en tecnología.', 'Octubre 2022', 'Oled', 'Google Tensor 2', '12 GB', '128 GB', '50 Mpx', 'assets/FotosMoviles/GooglePixel7Pro.png'),
	(55, 'Nubia Red Magic 8 Pro ', 718, 'El Nubia Red Magic 8 Pro de Nubia es un nuevo dispositivo de gama alta que promete llevar la experiencia de juego al siguiente nivel. Así mismo, se lanzará a finales de 2022 y condiciona el estándar de la industria.', 'Diciembre 2022', 'Amoled', 'Qualcomm Snapdragon 8 Gen2', '12 GB', '256 GB', '50 Mpx ', 'assets/FotosMoviles/NubiaRedMagic8Pro.jpg'),
	(56, 'Samsung Galaxy S23+ ', 859, 'El Samsung Galaxy S23+ es el último teléfono inteligente de la marca coreana Samsung. Esta gama alta comprende también otros modelos de la serie como el Samsung Galaxy S23 Ultra y el Samsung Galaxy S23.', 'Febrero 2023', 'Amoled', 'Qualcomm Snapdragon 8 Gen2', '8 GB', '256 GB', '50 Mpx ', 'assets/FotosMoviles/SamsungGalaxyS23+.jpg '),
	(57, 'Nubia Z50 ', 593, 'El Nubia Z50 es un teléfono inteligente de gama alta de la marca Nubia. El dispositivo se destaca por sus características diseño y pantalla que lo hacen un teléfono muy atractivo tanto para usuarios profesionales como para usuarios domésticos.', 'Diciembre 2022', 'Amoled', 'Qualcomm Snapdragon 8 Gen2', '12 GB', '256 GB', '64 Mpx ', 'assets/FotosMoviles/NubiaZ50.jpg'),
	(58, 'Ulefone Armor 20WT', 289, 'Encontrar el mejor precio para el Ulefone Armor 20WT no es una tarea fácil. Aquí encontrarás donde comprar el Ulefone Armor 20WT en España y latinoamérica al mejor precio. ', 'Marzo 2023', 'LCD IPS', 'MediaTek Helio G99 (MT6789)', '8 GB', '256 GB', '50 Mpx', 'assets/FotosMoviles/UlefoneArmor20WT.jpg'),
	(60, 'Motorola Moto E13 ', 109, 'Encontrar el mejor precio para el Motorola Moto E13 no es una tarea fácil. Aquí encontrarás donde comprar el Motorola Moto E13 en España y latinoamérica al mejor precio.', 'Enero 2023', 'LCD IPS ', 'Unisoc Tiger T606', '2 GB', '32 GB', '13 Mpx ', 'assets/FotosMoviles/MotorolaMotoE13.jpg'),
	(61, 'Doogee V Max', 356, 'El Doogee V Max es el mejor teléfono que Doogee, una marca de dispositivos móviles, ha lanzado al mercado en su gama media. ', 'Febrero 2023', 'LCD IPS ', 'MediaTek Dimensity 1080 ', '8 GB', '256 GB', '108 Mpx', 'assets/FotosMoviles/DoogeeVMax.jpg');

-- Volcando estructura para tabla database.Usuarios
CREATE TABLE IF NOT EXISTS `Usuarios` (
  `Id_usuario` int(11) NOT NULL,
  `NombreUsuario` varchar(50) DEFAULT NULL,
  `Contrasenia` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Volcando datos para la tabla database.Usuarios: ~1 rows (aproximadamente)
INSERT INTO `Usuarios` (`Id_usuario`, `NombreUsuario`, `Contrasenia`) VALUES
	(1, 'Administrador', 'Administrador');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
