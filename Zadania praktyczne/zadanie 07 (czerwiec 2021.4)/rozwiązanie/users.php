<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Panel administratora</title>
	<link rel="stylesheet" href="styl4.css">
</head>
<body>
	<header>
		<h3>Portal społecznościowy - panel administratora</h3>
	</header>
	<section class="main">
		<section class="left">
			<h4>Użytkownicy</h4>
			<ol>
			<?php
				// skrypt 1
				$conn = mysqli_connect("localhost", "root", "", "dane4");
				$query = "SELECT id, imie, nazwisko, rok_urodzenia, zdjecie FROM osoby LIMIT 30;";
				$result = mysqli_query($conn, $query);
				while($row = mysqli_fetch_row($result)) {
					echo "<li>";
					echo $row[0] . " " . $row[1] . " " . $row[2] . ", " . date("Y") - $row[3] . " lat";
					echo "</li>";
				}
			?>
			</ol>
			<p>
				<a href="settings.html">Inne ustawienia</a>
			</p>
		</section>
		<section class="right">
			<h4>Podaj id użytkownika</h4>
			<form action="users.php" method="post">
				<input type="number" name="userId" id="userId">
				<input type="submit" value="Zobacz">
			</form>
			<?php
				// skrypt 2
				if(isset($_POST["userId"])) {
					$query = "SELECT osoby.id, hobby.id, imie, nazwisko, rok_urodzenia, opis, zdjecie, nazwa FROM osoby JOIN hobby ON osoby.hobby_id = hobby.id WHERE osoby.id = " . $_POST["userId"] . ";";
					$result = mysqli_query($conn, $query);
					while($row = mysqli_fetch_row($result)) {
						echo "<h2>" . $row[0] . ". " . $row[2] . " " . $row[3] . "</h2>";
						echo "<img src='img/$row[6]'>" ;
						echo "<p>Rok urodzenia: " . $row[4] . "</p>";
						echo "<p>Opis: " . $row[5] . "</p>";
						echo "<p>Hobby: " . $row[1] . "</p>";
					}
				}
				mysqli_close($conn);
			?>
		</section>
	</section>
	<footer>
		<p>Stronę wykonał: 01234567890</p>
	</footer>
</body>
</html>