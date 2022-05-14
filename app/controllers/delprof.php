<?php

include("../database/db.php");

// throw new Exception($_POST['delprof-btn']);
if (!isset($_POST['delprof-btn'])) {
    // throw new Exception("lo2l");

    delete('user', $_SESSION['email']);
    header('location: ../../assets/html/index.php');
    session_destroy();
}
