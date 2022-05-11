<div style="width: 800px;">
	<table style="width: 800px; border : solid red 1px;">
	<thead>
		<tr>
			<th align="left">ID_BT</th>
			<th align="left">NAMA</th>
			<th align="left">EMAIL</th>
			<th align="left">ISI</th>
			<th >AKSI</th>		
		</tr>
	</thead>
	<tbody>
		<?php 
			$no = 1;
			$SQL ="SELECT ID_BT, NAMA, EMAIL, ISI FROM buku_tamu";
			$data=mysqli_query($MySQli,$SQL);

			while ($d = mysqli_fetch_array($data)) {
				?>
				<tr>
			<td><?= $no++ ?></td>
			<td><?= $d['NAMA'] ?></td>
			<td><?= $d['EMAIL'] ?></td>
			<td><?= $d['ISI'] ?></td>
			<td align="center"> <a href="edit.php">Edit</a> - <a class="hapus" href="delete.php">Hapus</a></td>
			</tr>
			<?php
			}
		 ?>
		
	</tbody>
</table>
</div>