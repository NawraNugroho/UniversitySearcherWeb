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
    <th>Rating</th>
    <th>Jurusan</th>
    <th>Minat</th>
    <th>Universitas</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>

  <?php

  $sql = "SELECT j.id, j.jurusan, j.id_minat, j.id_universitas, j.rating, m.minat, i.nama_univ FROM jurusan j, minat_bakat m, info_universitas i WHERE j.id_minat = m.id AND j.id_universitas = i.id order by j.rating desc"; //Memilih kolom yang akan ditampilkan dari beberapa tabel
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // data output setiap baris
      while($row = $result->fetch_assoc()) {
        echo '<tr>';                                                                                                //-
        echo '<td>'.$row["rating"].'</td>';                                                                         // -
        echo '<td>'.$row["jurusan"].'</td>';                                                                        //  -
        echo '<td>'.$row["minat"].'</td>';                                                                          //   - Membuat tabel dan mengisinya dengan
        echo '<td>'.$row["nama_univ"].'</td>';                                                                      //  -  nilai-nilai setiap kolom
        echo '<td><a class="ed" href="edit_jurusan.php? id='.$row["id"].'" target = "_blank" >Edit</a></td>';       // -
        echo '<td><a class="ed" href="delete_jurusan.php? id='.$row["id"].'" target = "_blank">Delete</a></td>';    //-
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