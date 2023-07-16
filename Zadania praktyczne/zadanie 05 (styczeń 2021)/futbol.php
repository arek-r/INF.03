<?php
	$conn = mysqli_connect("localhost", "root", "", "programista");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rozgrywki futbolowe</title>
	<link rel="stylesheet" href="styl.css">
</head>
<body>
	<header>
		<h2>Światowe rozgrywki piłkarskie</h2>
		<img src="obraz1.jpg" alt="boisko">
	</header>
	<section class="games">
		<?php
			$query1 = "SELECT zespol1, zespol2, wynik, data_rozgrywki FROM rozgrywka WHERE zespol1 = 'EVG';";
			$result1 = mysqli_query($conn, $query1);
			while($row = mysqli_fetch_row($result1)) {
				echo "<div class='game'>";
				echo "<h3>" . $row[0] . " - " . $row[1] . "</h3>";
				echo "<h4>" . $row[2] . "</h4>";
				echo "<p>w dniu: " . $row[3] . "</p>";
				echo "</div>";
			}
		?>
	</section>
	<section class="main">
		<h2>Reprezentacja Polski</h2>
	</section>
	<section class="columns">
		<section class="left">
			<p>Podaj pozycję zawodników (1-bramkarze, 2-obrońcy, 3-pomocnicy, 4-napastnicy):</p>
			<form action="futbol.php" method="post">
				<input type="number" name="position" id="position">
				<button id="check" name="check">Sprawdź</button>
			</form>
			<ul>
				<?php
				if(isset($_POST["position"])) {
					$position = $_POST["position"];
					$query2 = "SELECT imie, nazwisko FROM zawodnik WHERE pozycja_id = $position;";
					$result2 = mysqli_query($conn, $query2);
					while($row = @mysqli_fetch_row($result2)) {
						echo "<li>" . $row[0] . " " . $row[1] . "</li>";
					}
				}
				else {
					echo "Najpierw wpisz odpowiednią liczbę";
				}

				?>
			</ul>
		</section>
		<section class="right">
			<img src="zad1-przeskalowany.png" alt="piłkarz">
			<p>Autor: 01234567890</p>
		</section>
	</section>
</body>
</html>