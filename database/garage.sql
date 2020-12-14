
CREATE TABLE `klantgegevens` (
  `voornaam` varchar(20) NOT NULL,
  `achternaam` varchar(20) NOT NULL,
  `stad` varchar(20) NOT NULL,
  `zip` int(6) NOT NULL,
  `adres` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `klantgegevens` (`voornaam`, `achternaam`, `stad`, `zip`, `adres`) VALUES
('John', 'Doe', 'Rotterdam', 6675, 'Johannes Calvijn 34'),
('John', 'Doe', 'Rotterdam', 6675, 'Johannes Calvijn 34'),
('hello', 'Nezirevic', 'Rotterdam', 2334, 'Jannesdrietenveld'),
('Nezir', 'Nezirevic', 'Rotterdam', 7888, 'Henrik Irenvelt'),
('ali', 'pervez', 'Rotterdam', 7777, 'hallo'),
('Test', 'Testo', 'Testdtad', 0, 'testadres'),
('Ali', 'Pervez', 'Rotterdam, zuid', 6675, 'zuidplein');
COMMIT;
