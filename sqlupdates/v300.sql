INSERT INTO `system_configurations` (`id`, `type`, `value`, `created_at`, `updated_at`) 
    VALUES (NULL, 'cta_section_banner', '', current_timestamp(), current_timestamp()),
            (NULL, 'cta_section_title_client', 'Ready to Get Started', current_timestamp(), current_timestamp()),
            (NULL, 'cta_section_subtitle_client', 'You can post a project, select from premade projects or contact your favorite freelancer through workdesk.<br><br>It is easy & your payment is secured.', current_timestamp(), current_timestamp()),
            (NULL, 'cta_section_title_freelancer', 'Ready to Get Started', current_timestamp(), current_timestamp()),
            (NULL, 'cta_section_subtitle_freelancer', 'You can bid a project, select from premade projects or contact your client through workdesk.<br><br>It iss easy & your payment is secured.', current_timestamp(), current_timestamp()),
            (NULL, 'paystack_sandbox_checkbox', '0', current_timestamp(), current_timestamp()),
            (NULL, 'service_section_subtitle', 'Choose from our premade packages by our freelancers', current_timestamp(), current_timestamp()),
            (NULL, 'blog_section_subtitle', 'Read experiences, Tips & tricks for beginners, Success Story & more', current_timestamp(), current_timestamp()),
            (NULL, 'widget_three', 'For Clients', current_timestamp(), current_timestamp()), 
            (NULL, 'widget_three_labels', '[\"View Projects\",\"Freelancers\",\"Services\",\"All Categories\",\"Packages\",\"Profile\"]', current_timestamp(), current_timestamp()), 
            (NULL, 'widget_three_links', '[\"http://\",\"http://\",\"http://\",\"http://\",\"http://\",\"http://\"]', current_timestamp(), current_timestamp()),
            (NULL, 'widget_four', 'For Freelancers', current_timestamp(), current_timestamp()), 
            (NULL, 'widget_four_labels', '[\"Profile\",\"All Services\",\"Following Clients\",\"Packages\"]', current_timestamp(), current_timestamp()), 
            (NULL, 'widget_four_links', '[\"http://\",\"http://\",\"http://\",\"http://\"]', current_timestamp(), current_timestamp()),
            (NULL, 'app_link_android', 'http://', current_timestamp(), current_timestamp()), 
            (NULL, 'app_link_apple', 'http://', current_timestamp(), current_timestamp()),
            (NULL, 'app_link_section_show', 'on', current_timestamp(), current_timestamp()),
            (NULL, 'disable_image_optimization', '0', current_timestamp(), current_timestamp());


UPDATE `system_configurations` SET `value` = '3.0.0' WHERE `system_configurations`.`type` = 'current_version';

COMMIT;