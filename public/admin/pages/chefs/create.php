<?php

include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";



?>
<?php include layouts("header.php"); ?>

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
          <h1 class="m-0">المطعم </h1>
        </div>
      </div>
    </div>
  </div>
  <section class="content">


    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">إنشاء رساله</h3>
          </div>
          <div>
            <?php if (isset($_SESSION['successful']["db"])) :  ?>

              <div class='alert alert-success'>تم التسجيل بنجاح</div>

            <?php elseif (isset($_SESSION['errors']["db"])) : ?>

              <div class='alert alert-danger'>خطاء في التسجيل</div>

            <?php endif; ?>

          </div>


          <div class="card-body">
            <!-- /.card-header -->
            <!-- form start -->
            <form id="quickForm" action="<?= getCntrollor("admin/chefs/create.php"); ?>" method="post">
              <div class="card-body">


                <div class="form-group">
                  <label for="name"> الأسم </label>
                  <input type="text" name="name" class="form-control" id="name">
                  <?php if (isset($_SESSION['errors']['name'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['name'] ?></p>
                  <?php endif ?>
                </div>

                <div class="form-group">
                  <label for="lastname">الصوره</label>
                  <input type="file" name="imges" class="form-control" id="imges">
                  <?php if (isset($_SESSION['errors']['imges'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['imges'] ?></p>
                  <?php endif ?>
                </div>


                <div class="form-group">
                  <label for="email">الوظيفه</label>
                  <input type="text" name="job" class="form-control" id="job">
                  <?php if (isset($_SESSION['errors']['job'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['job'] ?></p>
                  <?php endif ?>
                </div>


                <div class="form-group">
                  <label for="facebook">facebook</label>
                  <input type="text" name="facebook" class="form-control" id="facebook">
                  <?php if (isset($_SESSION['errors']['facebook'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['facebook'] ?></p>
                  <?php endif ?>
                </div>

                <div class="form-group">
                  <label for="twitter">twitter</label>
                  <input type="text" name="twitter" class="form-control" id="twitter">
                  <?php if (isset($_SESSION['errors']['twitter'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['twitter'] ?></p>
                  <?php endif ?>
                </div>
                <div class="form-group">
                  <label for="linked_in">linked_in</label>
                  <input type="text" name="linked_in" class="form-control" id="linked_in">
                  <?php if (isset($_SESSION['errors']['linked_in'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['linked_in'] ?></p>
                  <?php endif ?>
                </div>



              </div>
          </div>

          <div class="card-footer">
            <button type="submit" class="btn btn-primary">إرسال</button>
          </div>
          </form>
        </div>


      </div>

  </section>

</div>


<?php include layouts("footer.php"); ?>