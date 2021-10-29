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
                    <div class="col-xl-12 mt-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-xl-12 mb-3">
                                            <h2 class="text-danger mt-5 text-center" style="font-weight: 600;">บริการจัดการออกเกียรติบัตรเพิ่มเติม</h2>
                                            <?php boxstatus(); ?>
                                        </div>
                                        <div class="col-xl-4">
                                            <?php
                                                if(isset($_GET['id'])){
                                                    $c_id = filter_input(INPUT_GET, 'id' ,FILTER_SANITIZE_NUMBER_INT);
                                                    $sql = "SELECT * FROM custom_certificate WHERE c_id = '$c_id'";
                                                    $query = mysqli_query($conn,$sql);
                                                    $fetch = mysqli_fetch_array($query);
                                            ?>
                                                <h4 class="text-danger" style="font-weight: 600;">แก้ไขข้อมูล <?php echo $fetch['c_name']; ?></h4>
                                                <hr>
                                                <form action="process/edit_data_certificate.php" method="post">
                                                    <div class="form-group">
                                                        <label for="">เลขที่เกียรติบัตร</label>
                                                        <input type="text" class="form-control" name="c_ref_code" value="<?php echo $fetch['c_ref_code']; ?>">
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label for="">ชื่อ-สกุล</label>
                                                        <input type="text" class="form-control" name="c_name" value="<?php echo $fetch['c_name']; ?>">
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label for="">ข้อความบรรทัดที่ 1</label>
                                                        <input type="text" class="form-control" name="c_type1" placeholder="" value="<?php echo $fetch['c_type1']; ?>">
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label for="">ข้อความบรรทัดที่ 2</label>
                                                        <input type="text" class="form-control" name="c_type2" placeholder="" value="<?php echo $fetch['c_type2']; ?>">
                                                    </div>

                                                    <div class="form-group mt-3 d-none">
                                                        <label for="">ไอดี</label>
                                                        <input type="text" class="form-control" name="c_id" value="<?php echo $fetch['c_id']; ?>">
                                                    </div>

                                                    <input type="submit" name="edit" class="btn btn-warning mt-3 w-100" value="แก้ไข" style="font-weight: 600;">

                                                </form>

                                                <a href="admin_print_certificate.php" class="btn btn-primary w-100 mt-3" style="font-weight: 600;">เพิ่มข้อมูล</a>
                                            <?php }else{ ?>
                                                <h4 class="text-primary" style="font-weight: 600;">เพิ่มข้อมูล</h4>
                                                <hr>
                                                <div id="link_wrapper"></div>
                                                <form action="process/add_data_certificate.php" method="post">
                                                    <div class="form-group">
                                                        <label for="">เลขที่เกียรติบัตร</label>
                                                        <input type="text" class="form-control" name="c_ref_code" placeholder="">
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label for="">ชื่อ-สกุล</label>
                                                        <input type="text" class="form-control" name="c_name" placeholder="">
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label for="">ข้อความบรรทัดที่ 1</label>
                                                        <input type="text" class="form-control" name="c_type1" placeholder="">
                                                    </div>

                                                    <div class="form-group mt-3">
                                                        <label for="">ข้อความบรรทัดที่ 2</label>
                                                        <input type="text" class="form-control" name="c_type2" placeholder="">
                                                    </div>

                                                    <input type="submit" name="insert" class="btn btn-primary mt-3 w-100" value="เพิ่มข้อมูล" style="font-weight: 600;">

                                                </form>
                                            <?php }?>
                                        </div>
                                        <div class="col-xl-8">
                                            <div class="table-responsive">
                                                <table id="lang_opt" class="table table-bordered table-hover mt-3">
                                                    <thead>
                                                        <tr>
                                                            <th style="font-weight:600;width: 10%;" class="text-center" width="10%">ลำดับที่</th>
                                                            <th style="font-weight: 600;">ชื่อสกุล</th>
                                                            <th style="font-weight: 600;">ข้อความ/เลขที่เกียรติบัตร</th>
                                                            <th style="font-weight: 600;" class="text-center">แก้ไข</th>
                                                            <th style="font-weight: 600;" class="text-center">พิมพ์</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                            $sql = "SELECT * FROM custom_certificate ORDER BY c_id ASC";
                                                            $query = mysqli_query($conn,$sql);
                                                            $i = 1;
                                                            while($fetch = mysqli_fetch_array($query)){

                                                        ?>
                                                        <tr>
                                                            <td class="text-center" style="width: 15%;"><?php echo $i++ ?></td>
                                                            <td style="font-weight: 600;"><?php echo $fetch['c_name']; ?></td>
                                                            <td><p style="font-weight: 600;">บรรทัดแรก : <?php echo $fetch['c_type1']; ?><br/>บรรทัดสอง : <?php echo $fetch['c_type2']; ?></p>รหัสเกียรติบัตร <?php echo $fetch['c_ref_code']; ?>-2564</td>
                                                            <td class="text-center" style="width: 10%;"><a href="admin_print_certificate.php?id=<?php echo $fetch['c_id']; ?>" class="btn btn-warning" style="font-weight: 600;">แก้ไข</a></td>
                                                            <td class="text-center" style="width: 10%;"><a href="certi_admin.php?id=<?php echo $fetch['c_id']; ?>"class="btn btn-primary" style="font-weight: 600;">พิมพ์</a></td>

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
            </div>

        </div>
    <?php
        require_once 'component/footer.php';
    ?>                                                            
    </div>

    <?php require_once 'component/js.php'; ?>
    <script>
    function loadXMLDoc() {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        document.getElementById("link_wrapper").innerHTML =
        this.responseText;
        }
    };
    xhttp.open("GET", "server.php", true);
    xhttp.send();
    }
    setInterval(function(){
        loadXMLDoc();
        // 1sec
    },1000);

    window.onload = loadXMLDoc;
    </script>

</body>

</html>
<?php }?>