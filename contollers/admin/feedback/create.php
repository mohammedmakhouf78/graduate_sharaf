<?php

include __DIR__ . "/../../../functions/function.php";


if (isset($_POST['name'])) {

    $name = $_POST['name'];
    validateString($name, "name", "error in name ", getpage("feedback/create.php"));

    $job = $_POST['job'];
    validateEmpty($job, "job", "error in job ", getpage("feedback/create.php"));

    $message = $_POST['message'];
    validateEmpty($message, "message", "error in message ", getpage("feedback/create.php"));

    $user_id = $_POST['user_id'];
   





    $data = array(
        "name" => $name,
        "job" => $job,
        "message" => $message,
        "user_id" => $user_id,
    );

    

    $result = insert($conn, "feedback", $data);

    if ($result) {
        addSuccessToSession("db", "feedback Inserted Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("feedback/create.php"));
} else {

    redirect(getpage("feedback/create.php"));
}
