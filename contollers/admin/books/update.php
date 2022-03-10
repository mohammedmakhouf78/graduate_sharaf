<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['people_number'])) {

    $id = $_POST['id'];

    $people_number = $_POST['people_number'];
    validateEmpty($people_number, "people_number", "error in name ", getpage("categories/create.php"));

    $date = $_POST['date'];
    validateEmpty($date, "date", "error in date ", getpage("categories/create.php"));


    $time = $_POST['time'];
    validateEmpty($time, "time", "error in time ", getpage("categories/create.php"));


    $user_id = $_POST['user_id'];


    $table_id = $_POST['table_id'];




    $data = array(
        "people_number" => $people_number,
        "date" => $date,
        "time" => $time,
        "user_id" => $user_id,
        "table_id" => $table_id,

    );





    $result =  updata($conn, "books", $data, $id);

    if ($result) {


        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("books/index.php"));
} else {

    redirect(getpage("books/index.php"));
}
