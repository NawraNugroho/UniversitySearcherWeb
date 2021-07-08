<?php
  include('config.php');

  $sql = "DELETE FROM jurusan WHERE id='".$_GET["id"]."'";
  if (mysqli_query($conn, $sql)) {
  	echo "Catatan berhasil dihapus";
  } else {
  	echo "Error deleting record: " . mysqli_error($conn);
  }

  ?>


 