
CREATE TABLE `contato` (
  `id_contato` int NOT NULL,
  `nome` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `cep` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `endereco` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `complemento` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `numero` varchar(10) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `bairro` varchar(80) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `cidade` varchar(80) COLLATE utf8mb4_general_ci NOT NULL,
  `uf` char(2) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `celular` varchar(16) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `nascimento` date DEFAULT NULL,
  `cpf` varchar(15) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



