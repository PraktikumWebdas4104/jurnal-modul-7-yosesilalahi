<form method="POST"><center>Cari: &nbsp;<input type="text" name="cari" length=10>&nbsp;<input type="submit" name="nyari"></center></form>
<br><br>
<table border="0">
	<tr>
		<th>Nim</th>
		<th>Nama</th>
		<th>Aksi</th>
	</tr>

	<?php 
		if (isset($_POST['nyari'])) {
			# code...
			include'koneksi.php';
			$nim=$_POST['cari'];
			

			$query="SELECT nama, nim FROM datamhs WHERE nim=$nim";
			$hasil=mysqli_query($conn,$query);
			$no=1;
			while ($row=mysqli_fetch_array($hasil)) {
				# code...
				echo "<tr>
				<td>$row[0]</td>
				<td>$row[1]</td>
				<td>delete</td>
				</tr>";

			}
		}




	 ?>
	
</table>