<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("food/create.php"));
   
    $price = $_POST['price'];
    validateEmpty($price, "price", "error in price ", getpage("food/create.php"));

    
  
    $data = array(
        "name" => $name,
        "price" => $price,
        
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
