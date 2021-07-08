<?php
  include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Jurusan</title>
</head>
<body>
<?php
	$sql = "SELECT j.jurusan, j.id_minat, j.id_universitas, j.rating FROM jurusan j WHERE j.id ='".$_GET["id"]."'"; //Memilih kolom jurusan dari suatu baris
	$results = mysqli_query($conn, $sql);
	                      //connection, query
	while($rows = mysqli_fetch_assoc($results)){
		       //gets the results row as an associative array
?>

<form method="POST">
	Jurusan: <input type="text" name="jurusan" value="<?=$rows["jurusan"];?>"><br><br>
	Minat: <select name="minat" value="">
	

<!-----Untuk mengeluarkan nilai opsi (option value) yang berdasarkan dari tabel relasi minat_bakat, dan info_universitas----->
<?php
    $sql2 = "SELECT j.id_minat AS j_minat, m.id AS m_id, m.minat AS m_minat FROM jurusan j, minat_bakat m WHERE j.id ='".$_GET["id"]."'";
	$result = mysqli_query($conn, $sql2);

  if ($result->num_rows > 0) {
      // data output setiap baris
      while($row = $result->fetch_assoc()) {
       	if ($row['m_id'] != $row['j_minat']){
      		echo '<option value='.$row["m_id"].'>'. $row["m_minat"].'</option>';
      	}else {
      		echo '<option value='.$row["m_id"].' selected>'. $row["m_minat"].'</option>';
      	}
      }
  } else {
      echo "0 results";
  }
  echo "</select><br><br>";

  echo 'Universitas: <select name="universitas" value="">';
  $sql2 = "SELECT j.id_universitas AS j_univ, i.id AS i_id, i.nama_univ AS i_univ FROM jurusan j, info_universitas i WHERE j.id='".$_GET["id"]."'";
  $result = mysqli_query($conn, $sql2);

  if ($result->num_rows > 0) {
      // output data of every row
      while($row = $result->fetch_assoc()) {
       	if ($row['i_id'] != $row['j_univ']){
      		echo '<option value='.$row["i_id"].'>'. $row["i_univ"].'</option>';
      	}else {
      		echo '<option value='.$row["i_id"].' selected>'. $row["i_univ"].'</option>';
      	}
      }
  } else {
      echo "0 results";
  }
  echo "</select><br><br>";

?>
<!-------------------------------------------------------------------------------------------------------------------------------->


	Rating: <input type="number" min=0 max=1000 name="rating" value="<?=$rows["rating"];?>"><br><br>
	
	<input type="submit" name="submit">

<?php
}

//--------------------------------------------------------------Perbarui nilai kolom------------------------------------------------------------------------
if($_POST){

		$jurusan = $_POST["jurusan"];
		$minat = $_POST["minat"];
		$universitas = $_POST["universitas"];
		$rating = $_POST["rating"];

		$sql = "UPDATE jurusan SET jurusan = '$jurusan', id_minat = '$minat', id_universitas = '$universitas', rating = '$rating' WHERE id ='".$_GET["id"]."'";

  if (!empty($jurusan and $minat and $universitas and $rating)){   //-
    if (mysqli_query($conn, $sql)) {                               // -
      echo "Catatan baru berhasil di update";                      //  -
    }else {                                                        //   -
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);        //    - tidak akan memperbarui nilai semua kolom, jika terdapat kolom yang kosong nilainya
    }                                                              //   -
  }else {                                                          //  -
    echo "Semua input diperlukan";                                 // -
  }                                                                //-
	 
}
//------------------------------------------------------------------------------------------------------------------------------------------------------------
?>


</form>
</body>
</html>
