<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['image'])) {

    $id = $_POST['id'];

    $image = $_POST['image'];
    imges($name, "name", "error in name ", getpage("sliders/create.php"));

    $titel = $_POST['titel'];
    validateMessage($titel, "titel", "error in titel ", getpage("sliders/create.php"));


    $description = $_POST['description'];
    validatePhone($phone, "description", "error in description ", getpage("sliders/create.php"));

    $discount = $_POST['discount'];
    validateMessage($discount, "discount", "error in discount ", getpage("sliders/create.php"));


    $data = array(
        "image" => $image,
        "titel" => $titel,
        "description" => $description,
        "discount" => $discount,

    );

    $result = insert($conn, "sliders", $data);



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
