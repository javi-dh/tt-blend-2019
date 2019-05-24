<?php
	$navbarLinks = [
		'index.php' => 'home',
		'quienes.php' => 'about',
		'servicios.php' => 'services',
		'portfolio.php' => 'portfolio',
		'sucursales.php' => 'locations',
		'contacto.php' => 'contact',
	];
?>
<header class="main-header">
	<img src="images/logo.jpg" alt="logotipo" class="logo">

	<a href="#" class="toggle-nav">
		<i class="fa fa-bars"></i>
	</a>

	<nav class="main-nav">
		<ul>
			<?php foreach ($navbarLinks as $url => $text): ?>
				<li><a href="<?= $url; ?>"> <?= $text; ?> </a></li>
			<?php endforeach; ?>
		</ul>

		<ul>
			<?php
				// Otra manera de hacer el foreach sin php embebido
				/*foreach ($navbarLinks as $url => $text) {
					echo "<li><a href='$url'>$text</a></li>";
				}*/
			?>
		</ul>
	</nav>
</header>
