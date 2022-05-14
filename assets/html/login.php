<?php
include("../../app/controllers/users.php");
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Registration Page</title>
    <link rel="stylesheet" href="../css/style_login.css?6712">


</head>

<body>
    <a href="../html/index.php">
        <div class="home_botton_on_the_top" style="display: flex;">
            <div></div>
            <div><img src="../images/backToTop.png" alt="homeicon" height="50px" class="home_icon_on_button_on_top">
            </div>
            <div class="home_text_on_button_on_top">HOME </div>
        </div>
    </a>
    <main>
        <section class="user">
            <div class="user_options-container">
                <div class="user_options-text">
                    <div class="user_options-unregistered">
                        <h2 class="user_unregistered-title">Don't have an account?</h2>
                        <p class="user_unregistered-text"> Sign up to have amazing deals </p>
                        <button class="user_unregistered-signup" id="signup-button">Sign up</button>
                    </div>

                    <div class="user_options-registered">
                        <h2 class="user_registered-title">Have an account?</h2>
                        <p class="user_registered-text">Log in to access your account</p>
                        <button class="user_registered-login" id="login-button">Login</button>
                    </div>
                </div>

                <div class="user_options-forms" id="user_options-forms">
                    <div class="user_forms-login">
                        <h2 class="forms_title">Login</h2>
                        <form class="forms_form" action="login.php" method="POST">
                            <fieldset class="forms_fieldset">
                                <div class="forms_field">
                                    <input type="email" placeholder="Email" name="email" class="forms_field-input" required autofocus />
                                </div>
                                <div class="forms_field">
                                    <input type="password" placeholder="Password" name="password" class="forms_field-input" required />
                                </div>
                            </fieldset>
                            <div class="forms_buttons">
                                <input type="submit" value="signin" name='login-btn' class="forms_buttons-action">
                            </div>
                        </form>
                    </div>
                    <div class="user_forms-signup">
                        <h2 class="forms_title">Sign Up</h2>
                        <form class="forms_form" action="login.php" method="POST">
                            <fieldset class="forms_fieldset">
                                <div class="forms_field">
                                    <input type="text" name="username" placeholder="Full Name" class="forms_field-input" required />
                                </div>
                                <div class="forms_field">
                                    <input type="email" name="email" placeholder="Email" class="forms_field-input" required />
                                </div>
                                <div class="forms_field">
                                    <input type="password" name="password" placeholder="Password" class="forms_field-input" required />
                                </div>

                            </fieldset>
                            <div class="forms_buttons">
                                <input type="submit" value="signup" name="register-btn" class="forms_buttons-action">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script src="../js/login.js">

    </script>

    <footer></footer>
</body>

</html>