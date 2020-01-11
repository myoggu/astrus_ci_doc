<!DOCTYPE html>

<html>
<head>
	<title >Home</title>
</head>
<body>

	<form action="<?php echo base_url().'index.php/tampil_cr/tambah'; ?>" method="post">
		
		<p>
		<label>Masukkan kata</label>
		<input type="text" name="raw" style="width:750px;" >
		</p>
		<p>
			<input type="submit" name="Simpan" value="Simpan" id="Simpan">
		</p>
	</form>
<br><br><br>
	 <a href="<?php echo base_url().'index.php/tampil_cr/index_a'?>">Lihat  data</a>
</body>
</html>



