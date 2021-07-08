<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?

if(empty($_POST)== false){
    
    // ambil data dari formulir
    $nim_mahasiswa = $_POST['nim_mahasiswa'];
    $nameuniv = $_POST['nameuniv'];
    $semester = $_POST['semester'];
    $majors = $_POST['majors'];
    $ekskul = $_POST['ekskul'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $mail = $_POST['mail'];
    $time = $_POST['time'];
    $jk = $_POST['jenis_kelamin'];
    
    
    // buat query
    $sql = "INSERT INTO formulir ( nim_mahasiswa, namauniversitas, semester, jurusan, ekskuldanclub, namadepan, namabelakang, nomer_whatsapp, email, ketersedianwaktu, jenis_kelamin) VALUE ( '$nim_mahasiswa', '$nameuniv', '$semester', '$majors', '$ekskul', '$firstname', '$lastname', '$contact', '$mail', '$time', '$jk' )";
    $query = mysqli_query($db, $sql);


    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        echo(mysqli_error($db));die;
        header('Location: outreach.php?status=sukses'); 
    } else {
        // kalau gagal alihkan ke halaman indek.php dengan status=gagal
        echo(mysqli_error($db));die;
        header('Location: form-daftar.php?status=gagal');
        
    }


} else {
    die("Anda akan mendapatkan email verifikasi...");
}

?>
