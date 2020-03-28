<?php
require 'database.php';


$result = msqli_query($conn,"Select * from karyawan");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style type="text/css">
		img{
			width: 100px;
			height: 100px;
		}
	</style>
</head>
<body>
	<h1>Daftar Karyawan</h1>
	<table border="1" cellpadding="12" cellspacing="0">
		<tr>
			<th>No.</th>
			<th>NIK</th>
			<th>Nama</th>
			<th>Alamat</th>
		</tr>
		<?php $i= 1; ?>
		<?php while ($rows = mysqli_fetch_assoc($result)) : ?> 
		<tr>
			<td><?= $i ?></td>
			<td><?= $rows["nik"] ?></td>
			<td><?= $rows["nama"] ?></td>
			<td><?= $rows["alamat"] ?></td>
		</tr>
		<?php $i++; ?>
		<?php endwhile; ?>
	</table>
</body>
</html>
