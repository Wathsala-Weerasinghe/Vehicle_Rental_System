<?php
include("../../app/controllers/users.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/StyleSheetm.css">
    <link rel="stylesheet" type="text/css" href="../css/style_contact_us.css">

    <script>
        alert("contact_us page are loading!!!");
    </script>

</head>

<body style="background-image: url(../images/background.jpg);">

    <?php

    include("../../app/includes/headersection.php");

    ?>
    <hr style="border: 2px solid black; background-color: black;">

    <!-- this is the final template that everyone should use -->

    </div>
    <br>
    <h4>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    </h4>
    <center>
        <h1>HELP & SUPPORT</h1>
    </center>
    <h4>--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
    </h4>

    <body>









        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.7985117576864!2d79.9707558140206!3d6.914677495003818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae256db1a6771c5%3A0x2c63e344ab9a7536!2sSri%20Lanka%20Institute%20of%20Information%20Technology!5e0!3m2!1sen!2slk!4v1601149624288!5m2!1sen!2slk" width="670" height="580" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" align="right"></iframe>
        <div class="regfrom">
            <h2>How Can We Help? </h2>
        </div>
        <div class="regfrom1">
            <h3>If You Dont Find What You Need,Fill Out Our Contact Form </h3>
        </div>

        <div class="mane">
            <form action="contact_us.php" method="POST">

                <div id="name">
                    <h2 class="name00"> Your Name</h2>
                    <input type="text" class="tname" name="Name" required=""><br>
                </div>




                <label class="emailBox">
                    <h4 class="name00">EMAIL</h4>
                    <input type="email" class="email" id="email" name="Email" required="">
                    <span class="emailText"></span>
                </label>


                <h4 class="name00">Phone Nummber</h4>
                <input type="text" class="phone" name="phonenumber" required="">




                <center>
                    <button class="submit00" name="SUBMIT" type="submit">SUBMIT </button>
                </center>



            </form>

            <script>
                //i refer w3 school and youtube site 
                const email = document.getElementById("email"); //create the const email 


                email.addEventListener('input', () => {
                    const emailBox = document.querySelector('.emailBox'); //
                    const emailText = document.querySelector('.emailText');
                    const emailPattern = /[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$/; //checking the email pattern 

                    if (email.value.match(emailPattern)) { //using  if conditon and cheking the enter email 
                        emailBox.classList.add('valid'); //email is correct and using add function and print  VAILD messAGE 
                        emailText.innerHTML = " Valid"; //print the message 
                    } else {
                        emailBox.classList.add('invalid'); //email is incorrect add  invaild function 
                        emailText.innerHTML = "invalid email address"; //if the user enter email in not correct this messsage is print 
                    }
                });
            </script><br>

        </div>
    </body>

    <table id="contact us">
        <tr>
            <td><img id="sideimg" src="../images/aa.png" style="width:330px"></td>

            <td><img id="sideimg" class="emailpic" src="../images/email.png" style="width:250px"></td>
        </tr>

    </table>






    <br>
    <br><br>



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