<?php
require_once('lib/DBClass.php');
require_once('lib/m.siswa.php');

$id=$_GET['id'];

$siswa = new siswa();
$data = $siswa->readsiswa($id);

print '<pre>';
print_r($data);
print '</pre>';


?>