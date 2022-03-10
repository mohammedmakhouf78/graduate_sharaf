<?php

include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $OldData = selectWhere($conn, 'books', '*', "id = $id")[0];
}
$users = select($conn, 'users', 'id,name');
$tables = select($conn, 'tables', 'id,is_booked');
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
                        <form id="quickForm" action="<?= getCntrollor("admin/books/update.php"); ?>" method="post">
                            <input type="hidden" name="id" value="<?= $OldData['id'] ?>">
                            <div class="form-group">
                                <label for="date">التاريخ</label>
                                <input type="date" name="date" class="form-control" id="date" value="<?= $OldData['date'] ?>">
                                <?php if (isset($_SESSION['errors']['date'])) : ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['date'] ?></p>
                                <?php endif ?>
                            </div>

                            <div class="form-group">
                                <label for="people_number">رقم الشخص</label>
                                <input type="people_number" name="people_number" class="form-control" id="people_number" value="<?= $OldData['people_number'] ?>">
                                <?php if (isset($_SESSION['errors']['people_number'])) : ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['people_number'] ?></p>
                                <?php endif ?>
                            </div>

                            <div class="form-group">
                                <label for="time">الوقت</label>
                                <input type="time" id="time" class="form-control" name="time" value="<?= $OldData['time'] ?>">
                                <?php if (isset($_SESSION['errors']['time'])) : ?>
                                    <p class="text-danger"><?= $_SESSION['errors']['time'] ?></p>
                                <?php endif ?>
                            </div>



                            <div class="form-group">
                                <label for="user_id">رقم المستخدم</label>
                                <select name="user_id" id="user_id" class="form-control">
                                    <?php foreach ($users as $user) : ?>
                                        <option value="<?= $user['id'] ?>">
                                            <?= $user['name'] ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="table_id">رقم الطاوله</label>
                                <select name="table_id" id="table_id" class="form-control">
                                    <?php foreach ($tables as $table) : ?>
                                        <option value="<?= $table['id'] ?>">
                                            <?= $table['id'] ?>
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