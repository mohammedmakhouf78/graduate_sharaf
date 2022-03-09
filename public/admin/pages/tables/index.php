<?php



include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";


//$users = select($conn, "users", "*");
$users = selectDesc($conn, "users", "*");





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
                            <h3 class="card-title">بيانات المستخدمين</h3>
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
                                        <th>الأسم</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>هل هو مشرف</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($users as $key => $user) : ?>
                                        <tr>
                                            <td><?= ++$key ?></td>
                                            <td><?= $user['id'] ?></td>
                                            <td><?= $user['name'] ?></td>

                                            <td><?= $user['email'] ?></td>

                                            <?php if ($user['is_admin'] == 1) : ?>
                                                <td class="text-primary">مشرف</td>
                                            <?php else : ?>
                                                <td class="text-danger">ليس مشرف</td>
                                            <?php endif; ?>

                                            <td>

                                                <a class="btn btn-success" href="<?= getpage("users/edit.php"); ?>?id=<?= $user['id'] ?>">تعديل</a>
                                                <a class="btn btn-danger" href="<?= getCntrollor("admin/users/delete.php"); ?>?id=<?= $user['id'] ?>">حذف</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>التسلسل</th>
                                        <th>الرقم</th>
                                        <th>الأسم</th>
                                        <th>البريد الإلكتروني</th>
                                        <th>هل هو مشرف</th>
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