<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $id = $_POST['id'];


    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("chefs/index.php"));

    $imges = $_POST['imges'];
    imges($imges, "imges", "error in imges ", getpage("chefs/index.php"));

    $job = $_POST['job'];
    validateString($job, "job", "error in job ", getpage("chefs/index.php"));

    $facebook = $_POST['facebook'];
    lunk($facebook, "facebook", "error in facebook ", getpage("chefs/index.php"));

    $twitter = $_POST['twitter'];
    lunk($twitter, "twitter", "error in twitter ", getpage("chefs/index.php"));

    $linked_in = $_POST['linked_in'];
    lunk($linked_in, "linked_in", "error in linked_in ", getpage("chefs/index.php"));



    $data = array(
        "name" => $name,
        "image" => $imges,
        "job" => $job,
        "facebook" => $facebook,
        "twitter" => $twitter,
        "linked_in" => $linked_in,
    );

    $result =  updata($conn, "chefs", $data, $id);


    if ($result) {
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في التعديل ");
    }

    redirect(getpage("chefs/index.php"));
} else {

    redirect(getpage("chefs/index.php"));
}
