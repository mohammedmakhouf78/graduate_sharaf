<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $id = $_POST['id'];

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("users/index.php"));

    $email = $_POST['email'];
    validateEmail($email, "email", "error in email ", getpage("users/index.php"));

    $password = $_POST['password'];
    validatePassword($password, "password", getpage("users/index.php"));


    $is_admin = $_POST['is_admin'] ?? 0;


    $data = array(
        "name" => $name,
        "email" => $email,
        "password" => password_hash($password, PASSWORD_DEFAULT),
        "is_admin" => $is_admin,
    );


    $result =  updata($conn, "users", $data, $id);


    if ($result) {
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("users/index.php"));
} else {

    redirect(getpage("users/index.php"));
}
