<?php

include __DIR__ . "/../../../functions/function.php";

if (isset($_POST['name'])) {


    $name = $_POST['name'];
    validateEmpty($name, "name", "error in name ", getpage("chefs/create.php"));

    $is_image = validateImage('image', "error in image ", getpage("chefs/create.php"));
    if ($is_image == true) {

        $image = upoalImage('image', 'chef', 'chef');


        if ($image == false) {
            addErrorsToSession('image', 'Error In Uploading The Image');
            header("location:getpage('chefs/create.php')");
        }
    }

    $job = $_POST['job'];
    validateEmpty($job, "job", "error in job ", getpage("chefs/create.php"));

    $facebook = $_POST['facebook'];
   // lunk($facebook, "facebook", "error in facebook ", getpage("chefs/create.php"));

    $twitter = $_POST['twitter'];
  //  lunk($twitter, "twitter", "error in twitter ", getpage("chefs/create.php"));

    $linked_in = $_POST['linked_in'];
  //  lunk($linked_in, "linked_in", "error in linked_in ", getpage("chefs/create.php"));



    $data = array(
        "name" => $name,
        "image" => $image,
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
