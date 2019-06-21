<?php
	require_once 'login-controller.php';

	if (!isLoged()) {
		header('location: login.php');
		exit;
	}

	$user = $_SESSION['userLoged'];
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Página de perfil</title>
	</head>
	<body>
		<h1>Bienvenida/o <?php echo $user['name'] ?></h1>
		<p>Tu email es: <a href="mailto:<?= $user['email'] ?>"> <?= $user['email'] ?> </a></p>
		<a href="logout.php">Salir</a>

		<script>
			setTimeout(function () {
				window.location = 'logout.php';
			}, 4000);
		</script>
	</body>
</html>
