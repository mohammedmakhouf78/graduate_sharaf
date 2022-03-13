<?php


include __DIR__ . "/../../functions/function.php";

session_start();

session_destroy();


redirect(getPageSite('auth/login.php'));
