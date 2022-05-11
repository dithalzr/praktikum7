<?php 
	
	$id=$_GET['id'];
	$SQL ="SELECT * FROM buku_tamu WHERE id = $id";
			$data=mysqli_query($MySQli,$SQL);
			$d = mysqli_fetch_array($data);

 ?>
<div>
	<table>
		<thead>
			<tr>
				<th>DETAIL DATA</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>NAMA</td>
			</tr>
			<tr>
				<td><input disabled  type="text" value="<?= $d['nama'] ?>" name="nama"></td>
			</tr>
			<tr>
				<td>EMAIL</td>
			</tr>
			<tr>
				<td><input disabled type="text" value="<?= $d['email'] ?>" name="email"></td>
			</tr>
			<tr>
				<td>ISI</td>
			</tr>
			<tr>
				<td><input disabled type="text" value="<?= $d['isi'] ?>" name="isi"></td>
			</tr>			
		</tbody>
	</table>
</div>