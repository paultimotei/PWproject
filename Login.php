<?php
session_start();
?>
	<html>
        <head>
            <meta charset="utf-8">
            <title> Login Form </title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <div class="title"><h1>Login</h1></div>
                <div class="container">
                    <div class="left"></div>
                    <div class="right">
                        <form class="formBox" action="includes/login.inc.php" method="POST">
                                <p>Username</p>
                               <input type="text" name="username" placeholder="text">
                               <p> Password</p>
                               <input type="Password" name="pwd" placeholder=".....">
                               <input type="submit" name="submit" value="Submit">
                               <a href="#">Forgot Password</a>
                            </form>
                        </div>
                    </div>
                </div>
        </body>
    </html>