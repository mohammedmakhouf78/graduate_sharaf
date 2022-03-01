<?php
include __DIR__ . "/../../../functions/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = delete($conn, "about", $id);
    if ($result) {
        addSuccessToSession("db", "about delete Successfully");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("about/index.php"));
} else {
    redirect(getpage("about/index.php"));
}
