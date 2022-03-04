<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['imges'])) {

    $imges = $_POST['imges'];
    imges($imges, "image", "error in image ", getpage("sliders/create.php"));

    $title = $_POST['title'];
    validateMessage($title, "title", "error in title ", getpage("sliders/create.php"));


    $description = $_POST['description'];
    validateMessage($description, "description", "error in description ", getpage("sliders/create.php"));

    $discount = $_POST['discount'];
    validateflot($discount, "discount", "error in discount ", getpage("sliders/create.php"));


    $data = array(
        "image" => $imges,
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
