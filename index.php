<!DOCTYPE html>
<html lang="en">

<head>
	<link rel="shortcut icon" type="image/x-icon" href="./iconified/favicon1.ico">
	<link rel="shortcut icon" href="./iconified/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="./iconified/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="./iconified/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="./iconified/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="./iconified/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="./iconified/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="./iconified/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="./iconified/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="./iconified/apple-touch-icon-152x152.png" />
	<link rel="apple-touch-icon" sizes="180x180" href="./iconified/apple-touch-icon-180x180.png" />
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-MM23BV4M4R"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'G-MM23BV4M4R');
	</script>





	<meta name="robots" content="noindex, nofollow">
	<meta name="googlebot" content="noindex, nofollow">
	<meta name="bingbot" content="noindex, nofollow">
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
		<a target="_blank" href="https://tihioherbs.gr"><img class="logo" src="./images/logo.png"></a></img>
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
				<div class='title " . $data[$i]['en']['availability'] . " '><span class='spantitle " . $data[$i]['en']['availability'] . "'>" . $data[$i]['en']['title'] . "</span><span class='variety variety-" . $i . " " . $data[$i]['en']['availability'] . " '>" . $data[$i]['en']['variety'] . "</span></div>
				<div class='price-list list-item-" . $i . "-price " . $data[$i]['en']['availability'] . " '>" . $data[$i]['en']['price'] . "€*<span class='kilos'> / Kgr</span></div>
			</div>
			<div class='widget-body-text list-item-" . $i . "-body " . $data[$i]['en']['availability'] . " '>" . nl2br($data[$i]['en']['keimeno']) . "</div>
		</div>
	</div>";
	}
	echo "</div>" ?>

	<div class="footer">
		<div class="text1 taxes">*No taxes included</div>
		<div class="text2">
			<div class="footeraki">
				<span class="contanct-us-parent">For further information for the orders please contact us: <a class="contanct-us contanct-us-1" href="mailto:info@tihioherbs.gr"> info@tihioherbs.gr </a>
					<!-- <a class="contanct-us contanct-us-2" href="tel:+306947131388"> Call us </a> -->
				</span>
			</div>
		</div>
	</div>
	<script src="./script.js?r=<?php echo rand(); ?>"></script>
</body>

</html>