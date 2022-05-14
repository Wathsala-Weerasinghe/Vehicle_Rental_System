<?php
include("../../app/controllers/users.php");

if (ISSET($_GET["type"]) && ISSET($_GET["id"])) {
	include 'database/sr_database_service.php';
	
	$type = $_GET["type"];
	$id = $_GET["id"];
	
	$results = getEntityDetails($type, $id);
	
	$rent_product = null;
	foreach ($results as $value){
		$rent_product = $value;
		
		break;
	}
	
	if (ISSET($_GET["fullRent"])) {
		$rent_product["price"] = $_GET["fullRent"];
	}
}



?>
<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/StyleSheet.css">
    <link rel="stylesheet" href="../css/style_payment.css">
    <script>
        //alert("payment page loaded");
    </script>
    <script src="../js/index.js"></script>


</head>

<body style="background-image: url(../images/background.jpg);">

    <?php

    include("../../app/includes/headersection.php");

    ?>

    <!-- this is the final template that everyone should use -->

    </div>
    <h2>-----------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>
    <p id="date"></p>
    <button onclick="timefun()" id="button1">date and time</button>

    <h2>---------------------------------------------------------------------------------------------------------------------------------------------------------------------</h2>


    <body>
        <div id="payment">
            <div class="regfrom">
                <h2>Please Fill In Your Detalis </h2>
            </div>
            <img name="slide" width=40% height="300" align="right">

            <div class="mane">
                <form action="payment_details.php" method="POST">
                    <div>
                        <h2 class="name00"> ID</h2>
                        <input type="text" class="tname" name="ID" required=""><br>

                    </div>

                    <div id="name">
                        <h2 class="name00"> Card Name</h2>
                        <input type="text" class="tname" name="cardname" required=""><br>
                        <label class="firstlabel">Name</label>



                        <input type="text" class="card" name="paymenttype" required=""><br>
                        <label class="lastlabel">Online Payment Type</label>
                    </div>


                    <label class="customer">customer name</label>
                    <h4 class="name00"> HOLDER NAME </h4>
                    <input type="text" class="cname" name="customername" required="">



                    <h4 class="name00">EMAIL</h4>
                    <input type="text" class="email" name="email" required="">


                    <h4 class="name00">ADDRESS </h4>
                    <input type="text" class="email" name="address" required="">


                    <h4 class="name00">CARD </h4>
                    <input type="password" class="code" name="cvv" required="">
                    <label class="cvv">CVV</label>


                    <input type="text" class="cardnumber" name="cardnumber" required="">
                    <label class="number">card number</label>


                    <h4 class="name00">EX.DATE </h4>
                    <input type="month" id="Expirydate" name="date" class="cname" required="">


                    <h4 class="name00">pay online </h4>
                    <button type="paypal" class="sibmit11" onclick="location.href='https://www.paypal.com/signin?returnUri=https%3A%2F%2Fwww.paypal.com%2Fcgi-bin%2Fwebscr%3fcmd%3d_account'; ">Pay Pal</button><br>



                    <h4 class="Password00">
                        <h2>Enter password</h2>
                    </h4>
                    <input type="password" class="Password00" size="35" id="pwd" required> <br /><br />


                    <h4 class="Password00">
                        <h2>Re-Enter Password</h2>
                    </h4>
                    <input class="Password00" type="password" size="35" id="cnfrmpwd" required> <br /><br />
                    <center>

                        <input class="inputStyle" id="checkBox" align="left" type="checkbox" onclick="enableButton()">
                        <h3>Accept privacy policy and terms
                        </h3>
                        <button class="submit00" id="submitBtn" name="submit" type="submit">pay now</button>
                    </center>

                </form>
            </div>
        </div>

        <div class="vehicle" align="center">
            <button class="bt1" type="button" id="button4" onclick="loadData('button5')">VEHICLE DETAILS</button>
        </div>




        <a href="map google.html" target="_blank"><button class="googlemap">GOOGLE MAP</button></a><br><br>
        <p class="text1" id="para" style="display:none;">
			<?php 
				if (isset($rent_product)) {
						echo "VEHICLE ID :" . $rent_product["id"] . "  </br><br> VEHICLE NAME :" . $rent_product["name"] . "  </br><br> DURATION TIME: 2 days  </br><br> RENTAL TIME AND DATE :13.45P.M---2020/2/12 </br><br> TOTAL PAYMENT: RS." . $rent_product["price"] . "/-";
				}else {
					echo "VEHICLE ID :23213MB  </br><br> VEHICLE NAME :C-Class Mercedes-Benz  </br><br> DURATION TIME: 2 days  </br><br> RENTAL TIME AND DATE :13.45P.M---2020/2/12 </br><br> TOTAL PAYMENT:RS43000";
				}
			?>
		</p>


        <br>
        <br><br>



    </body>

    <a href="search1.php" target="_blank"><button class="googlemap">search your ID</button></a><br><br>


    <br>
    <footer>
        <div class="footer-gray">
            <div class="footer-custom">
                <div class="footer-lists">
                    <div class="footer-list-wrap">
                        <h6 class="ftr-hdr">About Ust</h6>
                        <ul class="ftr-links-sub">
                            <art:content rule="!loggedin">
                                <li class="ftr-Login"><span class="link login-trigger">+94 123 234 345</span></li>
                                <li class="ftr-Login"><span class="link login-trigger">Team7@sliit.lk</span></li>
                                <li class="ftr-Login"><span class="link login-trigger">MR. RENT , 143 Main road ,
                                        Malambe</span></li>
                            </art:content>
                        </ul>
                    </div>

                </div>
                <div class="footer-social">
                    <h6 class="ftr-hdr">Follow Us</h6>
                    <ul>
                        <li>
                            <img width="24" height="24" alt="Like us on Facebook" src="../images/footer/fb.png">
                        </li>
                        <li>
                            <img width="24" height="24" alt="Follow us on Google+" src="../images/footer/gplus.png">
                        </li>
                        <li>
                            <img width="24" height="24" alt="Follow us on Pinterest" src="../images/footer/pin-badge.png">
                        </li>
                        <li>
                            <img width="24" height="24" alt="Follow us on Instagram" src="../images/footer/instagram-badge.png">
                        </li>
                        <li>
                            <img width="67" alt="Follow us on Twitter" src="../images/footer/twitter.png">
                        </li>
                    </ul>
                </div>
                <!--/.footer-social-->
                <div class="footer-legal">
                    <p>&copy; MLB_PG.02.01_01. All Rights Reserved. | <a href="#" rel="nofollow">Privacy Policy</a> | <a href="#" rel="nofollow">Terms
                            of Use</a> | <a href="#" rel="nofollow">Terms of Sale</a></p>
                    <p>This is a groupwork of sliit and this is not the final product.</p>
                    <p>this is done by MLB_PG.02.01_01 and this is .</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>