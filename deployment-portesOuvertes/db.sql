CREATE DATABASE `k8s_demo_app`;
USE `k8s_demo_app`;
CREATE TABLE `k8s_demo_app`.`visit` ( `count` BIGINT UNSIGNED NOT NULL DEFAULT '0' ) ENGINE = InnoDB; 
INSERT INTO `visit`(`count`) VALUES ('0');