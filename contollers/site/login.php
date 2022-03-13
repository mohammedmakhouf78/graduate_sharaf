<?php
include __DIR__ . "/../../functions/function.php";
if (isset($_POST['email'])) {

    $email = $_POST['email'];

    $password = $_POST['password'];

    $users = select($conn, "users", "*");

    foreach ($users as $user) {
        if ($user["email"] == $email && password_verify($password, $user["password"])) {
            if($user['is_admin'] == true)
            {
                $_SESSION["admin"] = [
                    'id' => $user['id'],
                    "user" => $user["name"],
                    "email" => $user["email"],
                ];
            }
            else
            {
                $_SESSION["user"] = [
                    'id' => $user['id'],
                    "user" => $user["name"],
                    "email" => $user["email"],
                ];
            }

            redirect(getPageSite('index.php'));
        } else {
            addErrorsToSession("login", "There Is Not Such User");
            redirect(getPageSite('auth/login.php'));
        }
    }
}
