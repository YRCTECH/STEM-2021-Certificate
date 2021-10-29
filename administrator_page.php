<?php
    session_start();
    require_once 'connect/connect.php';
    require_once 'function.php';
    if(!$_SESSION['a_id']){
        header("location:login_admin.php");
    }else{
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">



<?php
    require_once 'component/head.php';

?>

<body>
    <!-- -------------------------------------------------------------- -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- -------------------------------------------------------------- -->
    <div class="preloader">
        <div class="d-flex justify-content-center align-items-center">
            <img src="assets/images/logo.svg" class="img-fluid">
        </div>

    </div>

    <div id="main-wrapper">
        <?php
            require_once 'component/navbar.php';
        ?>

        <div class="page-wrapper">
            <div class="container">

                <div class="row">


                    <div class="col-lg-12 col-xl-12 mt-3">
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading" style="font-weight: 700;">ระบบแอดมิน</h4>
                            <p style="font-weight: 600;" class="mb-0">
                                ข้อแนะนำ : ควรใช้ PC, Notebook, iPad, Tablet ในการใช้งาน <u>เพื่อประสิทธิภาพในการแสดงผลของระบบ</u>
                            </p>
           
                        </div>

                    </div>

                    <img src="assets/images/banner.png" class="img-fluid mb-3 w-100">



                    <div class="col-lg-6 col-xl-6">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: 600;">บริหารจัดการเกียรติบัตรการแข่งขัน (ครู)</h5>
                                <p class="card-text">
                                     ระบบพิมพ์เกียรติบัตรการแข่งขันสำหรับคณะครูทุกรายการ
                                </p>
                                <a href="admin_print_teacher.php" class="btn btn-danger w-100">บริหารจัดการ</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: 600;">บริหารจัดการเกียรติบัตรการแข่งขัน (นักเรียน)</h5>
                                <p class="card-text">
                                    ระบบพิมพ์เกียรติบัตรการแข่งขันสำหรับนักเรียนทุกรายการ
                                </p>
                                <a href="admin_print_student.php" class="btn btn-danger w-100">บริหารจัดการ</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: 600;">บริหารจัดการเกียรติบัตรการแข่งขัน
                                    (ครูที่ปรึกษาการแข่ง)</h5>
                                <p class="card-text">
                                    ระบบพิมพ์เกียรติบัตรการแข่งขันครูที่ปรึกษาการแข่งของนักเรียน
                                </p>
                                <a href="admin_print_adviser.php" class="btn btn-danger w-100">บริหารจัดการ</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: 600;">บริหารจัดการเกียรติบัตรการแข่งขัน
                                    (นักเรียนโรงเรียนยุพราชวิทยาลัย)</h5>
                                <p class="card-text">
                                    ระบบพิมพ์เกียรติบัตรการแข่งขันโครงงานวิทยาศาสตร์ ของนักเรียนโรงเรียนยุพราชวิทยาลัย
                                </p>
                                <a href="admin_print_yrc.php" class="btn btn-danger w-100">บริหารจัดการ</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-xl-6">
                        <div class="card">

                            <div class="card-body">
                                <h5 class="card-title" style="font-weight: 600;">บริหารจัดการเกียรติบัตรเพิ่มเติม</h5>
                                <p class="card-text">
                                    ระบบออกเกียรติบัตรเพิ่มเติม
                                </p>
                                <a href="admin_print_certificate.php" class="btn btn-danger w-100">พิมพ์เกียรติบัตร</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
        <?php
            require_once 'component/footer.php';
        ?>

    </div>






    <?php require_once 'component/js.php'; ?>



</body>

</html>
<?php }?>