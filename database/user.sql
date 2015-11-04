-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- โฮสต์: localhost
-- เวลาในการสร้าง: 
-- รุ่นของเซิร์ฟเวอร์: 5.0.51
-- รุ่นของ PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- ฐานข้อมูล: `project`
-- 

-- --------------------------------------------------------

-- 
-- โครงสร้างตาราง `user`
-- 

CREATE TABLE `user` (
  `id` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

-- 
-- dump ตาราง `user`
-- 

INSERT INTO `user` VALUES (1, 'นางสาวญาณี', 'ดำรงกมลทิพย์', 'yanee_5636@hotmail.com');
INSERT INTO `user` VALUES (2, 'นายนฤดม', 'ขุนรอง', 'naruedom_SE@hotmail.com');
INSERT INTO `user` VALUES (3, 'นายสมชาย ', 'ใจดี', 'somchai@hotmail.com');
INSERT INTO `user` VALUES (4, 'นางสาวสุกัญญา ', 'อยู่เย็น', 'sukanya@hotmail.com');
INSERT INTO `user` VALUES (5, 'นางสาวชลธิชา ', 'งามขำ', 'chonthicha@gmail.com');
INSERT INTO `user` VALUES (6, 'นายการุณ ', 'ใจตรง', 'karoon@hotmail.com');
INSERT INTO `user` VALUES (7, 'นางทับทิม ', 'รุ่งเรือง', 'tabtim@gmail.com');
INSERT INTO `user` VALUES (8, 'นายศราวุธ ', 'แสงยนต์', 'sarawoot@hotmail.com');
INSERT INTO `user` VALUES (9, 'นายมานพ ', 'ธรรมดี', 'manop@gmail.com');
INSERT INTO `user` VALUES (10, 'นางสาวอารยา ', 'ทองดี', 'araya.hongdee@gmail.com');
INSERT INTO `user` VALUES (11, 'นางอารี ', 'ตองอ่อน', 'asdf@hotmail.coma');
INSERT INTO `user` VALUES (12, 'นางพร', 'โพธิ์งาม', 'pron@hotmail.com');
INSERT INTO `user` VALUES (13, 'นายศรราม', 'ใจตรง', 'sornram@gmail.com');
INSERT INTO `user` VALUES (14, 'นางแก้ว', 'ทองดี', 'keaw@hotmail.com');
INSERT INTO `user` VALUES (15, 'นางสาวอริสา', 'กองม่วง', 'arisa@hotmail.com');
INSERT INTO `user` VALUES (16, 'นายชาตรี', 'งามขำ', 'chatree@gmail.com');
INSERT INTO `user` VALUES (17, 'นางกรองแก้ว', 'ภักดี', 'krongkeaw@gmail.com');
INSERT INTO `user` VALUES (18, 'นางอุทัย', 'ประเสริฐ', 'utai@gmail.com');
INSERT INTO `user` VALUES (19, 'นางขนิษฐา', 'เสนาะ', 'khanittha@gmail.com');
INSERT INTO `user` VALUES (20, 'นายพงษ์ศักดิ์', 'รุ่งทรัพย์', 'pongsak@gmail.com');
INSERT INTO `user` VALUES (21, 'นายณัฐวุฒิ', 'น้ำใจดี', 'nattawoot.namjaidee@gmail.com');
INSERT INTO `user` VALUES (22, 'นางสาวทิพวรรณ', 'แก้วการ', 'tippawan@hotmail.com');
INSERT INTO `user` VALUES (23, 'นายวิสูตร', 'จิตรี', 'wisoot@hotmail.com');
