create table user(
	id int unsigned not null auto_increment primary key,
	username varchar(50) not null ,
	password varchar(50) not null ,
	isadmin tinyint not null
);

create table advert(
	id int unsigned not null auto_increment primary key,
	img varchar(50) not null,
	pos tinyint not null,
	url varchar(100) not null

);

create table class(
	id int unsigned not null auto_increment primary key,
	name varchar(50) not null
);

create table brand(
	id int unsigned not null auto_increment primary key,
	name varchar(50) not null,
	class_id int not null
);

create table shop(
	id int unsigned not null auto_increment primary key,
	name varchar(50) not null,
	img varchar(100) not null,
	price  float not null,
	stock int not null,
	brand_id int not null,
	shelf tinyint not null
);

create table comment(
	id int unsigned not null auto_increment primary key,
	user_id int not null,
	content text,
	shop_id int  not null,
	time int not null
);

create table order_status(
	id int unsigned not null auto_increment primary key,
	name varchar(50) not null,
);

create table indent(
	id int unsigned not null auto_increment primary key,
	num varchar(50),
	user_id int not null,
	order_status_id int not null,
	touch_id int  not null,
	time int not null
);

create table touch(
	id int unsigned not null auto_increment primary key,
	name varchar(50) not null,
	user_id int not null,
	addr varchar(50) not null,
	tel varchar(50)  not null,
	email varchar(50) not null
);

