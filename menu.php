	<ul>
			<li><a href="index.php?menu=1">Home</a></li>
			<li><a href="index.php?menu=2">News</a></li>
			<li><a href="index.php?menu=3">Contact</a></li>
			<li><a href="index.php?menu=4">About us</a></li>
			<li><a href="index.php?menu=5">Gallery</a></li>
		<?php
		if (!isset($_SESSION['user']['valid']) || $_SESSION['user']['valid'] == 'false') { ?>
			<li><a href="index.php?menu=6">Register</a></li>
			<li><a href="index.php?menu=7">Login</a></li>
		<?php
		}
		else if ($_SESSION['user']['valid'] == 'true') { ?>
			<li><a href="index.php?menu=8">Admin</a></li>
			<li><a href="index.php?menu=9">Logout</a></li>
		<?php
		} ?>
	</ul>
