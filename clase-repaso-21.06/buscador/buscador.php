<?php
	$conection = new PDO(
		'mysql:host=localhost; dbname=movies_db; charset=utf8mb4;',
		'root',
		''
	);

	$results = [];

	if (isset($_GET['word'])) {
		$word = $_GET['word'];

		if ($_GET['table'] == 'movies') {
			$statement = $conection->query("SELECT title AS data FROM movies WHERE title LIKE '%$word%'");
		}

		if ($_GET['table'] == 'actors') {
			$statement = $conection->query("SELECT CONCAT(first_name, ' ', last_name) AS data FROM actors WHERE first_name LIKE '%$word%'");
		}

		$statement->execute();

		$results = $statement->fetchAll(PDO::FETCH_ASSOC);
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Buscador</title>
	</head>
	<body>
		<form method="get">
			<label>Buscar</label>
			<input type="text" name="word">
			<br>
			<label><input type="radio" name="table" value="movies">Movies</label>
			<label><input type="radio" name="table" value="actors">Actors</label>
			<br>
			<button type="submit">Buscar</button>
		</form>

		<?php if (isset($_GET['word'])): ?>
			<?php if (count($results) > 0): ?>
				<ul>
					<?php foreach ($results as $oneResult): ?>
						<li> <?= $oneResult['data'] ?> </li>
					<?php endforeach; ?>
				</ul>
			<?php else: ?>
				<h2>No se encontraron resultados</h2>
			<?php endif; ?>
		<?php endif; ?>
	</body>
</html>
