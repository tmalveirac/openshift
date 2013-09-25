/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50527
Source Host           : localhost:3306
Source Database       : aula_ci

Target Server Type    : MYSQL
Target Server Version : 50527
File Encoding         : 65001

Date: 2013-09-22 18:26:35
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `curso_ci`
-- ----------------------------
DROP TABLE IF EXISTS `curso_ci`;
CREATE TABLE `curso_ci` (
`id`  int(11) NOT NULL AUTO_INCREMENT ,
`nome`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`email`  varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`login`  varchar(25) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
`senha`  varchar(32) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL ,
PRIMARY KEY (`id`)
)
ENGINE=InnoDB
DEFAULT CHARACTER SET=latin1 COLLATE=latin1_swedish_ci
AUTO_INCREMENT=3

;

-- ----------------------------
-- Records of curso_ci
-- ----------------------------
BEGIN;
COMMIT;

-- ----------------------------
-- Auto increment value for `curso_ci`
-- ----------------------------
ALTER TABLE `curso_ci` AUTO_INCREMENT=3;
