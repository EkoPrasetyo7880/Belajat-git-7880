<?php
	
	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	require_once('lib/m_nationality.php');
	
$id = $_GET['id'];

if(!is_numeric($id)){
	exit('Acsess Forbiden');
}

$siswa = new Siswa();
$data = $siswa->ReadSiswa($id);

$nation = new nationality();
$data_nation = $nation->readAllNationality();

if(empty(data)){
	exit('Siswa is not found');
}
$dt = $data(0);

