<?php
    session_start();
    require_once 'connect/connect.php';
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php
    require_once 'component/head.php';
?>

<body>
    <div class="preloader">
        <div class="d-flex justify-content-center align-items-center">
            <img src="assets/images/logo.svg" class="img-fluid">
        </div>
    </div>
    <div id="main-wrapper">
        <?php
            require_once 'component/navbar.php';
        ?>
        <div class="page-wrapper" style="min-height: 100vh;">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 col-lg-8 mt-5">
                                        <p class="text-center"><img src="assets/images/logo.svg" class="img-fluid" width="10%"></p>
                                        <h5 class="f-pink mt-2 text-center" style="font-weight:600">ศูนย์สะเต็มศึกษาภาคเหนือตอนบน โรงเรียนยุพราชวิทยาลัย</h5>
                                        <p class="text-center" style="font-weight:600">238 ถนนพระปกเกล้า ตำบลศรีภูมิ อำเภอเมือง จังหวัดเชียงใหม่ 50200</p>
                                        <hr />
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                                        <h5 class="f-pink mb-3"><i class="fas fa-code"></i> ทีมพัฒนาเว็บไซต์</h5>
                                        <p style="font-weight:600">1. นายวิรัชชัย จันต๊ะวงศ์ <br><small>ครูผู้ดูแล :ทีมพัฒนาเว็บไซต์</small></p>
                                        <p style="font-weight:600">2. นายกัมปนาท ชัยมูลฐาน<br><small>ทีมพัฒนาเว็บไซต์</small></p>
                                        <p style="font-weight:600">3. นายรัชชานนท์ มุขแก้ว<br><small>ทีมพัฒนาเว็บไซต์</small></p>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 mb-4">
                                        <a href="https://github.com/YRCTECH" target="_blank">
                                            <h5 class="f-pink mb-3"><i class="fab fa-github"></i> YRC TECH</h5>
                                        </a>
                                        <p style="font-weight:600"><i class="fas fa-laptop"></i> Yupparaj Wittayalai School Technology Development</p>
                                    </div>
                                </div>
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