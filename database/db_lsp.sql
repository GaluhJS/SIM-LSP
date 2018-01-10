-- MySQL Script generated by MySQL Workbench
-- Wed Jan 10 06:09:03 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema db_lsp
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_lsp
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_lsp` DEFAULT CHARACTER SET utf8 ;
USE `db_lsp` ;

-- -----------------------------------------------------
-- Table `db_lsp`.`apl01`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_lsp`.`apl01` (
  `id_apl01` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(45) NULL,
  `tempat_lahir` VARCHAR(45) NULL,
  `tgl_lahir` DATE NULL,
  `jk` VARCHAR(45) NULL,
  `kebangsaan` VARCHAR(45) NULL,
  `alamat` TEXT NULL,
  `kd_pos` VARCHAR(45) NULL,
  `tlp_rumah` VARCHAR(45) NULL,
  `tlp_hp` VARCHAR(45) NULL,
  `tlp_kantor` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `pendidikan_terakhir` VARCHAR(45) NULL,
  `nama_lembaga` VARCHAR(45) NULL,
  `jabatan` VARCHAR(45) NULL,
  `alamat_perusahaan` TEXT NULL,
  `kd_pos_lembaga` VARCHAR(45) NULL,
  `tlp_lembaga` VARCHAR(45) NULL,
  `fax` VARCHAR(45) NULL,
  `email_lembaga` VARCHAR(45) NULL,
  `tujuan_asesmen` VARCHAR(45) NULL,
  `skema_sertifikasi` VARCHAR(45) NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`id_apl01`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_lsp`.`unit`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_lsp`.`unit` (
  `id_unit` VARCHAR(45) NOT NULL,
  `judul_unit` VARCHAR(45) NULL,
  `jenis_standar` VARCHAR(45) NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`id_unit`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_lsp`.`elemen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_lsp`.`elemen` (
  `id_elemen` INT NOT NULL AUTO_INCREMENT,
  `id_unit` VARCHAR(45) NOT NULL,
  `elemen` VARCHAR(45) NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`id_elemen`),
  INDEX `fk_elemen_unit1_idx` (`id_unit` ASC),
  CONSTRAINT `fk_elemen_unit1`
    FOREIGN KEY (`id_unit`)
    REFERENCES `db_lsp`.`unit` (`id_unit`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_lsp`.`pertanyaan`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_lsp`.`pertanyaan` (
  `id_pertanyaan` INT NOT NULL AUTO_INCREMENT,
  `id_elemen` INT NOT NULL,
  `pertanyaan` TEXT NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`id_pertanyaan`),
  INDEX `fk_pertanyaan_elemen1_idx` (`id_elemen` ASC),
  CONSTRAINT `fk_pertanyaan_elemen1`
    FOREIGN KEY (`id_elemen`)
    REFERENCES `db_lsp`.`elemen` (`id_elemen`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_lsp`.`penilaian`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_lsp`.`penilaian` (
  `id_penilaian` INT NOT NULL AUTO_INCREMENT,
  `id_apl01` INT NOT NULL,
  `nama_asesor1` VARCHAR(45) NULL,
  `nama_asesor2` VARCHAR(45) NULL,
  `tgl_waktu` VARCHAR(45) NULL,
  `tuk` VARCHAR(45) NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`id_penilaian`),
  INDEX `fk_penilaian_apl011_idx` (`id_apl01` ASC),
  CONSTRAINT `fk_penilaian_apl011`
    FOREIGN KEY (`id_apl01`)
    REFERENCES `db_lsp`.`apl01` (`id_apl01`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_lsp`.`detail_penilaian`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_lsp`.`detail_penilaian` (
  `id_penilaian` INT NOT NULL,
  `id_pertanyaan` INT NOT NULL,
  `penilaian` VARCHAR(45) NULL,
  `v` VARCHAR(45) NULL,
  `a` VARCHAR(45) NULL,
  `t` VARCHAR(45) NULL,
  `m` VARCHAR(45) NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  INDEX `fk_detail_penilaian_pertanyaan1_idx` (`id_pertanyaan` ASC),
  INDEX `fk_detail_penilaian_penilaian1_idx` (`id_penilaian` ASC),
  CONSTRAINT `fk_detail_penilaian_pertanyaan1`
    FOREIGN KEY (`id_pertanyaan`)
    REFERENCES `db_lsp`.`pertanyaan` (`id_pertanyaan`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_detail_penilaian_penilaian1`
    FOREIGN KEY (`id_penilaian`)
    REFERENCES `db_lsp`.`penilaian` (`id_penilaian`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_lsp`.`apl01`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_lsp`.`apl01` (
  `id_apl01` INT NOT NULL AUTO_INCREMENT,
  `nama` VARCHAR(45) NULL,
  `tempat_lahir` VARCHAR(45) NULL,
  `tgl_lahir` DATE NULL,
  `jk` VARCHAR(45) NULL,
  `kebangsaan` VARCHAR(45) NULL,
  `alamat` TEXT NULL,
  `kd_pos` VARCHAR(45) NULL,
  `tlp_rumah` VARCHAR(45) NULL,
  `tlp_hp` VARCHAR(45) NULL,
  `tlp_kantor` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `pendidikan_terakhir` VARCHAR(45) NULL,
  `nama_lembaga` VARCHAR(45) NULL,
  `jabatan` VARCHAR(45) NULL,
  `alamat_perusahaan` TEXT NULL,
  `kd_pos_lembaga` VARCHAR(45) NULL,
  `tlp_lembaga` VARCHAR(45) NULL,
  `fax` VARCHAR(45) NULL,
  `email_lembaga` VARCHAR(45) NULL,
  `tujuan_asesmen` VARCHAR(45) NULL,
  `skema_sertifikasi` VARCHAR(45) NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`id_apl01`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;