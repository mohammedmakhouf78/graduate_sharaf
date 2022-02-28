<?php
include __DIR__ . "/../../../functions/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = delete($conn, "users", $id);
    if ($result) {
        addSuccessToSession("db", "Users delete Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("users/index.php"));
} else {
    redirect(getpage("users/index.php"));
}
