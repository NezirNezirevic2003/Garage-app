SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `klantgegevens` (
  `klantid` int(11) NOT NULL,
  `klantnaam` varchar(15) NOT NULL,
  `klantadres` varchar(30) NOT NULL,
  `klantpostcode` varchar(6) NOT NULL,
  `klantplaats` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `klantgegevens` (`klantid`, `klantnaam`, `klantadres`, `klantpostcode`, `klantplaats`) VALUES
(1, 'Anthenny', 'Krimpen', '2923EP', 'Zuid-Holland'),
(2, 'Ali', 'Rotterdam', '3231VD', 'Zuid-Holland'),
(3, 'Nezir', ' Rotterdam', '3531EO', 'Zuid-Holland'),
(4, 'Mootje', 'Den Helder', '5694FU', 'Noord-Holland');

ALTER TABLE `klantgegevens`
  ADD PRIMARY KEY (`klantid`);

ALTER TABLE `klantgegevens`
  MODIFY `klantid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;