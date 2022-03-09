<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("food/create.php"));
   
    $price = $_POST['price'];
    validateEmpty($price, "price", "error in price ", getpage("food/create.php"));

    $category_id = $_POST['category_id'];

    
  
    $data = array(
        "name" => $name,
        "price" => $price,
        "category_id" => $category_id,
        
    );
  

    $result = insert($conn, "food", $data);

    if ($result) {
        addSuccessToSession("db", "food Inserted Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("food/create.php"));
} else {

    redirect(getpage("food/create.php"));
}
