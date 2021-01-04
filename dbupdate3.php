<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta name="author" content="anjo eieriks">
		<meta charset="utf-8">
		<title>gar-update-klant3.php</title>
        <link rel="stylesheet" href="./public/style.css">

	</head>
	<body>
		<h1>Garage Update Klant 3</h1>
		<p>
			Klantgegevens wijzigen in de tabel
			klant van de database garage.
		</p>
		<?php
			// klantgegevens uit het formulier halen -------------------------
			$klantid		= $_POST["klantid"];
			$klantnaam		= $_POST["klantnaam"];
			$klantadres		= $_POST["klantadres"];
			$klantpostcode	= $_POST["klantpostcode"];
			$klantplaats	= $_POST["klantplaats"];

			// update klantgegevens ------------------------------------------
			require_once "connection.php";

			$sql = $conn->prepare
			("
				update klantgegevens set 	klantnaam 		= :klantnaam,
									klantadres 		= :klantadres,
									klantpostcode 	= :klantpostcode,
									klantplaats 	= :klantplaats
									where klantid = :klantid
			");

			$sql->execute
			([
				"klantid"		=> $klantid,
				"klantnaam"		=> $klantnaam,
				"klantadres"	=> $klantadres,
				"klantpostcode"	=> $klantpostcode,
				"klantplaats"	=> $klantplaats
            ]);

			echo "De klant is gewijzigd. <br />";
			echo "<a href='./klant.html'> terug naar het menu </a>";
		?>
	</body>
</html>