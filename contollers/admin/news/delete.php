<?php
include __DIR__ . "/../../../functions/function.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    $oldImage = selectWhere($conn, "news", "image", "id = $id")[0]["image"];
    $result = delete($conn, "news", $id);

    if ($result) {
        
        deletImage("news", $oldImage);
        addSuccessToSession("db", "تم الحذف بنجاح");
    } else {
        addErrorsToSession("db", "there was an error sorry ");
    }

    redirect(getpage("news/index.php"));
} else {
    redirect(getpage("news/index.php"));
}
