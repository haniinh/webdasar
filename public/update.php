<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./font/bootstrap-icons.css">
</head>
<body>
<div class="col-lg-4 col-xxl-4 my-5 mx-auto">
    <h1 class="text-center">UPDATE DATA DIRI</h1>

    <?php 
    if(isset($_GET['NIM'])): ?>
    <?php
include_once("./conn.php");

if(isset($_GET['id'])){
    // ambil id dari url atau method get
    $id = $_GET['id'];

    // Buat koneksi dengan MySQL
    $conn = mysqli_connect("localhost","root","","mahasiswa");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo '<br>koneksi berhasil';
    }

    $sql = "SELECT * FROM data_diri WHERE NIM='$NIM'";

    if ($result = mysqli_query($conn, $sql)) {
        echo "<br>data tersedia";
        while($user_data = mysqli_fetch_assoc($result)) {
            $NIM = $user_data['nim'];
            $Nama = $user_data['nama'];
            $Jenis_Kelamin = $user_data['jenis_kelamin'];
            $Tempat_Lahir = $user_data['tempat_lahir'];
            $Tgl_Lahir = $user_data['tanggal_lahir'];
            $Alamat = $user_data['alamat'];
        }
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
    <form action="" method="post">
        NIM: <input type="text" name="nim" value="<?php echo $NIM; ?>"><br>
        Nama: <input type="text" name="nama" value="<?php echo $Nama; ?>"><br>
        Jenis Kelamin: <input type="text" name="jenis_kelamin" value="<?php echo $Jenis_Kelamin; ?>"><br>
        Tempat Lahir: <input type="text" name="tempat_lahir" value="<?php echo $Tempat_Lahir; ?>"><br>
        Tanggal Lahir (yyyy-mm-dd): <input type="text" name="tgl_lahir" value="<?php echo $Tgl_lahir; ?>"><br>
        Alamat: <input type="text" name="alamat" value="<?php echo $Alamat; ?>"><br>
        <button type="submit" name="submit">Update Data</button>
    </form>
    <?php endif; ?>
}
</body>
</html>



if (isset($_POST['submit'])){
    //var_dump($_POST);
    $NIM = $user_data['nim'];
    $Nama = $user_data['nama'];
    $Jenis_Kelamin = $user_data['jenis_kelamin'];
    $Tempat_Lahir = $user_data['tempat_lahir'];
    $Tgl_Lahir = $user_data['tanggal_lahir'];
    $Alamat = $user_data['alamat'];

    // Buat koneksi dengan MySQL
    $con = mysqli_connect("localhost","root","","mahasiswa");

    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }else{
        echo '<br>koneksi berhasil';
    }

    $sql = "UPDATE data_diri SET NIM='$NIM',nama='$Nama',$Jenis_Kelamin='jenis_kelamin','tempat_lahir=' $Tempat_Lahir',
    tanggal_lahir=' $Tgl_Lahirr',alamat='$Alamat' WHERE NIM='$NIM' ";

    if (mysqli_query($conn, $sql)) {
        echo "<br>Data berhasil diupdate";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
      
    mysqli_close($conn);
}

?>

