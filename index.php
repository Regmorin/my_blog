<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Hanalei+Fill&display=swap" rel="stylesheet">
	<?php require "templates/connect_db.php" ?>

</head>
<body>

	<div class="header">
		<div class="header-content container">
			<h1 class="beutifull-font">Николаян Левик</h1>
		</div>
	</div>

	

	<div class="content">
		<div class="content-text">
		<?php 

		$page = $_GET['page'];
		if (!isset($page))
		{
			require 'templates/main.php';
		}elseif ($page == 'biggest')
		{
			$id = $_GET['id'];
			$post = [];
			foreach ($posts as $bigger) {
				if ($bigger['id'] == $id) {
					$post = $bigger;
					break;
				}
			}
			require 'templates/biggest.php';

		}elseif ($page == 'aboutUs')
		{
			require 'templates/aboutUs.php';
		}

		?>
		</div>
	</div>



</body>
</html>