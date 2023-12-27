<?php

include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Ambil data dari form
    $nama_lengkap = $_POST['nama_lengkap'];
    $email =$_POST['email'];
    $no_telp =$_POST['no_telp'];
    $jenis_kelamin =$_POST['jenis_kelamin'];
    $tempat_lahir =$_POST['tempat_lahir'];
    $tanggal_lahir =$_POST['tanggal_lahir'];
    $alamat =$_POST['alamat'];
    $hobby =$_POST['hobby'];
    if(isset($_POST['hobby'])){
        $hobby = implode(', ', $_POST['hobby']);
        echo "Hobby Anda adalah: " . $hobby;
    } else {
        echo "Anda belum memilih hobby.";
    }
    $asal_kota =$_POST['asal_kota'];

    $sql = "INSERT INTO mydb (nama_lengkap, email, no_telp, jenis_kelamin, tempat_lahir, tanggal_lahir, alamat, hobby, asal_kota)
    VALUES ('$nama_lengkap', '$email', '$no_telp', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$alamat', '$hobby', '$asal_kota')";

    // Menampilkan pesan belum memilih hobby
    if (empty($_POST['hobby'])) {
        echo '<script>alert("Harap pilih setidaknya satu hobby");window.location="form.php"</script>';
        exit;
    }
    
    // Tampilkan pesan sukses
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Tambah Data Berhasil");window.location="form.php"</script>';
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



// Close connection
$conn->close();

?>