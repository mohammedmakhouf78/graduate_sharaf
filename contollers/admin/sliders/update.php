<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['imges'])) {

    $id = $_POST['id'];

    $image = $_POST['imges'];
    imges($image, "imges", "error in imegs ", getpage("sliders/index.php"));

    $title = $_POST['title'];
    validateMessage($title, "title", "error in title ", getpage("sliders/index.php"));


    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description ", getpage("sliders/index.php"));

    $discount = $_POST['discount'];
    validateflot($discount, "discount", "error in discount ", getpage("sliders/index.php"));


    $data = array(
        "image" => $image,
        "title" => $title,
        "description" => $description,
        "discount" => $discount,

    );




    $result =  updata($conn, "sliders", $data, $id);



    if ($result) {
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في التعديل ");
    }


    redirect(getpage("sliders/index.php"));
} else {

    redirect(getpage("sliders/index.php"));
}
