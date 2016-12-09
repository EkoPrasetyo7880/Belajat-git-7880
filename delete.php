<?php
	
	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	
$id = $_GET['a'];

if(!is_numeric($id)){
	exit('Acsess Forbiden');
}

$siswa = new Siswa();
$data = $siswa->deleteSiswa($id);

if(empty($data)){
	echo "data berhasil di hapus";
}
?>
<br/>
<a href="siswa.php">kembali</a>
