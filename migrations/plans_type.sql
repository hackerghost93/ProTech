alter table plans add column type enum('1','2','3');
ALTER TABLE plans MODIFY type enum('1','2','3') NOT NULL;