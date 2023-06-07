
CREATE DATABASE IF NOT EXISTS `bdbiblio` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `bdbiblio`;

-- Volcando estructura para tabla bdbiblio.administativos
CREATE TABLE IF NOT EXISTS `administativos` (
  `IdAdmin` int unsigned NOT NULL AUTO_INCREMENT,
  `NoTrabjador` int unsigned NOT NULL DEFAULT '0',
  `Nombres` varchar(50) NOT NULL DEFAULT '0',
  `Ape_Paterno` varchar(50) NOT NULL DEFAULT '0',
  `Ape_Materno` varchar(50) NOT NULL DEFAULT '0',
  `Dependencia` varchar(50) NOT NULL DEFAULT '0',
  `PassAdmin` varchar(50) NOT NULL DEFAULT '0',
  `Date` timestamp(6) NOT NULL,
  PRIMARY KEY (`IdAdmin`,`NoTrabjador`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bdbiblio.alumnos
CREATE TABLE IF NOT EXISTS `alumnos` (
  `IdAlum` int unsigned NOT NULL AUTO_INCREMENT,
  `NoControl` int unsigned NOT NULL DEFAULT '0',
  `Pass` varchar(50) NOT NULL DEFAULT '0',
  `Nombres` varchar(50) NOT NULL DEFAULT '0',
  `Ape_Paterno` varchar(50) NOT NULL DEFAULT '0',
  `Ape_Materno` varchar(50) NOT NULL DEFAULT '0',
  `DateTime` datetime NOT NULL,
  PRIMARY KEY (`IdAlum`,`NoControl`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bdbiblio.categorias
CREATE TABLE IF NOT EXISTS `categorias` (
  `Ingieneria` varchar(50) NOT NULL,
  `Derecho` varchar(50) NOT NULL,
  `Español` varchar(50) NOT NULL,
  `Historia` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Literatura` varchar(50) NOT NULL,
  `Matematicas` varchar(50) NOT NULL,
  `Inegi` varchar(50) NOT NULL,
  `Ciencias` varchar(50) NOT NULL,
  `Tecnologias` varchar(50) NOT NULL,
  `Admin` varchar(50) NOT NULL,
  `Mantenimiento` varchar(50) NOT NULL,
  `Logistica` varchar(50) NOT NULL,
  `Ecologia` varchar(50) NOT NULL,
  `Usogeneral` varchar(50) NOT NULL,
  `Gastronomia` varchar(50) NOT NULL,
  `Quimica` varchar(50) NOT NULL,
  `Tesinas` varchar(50) NOT NULL,
  `Estadias` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bdbiblio.libros
CREATE TABLE IF NOT EXISTS `libros` (
  `Idlibro` int unsigned NOT NULL AUTO_INCREMENT,
  `NoFolio` varchar(50) NOT NULL DEFAULT '',
  `NombreLibro` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT '',
  `Autor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Editorial` varchar(50) NOT NULL,
  `Copias` int unsigned NOT NULL,
  `Categoria` varchar(50) NOT NULL,
  PRIMARY KEY (`Idlibro`,`NoFolio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci COMMENT='tabla para el control de libros ';

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bdbiblio.memoestadias
CREATE TABLE IF NOT EXISTS `memoestadias` (
  `IdEsta` int unsigned NOT NULL AUTO_INCREMENT,
  `NoFolioEs` int unsigned NOT NULL DEFAULT '0',
  `CarreraE` varchar(50) NOT NULL DEFAULT '0',
  `Titulo` varchar(50) NOT NULL DEFAULT '0',
  `AutorAlumno` varchar(50) NOT NULL DEFAULT '0',
  `Empresa` varchar(50) NOT NULL DEFAULT '0',
  `Generacion` varchar(50) NOT NULL,
  PRIMARY KEY (`IdEsta`,`NoFolioEs`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

-- Volcando estructura para tabla bdbiblio.prestamos
CREATE TABLE IF NOT EXISTS `prestamos` (
  `IdPres` int unsigned NOT NULL AUTO_INCREMENT,
  `Fecha_inicio` timestamp NOT NULL,
  `Fecha_final` timestamp NOT NULL,
  PRIMARY KEY (`IdPres`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- La exportación de datos fue deseleccionada.

