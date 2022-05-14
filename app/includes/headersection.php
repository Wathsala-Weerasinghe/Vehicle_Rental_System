<header style="background-image: url(../Images/bng11.jpg);">
    <?php if (isset($_SESSION['id'])) : ?>
        <a href="user_page.php">
            <img src="../images/profile.png" width="50" height="35" alt="profile" style="float: right;">
        </a>
    <?php else : ?>
        <a href="login.php">
            <img src="../images/profile.png" width="50" height="35" alt="profile" style="float: right;">
        </a>
    <?php endif; ?>
    <a href="index.php">
        <img src="../images/logo.png" width="220" height="220" alt="logo" class="logo">
    </a>
    <div style="padding-left: 80px; text-align: center;">
        <svg class="anim" viewbox="0 0 200 50" style="display: flex;">
            <text class="htext1" y="40"> AUTO</text>
            <text class="htext2" y="40" x="85" style="position: absolute; margin-left: 40px;"> SHOP</text>
        </svg>
    </div>
    <hr style="border: 1px solid black; background-color: black; clear: both;">
    <div class="menu">

        <a href="index.php" class="active">Home</a>
        <div class="dropdown">
            <button class="dropbtn">
                Showroom
            </button>
            <div class="dropdown-content">
                <a href="showroom_main.php">Main Showroom</a>
                <a href="showroom_cars.php">Car Showroom</a>
                <a href="showroom_transport.php">Transport Showroom</a>
                <a href="showroom_others.php">Luxury Showroom</a>
            </div>
        </div>
        <a href="Review.php">Review</a>
        <a href="Contact _us.php">Contact us</a>

        <div class="search-container">
            <form>
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><img src="images/Searchimage.jpg" width="17px" height="17px"></button>
            </form>
        </div>
    </div>
</header>