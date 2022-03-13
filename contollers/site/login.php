<?php
include __DIR__ . "/../../functions/function.php";
if (isset($_POST['email'])) {

    $email = $_POST['email'];

    $password = $_POST['password'];



    $users = select($conn, "users", "*");

    $user = selectWhere($conn, "users", "*", "id = 83")[0];









    foreach ($users as $user) {
        if ($user["email"] == $email && password_verify($password, $user["password"])) {

            $_SESSION["admin"] = [
                "user" => $user["name"],
                "email" => $user["email"],


            ];

            redirect(getPageSite('index.php'));
        } else {
            addErrorsToSession("login", "There Is Not Such User");
            redirect(getPageSite('auth/login.php'));
        }
    }
}
