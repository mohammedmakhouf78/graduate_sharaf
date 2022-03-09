<?php
include __DIR__ . "/../../../functions/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $oldImage = selectWhere($conn, "gallary", "image", "id = $id")[0]["image"];
    $result = delete($conn, "gallary", $id);

    if ($result) {

        deletImage("gallary", $oldImage);
        addSuccessToSession("db", "تم الحذف بنجاح");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("gallary/index.php"));
} else {
    redirect(getpage("gallary/index.php"));
}
