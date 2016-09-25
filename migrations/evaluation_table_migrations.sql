create table evaluations(
	id int(11) unsigned not null Auto_Increment primary key,
	client_name varchar(255) not null,
	evaluation_date date,
	general_care enum('Excellent','verygood','good','accepted','bad') not null,
	general_elasticity enum('Excellent','verygood','good','accepted','bad') not null,
	general_contact enum('Excellent','verygood','good','accepted','bad') not null,
	engineer_behavior enum('Excellent','verygood','good','accepted','bad') not null,
	engineer_look enum('Excellent','verygood','good','accepted','bad') not null,
	service_parts enum('Excellent','verygood','good','accepted','bad') not null,
	service_quality enum('Excellent','verygood','good','accepted','bad') not null,
	service_speed enum('Excellent','verygood','good','accepted','bad') not null,
	commenter_name varchar(255) ,
	commenter_phone varchar(32) ,
	comment text(1023)
)ENGINE=InnoDB DEFAULT CHARSET=utf8;