<form action="" method="POST">
<div>
	<table>
		<thead>
			<tr>
				<th>TAMBAH DATA BARU</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>NAMA</td>
			</tr>
			<tr>
				<td><input required type="text" name="nama"></td>
			</tr>
			<tr>
				<td>EMAIL</td>
			</tr>
			<tr>
				<td><input required type="text" name="email"></td>
			</tr>
			<tr>
				<td>ISI</td>
			</tr>
			<tr>
				<td><input required type="text" name="isi"></td>
			</tr>			
		</tbody>
		<tfoot>
			<tr>
				<td>
					<input  type="submit" value="SIMPAN" name="">
					<input  type="reset" value="RESET" name="">
				</td>
			</tr>			
		</tfoot>
	</table>
</div>
</form>
<center>
<?php 
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$isi = $_POST['isi'];
		$SQL = "INSERT INTO buku_tamu(nama,email,isi) VALUES('$nama','$email','$isi')";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal menambahkan data buku tamu !!";
		}
		
	}
 ?>
 </center>