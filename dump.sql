CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

DELETE FROM `contacts`;
INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `created`, `modified`) VALUES
	(1, 'Renato Figueiredo', '(67) 99000-0000', 'renato.figueiredo@teste.com', '2023-06-20 07:10:08', '2023-06-20 16:48:20'),
	(2, 'Mariana da Costa', '(67) 98000-0000', 'mariana.costa@teste.com', '2023-06-20 07:10:09', '2023-06-20 16:44:40'),
	(3, 'Luiz Alves', '(67) 99002-0012', 'luiz.alves@teste.com', '2023-06-20 12:22:45', '2023-06-20 12:22:45');