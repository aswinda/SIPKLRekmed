<h1>disini ada mahasiswa</h1>

<?php
	echo '<table border=1>
		<tr>
			<td>Nim</td>
			<td>Nama</td>
			<td>Alamat</td>
		</tr>
	';
	
	foreach(Mahasiswa::all() as $row){
		echo '<tr>';
		echo '<td>'.$row->nim."</td>";
		echo '<td>'.$row->nama."</td>";
		echo '<td>'.$row->alamat."</td>";
		echo '<tr>';
	}
	echo '</table>'
?>