<?php
  include('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style>
    td, th {
      border: 1px solid black;
      text-align: center;
      padding: 5px;
    }
    a.web:link {
      color: blue;
    }
    a.web:visited {
      color: purple;
    }
    a.web:hover {
      color: black;
    }
    a.ed:link, a.ed:visited {
      color: black;
    }
    a.ed:hover {
      color: purple;
    }
    a.ed:active {
      color: blue;
  </style>
</head>
<body>

<table>
  <tr>
    <th>Rangking</th>
    <th>Nama Universitas</th>
    <th>Provinsi</th>
    <th>Kota</th>
    <th>Alamat</th>
    <th>Deskripsi</th>
    <th>Website</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

  <?php

  $sql = "SELECT i.id, i.top, i.nama_univ, i.provinsi, i.kota, i.alamat, i.deskripsi, i.website, p.provinsi FROM info_universitas i, provinsi p WHERE p.id = i.provinsi order by i.top asc" ; //Memilih kolom yang akan ditampilkan dari beberapa tabel
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // data output setiap baris
      while($row = $result->fetch_assoc()) {
        echo '<tr>';                                                                                               //-
        echo '<td>'.$row["top"].'</td>';                                                                           // -
        echo '<td>'.$row["nama_univ"].'</td>';                                                                     //  -
        echo '<td>'.$row["provinsi"].'</td>';                                                                      //   -
        echo '<td>'.$row["kota"].'</td>';                                                                          //    -
        echo '<td>'.$row["alamat"].'</td>';                                                                        //     - Membuat tabel dan mengeluarkan
        echo '<td>'.$row["deskripsi"].'</td>';                                                                     //    -  nilai setiap kolom
        echo '<td><a class="web" href="'.$row["website"].'" target= "_blank">'.$row["website"].'</a></td>';        //   -
        echo '<td><a class="ed" href="edit_info_univ.php? id='.$row["id"].'" target = "_blank" >Edit</a></td>';    //  -
        echo '<td><a class="ed" href="delete_info_univ.php? id='.$row["id"].'" target = "_blank">Delete</a></td>'; // -
        echo '</tr>';                                                                                              //-
      }
  } 
  else {
      echo "0 results";
  }

  ?>
</table>
</body>
</html>