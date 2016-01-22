<?php
include_once '../conn/config.php';

if ($_POST['type'] == 'tambah') {
	
	$nama = $_POST['datanama'];
	$alamat = $_POST['dataalamat'];
	$random = rand(0,1);
	$q = "INSERT INTO `tb_data` (`nama`, `alamat`,`uface`) VALUES ('$nama', '$alamat','$random')";

	$query = mysqli_query($link ,$q);

	if ($random == 1) {
		$random = "belum tampan";
	}else{
		$random = "tampan";
	}

	$last_id =	mysqli_insert_id($link);

	if ($query) {
		echo " 	<tr id='tr_area_".$last_id."'>
                <td width='27%' class='nama_text'>".$nama."</td>
                <td width='30%'>".$alamat."</td>
                <td width='20%' class='center'>".$random."</td>
                <td width='20%' class='center'>
                	<button type='button' class='btn del_kometar' id='id_del_".$last_id."' data-id='".$last_id."'>Delete</button>
                </td>
                </tr>";
	}
}

if ($_POST['type'] == 'delete') {
	# code...

	$id = $_POST['dataid'];

	$q = "DELETE FROM tb_data  WHERE  id=$id;";
	$q = mysqli_query($link , $q);

}