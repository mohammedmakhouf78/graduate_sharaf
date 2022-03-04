<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("chefs/create.php"));

    $imges = $_POST['imges'];
    imges($imges, "imges", "error in imges ", getpage("chefs/create.php"));

    $job = $_POST['job'];
    validateString($job, "job", "error in job ", getpage("chefs/create.php"));

    $facebook = $_POST['facebook'];
    lunk($facebook, "facebook", "error in facebook ", getpage("chefs/create.php"));

    $twitter = $_POST['twitter'];
    lunk($twitter, "twitter", "error in twitter ", getpage("chefs/create.php"));

    $linked_in = $_POST['linked_in'];
    lunk($linked_in, "linked_in", "error in linked_in ", getpage("chefs/create.php"));



    $data = array(
        "name" => $name,
        "image" => $imges,
        "job" => $job,
        "facebook" => $facebook,
        "twitter" => $twitter,
        "linked_in" => $linked_in,
    );

    $result = insert($conn, "chefs", $data);



    if ($result) {
        addSuccessToSession("db", "chefs Inserted Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }
    redirect(getpage("chefs/create.php"));
} else {

    redirect(getpage("chefs/create.php"));
}
