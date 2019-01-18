<?php	
	if (isset($action) && $action != '' && $action != 1 && $action != 2) {
		$query  = "SELECT * FROM news";
		$query .= " WHERE id=" . $_GET['action'];
		$result = @mysqli_query($conn, $query);
		$row = @mysqli_fetch_array($result);
		?>	
			<div class="news">
				<img src="news/<?php echo $row['picture']; ?>" alt="<?php echo $row['title']; ?>" title="<?php echo $row['title']; ?>">
				<h2><?php echo $row['title']; ?></h2>
				<p><?php echo $row['description']; ?></p>
				<time datetime="<?php echo $row['date']; ?>"><?php pickerDateToMysql($row['date']) ?></time>
				<hr>
			</div>
	<?php
	}
	else { ?>
		<h1>NEWS</h1>
		<?php
		$query  = "SELECT * FROM news";
		$query .= " WHERE archive='N'";
		$query .= " ORDER BY date DESC";
		$result = @mysqli_query($conn, $query);
		while($row = @mysqli_fetch_array($result)) {
		?>	
			<div class="news">
				<img src="images/news/<?php echo $row['picture'] ?>" alt="<?php echo $row['title'] ?>" title="<?php echo $row['title'] ?>">
				<h2><?php echo $row['title'] ?></h2>
				<?php
				if(strlen($row['description']) > 300) {
					echo substr(strip_tags($row['description']), 0, 300).'... <a href="index.php?menu=' . $_GET['menu'] . '&amp;action=' . $row['id'] . '">More</a>';
				} else {
					echo strip_tags($row['description']);
				}
				?>
				<time datetime="<?php echo $row['date'] ?>"><?php pickerDateToMysql($row['date']) ?></time>
				<hr>
			</div>
	<?php
		}
	}
	?>
