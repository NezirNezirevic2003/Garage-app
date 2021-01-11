CREATE TABLE `autogegevens` (
  `autokenteken` varchar(15) NOT NULL,
  `automerk` varchar(20) NOT NULL,
  `autotype` varchar(255) NOT NULL,
  `autokmstand` varchar(255) NOT NULL,
  `klantid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `autogegevens` (`autokenteken`, `automerk`, `autotype`, `autokmstand`, `klantid`) VALUES
('04-JDK-9', 'Volkswagen', 'Polo', '4087', 3),
('37-TVR-1', 'Opel', 'Corsa', '80544', 2),
('67-YB-44', 'Tatra', '603', '309872', 1),
('95-RP-LR', 'Fiat', 'Doblo', '143989', 1),
('HV-GB-23', 'Jaguar', 'XJ6', '2043439', 1);
COMMIT;

-- Plakt de volgende line code in autogegevens en dan in sql zodat we een foreign key linken met onze klantgegevens
-- ALTER TABLE garage.autogegevens ADD INDEX fk_klantgegevens_autogegevens (klantid) USING BTREE;