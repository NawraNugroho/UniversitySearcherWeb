<?php
  include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Info Universitas</title>
</head>
<body>
<?php
	$sql = "SELECT i.id, i.top, i.nama_univ, i.kota, i.alamat, i.deskripsi, i.website FROM info_universitas i WHERE i.id ='".$_GET["id"]."'"; //memilih kolom dari suatu baris
	$results = mysqli_query($conn, $sql);
	                      //connection, query
	while($rows = mysqli_fetch_assoc($results)){
		       //gets the results row as an associative array
?>

<form method="POST">
	Top: <input type="number" name="top" value="<?=$rows["top"];?>"><br><br>
	Nama Universitas: <input type="text" name="nama_univ" value="<?=$rows["nama_univ"];?>"><br><br>
	Provinsi: <select name="provinsi" value="">

<!----------Untuk mengeluarkan nilai opsi (option value) yang berdasarkan dari tabel relasi provinsi---------->	
<?php
    $sql2 = "SELECT i.provinsi AS i_provinsi, p.id AS p_id, p.provinsi AS p_provinsi FROM info_universitas i, provinsi p WHERE i.id ='".$_GET["id"]."'";
	$result = mysqli_query($conn, $sql2);

  if ($result->num_rows > 0) {
      // data output setiap baris
      while($row = $result->fetch_assoc()) {
       	if ($row['p_id'] != $row['i_provinsi']){
      		echo '<option value='.$row["p_id"].'>'. $row["p_provinsi"].'</option>';
      	}else {
      		echo '<option value='.$row["p_id"].' selected>'. $row["p_provinsi"].'</option>';
      	}
      }
  } else {
      echo "0 results";
  }

?>
<!-------------------------------------------------------------------------------------------------------------->

	</select><br><br>
	Kota: <input type="text" name="kota" value="<?=$rows["kota"];?>"><br><br>
	Alamat: <textarea name="alamat" rows="4" cols="30"><?=$rows["alamat"];?></textarea><br><br>
	Deskripsi: <textarea name="deskripsi" rows="4" cols="80"><?=$rows["deskripsi"];?></textarea><br><br>
	Website url: <input type="text" name="website" value="<?=$rows["website"];?>"><br><br>
	
	<input type="submit" name="submit">

<?php
}

//----------------------------Perbarui nilai kolom---------------------------------------------------------------
if($_POST){

		$top = $_POST["top"];
		$nama_univ = $_POST["nama_univ"];
		$provinsi = $_POST["provinsi"];
		$kota = $_POST["kota"];
		$alamat = $_POST["alamat"];
		$deskripsi = $_POST["deskripsi"];
		$website = $_POST["website"];

		$sql = "UPDATE info_universitas SET top = '$top', nama_univ = '$nama_univ', provinsi = '$provinsi', kota = '$kota', alamat = '$alamat', deskripsi = '$deskripsi', website = '$website' WHERE id ='".$_GET["id"]."'";

	if (!empty($top and $nama_univ and $provinsi and $kota and $alamat and $deskripsi and $website)){   //-
		if (mysqli_query($conn, $sql)) {                                                                // -
			echo "Catatan baru berhasil di update";                                                     //  -
		}else {                                                                                         //   -
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);                                       //    - Program tidak akan memperbarui nilai kolom,	
		}                                                                                               //   -  jika kolom-kolom tidak terpenuhi semua
	}else {                                                                                             //  -
			echo "Semua input diperlukan.";                                                             // -
	}                                                                                                   //-
}
//-----------------------------------------------------------------------------------------------------------------
	
?>


</form>
</body>
</html>
