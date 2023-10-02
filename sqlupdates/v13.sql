ALTER TABLE `freelancer_services_packages` CHANGE `revision_limit` `revision_limit` VARCHAR(255) NULL DEFAULT NULL;

UPDATE `system_configurations` SET `value` = '1.3' WHERE `system_configurations`.`type` = 'current_version';

ALTER TABLE addons
  DROP COLUMN description;

ALTER TABLE `addons` ADD `image` VARCHAR(100) NULL AFTER `activated`;

COMMIT;
