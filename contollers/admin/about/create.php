<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['address'])) {



    $address = $_POST['address'];
    validateEmpty($address, "address", "error in address ", getpage("about/create.php"));

    $phone = $_POST['phone'];
    validateEmpty($phone, "phone", "error in phone ", getpage("about/create.php"));

    $email = $_POST['email'];
    validateEmail($email, "email", "error in email ", getpage("about/create.php"));

    $open = $_POST['open'];
    validateEmpty($open, "open", "error in open ", getpage("about/create.php"));

    $close = $_POST['close'];
    validateEmpty($close, "close", "error in close ", getpage("about/create.php"));
   

    $data = array(
        "address" => $address,
        "email" => $email,
        "phone" => $phone,
        "open" => $open,
        "close" => $close,

    );


    $result = insert($conn, "about", $data);

    if ($result) {
        addSuccessToSession("db", "about Inserted Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("about/create.php"));
} else {

    redirect(getpage("about/create.php"));
}
