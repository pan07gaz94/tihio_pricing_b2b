<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>B2B Price List </title>
	<script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
	<link href="./css/style.css?r=<?php echo rand(); ?>" rel="stylesheet" type="text/css" />

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
</head>

<body>
	<div class="header">
		<img class="logo" src="./images/logo.png"></img>
		<div class="titlemain">B2B Pricelist</div>
	</div>
	<?php
	include('data.php');
	$length = count($data);
	echo "<div class='nonos'>";
	for ($i = 0; $i < $length; $i++) {
		echo "
	<div class='widget-container  " . $data[$i]['en']['availability'] . " list-item-" . $i . "-container'>
		<img class='preview-img list-item-" . $i . "-img " . $data[$i]['en']['availability'] . " ' src='./images/" . $data[$i]['en']['img'] . "' alt=''>
		<div class='widget-body-parent list-item-" . $i . "-body " . $data[$i]['en']['availability'] . " '>
			<div class='widget-header list-item-" . $i . "-header " . $data[$i]['en']['availability'] . " '>
				<div class='title " . $data[$i]['en']['availability'] . " '><span class='spantitle " . $data[$i]['en']['availability'] . "'>" . $data[$i]['en']['title'] . "</span></div>
				<div class='price-list list-item-" . $i . "-price " . $data[$i]['en']['availability'] . " '>" . $data[$i]['en']['price'] . "€</div>
			</div>
			<div class='widget-body-tetxt list-item-" . $i . "-body " . $data[$i]['en']['availability'] . " '>" . $data[$i]['en']['keimeno'] . "</div>
		</div>
	</div>";
	}
	echo "</div>" ?>

	<div class="footer">
		<div class="text1">foroi</div>
		<div class="text2">posotites</div>
	</div>
	<script src="./script.js?r=<?php echo rand(); ?>"></script>
</body>

</html>