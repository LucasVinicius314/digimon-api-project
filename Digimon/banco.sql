-- drop database digimon_database;
create database digimon_database;
use digimon_database;

create table digimons(
    _id int unsigned auto_increment not null primary key,
    id int not null,
    name varchar(60) not null,
    img varchar(200) not null,
    level varchar(30) not null
);