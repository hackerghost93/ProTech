Create table downloads(
	id int(11) unsigned not null Auto_Increment primary key,
	name varchar(255) not null ,
	link varchar(255) not null , 
	type enum('pdf','driver')
)ENGINE=InnoDB DEFAULT CHARSET=utf8;