<?php
	$pageTitle = 'Página de inicio';
	require_once 'partials/head.php';

	$products = [
		[
			'id' => 1,
			'pdtoImg' => 'img-pdto-1.jpg',
			'specialImg' => 'img-nuevo.png',
			'title' => 'Copas de vino',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ranking' => 0,
		],
		[
			'id' => 2,
			'pdtoImg' => 'img-pdto-2.jpg',
			'specialImg' => 'img-descuento.png',
			'title' => 'Bolsas de café',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ranking' => 8,
		],
		[
			'id' => 3,
			'pdtoImg' => 'img-pdto-3.jpg',
			'specialImg' => 'img-gratis.png',
			'title' => 'Cena para dos',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ranking' => 0,
		],
		[
			'id' => 4,
			'pdtoImg' => 'img-pdto-1.jpg',
			'specialImg' => 'img-gratis.png',
			'title' => 'Otro producto para dos',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ranking' => 10,
		],
		[
			'id' => 5,
			'pdtoImg' => 'img-pdto-2.jpg',
			'specialImg' => 'img-nuevo.png',
			'title' => 'Otra café copado',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ranking' => 8,
		],
		[
			'id' => 6,
			'pdtoImg' => 'img-pdto-3.jpg',
			'specialImg' => 'img-gratis.png',
			'title' => 'Otro producto cualquiera',
			'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.',
			'ranking' => 9,
		],
	];

	function showStars($quantityStars) {
		$stars = '';
		if ($quantityStars) {
			for ($i = 1; $i <= $quantityStars ; $i++) {
				$stars = $stars . "<i class='fas fa-star' style='color: rgb(235, 151, 41); font-size: 13px;'></i>";
			}
		} else {
			$stars = "<span style='color: crimson; font-size: 13px;'>No tiene calificación <i class='fas fa-sad-tear'></i>";
		}
		return $stars;
	}
?>
	<body>

	<div class="container">

		<!-- cabecera -->
		<?php require_once 'partials/header-navbar.php'; ?>

		<!-- banner -->
		<section class="banner">
			<img src="images/img-banner.jpg" alt="banner">
		</section>

		<!-- productos -->
		<section class="vip-products">

			<?php foreach ($products as $oneProduct): ?>
				<article class="product">
					<div class="photo-container">
						<img class="photo" src="images/<?php echo $oneProduct['pdtoImg']; ?>" alt="pdto 01">
						<img class="special" src="images/<?php echo $oneProduct['specialImg']; ?>" alt="plato nuevo">
						<a class="zoom" href="#">Ampliar foto</a>
					</div>
					<h2><?php echo $oneProduct['title']; ?></h2>
					<p><?php echo showStars($oneProduct['ranking']); ?></p>
					<!--
						Vamos a truncar la descripción completa para mostrar solamente una parte de ese texto.
						Usamos la función nativa de PHP substr() que toma:
							- la cadena de texto
							- donde inicia el corte
							- donde termina el corte
				 	-->
					<p><?php echo substr($oneProduct['description'], 0, 140); ?>...</p>

					<a class="more" href="detalle-producto.php">ver más</a>
				</article>

			<?php endforeach; ?>

		</section>

		<?php require_once 'partials/footer.php'; ?>
	</div>

	</body>
</html>
