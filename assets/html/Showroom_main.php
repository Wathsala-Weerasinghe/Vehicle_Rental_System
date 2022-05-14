    <?php
	include("../../app/controllers/users.php");
	?>
    <html>

    <head>
    	<title>
    		Vehicle Rental System
    	</title>
    	<link rel="stylesheet" href="../css/showroom.css" />
    	<script src="../js/showroom.js"></script>
    	<script src="../js/showroom_main.js"></script>
    	<?php
		include 'database/sr_database_service.php';

		$randomCars = getRandomCarsForDisplay();
		$randomMPV = getRandomMPVsForDisplay();
		$randomMISC = getRandomMISCsForDisplay();
		?>
    </head>

    <body style="background-image: url(../images/background.jpg);" onload="populateItems()">
    	<?php
		include("../../app/includes/headersection.php");
		?>

    	<hr style="border: 2px solid black; background-color: black;">

    	<br>
    	<br><br>
    	<hr>
    	<main>
    		<br /><br />
    		<div class="sr_label" style="background-color:darkblue;opacity:0.8;position:relative;height:100px;margin:10px 0;">
    			<a href="Showroom_cars.php">
    				<img class="sr_imglb" src="../images/cars/carlabel.jpg" style="position:absolute;top:-50;border:10px solid darkblue;">
    			</a>
    			<div class="sr_lbl-text">
    				<h1>CARS</h1>
    			</div>
    		</div>
    		<br />
    		<div style="position:relative; margin:0 60px 0 100px;">
    			<!--<div style="width:1500px; height:300px;">-->
    			<ul class="sr_carousel">
    				<?php
					foreach ($randomCars as $randomCar) {
						echo '<li><img class="sr_carousel-child sr_zoom" src="' . $randomCar . '" /></li>';
					}
					?>

    			</ul>
    			<button onmouseover="goLeft()" onmouseout="stopCarousel()" class="sr_carousel-button sr_carousel-button-left">&lt;</button>
    			<button onmouseover="goRight()" onmouseout="stopCarousel()" class="sr_carousel-button sr_carousel-button-right">&gt;</button>
    		</div>
    		<br /><br /><br />
    		<div class="sr_label" style="background-color:darkblue;opacity:0.8;position:relative;height:100px;margin:10px 0;">
    			<a href="Showroom_others.php">
    				<img class="sr_imglb" src="../images/cars/carlabel.jpg" style="position:absolute;top:-50;border:10px solid darkblue;">
    			</a>
    			<div class="sr_lbl-text">
    				<h1>Multi Purpose</h1>
    			</div>
    		</div>
    		<br />
    		<div style="position:relative; margin:0 60px 0 100px;">
    			<!--<div style="width:1500px; height:300px;">-->
    			<ul class="sr_MPVousel">
    				<?php
					foreach ($randomMPV as $randomMPVPic) {
						echo '<li><img class="sr_carousel-child sr_zoom" src="' . $randomMPVPic . '" /></li>';
					}
					?>
    			</ul>
    			<!--<li><img class="carousel-child zoom" src="../images/multi purpose/van1.jpg"></li>
					<li><img class="carousel-child zoom" src="../images/multi purpose/van2.jpg"></li>
					<li><img class="carousel-child zoom" src="../images/multi purpose/bus1.jpg"></li>
					<li><img class="carousel-child zoom" src="../images/multi purpose/car1.jpg"></li>
					<li><img class="carousel-child zoom" src="../images/multi purpose/Van.jpeg"></li>-->

    			<button onmouseover="goLeftMPV()" onmouseout="stopMPVousel()" class="sr_MPVousel-button sr_MPVousel-button-left">&lt;</button>
    			<button onmouseover="goRightMPV()" onmouseout="stopMPVousel()" class="sr_MPVousel-button sr_MPVousel-button-right">&gt;</button>
    		</div>
    		<br /><br /><br />
    		<div class="sr_label" style="background-color:darkblue;opacity:0.8;position:relative;height:100px;margin:10px 0;">
    			<a href="Showroom_others.php">
    				<img class="sr_imglb" src="../images/cars/carlabel.jpg" style="position:absolute;top:-50;border:10px solid darkblue;">
    			</a>
    			<div class="sr_lbl-text">
    				<h1>Miscellaniuos</h1>
    			</div>
    		</div>
    		<br />
    		<div style="position:relative; margin:0 60px 0 100px;">
    			<!--<div style="width:1500px; height:300px;">-->
    			<ul class="sr_Miscousel">
    				<?php
					foreach ($randomMISC as $randomMISCPic) {
						echo '<li><img class="sr_carousel-child sr_zoom" src="' . $randomMISCPic . '"></li>';
					}
					?>
    			</ul>
    			<!--<li><img class="carousel-child zoom" src="../images/misellanious/hlp.jpg"></li>
					<li><img class="carousel-child zoom" src="../images/misellanious/lc1.jpg"></li>
					<li><img class="carousel-child zoom" src="../images/misellanious/lc3.jpg"></li>
					<li><img class="carousel-child zoom" src="../images/misellanious/Prado.jpg"></li>
					<li><img class="carousel-child zoom" src="../images/misellanious/luxury-2.jpg"></li>
					<li><img class="carousel-child zoom" src="../images/misellanious/WedPackage.jpg"></li>-->

    			<button onmouseover="goLeftMisc()" onmouseout="stopMiscousel()" class="sr_Miscousel-button sr_Miscousel-button-left">&lt;</button>
    			<button onmouseover="goRightMisc()" onmouseout="stopMiscousel()" class="sr_Miscousel-button sr_Miscousel-button-right">&gt;</button>
    		</div>
    		<br /><br /><br />
    	</main>
    	</br></br>
    	<?php
		include("../../app/includes/footersection.php");
		?>
    </body>

    </html>