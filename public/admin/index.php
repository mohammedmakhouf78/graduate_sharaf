<?php


include $_SERVER['DOCUMENT_ROOT'] . "/functions/frontFunctions.php";
include $_SERVER['DOCUMENT_ROOT'] . "/functions/backFunctions.php";

include layouts("header.php");


?>

<!-- Preloader -->
<div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__wobble" src="<?= asset('adminLTE/dist/img/AdminLTELogo.png') ?>" alt="AdminLTELogo" height="60" width="60">
</div>                  

<?php include layouts("navbar.php"); ?>

<?php include layouts("aside.php"); ?>


<div class="content-wrapper">

  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard v2</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v2</li>
          </ol>
        </div>
      </div>
    </div>
  </div>



  <section class="content">

  <?php include layouts("footer.php"); ?>
