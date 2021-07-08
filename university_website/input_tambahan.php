<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
	
<title>Input Tambahan</title>
</head>
<body>
<form action="input_tambahan.php" method="POST">
	Provinsi: <input type="text" name="provinsi"><br><br>
	Minat/Bakat: <input type="text" name="minat"><br><br>
	
	<input type="submit" name="submit">
</form>

<?php
	if($_POST){

		$provinsi = $_POST["provinsi"];
		$minat = $_POST["minat"];

		if(empty($minat)){
			$sql = "INSERT INTO provinsi (provinsi) VALUES ('$provinsi')";
		}elseif (empty($provinsi)) {
			$sql = "INSERT INTO minat_bakat (minat) VALUES ('$minat')";
		}else{
			$sql = "INSERT INTO provinsi (provinsi) VALUES ('$provinsi');";
			$sql .= "INSERT INTO minat_bakat (minat) VALUES ('$minat')";
		}
		
		
	if (mysqli_multi_query($conn, $sql)) {
        echo "Catatan baru berhasil dibuat";
        } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        } 
	}

?>

</body>
</html>