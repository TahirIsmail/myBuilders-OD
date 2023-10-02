INSERT INTO `system_configurations` (`id`, `type`, `value`, `created_at`, `updated_at`) 
    VALUES (NULL, 'flutterwave_activation_checkbox', '1', current_timestamp(), current_timestamp());

UPDATE `system_configurations` SET `value` = '3.1.0' WHERE `system_configurations`.`type` = 'current_version';

COMMIT;