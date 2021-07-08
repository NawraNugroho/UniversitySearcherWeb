<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	
<title>Input info Universitas</title>
</head>
<body>
<form action="input_info_univ.php" method="POST">
	Top: <input type="number" name="top"><br><br>
	Nama Universitas: <input type="text" name="nama_univ"><br><br>
	Provinsi:
	
<?php
  $sql = "SELECT id, provinsi FROM provinsi order by provinsi";
  $result = $conn->query($sql);

  echo '<select name="provinsi">';

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      	echo '<option value='.$row["id"].'>'. $row["provinsi"].'</option>';
      	
      }
  } else {
      echo "0 results";
  }

  echo '</select>';

?>
	Tidak menemukan provinsi? <a href="input_tambahan.php" target="_blank">Tambah disini</a><br><br>
	Kota: <input type="text" name="kota"><br><br>
	Alamat: <textarea name="alamat" rows="4" cols="30"></textarea><br><br>
	Website url: <input type="text" name="website"><br><br>
	Deskripsi: <textarea name="deskripsi" rows="4" cols="80"></textarea><br><br>
	
	<input type="submit" name="submit">
</form>

<?php
	if(empty($_POST) == false){

		$top = $_POST["top"];
		$nama_univ = $_POST["nama_univ"];
		$provinsi = $_POST["provinsi"];
		$kota = $_POST["kota"];
		$alamat = $_POST["alamat"];
		$website = $_POST["website"];
		$deskripsi = $_POST["deskripsi"];

		$sql = "INSERT INTO info_universitas (top, nama_univ, provinsi, kota, alamat, website, deskripsi) VALUES ('$top', '$nama_univ', '$provinsi', '$kota', '$alamat', '$website', '$deskripsi')";

	if (!empty($top and $nama_univ and $provinsi and $kota and $alamat and $deskripsi and $website)){  //-
		// Untuk mengetahui jika suatu variable tidak ada nilainya                                     // -
		if (mysqli_query($conn, $sql)) {                                                               //  -
			echo "Catatan baru berhasil di tambahkan";                                                 //   -
		}else {                                                                                        //    - Tidak akan menambahkan semua nilai, jika
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);                                      //    - terdapat kolom yang tidak ada nilainya
		}                                                                                              //   -
	}else {                                                                                            //  -
			echo "Semua input diperlukan.";                                                            // -
	}                                                                                                  //-
}

?>

</body>
</html>