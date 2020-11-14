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
