<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $id = $_POST['id'];

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("food/index.php"));

    $price = $_POST['price'];
    validateEmpty($price, "price", "error in price ", getpage("food/index.php"));


    $category_id = $_POST['category_id'];


   


    $data = array(
        "name" => $name,
        "price" => $price,
       "category_id"=>$category_id
    );


    $result =  updata($conn, "food", $data, $id);


    if ($result) {
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في التعديل ");
    }

    redirect(getpage("food/index.php"));
} else {

    redirect(getpage("food/index.php"));
}
