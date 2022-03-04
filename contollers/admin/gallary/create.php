<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['title'])) {

    $title = $_POST['title'];
    validateEmpty($title, "title", "error in title ", getpage("gallary/create.php"));

    $image = $_POST['image'];
    validateEmpty($image, "image", "error in image ", getpage("gallary/create.php"));


    $data = array(
        "title" => $title,
        "image" => $image,
    );

    $result = insert($conn, "gallary", $data);

    if ($result) {
        addSuccessToSession("db", "gallary Inserted Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("gallary/create.php"));
} else {

    redirect(getpage("gallary/create.php"));
}
