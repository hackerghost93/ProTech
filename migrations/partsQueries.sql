delete from parts ;
delete from part_image ;

ALTER TABLE parts AUTO_INCREMENT=1 ;
ALTER TABLE part_image AUTO_INCREMENT=1 ;

insert into parts(name) values ('احمد وائل 6000');
insert into parts(name) values ('احمد  5000');
insert into parts(name) values ('احمد ئل 4000');
insert into parts(name) values ('احمد 3400');

insert into part_image(part_id,image_path) values(1,'me.jpg');
insert into part_image(part_id,image_path) values(2,'me.jpg');
insert into part_image(part_id,image_path) values(3,'me.jpg');
insert into part_image(part_id,image_path) values(4,'me.jpg');