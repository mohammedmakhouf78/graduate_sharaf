<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $id = $_POST['id'];
    $oldImage = selectWhere($conn, "categories", "image", "id = $id")[0]["image"];

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("categories/index.php"));

    //image
    if (!empty($_FILES["image"]["name"])) {

        $is_valid = validateImage("image", "error in image ", getpage("categories/index.php"));
        if ($is_valid == true) {
            $image = upoalImage("image", "categories", "categories");
            if ($image == false) {
                addErrorsToSession("image", "Error In Uploading The Image");
                redirect(getpage('categories/index.php'));
            }
        }
    } else {

        $image = "";
    }



    if ($image == "") {

        $data = array(
            "name" => $name,
        );
    } else {

        $data = array(
            "name" => $name,
            "image" => $image,
        );
    }


    $result =  updata($conn, "categories", $data, $id);

    if ($result) {

        if ($image != "") {
            $oldImage = getImageRoot("categories/$oldImage");
            if( file_exists($oldImage)){
                unlink($oldImage);
           
            }

            
        }
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("categories/index.php"));
} else {

    redirect(getpage("categories/index.php"));
}
