<?php
require_once('lib/DBClass.php');
require_once('lib/m.siswa.php');

$siswa = new siswa();
$data = $siswa->readAllSiswa();


?>


<table border=1>
	<tr>
		<th>ID SISWA</th>
		<th>FULL NAME</th>
		<th>NATIONALITY</th>
		<th>AKSI</th>
		
	</tr>
	
	<?php foreach($data as $a):	?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['nationality']?></td>
		<td> <a href=dsiswa.php?id=?<?php echo $a['id_siswa']?> >detail</a></td>
		<td> <a href=usiswa.php?id=?<?php echo $a['id_siswa']?> >edit</a></td>
		<td> <a href=delsiswa.php?id=?<?php echo $a['id_siswa']?> >delete</a></td>
		
	</tr>
	<?php endforeach ?>
	</table>