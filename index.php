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
</head>

<body>
<?php
include('data.php');
for ($i=0; $i < 3 ; $i++) {
    echo "
	<div class='widget-container list-item-1-container'>
		<img class='preview-img list-item-1-img' src='" . $data['rigani-xyma']['en']['img'] . "' alt=''>
		<div class='widget-header list-item-1-header'>header</div>
		<div class='widget-body list-item-1-body'>
			<div class='price-list list-item-1-price'>
				<ul class='list list-item-1-list'>
					<li class='list-items list-item-1 no-bullets'>1</li>
					<li class='list-items list-item-2 no-bullets'>2</li>
					<li class='list-items list-item-3 no-bullets'>3</li>
				</ul>
			</div>
		</div>
		<div class='widget-footer list-item-1-footer'>a</div>
	</div>";


	}?>

</body>

</html>