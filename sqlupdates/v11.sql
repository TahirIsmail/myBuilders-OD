ALTER TABLE `pages` CHANGE `content` `content` LONGTEXT CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL;

INSERT INTO `system_configurations` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES (NULL, 'current_version', '1.1', CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);
