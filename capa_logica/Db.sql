CREATE SCHEMA `examenfinal` DEFAULT CHARACTER SET utf8 ;

CREATE TABLE `examenfinal`.`usuarios` (
  `id_usuario` INT NULL AUTO_INCREMENT,
  `nombre_usuario` VARCHAR(100) NULL,
  `correo_usuario` VARCHAR(100) NULL,
  `pass_usuario` VARCHAR(45) NULL,
  `rol_usuario` INT NULL,
  `estado_usuario` INT NULL,
  PRIMARY KEY (`id_usuario`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;

DROP procedure IF EXISTS `crear_usuario`;

DELIMITER $$
USE `examenfinal`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `crear_usuario`(in nombre varchar(100), in correo varchar(100), in pass varchar(45), in rol int, in estado int)
BEGIN
	insert into usuarios (id_usuario, nombre_usuario, correo_usuario, pass_usuario, rol_usuario, estado_usuario) values(default, nombre, correo, pass, rol, estado); 
END$$

DELIMITER ;

DROP procedure IF EXISTS `mostrar_usuario`;

DELIMITER $$
USE `examenfinal`$$
CREATE PROCEDURE `mostrar_usuario` ()
BEGIN
	select id_usuario, nombre_usuario, correo_usuario, rol_usuario from usuarios where estado_usuario = 1;
END$$

DELIMITER ;