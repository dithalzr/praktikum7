<?php 
	
	if(isset($_GET['name'])) {
		$SQL = "SELECT * FROM buku_tamu WHERE nama = $nama";
	}

 ?>
<form method="POST" action="">
<div>
	<table>
		<thead>
			<tr>
				<th>EDIT DATA</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>NAMA</td>
			</tr>
			<tr>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>EMAIL</td>
			</tr>
			<tr>
				<td><input type="text" name="email"></td>
			</tr>
			<tr>
				<td>ISI</td>
			</tr>
			<tr>
				<td><input type="text" name="isi"></td>
			</tr>			
		</tbody>
		<tfoot>
			<tr>
				<td>
					<input  type="submit" value="SIMPAN" name="">
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
		$SQL = "UPDATE buku_tamu SET nama = '$nama',email='$email',isi='$isi' WHERE nama =$nama";
		if (mysqli_query($MySQli,$SQL)) {
			header("location:?page=list");
		} else {
			echo "Gagal edit data buku tamu !!";
		}
		
	}
 ?>
 </center>