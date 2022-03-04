<?php
include __DIR__ . "/../../../functions/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = delete($conn, "sliders", $id);
    if ($result) {
        addSuccessToSession("db", "تم الحذف بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في الحذف");
    }

    redirect(getpage("sliders/index.php"));
} else {
    redirect(getpage("sliders/index.php"));
}
