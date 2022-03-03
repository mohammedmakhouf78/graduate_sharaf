<?php
include __DIR__ . "/../setting.php";

session_start();

include __DIR__ . "/frontFunctions.php";
include __DIR__ . "/backFunctions.php";
include __DIR__ . "/DBFunctions.php";

function validateString($data, $name, $message, $path)
{
    $data = test_input($data);
    if (!(preg_match('/^[A-Za-z]*$/', $data) && !empty($data))) {
        addErrorsToSession($name, $message);
        header("location:$path");
        exit;
    }
    return true;
}


function validateEmpty($data, $name, $message, $path)
{
    if (empty($data)) {
        addErrorsToSession($name, $message);
        header("location:$path");
        exit;
    }
    return true;
}


function validateEmail($data, $name, $message, $path)
{
    $data = test_input($data);
    if (!(filter_var($data, FILTER_VALIDATE_EMAIL) && !empty($data))) {
        addErrorsToSession($name, $message);
        header("location:$path");
        exit;
    }
    return true;
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function validatePassword($data, $name, $path)
{

    if (!empty($data)) {
        $password = test_input($data);

        if (strlen($data) <= '8') {
            $passwordErr = "Your Password Must Contain At Least 8 Characters!";
            addErrorsToSession($name, $passwordErr);
            header("location:$path");
            exit;
        } elseif (!preg_match("#[0-9]+#", $password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Number!";
            addErrorsToSession($name, $passwordErr);
            header("location:$path");
            exit;
        } elseif (!preg_match("#[A-Z]+#", $password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
            addErrorsToSession($name, $passwordErr);
            header("location:$path");
            exit;
        } elseif (!preg_match("#[a-z]+#", $password)) {
            $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
            addErrorsToSession($name, $passwordErr);
            header("location:$path");
            exit;
        }
    } else {
        $passwordErr = "Please enter password   ";
        addErrorsToSession($name, $passwordErr);
        header("location:$path");
        exit;
    }
}


function addErrorsToSession($key, $value)
{

    $_SESSION['errors'][$key] = $value;
}

function addSuccessToSession($key, $value)
{

    $_SESSION['successful'][$key] = $value;
}

function redirect($path)
{

    header("location:$path");
}
