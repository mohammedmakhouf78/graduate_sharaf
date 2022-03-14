<?php



/**
 * asset
 *
 * @param  mixed $path
 * @return void بتجيب المسار الخاص بالفرونت اند من خلال السيرفر
 */
function asset(string $path)
{

    return "/public/assets/$path";
}

/**
 * layouts
 *
 * @param  mixed $path
 * @return void
 */
function layouts($path)
{

    return ROOT . "/public/admin/layouts/$path";
}
function websit($path)
{

    return "/public/site/$path";
}

function frontLayout($path)
{

    return ROOT . "/public/site/layouts/$path";
}

function frontcomponents($path)
{

    return ROOT . "/public/site/components/$path";
}


function getUrl()
{
    return $_SERVER['REQUEST_URI'];
}


/**
 * getImage
 *
 * @param  mixed $path
 * @return void 
 */
function getImage(string $path)
{

    return "/public/images/$path";
}


function getImageRoot(string $path)
{
    return ROOT . "/public/images/$path";
}
