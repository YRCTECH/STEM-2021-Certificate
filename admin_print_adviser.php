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

        <div class="page-wrapper" >
            <div class="container">

                <div class="row">
                    <div class="col-xl-12 mt-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-12 mb-3">
                                        <h2 class="text-danger text-center" style="font-weight: 600;">
                                            บริหารจัดการเกียรติครูที่ปรึกษานักเรียน
                                        </h2>
                                        <?php boxstatus(); ?>
                                    </div>
                                    <div class="col-lg-4">
                                        <?php
                                            if(isset($_GET['id'])){
                                                $c_id = filter_input(INPUT_GET, 'id' ,FILTER_SANITIZE_NUMBER_INT);
                                                $sql = "SELECT * FROM adviser_certificate WHERE c_id = '$c_id'";
                                                $query = mysqli_query($conn,$sql);
                                                $fetch = mysqli_fetch_array($query);
                                        ?>
                                            <h4 class="text-danger" style="font-weight: 600;">แก้ไขข้อมูล <?php echo $fetch['c_name']; ?>
                                            </h4>
                                            <hr>
                                            <form class="form-material mt-4" action="process/edit_data_adviser.php" method="post">
                                                <div class="form-group">
                                                    <label for="">เลขที่เกียรติบัตร</label>
                                                    <input type="text" class="form-control form-control-line" name="c_ref_code" value="<?php echo $fetch['c_ref_code']; ?>">
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="">ชื่อ-สกุล</label>
                                                    <input type="text" class="form-control" name="c_name"
                                                        value="<?php echo $fetch['c_name']; ?>">
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="">โรงเรียน</label>
                                                    <input type="text" class="form-control" name="c_school"
                                                        value="<?php echo $fetch['c_school']; ?>">
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="">การแข่งขัน</label>
                                                    <input type="text" class="form-control" name="c_type"
                                                        value="<?php echo $fetch['c_type']; ?>">
                                                </div>

                                                <div class="mt-3">
                                                    <label>ระดับ</label>
                                                    <select class="form-control" name="c_grade">
                                                        <option><?php echo $fetch['c_grade']; ?></option>
                                                        <option>ประถมศึกษา</option>
                                                        <option>มัธยมศึกษาตอนต้น</option>
                                                        <option>มัธยมศึกษาตอนปลาย</option>
                                                    </select>
                                                </div>


                                                <div class="form-group mt-3">
                                                    <label for="">ทีม</label>
                                                    <input type="text" class="form-control" name="c_school"
                                                        value="<?php echo $fetch['c_team']; ?>">
                                                </div>


                                                <div class="form-group mt-3">
                                                    <label for="">รางวัล</label>
                                                    <input type="text" class="form-control" name="c_awards"
                                                        value="<?php echo $fetch['c_awards']; ?>">
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="">รางวัล (รายละเอียด)</label>
                                                    <input type="text" class="form-control" name="c_awards_detiail"
                                                        value="<?php echo $fetch['c_awards_detiail']; ?>">
                                                </div>

                                                <div class="form-group mt-3 d-none">
                                                    <label for="">ไอดี</label>
                                                    <input type="text" class="form-control" name="c_id"
                                                        value="<?php echo $fetch['c_id']; ?>">
                                                </div>



                                                <input type="submit" name="edit" class="btn btn-warning mt-3 w-100" value="แก้ไข"
                                                    style="font-weight: 600;">

                                            </form>

                                            <a href="admin_print_adviser.php" class="btn btn-primary w-100 mt-3" style="font-weight: 600;">เพิ่มข้อมูล</a>
                                        <?php }else{ ?>
                                            <h4 class="text-primary" style="font-weight: 600;">เพิ่มข้อมูล</h4>
                                            <hr>

                                            <div id="link_wrapper"></div>
                                            <form class="form-material mt-4" action="process/add_data_adviser.php" method="post">
                                                <div class="form-group">
                                                    <label for="">เลขที่เกียรติบัตร</label>
                                                    <input type="text" class="form-control form-control-line" name="c_ref_code">
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="">ชื่อ-สกุล</label>
                                                    <input type="text" class="form-control" name="c_name">
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="">โรงเรียน</label>
                                                    <input type="text" class="form-control" name="c_school">
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="">การแข่งขัน</label>
                                                    <input type="text" class="form-control" name="c_type">
                                                </div>

                                                <div class="mt-3">
                                                    <label>ระดับ</label>
                                                    <select class="form-control" name="c_grade">
                                                        <option>ประถมศึกษา</option>
                                                        <option>มัธยมศึกษาตอนต้น</option>
                                                        <option>มัธยมศึกษาตอนปลาย</option>
                                                    </select>
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="">ทีม</label>
                                                    <input type="text" class="form-control" name="c_school">
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="">รางวัล</label>
                                                    <input type="text" class="form-control" name="c_awards">
                                                </div>

                                                <div class="form-group mt-3">
                                                    <label for="">รางวัล (รายละเอียด)</label>
                                                    <input type="text" class="form-control" name="c_awards_detiail">
                                                </div>

                                                <div class="form-group mt-3 d-none">
                                                    <label for="">ไอดี</label>
                                                    <input type="text" class="form-control" name="c_id">
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
                                                        <th style="font-weight: 600;" class="text-center">ลำดับที่</th>
                                                        <th style="font-weight: 600;">ชื่อการแข่ง/ระดับ</th>
                                                        <th style="font-weight: 600;">รางวัล</th>
                                                        <th style="font-weight: 600;">ชื่อ-สกุล/โรงเรียน</th>
                                                        <th style="font-weight: 600;" class="text-center">แก้ไข</th>
                                                        <th style="font-weight: 600;" class="text-center">ลบ</th>
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
                                                        <td><?php echo $i++ ?></td>
                                                        <td><?php echo $fetch['c_type']?>(<?php echo $fetch['c_grade']?>)</td>
                                                        <td><?php echo $fetch['c_awards']?></td>
                                                        <td><?php echo $fetch['c_name']?><br />โรงเรียน<?php echo $fetch['c_school']?></td>
                                                        <td><a href="admin_print_adviser.php?id=<?php echo $fetch['c_id']; ?>" class="btn btn-warning">แก้ไข</a></td>
                                                        <td><a href="process/delete_data_adviser.php?id=<?php echo $fetch['c_id']; ?>" class="btn btn-danger">ลบ</a></td>
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