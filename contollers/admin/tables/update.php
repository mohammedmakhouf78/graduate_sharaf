<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['chairs'])) {

    $id = $_POST['id'];

    $chairs = $_POST['chairs'];
    validateEmpty($chairs, "chairs", "error in chairs ", getpage("tables/create.php"));


    $is_booked = $_POST['is_booked'] ?? 0;


    $data = array(
        "chairs" => $chairs,
        "is_booked" => $is_booked,
    );


    $result =  updata($conn, "tables", $data, $id);



    if ($result) {
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في التعديل ");
    }

    redirect(getpage("tables/index.php"));
} else {

    redirect(getpage("tables/index.php"));
}
