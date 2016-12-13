<?php

require_once('lib/DBClass.php');
require_once('lib/m.siswa.php');
if
if (isset($_POST['kirim'])){
	exit ('acces forbidden');
}

$siswa = new siswa();

//siswa->update_siswa($_POST['in_nis'], $data);

if(!copy($_FILES['in_foto']['tmp_name'], 'img/'.$_POST['in_nis].'.png')){

	exit('error upload File');}
	
$data['input_name'] = $_POST['in_name'];
$data['input_email'] = $_POST['in_email'];
$data['inport nationality']=$_POST ['in_nation'];
$data['foto']= "";

$siswa['nput_name'