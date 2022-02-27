<?php

include __DIR__.'/../setting.php';





/**
 * asset
 *
 * @param  mixed $path
 * @return void بتجيب المسار الخاص بالفرونت اند من خلال السيرفر
 */
function asset(string $path){

    return "/public/assets/$path";


}

/**
 * layouts
 *
 * @param  mixed $path
 * @return void
 */
function layouts( $path){

    return ROOT ."/public/admin/layouts/$path";


}



?>




