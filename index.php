<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>B2B Price List </title>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
	<script>
		document.write('<link href="./css/style.css?r=' + Math.floor(Math.random() * 100) + '" rel="stylesheet" type="text/css" />');
	</script>
	<script src="./script.js"></script>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>

<body>
	<?php
	include('data.php');



	$length = count($data);
	echo "<div class='nonos'>";
	for ($i = 0; $i < $length; $i++) {
		echo "
	<div class='widget-container list-item-1-container'>
		<img class='preview-img list-item-1-img' src='" . $data[$i]['en']['img'] . "' alt=''>
		<div class='widget-body-parent list-item-1-body'>
			<div class='widget-header list-item-1-header'>
				<div class='title'>" . $data[$i]['en']['title'] . "</div>
				<div class='price-list list-item-1-price'>" . $data[$i]['en']['price'] . "€</div>
			</div>
			<div class='widget-body-tetxt list-item-1-body'>". $data[$i]['en']['keimeno'] . "</div>
		</div>

	</div>";

	}
	echo "</div>"
	 ?>
	


</body>

</html>