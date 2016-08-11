ALTER TABLE planes RENAME TO plans ;
ALTER TABLE plane_item RENAME TO plan_item ;
ALTER TABLE `plans` ADD UNIQUE(`plane_name`);