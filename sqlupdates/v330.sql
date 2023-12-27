CREATE TABLE `payment_types` (
  `id` int(11) NOT NULL,
  `type` varchar(200) DEFAULT NULL,
  `value` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `payment_types` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'paypal', '0', '2023-08-21 05:47:34', '2023-08-21 05:47:34'),
(2, 'stripe', '0', '2023-08-21 05:47:34', '2023-08-21 05:47:34'),
(3, 'sslcommerz', '0', '2023-08-21 05:47:34', '2023-08-21 05:47:34'),
(4, 'instamojo', '0', '2023-08-21 05:47:34', '2023-08-21 05:47:34'),
(5, 'paystack', '0', '2023-08-21 05:47:34', '2023-08-21 05:47:34'),
(6, 'paytm', '0', '2023-08-21 05:47:34', '2023-08-21 05:47:34'),
(7, 'flutterwave', '0', '2023-08-21 05:47:34', '2023-08-21 05:47:34'),
(8, 'mercadopago', '0', '2023-08-21 05:47:34', '2023-08-21 05:47:34');

ALTER TABLE `payment_types`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `payment_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

UPDATE `system_configurations` SET `value` = '3.3.0' WHERE `system_configurations`.`type` = 'current_version';

COMMIT;