<?php

include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $OldData = selectWhere($conn, 'tables', '*', "id = $id")[0];
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
                    <!-- ليس لها اي فائده -->
                    <div>
                        <?php if (isset($_SESSION['successful']["db"])) :  ?>

                            <div class='alert alert-success'>تم التعديل بنجاح</div>

                        <?php elseif (isset($_SESSION['errors']["db"])) : ?>

                            <div class='alert alert-danger'>خطاء في التسجيل</div>

                        <?php endif; ?>

                    </div>


                    <div class="card-body">
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" action="<?= getCntrollor("admin/tables/update.php"); ?>" method="post">
                            <div class="card-body">
                                <input type="hidden" name="id" value="<?= $OldData['id'] ?>">

                                <div class="form-group">
                                    <label for="chairs"> عدد الكراسي</label>
                                    <input type="text" name="chairs" class="form-control" id="chairs" value="<?= $OldData['chairs'] ?>">
                                    <?php if (isset($_SESSION['errors']['chairs'])) : ?>
                                        <p class="text-danger"><?= $_SESSION['errors']['chairs'] ?></p>
                                    <?php endif ?>
                                </div>

                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="is_booked" class="custom-control-input" id="is_booked" value="1" <?= $OldData['is_booked'] == 1 ? 'checked' : '' ?>>
                                        <label class="custom-control-label" for="is_booked">محجوزه</label>
                                    </div>
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