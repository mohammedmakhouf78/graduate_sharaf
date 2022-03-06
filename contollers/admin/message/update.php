<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $id = $_POST['id'];

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("message/index.php"));

    $lastname = $_POST['lastname'];
    validatelast($lastname, "lastname", "error in name ", getpage("message/index.php"));

    $email = $_POST['email'];
    validateEmail($email, "email", "error in email ", getpage("message/index.php"));

    $phone = $_POST['phone'];
    validatePhone($phone, "phone", "error in phone ", getpage("message/index.php"));

    $message = $_POST['message'];
    validateEmpty($message, "message", "error in message ", getpage("message/index.php"));


    $is_admin = $_POST['is_admin'] ?? 0;


    $data = array(
        "first_name" => $name,
        "last_name" => $lastname,
        "email" => $email,
        "phone" => $phone,
        "message" => $message,
    );


    $result =  updata($conn, "messages", $data, $id);


    if ($result) {
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في التعديل ");
    }

    redirect(getpage("message/index.php"));
} else {

    redirect(getpage("message/index.php"));
}
