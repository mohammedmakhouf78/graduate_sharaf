<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $id = $_POST['id'];
    $oldImage = selectWhere($conn, "news", "image", "id = $id")[0]["image"];

    $name = $_POST['name'];
    validateEmpty($name, "name", "error in name ", getpage("news/index.php"));

    //image
    if (!empty($_FILES["image"]["name"])) {

        $is_valid = validateImage("image", "error in image ", getpage("news/index.php"));
        if ($is_valid == true) {
            $image = upoalImage("image", "news", "news");
            if ($image == false) {
                addErrorsToSession("image", "Error In Uploading The Image");
                redirect(getpage('news/index.php'));
            }
        }
    } else {

        $image = "";
    }

    $date = $_POST['date'];
    validateEmpty($date, "date", "error in date ", getpage("news/index.php"));

    $title = $_POST['title'];
    validateEmpty($title, "title", "error in title ", getpage("news/index.php"));

    $description = $_POST['description'];
    validateEmpty($description, "description", "error in description ", getpage("news/index.php"));


    if ($image == "") {

        $data = array(
            "name" => $name,
            "date" => $date,
            "title" => $title,
            "description" => $description,
        );
    } else {

        $data = array(
            "name" => $name,
            "image" => $image,
            "date" => $date,
            "title" => $title,
            "description" => $description,
        );
    }



    $result =  updata($conn, "news", $data, $id);


    if ($result) {

        if ($image != "") {
            $oldImage = getImageRoot("news/$oldImage");
            if( file_exists($oldImage)){
                unlink($oldImage);
           
            }

            
        }
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("news/index.php"));
} else {

    redirect(getpage("news/index.php"));
}
