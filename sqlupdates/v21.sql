INSERT INTO `system_configurations` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES (NULL, 'service_section_show', 'off', current_timestamp(), current_timestamp()), (NULL, 'service_section_title', 'Our Services', current_timestamp(), current_timestamp());

INSERT INTO `system_configurations` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES (NULL, 'max_service_show_homepage', '10', current_timestamp(), current_timestamp());

ALTER TABLE `freelancer_services` CHANGE `image` `image` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;


CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `subscribers` CHANGE `id` `id` INT(11) NOT NULL AUTO_INCREMENT, add PRIMARY KEY (`id`);

UPDATE `system_configurations` SET `value` = '2.1' WHERE `system_configurations`.`type` = 'current_version';

COMMIT;