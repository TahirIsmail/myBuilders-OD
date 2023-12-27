ALTER TABLE `users` ADD `fcm_token` LONGTEXT NULL DEFAULT NULL AFTER `banned`;
DELETE FROM `model_has_roles` WHERE `role_id`=9 AND `model_id`=2;

INSERT INTO `system_configurations` (`id`, `type`, `value`, `created_at`, `updated_at`) 
    VALUES (NULL, 'running_project_chat_activation_checkbox', '0', current_timestamp(), current_timestamp());

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(null, 'show all services', 'web', current_timestamp(), current_timestamp()),
(null, 'show cancelled services', 'web', current_timestamp(), current_timestamp()),
(null, 'show service cancel requests', 'web', current_timestamp(), current_timestamp());

CREATE TABLE `project_conversations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `conversation_id` varchar(50) NOT NULL,
  `project_id` bigint(20) NOT NULL,
  `client_id` bigint(20) NOT NULL,
  `freelancer_id` bigint(20) NOT NULL,
  `client_notify` tinyint(1) NOT NULL DEFAULT 0,
  `freelancer_notify` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `project_conversations`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `project_conversations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

UPDATE `system_configurations` SET `value` = '3.2.0' WHERE `system_configurations`.`type` = 'current_version';

COMMIT;