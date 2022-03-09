<?php
include __DIR__ . "/../../../functions/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $oldImage = selectWhere($conn, "categories", "image", "id = $id")[0]["image"];
    $result = delete($conn, "categories", $id);
    if ($result) {
        deletImage("categories", $oldImage);
        addSuccessToSession("db", "تم الحذف بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في الحذف");
    }

    redirect(getpage("categories/index.php"));
} else {
    redirect(getpage("categories/index.php"));
}
