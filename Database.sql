create database android_login /** Creating Database **/
  
use android_login /** Selecting Database **/
  
create table android_php_post(
   id int(5) primary key auto_increment,
   name varchar(40) not null,
   email varchar(50) not null unique,
   encrypted_password varchar(80) not null,
   salt varchar(10) not null,
   gender varchar(6) not null,
   age int(6) not null
); /** Creating Users Table **/
