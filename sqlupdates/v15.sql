ALTER TABLE `currencies` CHANGE `exchange_rate` `exchange_rate` DOUBLE(8,2) NULL;
UPDATE `system_configurations` SET `value` = '1.5' WHERE `system_configurations`.`id` = 107;
ALTER TABLE `milestone_payments` CHANGE `message` `message` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL;
ALTER TABLE `service_payments` ADD `cancel_reason` TEXT NULL DEFAULT NULL AFTER `cancel_requested`;

CREATE TABLE `translations` (
  `id` int(11) NOT NULL,
  `lang` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang_key` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `lang_value` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `translations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

UPDATE `system_configurations` SET `value` = '1.5' WHERE `system_configurations`.`type` = 'current_version';

COMMIT;
