<?php
include("../../app/controllers/users.php");
?>
<html>

<head>
    <title>User Profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style_user_page.css">
</head>

<body style="background-image: url(../images/background.jpg);">
    <?php

    include("../../app/includes/headersection.php");

    ?>
    <hr style="border: 2px solid black; background-color: black;">




    </div>
    <form action="user_page.php" method="POST">
        <fieldset class="fieldsetcls" style="width:750px; height: 300px; position: absolute;">

            <legend style="color: rgb(145, 28, 28);"><b>User Details</b></legend>
            <div>
                <label class="textInsidetheclass"><b>First Name:</b></label>
                <input type="text" name="username" placeholder=<?php echo $_SESSION['username'] ?> required>
            </div>
            <br><br>
            <div>
                <label class="textInsidetheclass"><b>Email :</b></label>
                <input type="email" name="email" placeholder=<?php echo $_SESSION['email'] ?> required>
            </div>
            <br><br>
            <div style="padding-left: 200px;">
                <button type="submit" value="edit" name="edt-btn" class="edtBtn"><b>Edit Profile</b></button>
            </div>

        </fieldset>


    </form>
    <br>
    <div style="padding-left: 10px;">
        <img src="../images/userImage.jpg" height="300px" width="300px" style="border-radius: 150px;" />
        <hr style="opacity: 0;">
        <div style="padding-left: 40px;">
            <a href="<?php echo '../../app/controllers/logout.php'  ?>">
                <button type=button class="edtBtn"><b>Logout</b></button>
            </a>
            <a href="<?php echo '../../app/controllers/delprof.php' ?>">
                <button type=button class="edtBtn" name=delprof-btn><b>Delete Profile</b></button>
            </a>
        </div>
    </div>



    <br>
    <br><br>

    <?php

    include("../../app/includes/footersection.php");

    ?>



</body>



</html>