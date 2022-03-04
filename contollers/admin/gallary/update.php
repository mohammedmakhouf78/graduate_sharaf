<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['title'])) {

    $id = $_POST['id'];

    $title = $_POST['title'];
    validateEmpty($title, "title", "error in title ", getpage("gallary/index.php"));

    $image = $_POST['image'];
    validateEmpty($image, "image", "error in image ", getpage("gallary/index.php"));


    $data = array(
        "title" => $title,
        "image" => $image,
    );


    $result =  updata($conn, "gallary", $data, $id);


    if ($result) {
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("gallary/index.php"));
} else {

    redirect(getpage("gallary/index.php"));
}
