SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `autogegevens` (
  `autokenteken` varchar(15) NOT NULL,
  `automerk` varchar(20) NOT NULL,
  `autotype` varchar(255) NOT NULL,
  `autokmstand` int(100) NOT NULL,
  `klantid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `autogegevens` (`autokenteken`, `automerk`, `autotype`, `autokmstand`, `klantid`) VALUES
('04-JDK-9', 'Volkswagen', 'Polo', 4087, 1),
('14-PR-TX', 'LAMBO', 'gti', 800, 2),
('37-TVR-1', 'Opel', 'Corsa', 80544, 3),
('67-YB-44', 'Tatra', '603', 309872, 4),
('95-RP-LR', 'Fiat', 'Doblo', 143989, 1),
('99-TT-TX', 'LAMBO', 'GTI', 232, 2),
('99-XX-TT', 'Volkswagen', 'GTI', 2420000, 2),
('HV-GB-23', 'Jaguar', 'XJ6', 2043439, 1);

ALTER TABLE `autogegevens`
  ADD PRIMARY KEY (`autokenteken`),
  ADD KEY `fk_klantgegevens_autogegevens` (`klantid`) USING BTREE;
COMMIT;

-- Plakt de volgende line code in autogegevens en dan in sql zodat we een foreign key linken met onze klantgegevens
-- ALTER TABLE garage.autogegevens ADD INDEX fk_klantgegevens_autogegevens (klantid) USING BTREE;