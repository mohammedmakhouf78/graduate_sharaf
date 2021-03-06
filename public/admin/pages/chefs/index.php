<?php



include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";


//$chefs = select($conn, "chefs", "*");
$chefs = selectDesc($conn, "chefs", "*");


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
                            <h3 class="card-title">بيانات الشيف </h3>
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
                                        <th>الاسم</th>
                                        <th> اسم الصوره</th>
                                        <th>الوظيفه</th>
                                        <th>facebook</th>
                                        <th>twitter</th>
                                        <th>linked_in</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($chefs as  $key => $chef) : ?>
                                        <tr>
                                            <td><?= ++$key ?></td>
                                            <td><?= $chef['id'] ?></td>
                                            <td><?= $chef['name'] ?></td>
                                            <td>
                                                <img src="<?= getImage('chef/' . $chef['image']) ?>" alt="" width="150">
                                            </td>
                                            <td><?= $chef['job'] ?></td>
                                            <td><?= $chef['facebook'] ?></td>
                                            <td><?= $chef['twitter'] ?></td>
                                            <td><?= $chef['linked_in'] ?></td>
                                            <td>
                                                <a class="btn btn-success" href="<?= getpage("chefs/edit.php"); ?>?id=<?= $chef['id'] ?>">تعديل</a>
                                                <a class="btn btn-danger" href="<?= getCntrollor("admin/chefs/delete.php"); ?>?id=<?= $chef['id'] ?>">حذف</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>التسلسل</th>
                                        <th>الرقم</th>
                                        <th>الاسم</th>
                                        <th> اسم الصوره</th>
                                        <th>الوظيفه</th>
                                        <th>facebook</th>
                                        <th>twitter</th>
                                        <th>linked_in</th>
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