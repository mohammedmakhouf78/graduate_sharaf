<?php


function getCntrollor($path)
{

    return "/../contollers/$path";
}

function getpage($path)
{

    return "/public/admin/pages/$path";
}

function getpageAdmin($path)
{

    return "/public/admin/$path";
}


function dd($data)
{
    var_dump($data);
    die;
}


function getPageSite($path)
{
    return "/public/site/$path";
}

function upoalImage($fiekd, $dir, $name)
{

    $type = $_FILES[$fiekd]["type"];
    $Ext = explode("/", $type)[1];
    $image_name = $_FILES[$fiekd]["tmp_name"];
    $rand = rand(1000, 1000000);
    $resulty = move_uploaded_file($image_name, ROOT . "/public/images/{$dir}/{$name}$rand.$Ext");

    if ($resulty == true) {
        return "{$name}$rand.$Ext";
    } else {
        return false;
    }
}

function deletImage($dir, $oldImage)
{

    $oldImage = getImageRoot("$dir/$oldImage");
    if (file_exists($oldImage)) {
        unlink($oldImage);
    }
}
