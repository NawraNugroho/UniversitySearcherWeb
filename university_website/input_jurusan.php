<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	
<title>Input Jurusan</title>
</head>
<body>
<form action="input_jurusan.php" method="POST">
	Rating: <input type="number" name="rating"><br><br>
	Jurusan: <input type="text" name="jurusan"><br><br>
	Minat:
	
<?php
  $sql = "SELECT id, minat FROM minat_bakat order by minat";
  $result = $conn->query($sql);

  echo '<select name="minat">';

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      	echo '<option value='.$row["id"].'>'. $row["minat"].'</option>';
      	
      }
  } else {
      echo "0 results";
  }

  echo '</select>';
  echo ' Tidak menemukan minat/bakat? <a href="input_tambahan.php" target="_blank">Tambah disini</a><br><br>'

  ?>

Universitas:

<?php
  $sql = "SELECT id, nama_univ FROM info_universitas order by nama_univ";
  $result = $conn->query($sql);

  echo '<select name="nama_univ">';

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
      	echo '<option value='.$row["id"].'>'. $row["nama_univ"].'</option>';
      	
      }
  } else {
      echo "0 results";
  }

  echo '</select>';
  echo ' Tidak menemukan universitas? <a href="input_info_univ.php" target="_blank">Tambah disini</a><br><br>'

?>
	
	<input type="submit" name="submit">
</form>

<?php
	if(empty($_POST) == false){

		$rating = $_POST["rating"];
		$jurusan = $_POST["jurusan"];
		$minat = $_POST["minat"];
		$nama_univ = $_POST["nama_univ"];

		$sql = "INSERT INTO jurusan (rating, jurusan, id_minat, id_universitas) VALUES ('$rating', '$jurusan', '$minat', '$nama_univ')";

    if (!empty($jurusan and $minat and $nama_univ and $rating)){  //-
      // Untuk mengetahui jika suatu variable nilainya kosong     // -
      if (mysqli_query($conn, $sql)) {                            //  -
        echo "Catatan baru berhasil di tambahkan";                //   -
      }else {                                                     //    - Tidak akan menambahkan semua nilai,
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);     //    - jika terdapat kolom yang tidak ada nilainya
      }                                                           //   -
    }else {                                                       //  -
      echo "Semua input diperlukan";                              // -
    }                                                             //-

	}

?>

</body>
</html>