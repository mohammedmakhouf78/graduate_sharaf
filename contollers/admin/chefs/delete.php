<?php
include __DIR__ . "/../../../functions/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $oldImage = selectWhere($conn, "chefs", "image", "id = $id")[0]["image"];
    $result = delete($conn, "chefs", $id);
    if ($result) {
        deletImage("chef", $oldImage);
        addSuccessToSession("db", "تم الحذف بنجاح");
    } else {
        addErrorsToSession("db", "خطأ في الحذف");
    }

    redirect(getpage("chefs/index.php"));
} else {
    redirect(getpage("chefs/index.php"));
}
