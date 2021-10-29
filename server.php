<?php 
	include("connect/connect.php");
?>
<?php 
	$query = mysqli_query($conn, "SELECT * FROM refcode_certificate ORDER BY c_id DESC LIMIT 1");
	while($row = mysqli_fetch_array($query)){
	$c_ref_code = $row['c_ref_code'];
?>
<p class="text-danger" style="font-weight: 600;">เลขที่เกียรติบัตรที่ใช้ล่าสุด <?php echo $c_ref_code; ?></p>
<?php } ?>
