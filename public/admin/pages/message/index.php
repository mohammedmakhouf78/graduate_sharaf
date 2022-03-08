<?php



include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";


//$message = select($conn, "messages", "*");
$message = selectDesc($conn, "messages", "*");


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
                            <h3 class="card-title">الرسايل</h3>
                        </div>


                        <div class="card-body">

                            <?php if (isset($_SESSION['successful']["db"])) :  ?>

                                <div class='alert alert-success'><?= $_SESSION['successful']['db'] ?></div>

                            <?php elseif (isset($_SESSION['errors']["db"])) : ?>

                                <div class='alert alert-danger'><?= $_SESSION['error']['db'] ?></div>

                            <?php endif; ?>



                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>التسلسل</th>
                                        <th>الرقم</th>
                                        <th> الاسم الاول</th>
                                        <th> الاسم الاخير</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>رقم الموبايل</th>
                                        <th>الرساله</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($message as $key =>  $user) : ?>
                                        <tr>
                                            <td><?= ++$key ?></td>
                                            <td><?= $user['id'] ?></td>
                                            <td><?= $user['first_name'] ?></td>
                                            <td><?= $user['last_name'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['phone'] ?></td>
                                            <td><?= $user['message'] ?></td>
                                            <td>
                                                <a class="btn btn-success" href="<?= getpage("message/edit.php"); ?>?id=<?= $user['id'] ?>">تعديل</a>
                                                <a class="btn btn-danger" href="<?= getCntrollor("admin/message/delete.php"); ?>?id=<?= $user['id'] ?>">حذف</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>التسلسل</th>
                                        <th>الرقم</th>
                                        <th> الاسم الاول</th>
                                        <th> الاسم الاخير</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>رقم الموبايل</th>
                                        <th>الرساله</th>
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