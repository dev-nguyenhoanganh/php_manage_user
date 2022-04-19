# -------------------------------------------------------
# Copyright(C) 2022 - Nguyễn Hoàng Anh                  |
# @File_name : Manage User Script.sql                   |
# @Date      : [18/04/2022]                             |
# @Author    : Nguyễn Hoàng Anh                         |
# @Version   : 1.0                                      |
# -------------------------------------------------------
# @Description                                          |
# SQL query to create table & insert data               | 
# -------------------------------------------------------


DROP DATABASE `manage_user`;

CREATE DATABASE `manage_user` CHARACTER SET utf8;

USE `manage_user`;

CREATE TABLE `tbl_user` ( 
  `user_id` INT(11) AUTO_INCREMENT NOT NULL,
  `login_name` VARCHAR(15) NOT NULL,
  `password` VARCHAR(50) NOT NULL,
  `username` VARCHAR(255) NOT NULL,
  `birthday` DATE NOT NULL,
  `rule` INT(1) NOT NULL,
  `salt` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`user_id`)
);

INSERT INTO 
   `tbl_user`(`user_id`, `login_name`, `password`, `username`, `birthday`, `rule`, `salt`)
VALUES
# (`user_id`, `login_name`, `password`, `username`, `birthday`, `rule`, `salt`)
  (0, 1, 'admin', '0000', 'Nguyễn Hoàng Anh', '1998/07/31', 0, 'salt')
;

