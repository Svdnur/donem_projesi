CREATE TABLE `admin_accounts`
(
    `id`         int(25) NOT NULL,
    `user_name`  varchar(50)  NOT NULL,
    `password`   varchar(255) NOT NULL,
    `admin_type` varchar(10)  NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `admin_accounts` (`id`, `user_name`, `password`, `admin_type`)
VALUES (1, 'superadmin', '$2y$10$eo7.w0Ttuy8mOBMvDlGqDeewQERkXu//7qO3jXp5NC76LwfAZpNrO', 'super'),
       (2, 'admin', '$2y$10$RnDwpen5c8.gtZLaxHEHDOKWY77t/20A4RRkWBsjlPuu7Wmy0HyBu', 'admin');

CREATE TABLE `books`
(
    `id`          int(10) NOT NULL,
    `author`      varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `name`        varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `type`        varchar(25) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
    `description` varchar(512) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
    `created_at`  timestamp NULL DEFAULT NULL,
    `updated_at`  timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `books` (`id`, `author`, `name`, `type`, `description`, `created_at`, `updated_at`)
VALUES (1, 'Sabahattin Ali', 'Kürk Mantolu Madonna', 'Roman',
        'Türk edebiyatının baş yapıtlarından sayılan Kürk Mantolu Madonna 1920''li yıllarda Berlin''e öğrenci olarak giden Raif Efendi ile ressam Maria Puder arasındaki aşkı anlatıyor.',
        '2019-07-22 20:12:30', '2019-07-22 20:12:41'),
       (2, 'Ömer Seyfettin', 'Kaşağı', 'Kurgu',
        'Ana fikri, okuyucuya yalan söylemenin ve iftiranın zararlarını göstermek ve basit yalanların bile büyük sorunlara yol açabileceğini anlatmaktır.', '2020-10-24 15:46:45',
        '2020-10-24 15:46:53');

ALTER TABLE `admin_accounts`
    ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

ALTER TABLE `books`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `admin_accounts`
    MODIFY `id` int (25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

ALTER TABLE `books`
    MODIFY `id` int (10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
