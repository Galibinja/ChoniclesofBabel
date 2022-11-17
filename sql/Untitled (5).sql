CREATE TABLE `accounts` (
  `user_id` int PRIMARY KEY AUTO_INCREMENT,
  `username` varchar(255),
  `password` varchar(255),
  `email` varchar(255),
  `logo_url` varchar(255) NOT NULL
  `created_on` timestamp NOT NULL
);

CREATE TABLE `roles` (
  `role_id` int PRIMARY KEY,
  `role_name` varchar(255)
);

CREATE TABLE `accounts_roles` (
  `user_id` int,
  `role_id` int,
  `grant_date` timestamp
);

ALTER TABLE `accounts` ADD FOREIGN KEY (`user_id`) REFERENCES `accounts_roles` (`user_id`);

ALTER TABLE `roles` ADD FOREIGN KEY (`role_id`) REFERENCES `accounts_roles` (`role_id`);
