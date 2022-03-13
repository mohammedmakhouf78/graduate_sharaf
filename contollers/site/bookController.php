<?php

include __DIR__ . "/../../functions/function.php";


if (isset($_POST['people_number'])) {

    $people_number = $_POST['people_number'];
    validateEmpty($people_number, "people_number", "error in name ", getPageSite("index.php"));

    $date = $_POST['date'];
    validateEmpty($date, "date", "error in date ", getPageSite("index.php"));


    $time = $_POST['time'];
    validateEmpty($time, "time", "error in time ", getPageSite("index.php"));


    $user_id = $_SESSION['user']['id'];


    $table_id = $_POST['table_id'];

    $data = array(
        "people_number" => $people_number,
        "date" => $date,
        "time" => $time,
        "user_id" => $user_id,
        "table_id" => $table_id,
    );


    $result = insert($conn, "books", $data);

    if ($result) {
        addSuccessToSession("db", "books Inserted Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getPageSite("index.php"));
} else {

    redirect(getPageSite("index.php"));
}
