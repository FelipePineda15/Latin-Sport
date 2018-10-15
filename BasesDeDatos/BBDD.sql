CREATE TABLE Administrador(
	ID INT NOT NULL AUTO_INCREMENT,
	Nombre VARCHAR(50),
	Apellido VARCHAR(50),
	Username VARCHAR(50),
	Password VARCHAR(10),
	PRIMARY KEY (ID));

INSERT INTO Administrador (Nombre,Apellido,Username,Password)VALUES('Andrea','Cristancho','ACristancho','12345678');

CREATE TABLE Publicacion(
	ID INT NOT NULL AUTO_INCREMENT,
	Publicacion TEXT(65535),
	PRIMARY KEY (ID));

INSERT INTO Publicacion (Asunto)VALUES('Entrenamiento dia 5 de Agosto a las 7:30 AM, por favor estar puntuales. Gracias');

-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'Usuario'
-- 
-- ---

DROP TABLE IF EXISTS `Usuario`;
		
CREATE TABLE `Usuario` (
  `ID_Usuario` INTEGER AUTO_INCREMENT,
  `Nombre` VARCHAR(50),
  `Apellido` VARCHAR(50),
  `Username` VARCHAR(50),
  `Password` VARCHAR(50),
  PRIMARY KEY (`ID_Usuario`)
);

-- ---
-- Table 'Publicacion'
-- 
-- ---

DROP TABLE IF EXISTS `Publicacion`;
		
CREATE TABLE `Publicacion` (
  `ID_Publicacion` INTEGER AUTO_INCREMENT,
  `Asunto` VARCHAR(255),
  `ID_Usuario` INTEGER(255),
  PRIMARY KEY (`ID_Publicacion`)
);

-- ---
-- Table 'Jugador'
-- 
-- ---

DROP TABLE IF EXISTS `Jugador`;
		
CREATE TABLE `Jugador` (
  `ID` INTEGER AUTO_INCREMENT,
  `Nombres` VARCHAR(60),
  `Apellidos` VARCHAR(60),
  `Documento` VARCHAR(1000),
  `Direccion` VARCHAR(1000),
  `Telefono` INTEGER(15),
  `Celular` INTEGER(15),
  `EPS` VARCHAR(100),
  `ID_Acudiente` INTEGER(255),
  `ID_Usuario` INTEGER(255),
  PRIMARY KEY (`ID`)
);

-- ---
-- Table 'Acudiente'
-- 
-- ---

DROP TABLE IF EXISTS `Acudiente`;
		
CREATE TABLE `Acudiente` (
  `ID_Acudiente` INTEGER AUTO_INCREMENT,
  `Nombres` VARCHAR(60),
  `Apellidos` VARCHAR(60),
  `Documento` INTEGER(100),
  `Telefono` INTEGER(15),
  `Celular` INTEGER(15),
  `ID_Jugador` INTEGER(255),
  PRIMARY KEY (`ID_Acudiente`)
);

-- ---
-- Table 'Contacto'
-- 
-- ---

DROP TABLE IF EXISTS `Contacto`;
		
CREATE TABLE `Contacto` (
  `ID_Contacto` INTEGER AUTO_INCREMENT,
  `Nombre` VARCHAR(60),
  `Apellido` VARCHAR(60),
  `Telefono` INTEGER(15),
  `Celular` INTEGER(15),
  `Email` VARCHAR(100),
  `Asunto` VARCHAR(1000),
  PRIMARY KEY (`ID_Contacto`)
);

-- ---
-- Table 'Foto'
-- 
-- ---

DROP TABLE IF EXISTS `Foto`;
		
CREATE TABLE `Foto` (
  `ID_Foto` INTEGER AUTO_INCREMENT,
  `ID_Publicacion` INTEGER(255),
  `Foto` VARCHAR(50),
  PRIMARY KEY (`ID_Foto`)
);

-- ---
-- Table 'Video'
-- 
-- ---

DROP TABLE IF EXISTS `Video`;
		
CREATE TABLE `Video` (
  `ID_Video` INTEGER AUTO_INCREMENT ,
  `ID_Publicacion` INTEGER(255),
  `Video` VARCHAR(50),
  PRIMARY KEY (`ID_Video`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `Publicacion` ADD FOREIGN KEY (ID_Usuario) REFERENCES `Usuario` (`ID_Usuario`);
ALTER TABLE `Jugador` ADD FOREIGN KEY (ID_Acudiente) REFERENCES `Acudiente` (`ID_Acudiente`);
ALTER TABLE `Jugador` ADD FOREIGN KEY (ID_Usuario) REFERENCES `Usuario` (`ID_Usuario`);
ALTER TABLE `Acudiente` ADD FOREIGN KEY (ID_Jugador) REFERENCES `Jugador` (`ID`);
ALTER TABLE `Administrador` ADD FOREIGN KEY (ID_Usuario) REFERENCES `Usuario` (`ID_Usuario`);
ALTER TABLE `Foto` ADD FOREIGN KEY (ID_Publicacion) REFERENCES `Publicacion` (`ID_Publicacion`);
ALTER TABLE `Video` ADD FOREIGN KEY (ID_Publicacion) REFERENCES `Publicacion` (`ID_Publicacion`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `Usuario` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `Publicacion` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `Jugador` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `Acudiente` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `Administrador` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `Contacto` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `Foto` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `Video` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `Usuario` (`ID_Usuario`,`Nombre`,`Apellido`,`Username`,`Password`) VALUES
-- ('','','','','');
-- INSERT INTO `Publicacion` (`ID_Publicacion`,`Asunto`,`ID_Usuario`) VALUES
-- ('','','');
-- INSERT INTO `Jugador` (`ID`,`Nombres`,`Apellidos`,`Documento`,`Direccion`,`Telefono`,`Celular`,`EPS`,`ID_Acudiente`,`ID_Usuario`) VALUES
-- ('','','','','','','','','','');
-- INSERT INTO `Acudiente` (`ID_Acudiente`,`Nombres`,`Apellidos`,`Documento`,`Telefono`,`Celular`,`ID_Jugador`) VALUES
-- ('','','','','','','');
-- INSERT INTO `Administrador` (`ID_Administrador`,`Nombres`,`Apellidos`,`ID_Usuario`) VALUES
-- ('','','','');
-- INSERT INTO `Contacto` (`ID`,`Nombre`,`Apellido`,`Telefono`,`Celular`,`Email`,`Asunto`) VALUES
-- ('','','','','','','');
-- INSERT INTO `Foto` (`ID`,`ID_Publicacion`,`Foto`) VALUES
-- ('','','');
-- INSERT INTO `Video` (`ID`,`ID_Publicacion`,`Video`) VALUES
-- ('','','');