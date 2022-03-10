<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['chairs'])) {

    $chairs = $_POST['chairs'];
    validateEmpty($chairs, "chairs", "error in chairs ", getpage("tables/create.php"));


    $is_booked = $_POST['is_booked'] ?? 0;


    $data = array(
        "chairs" => $chairs,
        "is_booked" => $is_booked,
    );

    $result = insert($conn, "tables", $data);

    if ($result) {
        addSuccessToSession("db", "tables Inserted Successfully");
    } else {
        addErrorsToSession("db", "tables was an error sorry ");
    }

    redirect(getpage("tables/create.php"));
} else {

    redirect(getpage("tables/create.php"));
}
