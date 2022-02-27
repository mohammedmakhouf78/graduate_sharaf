<?php
include __DIR__ . "/../../../functions/backFunctions.php";
include __DIR__ . "/../../../functions/function.php";
include __DIR__ . "/../../../functions/DBFunctions.php";



if (isset($_POST['name'])) {

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("users/create.php"));

    $email = $_POST['email'];
    validateEmail($email, "email", "error in email ", getpage("users/create.php"));

    $password = $_POST['password'];
    validatePassword($password, "password", getpage("users/create.php"));


    $is_admin = $_POST['is_admin'] ?? 0;


    $data = array(
        "name" => $name,
        "email" => $email,
        "password" => password_hash($password, PASSWORD_DEFAULT),
        "is_admin" => $is_admin,
    );

    $result = insert($conn, "users", $data);

    if ($result) {
        addSuccessToSession("db", "Users Inserted Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("users/create.php"));
} else {

    redirect(getpage("users/create.php"));
}
