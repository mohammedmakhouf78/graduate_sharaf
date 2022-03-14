<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['title'])) {



    $title = $_POST['title'];
    validateEmpty($title, "title", "error in title ", getpage("sliders/create.php"));

    $is_image = validateImage('imges', "error in image ", getpage("sliders/create.php"));


    if ($is_image == true) {

        $image = upoalImage('imges', 'sliders', 'sliders');
        if ($image == false) {
            addErrorsToSession('image', 'Error In Uploading The Image');
            header("location:getpage('sliders/create.php')");
        }
    }



    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description ", getpage("sliders/create.php"));

    $discount = $_POST['discount'];
    validateflot($discount, "discount", "error in discount ", getpage("sliders/create.php"));


    $data = array(
        "image" => $image,
        "title" => $title,
        "description" => $description,
        "discount" => $discount,

    );

    $result = insert($conn, "sliders", $data);



    if ($result) {
        addSuccessToSession("db", "sliders Inserted Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("sliders/create.php"));
} else {

    redirect(getpage("sliders/create.php"));
}
