<?php



include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";


$abouts = select($conn, "about", "*");


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
        <div class="container-fluid">

            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">بيانات الموقع</h3>
                        </div>


                        <div class="card-body">

                            <?php if (isset($_SESSION['successful']["db"])) :  ?>

                                <div class='alert alert-success'><?= $_SESSION['successful']['db'] ?></div>

                            <?php elseif (isset($_SESSION['errors']["db"])) : ?>

                                <div class='alert alert-danger'><?= $_SESSION['errors']['db'] ?></div>

                            <?php endif; ?>


                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>الرقم</th>
                                        <th>العنوان</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>التلفون</th>
                                        <th>الفتح</th>
                                        <th>الاغلاق</th>
                                        <th>التحكم</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($abouts as $about) : ?>
                                        <tr>
                                            <td><?= $about['id'] ?></td>
                                            <td><?= $about['address'] ?></td>
                                            <td><?= $about['email'] ?></td>
                                            <td><?= $about['phone'] ?></td>
                                            <td><?= $about['open'] ?></td>
                                            <td><?= $about['close'] ?></td>
                                            <td>
                                                <a class="btn btn-success" href="<?= getpage("about/edit.php"); ?>?id=<?= $about['id'] ?>">تعديل</a>

                                                <a class="btn btn-danger" href="<?= getCntrollor("admin/about/delete.php"); ?>?id=<?= $about['id'] ?>">حذف</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>الرقم</th>
                                        <th>العنوان</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>التلفون</th>
                                        <th>الفتح</th>
                                        <th>الاغلاق</th>
                                        <th>التحكم</th>
                                    </tr>
                                </tfoot>
                            </table>




                        </div>


                    </div>
                </div>
            </div>


        </div>
    </section>
</div>
<?php include layouts("footer.php"); ?>