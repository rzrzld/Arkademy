<?php
function is_username_valid($username)
{
    $user = "/^[a-zA-Z]([a-zA-Z0-9]){5,9}/";

    if (preg_match($user, $username)) {
        echo "true<br>";
    }
    else {
        echo "false<br>";
    }
}

function is_password_valid($password)
{
    $pass = "/^([a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*()=]).{8,}$/";

    if (preg_match($pass, $password)) {
        echo "true<br>";
    }
    else {
        echo "false<br>";
    }
}

is_username_valid("Xrutaf888");
is_username_valid("1Diana");
is_password_valid("passW0rd=");
is_password_valid("C0d3YourFuture!#");