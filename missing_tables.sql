-- Create permissions tables if they don't exist
CREATE TABLE IF NOT EXISTS `permissions` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(191) NOT NULL,
    `guard_name` varchar(191) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `roles` (
    `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
    `name` varchar(191) NOT NULL,
    `guard_name` varchar(191) NOT NULL,
    `created_at` timestamp NULL DEFAULT NULL,
    `updated_at` timestamp NULL DEFAULT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `model_has_permissions` (
    `permission_id` bigint(20) unsigned NOT NULL,
    `model_type` varchar(191) NOT NULL,
    `model_id` bigint(20) unsigned NOT NULL,
    PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
    KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
    CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `model_has_roles` (
    `role_id` bigint(20) unsigned NOT NULL,
    `model_type` varchar(191) NOT NULL,
    `model_id` bigint(20) unsigned NOT NULL,
    PRIMARY KEY (`role_id`,`model_id`,`model_type`),
    KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
    CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS `role_has_permissions` (
    `permission_id` bigint(20) unsigned NOT NULL,
    `role_id` bigint(20) unsigned NOT NULL,
    PRIMARY KEY (`permission_id`,`role_id`),
    KEY `role_has_permissions_role_id_foreign` (`role_id`),
    CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
    CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Add columns to plans table
SET @dbname = DATABASE();
SET @tablename = "plans";

-- Add is_free column first
SET @columnname = "is_free";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN is_free tinyint(1) DEFAULT '0'"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @columnname = "plan_ai_tools";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN plan_ai_tools json DEFAULT NULL"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @columnname = "plan_features";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN plan_features json DEFAULT NULL"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @columnname = "open_ai_items";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN open_ai_items json DEFAULT NULL"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @columnname = "ai_models";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN ai_models json DEFAULT NULL"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @columnname = "user_api";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN user_api tinyint(1) DEFAULT '0'"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @columnname = "is_team_plan";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN is_team_plan tinyint(1) DEFAULT '0'"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @columnname = "plan_allow_seat";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN plan_allow_seat int DEFAULT NULL"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @columnname = "trial_days";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN trial_days int DEFAULT NULL"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @columnname = "reset_credits_on_renewal";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN reset_credits_on_renewal tinyint(1) DEFAULT '0'"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @columnname = "hidden";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN hidden tinyint(1) DEFAULT '0'"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

SET @columnname = "description";
SET @preparedStatement = (SELECT IF(
  (
    SELECT COUNT(*) FROM INFORMATION_SCHEMA.COLUMNS
    WHERE
      TABLE_SCHEMA = @dbname
      AND TABLE_NAME = @tablename
      AND COLUMN_NAME = @columnname
  ) > 0,
  "SELECT 1",
  "ALTER TABLE plans ADD COLUMN description text DEFAULT NULL"
));
PREPARE alterIfNotExists FROM @preparedStatement;
EXECUTE alterIfNotExists;
DEALLOCATE PREPARE alterIfNotExists;

-- Insert default plan if it doesn't exist
INSERT INTO `plans` (
    `name`, 
    `active`, 
    `price`, 
    `currency`, 
    `frequency`, 
    `is_featured`, 
    `plan_type`, 
    `type`, 
    `can_create_ai_images`, 
    `ai_name`, 
    `max_tokens`, 
    `features`, 
    `plan_ai_tools`, 
    `plan_features`, 
    `open_ai_items`, 
    `ai_models`, 
    `created_at`, 
    `updated_at`
)
SELECT 
    'Free Plan',
    1,
    0,
    'USD',
    'monthly',
    0,
    'free',
    'subscription',
    1,
    'AI',
    4000,
    '{"Monthly words limit":"100,000","Monthly images limit":"100","Support":true}',
    '[]',
    '[]',
    '[]',
    '{"openai":{"gpt-3.5-turbo":{"credit":100,"isUnlimited":false},"gpt-4":{"credit":0,"isUnlimited":false}}}',
    NOW(),
    NOW()
WHERE NOT EXISTS (
    SELECT 1 FROM `plans` WHERE `name` = 'Free Plan'
);

-- Update the plan to set is_free after insertion
UPDATE `plans` SET `is_free` = 1 WHERE `name` = 'Free Plan';

-- Insert default roles if they don't exist
INSERT INTO `roles` (`name`, `guard_name`, `created_at`, `updated_at`)
SELECT 'admin', 'web', NOW(), NOW()
WHERE NOT EXISTS (SELECT 1 FROM `roles` WHERE `name` = 'admin');

INSERT INTO `roles` (`name`, `guard_name`, `created_at`, `updated_at`)
SELECT 'user', 'web', NOW(), NOW()
WHERE NOT EXISTS (SELECT 1 FROM `roles` WHERE `name` = 'user'); 