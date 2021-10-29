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
                    <img src="assets/images/banner.png" class="img-fluid w-100">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="lang_opt" class="table table-bordered table-hover mt-3">
                                        <thead>
                                            <tr>
                                                <th style="font-weight: 600;" class="text-center">ลำดับที่</th>
                                                <th style="font-weight: 600;">ชื่อการแข่ง/ระดับ</th>
                                                <th style="font-weight: 600;">รางวัล</th>
                                                <th style="font-weight: 600;">ชื่อ-สกุล/โรงเรียน</th>
                                                <th style="font-weight: 600;" class="text-center">พิมพ์</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $sql = "SELECT * FROM adviser_certificate ORDER BY c_id ASC";
                                                $query = mysqli_query($conn,$sql);
                                                $i = 1;
                                                while($fetch = mysqli_fetch_array($query)){
                                            ?>
                                            <tr>
                                                <td style="width: 10%;" class="text-center"><?php echo $i++ ?></td>
                                                <td><?php echo $fetch['c_type']?><br/>ระดับ : <?php echo $fetch['c_grade']?></td>
                                                <td><?php echo $fetch['c_awards']?></td>
                                                <td><?php echo $fetch['c_name']?><br />โรงเรียน<?php echo $fetch['c_school']?></td>
                                                <td style="width: 10%;" class="text-center"><a href="certi_adviser.php?id=<?php echo $fetch['c_id']; ?>"><i class='fas fa-download'></i></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
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