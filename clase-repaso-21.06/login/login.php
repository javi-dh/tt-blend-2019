<?php
	require_once 'login-controller.php';

	if (isLoged()) {
		header('location: profile.php');
		exit;
	}

	if ($_POST) {
		$emailFromPost = trim($_POST['email']);
		$passFromPost = trim($_POST['password']);

		$userFound = getByEmail($emailFromPost);

		if ($userFound) {
			// almaceno la cookie
			if (isset($_POST['remember'])) {
				setcookie('userEmail', $emailFromPost, time() + 3600);
			}

			// preguntamos si la contraseña coincide
			if ($userFound['password'] == $passFromPost) {
				// Logueo y redirecciono
				login($userFound);
				header('location: profile.php');
				exit;
			} else {
				echo "La contraseña no coincide";
			}
		} else {
			echo "El email no está registrado";
		}
	}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>Formulario de login</title>
	</head>
	<body>
		<form method="post">
			<div>
				<label>Email:</label>
				<input type="text" name="email">
			</div>
			<div>
				<label>Password:</label>
				<input type="password" name="password">
			</div>
			<div>
				<label>
					<input type="checkbox" name="remember"> Recordarme
				</label>
			</div>
			<button type="submit">Ingresar</button>
		</form>
	</body>
</html>
