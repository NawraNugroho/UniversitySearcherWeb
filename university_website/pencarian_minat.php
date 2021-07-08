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
  width: 180px;
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
  left: 200px;
  background-color: Silver;
  width: 550px;
  margin: 20px;
  padding: 15px;
}
.display a {
  color: black;
  text-decoration: underline;
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

<div class="search"><p style="font-size:110%; font-family:helvetica;">Minat:</p>

<form action="pencarian_minat.php" method="GET" id="minat">
<?php

  $sql = "SELECT minat, id FROM minat_bakat order by minat" ;
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
            
        echo '<input type="radio" name="minat" value='.$row["id"].'>';
        echo $row["minat"]."<br><br>";
      }
  } else {  
      echo "0 results";
  }

?>
<input type="submit" value="SEARCH">
</form>
</div>

<div class="jurusan">
<?php

  if(isset($_GET["minat"])){
    $selected_minat = $_GET["minat"];
  } else {
    $selected_minat = 0;
  }

  if ($selected_minat == 0){
    $sql = "SELECT j.jurusan, j.id_universitas, j.rating, i.nama_univ, i.website FROM jurusan j, info_universitas i WHERE j.id_universitas = i.id order by j.rating desc";
  }
  else {
    $sql = "SELECT j.jurusan, j.id_universitas, j.rating, i.nama_univ, i.website FROM jurusan j, info_universitas i WHERE j.id_universitas = i.id AND j.id_minat =".$selected_minat." order by j.rating desc";
  }
  
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
            
        echo '<div class="display">';
        echo '<b>'. $row["jurusan"].'</b><br>';
        echo '<p><a href='.$row["website"].' target="_blank">'.$row["nama_univ"].'</a></p>';
        echo '<p style="font-size:70%; font-family:georgia; color:black;">rate: '. $row["rating"]. '</p>';
        echo '</div> ';

      }
  } else {
      echo "0 results";
  }


?>
  
</div>
</body>
</html>
