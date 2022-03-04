<?php
include __DIR__ . "/../../../functions/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = delete($conn, "chefs", $id);
    if ($result) {
        addSuccessToSession("db", "تم الحذف بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في الحذف");
    }

    redirect(getpage("chefs/index.php"));
} else {
    redirect(getpage("chefs/index.php"));
}
