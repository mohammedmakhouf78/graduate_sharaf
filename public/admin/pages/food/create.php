<?php

include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";
$categoriess = select($conn, "categories", "id , name");


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
            <h3 class="card-title">إضافة الواجبة</h3>
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
            <form id="quickForm" action="<?= getCntrollor("admin/food/create.php"); ?>" method="post">
              <div class="card-body">
                <div class="form-group">
                  <label for="name">الأسم</label>
                  <input type="text" name="name" class="form-control" id="name">
                  <?php if (isset($_SESSION['errors']['name'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['name'] ?></p>
                  <?php endif ?>
                </div>
                <div class="form-group">
                  <label for="price">خصم</label>
                  <input type="text" name="price" class="form-control" id="price">
                  <?php if (isset($_SESSION['errors']['price'])) : ?>
                    <p class="text-danger"><?= $_SESSION['errors']['price'] ?></p>
                  <?php endif ?>
                </div>

                <div class="form-group">
                  <label for="category_id">name category_id</label>
                  <select name="category_id" id="category_id" class="form-control">
                    <?php foreach ($categoriess as $categories) : ?>
                      <option value="<?= $categories['id'] ?>">
                        <?= $categories['name'] ?>
                      </option>
                    <?php endforeach ?>
                  </select>
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