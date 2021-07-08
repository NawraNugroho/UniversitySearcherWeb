<!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #6495ED;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-top:10px;
}

input[type=submit]:hover {
  background-color: #87CEFA;
}

.container {
  border-radius: 5px;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<?php
      include('style-header.php');
    ?>
    <style>
</style>
    <title>Formulir Pendaftaran Tour Universitas | SMK Coding</title>
</head>

<body id="grad1">
<?php
      include('header.php');
    ?>
    <header>
        <h3>Formulir Pendaftaran Tour Universitas</h3>
    </header>
    <div class="container">
    <form action="proses_pendaftaran2.php" method="POST">

    <div class="row">
    <div class="col-25">
      <label for="nameuniv">Nama Universitas :</label>
    </div>
    <div class="col-75">
      <input type="text" id="nameuniv" name="nameuniv" placeholder="Yag ingin dituju">
    </div>
  </div>
           <div class="row">
            <div class="col-25">
            <label for="tourguide">Tour Guide: </label>
            <label><input type="radio" name="tourguide" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="tourguide" value="perempuan"> Perempuan</label>
            </div>
            </div>
    <div class="row">
    <div class="col-25"> 
      <label for="firstname">Nama Depan:</label>
    </div>
    <div class="col-75">
      <input type="text" id="firstname" name="firstname">
    </div>
   </div>
   <div class="row">
    <div class="col-25"> 
      <label for="lastname"> Nama Belakang:</label>
    </div>
    <div class="col-75">
      <input type="text" id="lastname" name="lastname">
    </div>
  </div>
    <div class="row">
    <div class="col-25"> 
      <label for="school">Sekolah Asal:</label>
    </div>
    <div class="col-75">
      <input type="text" id="school" name="school">
    </div>
  </div>
  <div class="row">
    <div class="col-25"> 
      <label for="grade">Kelas:</label>
    </div>
    <div class="col-75">
      <input type="text" id="grade" name="grade" placeholder="Saat ini">
    </div>
  </div>
  <div class="row">
    <div class="col-25"> 
      <label for="alamat">Alamat Sekolah:</label>
    </div>
    <div class="col-75">
      <input type="text" id="alamat" name="alamat">
    </div>
  </div>
  <div class="row">
    <div class="col-25"> 
      <label for="contact">Nomer WhatsApp:</label>
    </div>
    <div class="col-75">
      <input type="text" id="contact" name="contact">
    </div>
  </div>
  <div class="row">
    <div class="col-25"> 
      <label for="mail">Email:</label>
    </div>
    <div class="col-75">
      <input type="text" id="mail" name="mail">
    </div>
  </div>

  <div class="row">
    <div class="col-25">
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
    </div>
    </div>
    <div class="row">
    <div class="col-25">
      <label for="tour">Peserta Tour:</label>
    </div>
    <div class="col-75">
      <select id="tour" name="tour">
      <option>1 Personal</option>
      <option>2 Dengan 1 Pendamping</option>    
      </select>
    </div>
  </div>
    <div class="row">
    <div class="col-25">
      <label for="add">Menambah Pendamping:</label>
    </div>
    <div class="col-75">
      <select id="add" name="add">
      <option>0</option>
      <option>1</option>
      <option>2</option>
      </select>
   </div>
   </div>
   <p> Akan dikenakan biaya tambahan</p>
   <div class="row">
    <div class="col-25">
      <label for= "pendamping">Nama Pendamping:</label>
    </div>
    <div class="col-75">
      <input type="text" id="pendamping" name="pendamping">
    </div>
  </div>
  
  <div class="row">
    <div class="col-25">
      <label for="date">Hari:</label>
    </div>
    <div class="col-75">
      <select id="date"  name="date">
      <option>Senin</option>
      <option>Selasa</option>
      <option>Rabu</option>
      <option>Kamis</option>
      <option>Jumat</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="time">Ketersedian Waktu:</label>
    </div>
    <div class="col-75">
      <select id="time"  name="time">
      <option>Pagi : 09:00 - 12:00</option>
      <option>Siang : 12:00 - 15:00</option>
       <option>Sore : 15:00 - 17:00</option>
      </select>
    </div>
  </div>

  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>




 
  

                
         
           
           

