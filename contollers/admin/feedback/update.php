<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $id = $_POST['id'];

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("feedback/index.php"));

    $job = $_POST['job'];
    validateEmpty($job, "job", "error in job ", getpage("feedback/index.php"));

    $message = $_POST['message'];
    validateEmpty($message, "message", "error in message ", getpage("feedback/index.php"));







    $data = array(
        "name" => $name,
        "job" => $job,
        "message" => $message,
    );


    $result =  updata($conn, "feedback", $data, $id);


    if ($result) {
        addSuccessToSession("db", "تم التعديل بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في التعديل ");
    }

    redirect(getpage("feedback/index.php"));
} else {

    redirect(getpage("feedback/index.php"));
}
