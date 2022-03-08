<?php



include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";


//$news = select($conn, "news", "*");
$news = selectDesc($conn, "news", "*");


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
                            <h3 class="card-title">بيانات الأخبارية</h3>
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
                                        <th>التسلسل</th>
                                        <th>الرقم</th>
                                        <th>الأسم</th>
                                        <th>الصور</th>
                                        <th>التاريخ</th>
                                        <th>العنوان</th>
                                        <th>الوصف</th>
                                        <th>التحكم</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($news as $key => $new) : ?>
                                        <tr>
                                            <td><?= ++$key ?></td>
                                            <td><?= $new['id'] ?></td>
                                            <td><?= $new['name'] ?></td>
                                            <td>
                                                <img src="<?= getImage('news/' . $new['image']) ?>" alt="" width="150" height="150">
                                            </td>
                                            <td><?= $new['date'] ?></td>
                                            <td><?= $new['title'] ?></td>
                                            <td><?= $new['description'] ?></td>
                                            <td>
                                                <a class="btn btn-success" href="<?= getpage("news/edit.php"); ?>?id=<?= $new['id'] ?>">تعديل</a>
                                                <a class="btn btn-danger" href="<?= getCntrollor("admin/news/delete.php"); ?>?id=<?= $new['id'] ?>">حذف</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>التسلسل</th>
                                        <th>الرقم</th>
                                        <th>الأسم</th>
                                        <th>الصور</th>
                                        <th>التاريخ</th>
                                        <th>العنوان</th>
                                        <th>الوصف</th>
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