<?php
	include 'conn.php';
	include_once 'functions.php';
	
	if (isset($_GET['action'])) {
		$action   = (int)$_GET['action'];
	}
	
	session_start();	
?>

<!DOCTYPE HTML>
<html lang="en">
	<head>		
		<title>3D printing</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content="3D printing web page">
		<meta name="keywords" content="3D,printing,3D printer,printer,fillament,maker,diy">
		<meta name="author" content="Krešimir Marenić">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<header>
			<div class="banner-image"></div>
			<nav>					
					<?php include 'menu.php'; ?>
			</nav>
		</header>
		<main>
			<?php
			if ((!isset($_GET['menu'])) || ($_GET['menu'] == 1)) {
				include 'home.php';
			}
			else if ($_GET['menu'] == 2) {
				include 'news.php';
			}
			else if ($_GET['menu'] == 3) {
				include 'contact.php';
			}
			else if ($_GET['menu'] == 4) {
				include 'about_us.php';
			}
			else if ($_GET['menu'] == 5) {
				include 'gallery.php';
			}
			else if ($_GET['menu'] == 6) {
				include 'register.php';
			}
			else if ($_GET['menu'] == 7) {
				include 'login.php';
			}
			else if ($_GET['menu'] == 8) {
				include 'admin.php';
			}
			else if ($_GET['menu'] == 9) {
				include 'logout.php';
			}
			?>
		</main>

		<footer>
			<?php include 'footer.php'; ?>
		</footer>
	</body>
</html>

