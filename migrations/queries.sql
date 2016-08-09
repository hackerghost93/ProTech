delete from printers ;
delete from printer_image ;

ALTER TABLE printers AUTO_INCREMENT=1 ;
ALTER TABLE printer_image AUTO_INCREMENT=1 ;

insert into printers(name) values ('احمد وائل 6000');
insert into printers(name) values ('احمد  5000');
insert into printers(name) values ('احمد ئل 4000');
insert into printers(name) values ('احمد 3400');

insert into printer_image(printer_id,image_path) values(1,'me.jpg');
insert into printer_image(printer_id,image_path) values(2,'me.jpg');
insert into printer_image(printer_id,image_path) values(3,'me.jpg');
insert into printer_image(printer_id,image_path) values(4,'me.jpg');