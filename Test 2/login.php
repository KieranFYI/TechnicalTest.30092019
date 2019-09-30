<?php

$error = false;

// Check if the user is attempting to login
if (isset($_POST['login'])) {

    // Get the user class for the required methods
    require_once('./User.php');
    if (User::Login($_POST['username'], $_POST['password'])) {
        // If the user is successful, redirect them
        header('location: ./loggedin.html');
        exit;
    }

    $error = true;
}

?><html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <div id="loginForm">
            <form action="./login.php" method="post">
                <?php if ($error) { ?>
                    <div id="error">
                    Invalid username and/or password.
                    </div>
                <?php } ?>
                <label>
                    Username
                    <input type="text" name="username" placeholder="Username">
                </label>
                <label>
                    Password
                    <input type="text" name="password" placeholder="Password">
                </label>

                <input type="submit" value="Login" name="login">
            </form>
        </div>

        <style>

            body {
                background-color: #373737;
                color: #ffffff;
                font-family:'Courier New', Courier, monospace;
            }
            
            #loginForm {
                width: 250px;
                margin: 150 auto;
                background-color: #8d8d8d;
                border: 1px solid #636363;
                padding: 5px;
                border-radius: 5px;
            }

            #loginForm label {
                display: block;
                font-size: 17px;
            }

            #loginForm label:not(:first-child),
            #loginForm input[type="submit"] {
                margin-top: 15px;
            }

            #loginForm label input,
            #loginForm input[type="submit"] {
                display: block;
                padding: 5px;
                width: 100%;
            }

            #loginForm label input {
                font-size: 13px;
            }

            #loginForm input[type="submit"] {
                font-size: 20px;
            }

            #loginForm #error {
                color: #ff0000;
                text-align: center;
                font-weight: bold;
            }

        </style>
    </body>
</html>