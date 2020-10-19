drop database if exists digimon_db;
create database digimon_db;
use digimon_db;

create table digimon (
    id int unsigned auto_increment not null primary key,
    name varchar(60) not null,
    img varchar(200) not null,
    level varchar(30) not null
);