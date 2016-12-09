<?php
	
	require_once('lib/DBClass.php');
	require_once('lib/m_siswa.php');
	
	$siswa = new Siswa();
	$data=$siswa->readAllSiswa();
	
	$now = date('Y m d');
	
	//print '<pre>';
	//print_r($data);
	//print '</pre>';
	
?>
<h1>Data Siswa</h1>
<table border="1">
	<tr>
		<th>ID</th>
		<th>FULL NAME</th>
		<th>EMAIL</th>
		<th>DATE OF BIRTH</th>
		<th>AGE</th>
		<th>NATIONALITY</th>
		<th></th>
	</tr>
	<?php foreach($data as $a):?>
	<tr>
		<td><?php echo $a['id_siswa']?></td>
		<td><?php echo $a['full_name']?></td>
		<td><?php echo $a['email']?></td>
		<td><?php echo $a['date_ob']?></td>
		
		<td>
			
			<?php 
			if (empty($a['date_ob'])){
				echo '<font color="red">Data Lahir tidak Valid</font>';
			}
			else if ($a['date_ob'] == '0000-00-00'){
				echo '<font color="red">Data lahir tidak Valid</font>';
			}
			else{
				echo ($now)-($a['date_ob']).' Tahun';
			}
			
			?>
		
		</td>
		<td><?php echo $a['nationality']?></td>
		<td><a href="d_siswa.php?a=<?php echo $a['id_siswa'] ?>">
		Detail
		</a>
		</td>
		<td><a href="?a=<?php echo $a['id_siswa'] ?>">
		Edit
		</a>
		</td>
		<td><a href="deleteSiswa.php?id=<?php echo $a['id_siswa'] ?>">
		Delete
		</a>
		</td>
	</tr>
	<?php endforeach ?>

</table>