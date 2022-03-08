<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $name = $_POST['name'];
    validateEmpty($name, "name", "error in name ", getpage("news/create.php"));

    //image
    $is_valid = validateImage("image", "error in image ", getpage("news/create.php"));
    if ($is_valid == true) {
        $image = upoalImage("image", "news", "news");
        if ($image == false) {
            addErrorsToSession("image", "Error In Uploading The Image");
            header(getpage('news/create.php'));
        }
    }

    $date = $_POST['date'];
    validateEmpty($date, "date", "error in date ", getpage("news/create.php"));

    $title = $_POST['title'];
    validateEmpty($title, "title", "error in title ", getpage("news/create.php"));

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description ", getpage("news/create.php"));


    $data = array(
        "name" => $name,
        "image" => $image,
        "date" => $date,
        "title" => $title,
        "description" => $description,
    );

    $result = insert($conn, "news", $data);

    if ($result) {
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("news/create.php"));
} else {

    redirect(getpage("news/create.php"));
}
