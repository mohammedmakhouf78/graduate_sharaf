<?php
include __DIR__ . "/../../../functions/function.php";
if (isset($_POST['email'])) {

    $email = $_POST['email'];
    
    $password = $_POST['password'];
  
    

    $users = select($conn, "users", "*");

    $user = selectWhere($conn, "users", "*", "id = 103")[0];
 
    
    
   
    




    foreach ($users as $user) {
        if ($user["email"] == $email &&password_verify($password, $user["password"]) && $user["is_admin"]) {

            $_SESSION["admin"] = [
                "user" => $user["name"],
                "email" => $user["email"],


            ];

            redirect(getpageAdmin("index.php"));
        } else {
            addErrorsToSession("login", "There Is Not Such User");
            redirect(getpageAdmin("puth/login.php"));
        }
    }
}
