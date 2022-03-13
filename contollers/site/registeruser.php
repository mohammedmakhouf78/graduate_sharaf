<?php

include __DIR__ . "/../../functions/function.php";


if (isset($_POST['name'])) {

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getPageSite("auth/registeruser.php"));

    $email = $_POST['email'];
    validateEmail($email, "email", "error in email ", getPageSite("auth/registeruser.php"));

    $password = $_POST['password'];
    validatePassword($password, "password", getPageSite("auth/registeruser.php"));





    $data = array(
        "name" => $name,
        "email" => $email,
        "password" => password_hash($password, PASSWORD_DEFAULT),
        "is_admin" => 0,
    );

    $result = insert($conn, "users", $data);

    redirect(getPageSite("index.php"));
} else {

    redirect(getPageSite("auth/registeruser.php"));
}
