ALTER TABLE `packages` ADD `service_limit` INT(10) NOT NULL DEFAULT '0' AFTER `job_exp_limit`;
ALTER TABLE `user_packages` ADD `service_limit` INT(10) NOT NULL DEFAULT '0' AFTER `job_exp_limit`;

ALTER TABLE `users` ADD `provider_id` VARCHAR(255) NULL DEFAULT NULL AFTER `id`;
ALTER TABLE `users` CHANGE `password` `password` VARCHAR(191) DEFAULT NULL;

CREATE TABLE `freelancer_services` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_service` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_cat_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `freelancer_services`
--
ALTER TABLE `freelancer_services`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `freelancer_services`
--
ALTER TABLE `freelancer_services`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

CREATE TABLE `freelancer_services_packages` (
  `id` bigint(20) NOT NULL,
  `service_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_price` bigint(20) NOT NULL,
  `delivery_time` int(11) NOT NULL,
  `revision_limit` int(11) NOT NULL,
  `feature_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `freelancer_services_packages`
--
ALTER TABLE `freelancer_services_packages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `freelancer_services_packages`
--
ALTER TABLE `freelancer_services_packages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

CREATE TABLE `service_payments` (
  `id` bigint(20) NOT NULL,
  `service_package_id` bigint(20) NOT NULL,
  `service_package_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `service_owner_id` bigint(20) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `payment_type` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'service_payment',
  `admin_profit` decimal(8,2) NOT NULL,
  `freelancer_profit` decimal(8,2) NOT NULL,
  `payment_method` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_payments`
--
ALTER TABLE `service_payments`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_payments`
--
ALTER TABLE `service_payments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

UPDATE `system_configurations` SET `value` = '1.2' WHERE `system_configurations`.`type` = 'current_version';

COMMIT;
