<?php



include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";


//$users = select($conn, "users", "*");
$tables = selectDesc($conn, "tables", "*");





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
                            <h3 class="card-title">بيانات الطاولات</h3>
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
                                        <th>الكرسي</th>
                                        <th>هل محجوزه</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($tables as $key => $table) : ?>
                                        <tr>
                                            <td><?= ++$key ?></td>
                                            <td><?= $table['id'] ?></td>
                                            <td><?= $table['chairs'] ?></td>



                                            <?php if ($table['is_booked'] == 1) : ?>
                                                <td class="text-primary">محجوزه</td>
                                            <?php else : ?>
                                                <td class="text-danger">تحت الطلب</td>
                                            <?php endif; ?>

                                            <td>

                                                <a class="btn btn-success" href="<?= getpage("tables/edit.php"); ?>?id=<?= $table['id'] ?>">تعديل</a>
                                                <a class="btn btn-danger" href="<?= getCntrollor("admin/tables/delete.php"); ?>?id=<?= $table['id'] ?>">حذف</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>التسلسل</th>
                                        <th>الرقم</th>
                                        <th>الكرسي</th>
                                        <th>هل محجوزه</th>
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