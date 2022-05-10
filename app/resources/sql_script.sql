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
  `birthday` DATE,
  `rule` INT(1) NOT NULL,
  `salt` VARCHAR(255) NOT NULL,
  `avatar` VARCHAR(255),
  `admin_id` INT(11),
  PRIMARY KEY (`user_id`),
  FOREIGN KEY(`admin_id`) REFERENCES `tbl_user`(`user_id`)
);

INSERT INTO 
   `tbl_user`(`user_id`, `login_name`, `password`, `username`, `birthday`, `rule`, `salt`, `admin_id`, `avatar`)
VALUES
# (`user_id`, `login_name`, `password`, `username`, `birthday`, `rule`, `salt`, `admin_id`, `avatar`)
  (0, 'admin', '0000', 'Nguyễn Hoàng Anh', '1998/07/31', 0, 'salt', NULL, NULL)
  (0, 'aa', '0000', 'Nguyễn Văn A', '1998/07/31', 1, 'salt', 1, '/manage_user/app/public/image/Baby%2001.png'),
  (0, 'bb', '0000', 'Nguyễn Văn B', '1998/07/31', 1, 'salt', 1, '/manage_user/app/public/image/Baby%2002.png'),
  (0, 'cc', '0000', 'Nguyễn Văn C', '1998/07/31', 1, 'salt', 1, '/manage_user/app/public/image/Child%2001.png'),
  (0, 'dd', '0000', 'Nguyễn Văn D', '1998/07/31', 1, 'salt', 1, '/manage_user/app/public/image/Person%2001.png'),
  (0, 'ee', '0000', 'Nguyễn Văn E', '1998/07/31', 1, 'salt', 1, '/manage_user/app/public/image/Person%2002.png')
;


CREATE USER 'hoanganh'@'localhost' IDENTIFIED BY '0000';
GRANT ALL PRIVILEGES ON *.* TO 'hoanganh'@'localhost' WITH GRANT OPTION;

php bin/magento admin:user:create --admin-user=hoanganh1 --admin-password=Magento2 --admin-email=hello1@mageplaza.com --admin-firstname=Mageplaza --admin-lastname=Family