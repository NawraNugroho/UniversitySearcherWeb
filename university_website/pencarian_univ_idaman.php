<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
<?php
    include('style-header.php');
  ?>

<style>
div.search {
  position: sticky;
  top: 0;
  width: 130px;
  border: 1px solid black;
  padding: 10px;
  margin: 0;
  float: left;
  
}


.display b, .display span, .display p {
  font-family: verdana;
}
.display b {
  font-size:140%;
  color: Navy;
}
.display span {
  font-size:110%;
  color: Black;
}
.display p {
  font-size:90%;
  color: Black;
}
.display {
  position: relative;
  top: 0px;
  left: 150px;
  background-color: Silver;
  width: 1100px;
  margin: 20px;
  padding: 15px;
}
.display a {
  color: Navy;
  text-decoration: none;
}
</style>

<script src="jquery.js"></script>
<script>
$(document).ready(function(){

      $(".display").mouseenter(function(){
        $(this).css("background-color","gainsboro");
      });

      $(".display").mouseleave(function(){
        $(this).css("background-color","Silver");
      });
  });

  
</script>

</head>
<body id="grad1">

<?php
      include('header.php');
    ?>


<div class="search"><p style="font-size:110%; font-family:helvetica;">Provinsi:</p>

<form action="pencarian_univ_idaman.php" id ="prov" method="GET">
<?php

  $sql = "SELECT id, provinsi FROM provinsi order by provinsi asc" ;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo '<input type="radio" name="provinsi" value='.$row["id"].'>';
        echo  $row["provinsi"]."<br><br>";
      }
  } else {
      echo "0 results";
  }

?>
<input type="submit" value="SEARCH">
</form>
</div>


<div class="university_parent">
<?php

  if(isset($_GET["provinsi"])){
    $selected_prov = $_GET["provinsi"];
  } else {
    $selected_prov = 0;
  }
  
  if ($selected_prov == 0) {
    $sql = "SELECT i.id, i.top, i.nama_univ, i.deskripsi, i.kota, i.provinsi, i.website, p.provinsi FROM info_universitas i, provinsi p 
  WHERE i.provinsi = p.id order by i.top asc";
  }
  else {
   $sql = "SELECT i.id, i.top, i.nama_univ, i.deskripsi, i.kota, i.provinsi, i.website, p.provinsi FROM info_universitas i, provinsi p 
  WHERE i.provinsi = p.id AND i.provinsi =".$selected_prov; 
  }
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
            
        echo '<div class="display">';
        echo '<span><b><a href='.$row["website"].' target="_blank">'.$row["nama_univ"].'</a></b> ('. $row["kota"].', '.$row["provinsi"]. ')'. '</span>';
        echo '<p>'. $row["deskripsi"]. '</p>';
        echo '<p style="font-size:70%; font-family:georgia; color:black;">top: '. $row["top"]. '</p>';
        echo '</div> ';

      }
  } else {
      echo "0 results";
  }

?>


</body>





</html>
