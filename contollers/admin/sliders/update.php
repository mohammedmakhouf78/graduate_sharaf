<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['title'])) {

    $id = $_POST['id'];


    $oldImage = selectWhere($conn, 'sliders', 'image', "id= $id")[0]['image'];



    if (!empty($_FILES['imges']['name'])) {


        $is_image = validateImage('imges', "error in image ", getpage("sliders/create.php"));

        if ($is_image == true) {


            $image = upoalImage('imges', 'sliders', 'sliders');
            if ($image == false) {
                addErrorsToSession('image', 'Error In Uploading The Image');
                header("location:getpage('sliders/create.php')");
            }
        }
    } else {

        $image = "";
    }

    $title = $_POST['title'];
    validateMessage($title, "title", "error in title ", getpage("sliders/index.php"));


    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description ", getpage("sliders/index.php"));

    $discount = $_POST['discount'];
    validateflot($discount, "discount", "error in discount ", getpage("sliders/index.php"));


    if ($image == "") {
        $data = array(
            "title" => $title,
            "description" => $description,
            "discount" => $discount,
        );
    } else {



        $data = array(
            "image" => $image,
            "title" => $title,
            "description" => $description,
            "discount" => $discount,

        );
    }



    $result =  updata($conn, "sliders", $data, $id);



    if ($result) {
        if ($image != "") {
            deletImage("sliders", $oldImage);
        }
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في التعديل ");
    }


    redirect(getpage("sliders/index.php"));
} else {

    redirect(getpage("sliders/index.php"));
}
