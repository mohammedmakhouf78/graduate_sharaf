<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("message/create.php"));

    $lastname = $_POST['lastname'];
    validatelast($lastname, "lastname", "error in name ", getpage("message/create.php"));

    $email = $_POST['email'];
    validateEmail($email, "email", "error in email ", getpage("message/create.php"));

    $phone = $_POST['phone'];
    validatePhone($phone, "phone", "error in phone ", getpage("message/create.php"));

    $message = $_POST['message'];
    validateMessage($message, "message", "error in message ", getpage("message/create.php"));


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

    redirect(getpage("message/create.php"));
} else {

    redirect(getpage("message/create.php"));
}
