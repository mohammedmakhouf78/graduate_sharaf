<?php

include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $OldData = selectWhere($conn, 'about', '*', "id = $id")[0];
}
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
                        <h3 class="card-title">تعديل المستخدم</h3>
                    </div>
                    <div>
                        <?php if (isset($_SESSION['successful']["db"])) :  ?>

                            <div class='alert alert-success'>تم التعديل  بنجاح</div>

                        <?php elseif (isset($_SESSION['errors']["db"])) : ?>

                            <div class='alert alert-danger'>خطاء في التعديل</div>

                        <?php endif; ?>

                    </div>


                    <div class="card-body">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" action="<?= getCntrollor("admin/about/update.php"); ?>" method="post">
                            <div class="card-body">
                                <input type="hidden" name="id" value="<?= $OldData['id'] ?>">
                                <div class="form-group">
                                    <label for="address">العنوان</label>
                                    <input type="text" name="address" class="form-control" id="address" value="<?= $OldData['address'] ?>">
                                    <?php if (isset($_SESSION['errors']['address'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['address'] ?></p>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <label for="phone">التلفون</label>
                                    <input type="text" name="phone" class="form-control" id="phone" value="<?= $OldData['phone'] ?>">
                                    <?php if (isset($_SESSION['errors']['phone'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['phone'] ?></p>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <label for="email">البريد الالكتروني</label>
                                    <input type="email" name="email" class="form-control" id="email" value="<?= $OldData['email'] ?>">
                                    <?php if (isset($_SESSION['errors']['email'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['email'] ?></p>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <label for="open">الفتح</label>
                                    <input type="text" name="open" class="form-control" id="open" value="<?= $OldData['open'] ?>">
                                    <?php if (isset($_SESSION['errors']['open'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['open'] ?></p>
                                    <?php endif ?>
                                </div>
                                <div class="form-group">
                                    <label for="close">الاغلاق</label>
                                    <input type="text" name="close" class="form-control" id="close" value="<?= $OldData['close'] ?>">
                                    <?php if (isset($_SESSION['errors']['close'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['close'] ?></p>
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