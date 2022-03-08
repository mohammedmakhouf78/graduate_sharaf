<?php
include __DIR__ . "/../../../functions/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = delete($conn, "food", $id);
    if ($result) {
        addSuccessToSession("db", "تم الحذف بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في الحذف");
    }

    redirect(getpage("food/index.php"));
} else {
    redirect(getpage("food/index.php"));
}
