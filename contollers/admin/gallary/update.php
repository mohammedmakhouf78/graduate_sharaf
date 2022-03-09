<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['title'])) {

    $id = $_POST['id'];
    $oldImage = selectWhere($conn, "gallary", "image", "id = $id")[0]["image"];

    $title = $_POST['title'];
    validateEmpty($title, "title", "error in title ", getpage("gallary/index.php"));

    //image
    if (!empty($_FILES["image"]["name"])) {

        $is_valid = validateImage("image", "error in image ", getpage("gallary/index.php"));
        if ($is_valid == true) {
            $image = upoalImage("image", "gallary", "gallary");
            if ($image == false) {
                addErrorsToSession("image", "Error In Uploading The Image");
                redirect(getpage('gallary/index.php'));
            }
        }
    } else {

        $image = "";
    }


    if ($image == "") {

        $data = array(
            "title" => $title,

        );
    } else {

        $data = array(
            "title" => $title,
            "image" => $image,
        );
    }


    $result =  updata($conn, "gallary", $data, $id);


    if ($result) {

        if ($image != "") {
            deletImage("gallary", $oldImage);
        }
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("gallary/index.php"));
} else {

    redirect(getpage("gallary/index.php"));
}
