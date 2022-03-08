<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['title'])) {

    $title = $_POST['title'];
    validateEmpty($title, "title", "error in title ", getpage("gallary/create.php"));

    //image
    $is_valid = validateImage("image", "error in image ", getpage("gallary/create.php"));
    if ($is_valid == true) {
        $image = upoalImage("image", "gallary", "gallary");
        if ($image == false) {
            addErrorsToSession("image", "Error In Uploading The Image");
            header(getpage('gallary/create.php'));
        }
    }

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
