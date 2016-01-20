<?php
include_once '../conn/config.php';

if ($_POST['type'] == 'tambah') {
	
	$nama = $_POST['datanama'];
	$alamat = $_POST['dataalamat'];
	$random = rand(0,1);
	$q = "INSERT INTO `tb_data` (`nama`, `alamat`,`uface`) VALUES ('$nama', '$alamat','$random')";

	$query = mysqli_query($link ,$q);

	if ($random == 1) {
		# code...
		$random = "belum tampan";
	}else{
		$random = "tampan";
	}


	if ($query) {
		echo "  <tr><td width='3%'>Trident</td>
                <td width='27%'>".$nama."</td>
                <td width='30%'>".$alamat."</td>
                <td width='20%' class='center'>".$random."</td>
                <td width='20%' class='center'>".$random."</td>
                </tr>";
	}
}

