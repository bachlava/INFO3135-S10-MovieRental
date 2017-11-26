create database movierental;

use movierental;

create table movies
(
  movieid int unsigned not null auto_increment primary key,
  title char(30) not null,
  director char(20) not null,
  genre char(20) not null,
  length int not null,
  releasedate datetime not null,
  imageid int unsigned not null
);

create table users
(
  userid int unsigned not null auto_increment primary key,
  username char(30) not null,
  password char(20) not null,
  firstname char(20) not null,
  lastname char(20) not null,
  email char(30) not null,
  address char(30) not null,
  phonenumber int unsigned not null
);

create table orders
(
  orderid int unsigned not null auto_increment primary key,
  movieid int unsigned not null,
  userid int unsigned not null,
  orderdate datetime not null,
  returndate datetime not null,
  FOREIGN KEY (movieid) REFERENCES movies(movieid),
  FOREIGN KEY (userid) REFERENCES users(userid)
);

create table discounts
(
  discountid int unsigned not null auto_increment primary key,
  movieid int unsigned not null,
  percentage int unsigned not null,
  startdate datetime not null,
  enddate datetime not null,
  FOREIGN KEY (movieid) REFERENCES movies(movieid)
);