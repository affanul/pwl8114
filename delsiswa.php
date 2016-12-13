<?php
require_once('lib/DBClass.php');
require_once('lib/m.siswa.php');

$id=$_GET['id'];

$siswa = new siswa();
$data = $siswa->readsiswa($id);

if(!is_numeric($id)){	
	exit('accas forbidden');
	}
	
$siswa = new siswa();
$data= $siswa_deletesiswa


?>