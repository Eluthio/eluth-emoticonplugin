CREATE TABLE IF NOT EXISTS `custom_emotes` (
    `id` bigint unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(32) NOT NULL,
    `filename` varchar(255) NOT NULL,
    `animated` tinyint(1) NOT NULL DEFAULT 0,
    `created_at` timestamp NULL,
    `updated_at` timestamp NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `custom_emotes_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
