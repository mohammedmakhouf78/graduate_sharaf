<?php



include $_SERVER['DOCUMENT_ROOT'] . "/functions/function.php";


//$message = select($conn, "feedback", "*");
$feedbacks = query($conn, "SELECT
feedback.id,
feedback.name,
feedback.message,
feedback.job,
users.name as username
FROM feedback JOIN users ON feedback.user_id = users.id");



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
                            <h3 class="card-title">التعليقات</h3>
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
                                        <th> الإسم </th>
                                        <th>الرساله</th>
                                        <th>الوظيفة</th>
                                        <th>الاسم المستخدم</th>
                                        <th>التحكم</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php foreach ($feedbacks as $key =>  $feedback) : ?>
                                        <tr>
                                            <td><?= ++$key ?></td>
                                            <td><?= $feedback['id'] ?></td>
                                            <td><?= $feedback['name'] ?></td>
                                            <td><?= $feedback['message'] ?></td>
                                            <td><?= $feedback['job'] ?></td>
                                            <td><?= $feedback['username'] ?></td>
                                            <td>
                                                <a class="btn btn-success" href="<?= getpage("feedback/edit.php"); ?>?id=<?= $feedback['id'] ?>">تعديل</a>
                                                <a class="btn btn-danger" href="<?= getCntrollor("admin/feedback/delete.php"); ?>?id=<?= $feedback['id'] ?>">حذف</a>
                                            </td>
                                        </tr>
                                    <?php endforeach;    ?>

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>التسلسل</th>
                                        <th>الرقم</th>
                                        <th> الإسم </th>
                                        <th>الرساله</th>
                                        <th>الوظيفة</th>
                                        <th>الاسم المستخدم</th>
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