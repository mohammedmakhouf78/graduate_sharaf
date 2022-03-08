<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("categories/create.php"));
    
    //image
    $is_valid = validateImage("image", "error in image ", getpage("categories/create.php"));
    if ($is_valid == true) {
        $image = upoalImage("image", "categories", "categories");
        if ($image == false) {
            addErrorsToSession("image", "Error In Uploading The Image");
            header(getpage('categories/create.php'));
        }
    }


    $data = array(
        "name" => $name,
        "image" => $image,

    );


    $result = insert($conn, "categories", $data);

    if ($result) {
        addSuccessToSession("db", "categories Inserted Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("categories/create.php"));
} else {

    redirect(getpage("categories/create.php"));
}
