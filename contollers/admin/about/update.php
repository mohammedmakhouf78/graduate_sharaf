<?php

include __DIR__ . "/../../../functions/function.php";



if (isset($_POST['address'])) {



    $id = $_POST['id'];


    $address = $_POST['address'];
    validateEmpty($address, "address", "error in address ", getpage("about/edit.php"));

    $phone = $_POST['phone'];
    validateEmpty($phone, "phone", "error in phone ", getpage("about/edit.php"));


    $email = $_POST['email'];
    validateEmail($email, "email", "error in email ", getpage("about/index.php"));

    $open = $_POST['open'];
    validateEmpty($open, "open", "error in open ", getpage("about/edit.php"));

    $close = $_POST['close'];
    validateEmpty($close, "close", "error in close ", getpage("about/edit.php"));


    $data = array(
        "address" => $address,
        "email" => $email,
        "phone" => $phone,
        "open" => $open,
        "close" => $close,

    );


    $result =  updata($conn, "about", $data, $id);

    if ($result) {
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("about/index.php"));
} else {

    redirect(getpage("about/index.php"));
}
