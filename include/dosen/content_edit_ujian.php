<?php
	$id_dosen = $_SESSION['id_dosen'];
	$id_ujian = $sluguri;
	$data_ujian = mysqli_query($conn, "SELECT * FROM tb_ujian WHERE id_ujian = $id_ujian");
	foreach ($data_ujian as $ujian) {
		$nama_ujian = $ujian['nama_ujian'];
	}
	
	if(isset($_POST['submit'])){
		$nama_ujian = $_POST['nama_ujian'];
		$buat_ujian = mysqli_query($conn, "UPDATE tb_ujian SET nama_ujian = '$nama_ujian' WHERE id_ujian = $id_ujian");
		header('Location: ../../dosen');
	}
?>
<div class="main">
	<!-- MAIN CONTENT -->
	<div class="main-content">
		<div class="container-fluid">
			<h3 class="page-title">Edit Ujian</h3>
			<div class="panel">
				<div class="panel-body">
					<form id="form" action="" method="POST">
						<input type="text" name="nama_ujian" class="form-control" value="<?php echo $nama_ujian ?>"><br />
						<input type="submit" name="submit" value="Edit Ujian" class="btn btn-primary">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>