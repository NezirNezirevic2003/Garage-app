
CREATE TABLE `klantgegevens` (
  `klantid` int(2) NOT NULL,
  `klantnaam` varchar(15) NOT NULL,
  `klantadres` varchar(30) NOT NULL,
  `klantpostcode` varchar(6) NOT NULL,
  `klantplaats` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `klantgegevens` (`klantid`, `klantnaam`, `klantadres`, `klantpostcode`, `klantplaats`) VALUES
(2, 'Jan', 'van Klaveren', '6641KL', 'Rotterdam, Zuid'),
(3, 'Nezir', 'Testing', '1234TH', 'Testplaats'),
(4, 'Nezir', 'Test', '1234TH', 'Test');

ALTER TABLE `klantgegevens`
  ADD PRIMARY KEY (`klantid`);

ALTER TABLE `klantgegevens`
  MODIFY `klantid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

