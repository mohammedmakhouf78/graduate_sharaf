<?php

include __DIR__ . "/../../../functions/function.php";



if (isset($_POST['name'])) {

    $id = $_POST['id'];


    $oldImage = selectWhere($conn, 'chefs', 'image', "id= $id")[0]['image'];



    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("chefs/index.php"));



    if (!empty($_FILES['image']['name'])) {
        $is_image = validateImage('image', "error in image ", getpage("chefs/create.php"));

        if ($is_image == true) {


            $image = upoalImage('image', 'chef', 'chef');
            if ($image == false) {
                addErrorsToSession('image', 'Error In Uploading The Image');
                header("location:getpage('chefs/create.php')");
            }
        }
    } else {

        $image = "";
    }


    $job = $_POST['job'];
    validateString($job, "job", "error in job ", getpage("chefs/index.php"));

    $facebook = $_POST['facebook'];
    lunk($facebook, "facebook", "error in facebook ", getpage("chefs/index.php"));

    $twitter = $_POST['twitter'];
    lunk($twitter, "twitter", "error in twitter ", getpage("chefs/index.php"));

    $linked_in = $_POST['linked_in'];
    lunk($linked_in, "linked_in", "error in linked_in ", getpage("chefs/index.php"));

    if ($image == "") {
        $data = array(
            "name" => $name,
            "job" => $job,
            "facebook" => $facebook,
            "twitter" => $twitter,
            "linked_in" => $linked_in,
        );
    } else {



        $data = array(
            "name" => $name,
            "image" => $image,
            "job" => $job,
            "facebook" => $facebook,
            "twitter" => $twitter,
            "linked_in" => $linked_in,
        );
    }


    $result =  updata($conn, "chefs", $data, $id);



    if ($result) {
        if ($image != "") {
            deletImage("chef", $oldImage);
        }
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في التعديل ");
    }

    redirect(getpage("chefs/index.php"));
} else {

    redirect(getpage("chefs/index.php"));
}
