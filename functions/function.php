<?php
include __DIR__ . "/../setting.php";

session_start();

include __DIR__ . "/frontFunctions.php";
include __DIR__ . "/backFunctions.php";
include __DIR__ . "/DBFunctions.php";

function validateString($data, $name, $message, $path)
{
    $data = test_input($data);
    if (!(preg_match('/^[A-Za-z ]*$/', $data) && !empty($data))) {
        addErrorsToSession($name, $message);
        header("location:$path");
        exit;
    }

    return true;
}

function  validatelast($data, $name, $message, $path)
{
    $data = test_input($data);
    if (!(preg_match('/^[A-Za-z ]*$/', $data) && !empty($data))) {
        addErrorsToSession($name, $message);
        header("location:$path");
        exit;
    }
    return true;
}

function validateMessage($data, $name, $message, $path)
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



function validatePhone($data, $name, $message, $path)
{

    $data = test_input($data);
    if (!(preg_match('/^[0-9]{11}+$/', $data))) {

        addErrorsToSession($name, $message);
        header("location:$path");
        exit;
    }
    return true;
}

function validateflot($data, $name, $message, $path)
{

    $data = test_input($data);
    if (!(preg_match('/^[0-9,-.]+$/', $data))) {

        addErrorsToSession($name, $message);
        header("location:$path");
        exit;
    }
    return true;
}

function validateImage($name, $message, $path)
{


    $type = $_FILES[$name]["type"];
    $Ext = explode("/", $type)[1];

    if ($Ext == "jpeg" || $Ext == "jpg" || $Ext == "pag") {
        return true;
    } else {
        addErrorsToSession($name, $message);
        header("location:$path");
        exit;
    }
}

function imges($data, $name, $message, $path)
{

    $data = test_input($data);
    if (empty($data)) {

        addErrorsToSession($name, $message);
        header("location:$path");
        exit;
    }
    return true;
}

function lunk($data, $name, $message, $path)
{

    $data = test_input($data);
    if (empty($data)) {

        addErrorsToSession($name, $message);
        header("location:$path");
        exit;
    }
    return true;
}

function validatePassword($data, $name, $path)
{

    if (!empty($data)) {
        return true;
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
