<?php

include("../../app/database/db.php");


if (isset($_POST['register-btn'])) {

    $_POST['admin'] = 0;
    $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
    unset($_POST['register-btn'], $_POST['confirmpassword']);

    $user_id = create('user', $_POST);
    $user = selectOne('user', ['id' => $user_id]);

    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['email'] = $user['email'];
    header('location: ../../assets/html/user_page.php');
    exit();
}

if (isset($_POST['login-btn'])) {

    $user = selectOne('user', ['email' => $_POST['email']]);


    if ($user && password_verify($_POST['password'], $user['password'])) {
        $_SESSION['id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['admin'] = $user['admin'];
        $_SESSION['email'] = $user['email'];

        if ($_SESSION['admin'] === 1) {
            header('location: ../../assets/html/Adminphp.php');
        } else if ($_SESSION['admin'] === 0) {
            header('location: ../../assets/html/user_page.php');
        }
    } else {
        header('location: login.php');
    }
    exit();
}

if (isset($_POST['edt-btn'])) {
    unset($_POST['edt-btn']);
    update('user', $_SESSION['id'], $_POST);
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['email'] = $_POST['email'];
    header('location: user_page.php');
}
