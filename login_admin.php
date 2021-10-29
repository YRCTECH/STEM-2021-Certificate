<!DOCTYPE html>
<html dir="ltr">

<?php
    require_once 'component/head.php';
?>

<body style="background: linear-gradient(90deg, rgba(240,135,227,1) 0%, rgba(246,98,134,1) 100%);">
    <div class="main-wrapper">
        <div class="auth-wrapper d-flex no-block justify-content-center align-items-center">
            <div class="auth-box p-4 bg-white rounded" >
                <div id="loginform">
                    <div class="logo">
                        <p class="text-center"><img src="assets/images/logo.svg" class="img-fluid w-25"></p>
                        <h3 class="box-title mb-3 text-center" style="font-weight:600">Login Certificate 2021</h3>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <?php
                                if(isset($_GET['status'])){
                                    $status = $_GET['status'];
                                    if($status == 'error'){
                            ?>
                                <div class="alert alert-danger" role="alert">
                                    <p class="text-center mb-0" style="font-weight: bold;">Username หรือ Password ไม่ถูกต้อง!</p>
                                </div>
                                <?php }else{} ?>
                            <?php } ?>
                            <form class="form-horizontal mt-3 form-material"  action="process/loginact.php" method="post">
                                <div class="form-group mb-3">
                                    <div class="">
                                        <input class="form-control" type="text" required="" placeholder="Username" name="a_username"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <div class="">
                                        <input class="form-control" type="password" required="" placeholder="Password" name="a_password"></div>
                                </div>

                                <div class="form-group text-center mt-4">
                                    <div class="col-xs-12">
                                        <button class="btn btn-info btn-md text-uppercase waves-effect waves-light w-100" name="submit">Log In</button>
                                    </div>
                                </div>
                               
                                <div class="form-group mb-0 mt-4">
                                    <a href="index.php" class="justify-content-center d-flex mb-2">กลับหน้าหลัก</a>
                                    <div class="col-sm-12 justify-content-center d-flex">
                                        <p>&copy; 2021 YRC TECH X YRC STEM</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </div>

    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
 

</body>

</html>