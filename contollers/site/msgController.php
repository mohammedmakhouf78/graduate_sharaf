<?php

include __DIR__ . "/../../functions/function.php";


if (isset($_POST['first_name'])) {

    $name = $_POST['first_name'];
    validateEmpty($name, "name", "error in name ", getPageSite("index.php"));

    $lastname = $_POST['last_name'];
    validateEmpty($lastname, "lastname", "error in name ", getPageSite("index.php"));

    $email = $_POST['email'];
    validateEmpty($email, "email", "error in email ", getPageSite("index.php"));

    $phone = $_POST['phone'];
    validateEmpty($phone, "phone", "error in phone ", getPageSite("index.php"));

    $message = $_POST['message'];
    validateEmpty($message, "message", "error in message ", getPageSite("index.php"));


    $data = array(
        "first_name" => $name,
        "last_name" => $lastname,
        "email" => $email,
        "phone" => $phone,
        "message" => $message,
    );

    $result = insert($conn, "messages", $data);



    if ($result) {
        addSuccessToSession("db", "message Inserted Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getPageSite("index.php"));
} else {

    redirect(getPageSite("index.php"));
}
