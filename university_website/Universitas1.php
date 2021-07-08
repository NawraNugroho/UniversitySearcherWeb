<?php
  include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
<?php
      include('style-header.php');
    ?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body id="grad1">
<?php
      include('header.php');
    ?>

<h2>Universitas</h2>

<table>
  <tr>
    <th>Rangking</th>
    <th>Nama Universitas</th>
    <th>Alamat</th>
  </tr>

  <?php

  $sql = "SELECT top, nama_univ, alamat FROM info_universitas" ;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'.$row["top"].'</td>';
        echo '<td>'.$row["nama_univ"].'</td>';
        echo '<td>'.$row["alamat"].'</td>';
        echo '</tr>';
      }
  } 
  else {
      echo "0 results";
  }

  ?>
</table>

</body>
</html>
