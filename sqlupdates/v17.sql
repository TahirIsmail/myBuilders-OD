DROP TABLE `wallet_payments`;

UPDATE `model_has_roles` SET `model_type` = 'App\\Models\\User';
UPDATE `addresses` SET `addressable_type` = 'App\\Models\\User';

ALTER TABLE `package_payments` CHANGE `payment_details` `payment_details` LONGTEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
ALTER TABLE `service_payments` CHANGE `payment_details` `payment_details` TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL;
ALTER TABLE `service_payments` ADD `refund_percentage` decimal(10,2) DEFAULT NULL AFTER `cancel_requested`;

ALTER TABLE `cancel_projects` ADD `refund_percentage` decimal(10,2) DEFAULT NULL AFTER `viewed`;

CREATE TABLE `wallets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` double(20,2) NOT NULL,
  `payment_method` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `payment_details` longtext COLLATE utf8_unicode_ci DEFAULT NULL,
  `type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

ALTER TABLE `wallets`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `wallets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(58, 'show running projects', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(59, 'show all projects', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(60, 'show open projects', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(61, 'show cancelled projects', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(62, 'show project cancel requests', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(63, 'show project category', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(64, 'show verification requests', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(65, 'show user chats', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(66, 'show all freelancers', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(67, 'show freelancer packages', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(68, 'show freelancer skills', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(69, 'show freelancer badges', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(70, 'show all clients', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(71, 'show client packages', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(72, 'show client badges', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(73, 'show freelancers reviews', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(74, 'show client reviews', 'web', '2021-04-10 16:06:05', '2021-04-10 16:06:05'),
(75, 'show active tickets', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(76, 'show my tickets', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(77, 'show solved tickets', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(78, 'show support settings category', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(79, 'show default assigned agent', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(80, 'show project payments', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(81, 'show package payments', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(82, 'show service payments', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(83, 'show freelancer withdraw requests', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(84, 'show freelancer payouts', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(85, 'show header', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(86, 'show footer', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(87, 'show pages', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(88, 'show apperance', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(89, 'show all staffs', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(90, 'show employee roles', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(91, 'show general setting', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(92, 'show activation setting', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(93, 'show system languages setting', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(94, 'show system currency setting', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(95, 'show email setting', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(96, 'show payment gateways setting', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(97, 'show third party api setting', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(98, 'show freelancer payment', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(99, 'show manual payment methods', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(100, 'show offline project payments', 'web', '2021-04-10 16:06:06', '2021-04-10 16:06:06'),
(101, 'show offline package payments', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(102, 'show offline service payments', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(103, 'show addon manager', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(104, 'create new client package', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(105, 'create new freelancer package', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(106, 'show dashboard', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(107, 'show create staff', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(108, 'show create roles', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(109, 'single user chat details', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(110, 'freelancer delete', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(111, 'project cat delete', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(112, 'project cat edit', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(113, 'project cat create', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(114, 'show blog category', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(115, 'show all blogs', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(116, 'show wallet history', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(117, 'show refund setting', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(118, 'manage file upload', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(119, 'system update', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(120, 'show server status', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(121, 'show all subscribers', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07'),
(122, 'show all newsletters', 'web', '2021-04-10 16:06:07', '2021-04-10 16:06:07');

UPDATE `system_configurations` SET `value` = '2.0' WHERE `system_configurations`.`type` = 'current_version';

COMMIT;