<?php
include __DIR__ . "/../../../functions/function.php";
session_start();
session_destroy();
redirect(getpageAdmin("puth/login.php"));
