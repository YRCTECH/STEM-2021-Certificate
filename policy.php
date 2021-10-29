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

        <div class="page-wrapper">
            <div class="container">
                <div class="row">
                    <?php 
                        $sql_file = "SELECT * FROM news WHERE n_id = 7";
                        $query_file = mysqli_query($conn,$sql_file);
                        $fetch = mysqli_fetch_array($query_file);
                    ?>
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <p class="text-center mt-5">#นโยบาย</p>
                                <h1 class="text-center" style="font-weight: 600;">เว็บไซต์</h1>

                                <p><?php echo $fetch['n_detail']; ?></p>  
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