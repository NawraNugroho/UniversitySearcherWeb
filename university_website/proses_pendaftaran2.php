<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "universitas_explorer";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  if(empty($_POST)== false){

      // ambil data dari formulir
      $nameuniv = $_POST['nameuniv'];
      $tourguide = $_POST['tourguide'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $school = $_POST['school'];
      $grade = $_POST['grade'];
      $alamat = $_POST['alamat'];
      $contact = $_POST['contact'];
      $mail = $_POST['mail'];
      $jk = $_POST['jenis_kelamin'];
      $tour = $_POST['tour'];
      $add = $_POST['add'];
      $pendamping = $_POST['pendamping'];
      $date = $_POST['date'];
      $time = $_POST['time'];
    
    
      // buat query
      $sql = "INSERT INTO 
          `daftar_touruniversitas` 
          (`nama_universitas`, 
          `tour_guide`, 
          `nama_depan`, 
          `nama_belakang`, 
          `sekolah_asal`, 
          `kelas`, 
          `alamat_sekolah`, 
          `nomer_whatsapp`, 
          `email`, 
          `jenis_kelamin`, 
          `peserta_tour`, 
          `nama_pendamping`,
          `nambah_pendamping`, 
          `ketersedian_waktu`, 
          `hari`) 
          VALUE 
          ( '$nameuniv',
            '$tourguide',
            '$firstname',
            '$lastname', 
            '$school',
            '$grade',
            '$alamat',
            '$contact',
            '$mail',
            '$jk',
            '$tour',
            '$add',
            '$pendamping',
            '$date', 
            '$time')";
      $query = mysqli_query($db, $sql);


      // apakah query simpan berhasil?
      if( $query ) {
          // kalau berhasil alihkan ke halaman index.php dengan status=sukses
          header('Location: outreach.php?status=sukses'); 
      } else {
          // kalau gagal alihkan ke halaman indek.php dengan status=gagal
          echo(mysqli_error($db));die;
          header('Location: form_daftar_universitas.php?status=gagal');
        
      }


  } else {
      die("Anda akan mendapatkan email verifikasi...");
  }

?>
