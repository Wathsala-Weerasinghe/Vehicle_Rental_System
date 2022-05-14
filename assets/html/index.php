<?php
include("../../app/controllers/users.php");
include("../html/database/mainpagepicdatabase.php")
?>
<!DOCTYPE html>
<html>

<head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style_home.css">
</head>

<body style="background-image: url(../images/background.jpg);">
    <?php

    include("../../app/includes/headersection.php");

    ?>

    <?php

    $link1 = selectOne('homepage_img_database', ['ID' => '1']);
    $link2 = selectOne('homepage_img_database', ['ID' => '2']);
    $link3 = selectOne('homepage_img_database', ['ID' => '3']);
    $link4 = selectOne('homepage_img_database', ['ID' => '4']);
    $link5 = selectOne('homepage_img_database', ['ID' => '5']);
    $link6 = selectOne('homepage_img_database', ['ID' => '6']);
    $link7 = selectOne('homepage_img_database', ['ID' => '7']);
    $link8 = selectOne('homepage_img_database', ['ID' => '8']);
    $link9 = selectOne('homepage_img_database', ['ID' => '9']);
    $link10 = selectOne('homepage_img_database', ['ID' => '10']);
    $link11 = selectOne('homepage_img_database', ['ID' => '11']);
    $link12 = selectOne('homepage_img_database', ['ID' => '12']);
    $link13 = selectOne('homepage_img_database', ['ID' => '13']);
    $link14 = selectOne('homepage_img_database', ['ID' => '14']);
    $link15 = selectOne('homepage_img_database', ['ID' => '15']);
    $link16 = selectOne('homepage_img_database', ['ID' => '16']);


    ?>
    <hr style="border: 2px solid black; background-color: black;">

    <div class="slidercontainer">
        <div class="showSlide ">
            <a href="Showroom_cars.php">
                <img src="<?php echo $link1['link']; ?>" />
                <div class="content">Axio Car</div>
            </a>

        </div>
        <div class="showSlide">
            <a href="Showroom_cars.php">
                <img src="<?php echo $link2['link']; ?>" />
                <div class="content">Prado Car</div>
            </a>
        </div>

        <div class="showSlide">
            <a href="Showroom_cars.php">
                <img src="<?php echo $link3['link']; ?>" />
                <div class="content">Benz Car</div>
            </a>

        </div>

        <div class="showSlide">
            <a href="Showroom_cars.php">
                <img src="<?php echo $link4['link']; ?>" />
                <div class="content">WagonR Car</div>
            </a>
        </div>

        <div class="showSlide">
            <a href="Showroom_transport.php">
                <img src="<?php echo $link5['link']; ?>" />
                <div class="content">Van for transport service</div>
            </a>
        </div>

        <div class="showSlide">
            <a href="Showroom_transport.php">
                <img src="<?php echo $link6['link']; ?>" />
                <div class="content">Lorry for transport service</div>
            </a>
        </div>
        <!-- Navigation arrows -->
        <a class="left" onclick="nextSlide(-1)">❮</a>
        <a class="right" onclick="nextSlide(1)">❯</a>
    </div>

    <!-- The dots/circles -->
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
    </div>

    <!--Java script for the vehicle slide-->
    <script type="text/javascript">
        var slide_index = 1;
        displaySlides(slide_index);

        function nextSlide(n) {
            displaySlides(slide_index += n);
        }

        function currentSlide(n) {
            displaySlides(slide_index = n);
        }

        function displaySlides(n) {
            var i;
            var slides = document.getElementsByClassName("showSlide");
            if (n > slides.length) {
                slide_index = 1
            }
            if (n < 1) {
                slide_index = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slide_index - 1].style.display = "block";
        }
    </script>
    <br>


    </div>
    <br>
    <hr style="opacity: 1;border-width: 2px;">
    <br>

    <section id="packageSlider">
        <input type="radio" name="packageSlider" id="s1" checked>
        <input type="radio" name="packageSlider" id="s2">
        <input type="radio" name="packageSlider" id="s3">
        <input type="radio" name="packageSlider" id="s4">
        <input type="radio" name="packageSlider" id="s5">
        <input type="radio" name="packageSlider" id="s6">
        <input type="radio" name="packageSlider" id="s7">
        <input type="radio" name="packageSlider" id="s8">
        <input type="radio" name="packageSlider" id="s9">
        <input type="radio" name="packageSlider" id="s10">


        <label for="s1" id="slide1"><a href="payment.php">
                <img src="<?php echo $link7['link']; ?>" width="500px" height="550px">
            </a>
        </label>

        <label for="s2" id="slide2"><a href="payment.php">
                <img src="<?php echo $link8['link']; ?>" width="500px" height="550px">
            </a>
        </label>

        <label for="s3" id="slide3"><a href="payment.php">
                <img src="<?php echo $link9['link']; ?>" width="500px" height="550px">
            </a>
        </label>

        <label for="s4" id="slide4"><a href="payment.php">
                <img src="<?php echo $link10['link']; ?>" width="500px" height="550px">
            </a>
        </label>

        <label for="s5" id="slide5"><a href="payment.php">
                <img src="<?php echo $link11['link']; ?>" width="500px" height="550px">
            </a>
        </label>

        <label for="s6" id="slide6"><a href="payment.php">
                <img src="<?php echo $link12['link']; ?>" width="500px" height="550px">
            </a>
        </label>

        <label for="s7" id="slide7"><a href="payment.php">
                <img src="<?php echo $link13['link']; ?>" width="500px" height="550px">
            </a>
        </label>

        <label for="s8" id="slide8"><a href="payment.php">
                <img src="<?php echo $link14['link']; ?>" width="500px" height="550px">
            </a>
        </label>

        <label for="s9" id="slide9"><a href="payment.php">
                <img src="<?php echo $link15['link']; ?>" width="500px" height="550px">
            </a>
        </label>

        <label for="s10" id="slide10"><a href="payment.php">
                <img src="<?php echo $link16['link']; ?>" width="500px" height="550px">
            </a>
        </label>

    </section>


    </div> -->
    <br><br>
    <hr>


    <?php

    include("../../app/includes/footersection.php");

    ?>



</html>