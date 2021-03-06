<?php
include __DIR__ . "/../../../functions/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $oldImage = selectWhere($conn, "sliders", "image", "id = $id")[0]["image"];

    $result = delete($conn, "sliders", $id);
    if ($result) {
        deletImage("sliders", $oldImage);
        addSuccessToSession("db", "تم الحذف بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في الحذف");
    }

    redirect(getpage("sliders/index.php"));
} else {
    redirect(getpage("sliders/index.php"));
}
