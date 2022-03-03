<?php
include __DIR__ . "/../../../functions/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = delete($conn, "news", $id);
    if ($result) {
        addSuccessToSession("db", "تم الحذف بنجاح");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("news/index.php"));
} else {
    redirect(getpage("news/index.php"));
}
