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
            <h3 class="card-title">إنشاء إخبارية</h3>
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
            <form id="quickForm" action="<?= getCntrollor("admin/news/create.php"); ?>" method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="name">الأسم</label>
                  <input type="text" name="name" class="form-control" id="name">
                  <?php if (isset($_SESSION['errors']['name'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['name'] ?></p>
                  <?php endif ?>
                </div>
                <div class="form-group">
                  <label for="image">الصور</label>
                  <input type="file" name="image" class="form-control" id="image">
                  <?php if (isset($_SESSION['errors']['image'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['image'] ?></p>
                  <?php endif ?>
                </div>
                <div class="form-group">
                  <label for="date">التاريخ</label>
                  <input type="date" name="date" class="form-control" id="date">
                  <?php if (isset($_SESSION['errors']['date'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['date'] ?></p>
                  <?php endif ?>
                </div>
                <div class="form-group">
                  <label for="title"> العنوان</label>
                  <input type="title" name="title" class="form-control" id="title">
                  <?php if (isset($_SESSION['errors']['title'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['title'] ?></p>
                  <?php endif ?>
                </div>
                <div class="form-group">
                  <label for="description">الواصف</label>
                  <br>
                  <textarea name="description" id="description" cols="128" rows="10"></textarea>
                  <?php if (isset($_SESSION['errors']['description'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['description'] ?></p>
                  <?php endif ?>
                </div>
              </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">إرسال</button>
          </div>
          </form>
        </div>
        <!-- /.card -->
      </div>
      <!--/.col (left) -->
      <!-- right column -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include layouts("footer.php"); ?>