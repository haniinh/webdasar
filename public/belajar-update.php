<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama CRUD</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="./font/bootstrap-icons.css">
</head>
<body>
<div class="col-lg-4 col-xxl-4 my-5 mx-auto">
    <h1 class="text-center">UPDATE DATA DIRI</h1>
    <?php

$NIM = $_GET['NIM'];
require_once "./conn.php";
$sql = "SELECT * FROM data_diri WHERE NIM='$NIM'";

if ($result = mysqli_query($conn, $sql)) {
    echo "<br>data tersedia";
    while($user_data = mysqli_fetch_assoc($result)) {
        $NIM = $user_data['NIM'];
        $Nama = $user_data['Nama'];
        $Jenis_Kelamin = $user_data['Jenis_Kelamin'];
        $Tempat_Lahir = $user_data['Tempat_Lahir'];
        $Tgl_Lahir = $user_data['Tgl_Lahir'];
        $Alamat = $user_data['Alamat'];
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

$sql = "UPDATE data_diri SET NIM=$NIM,Nama=$Nama,Jenis_Kelamin=$Jenis_Kelamin,Tempat_Lahir=$Tempat_Lahir,
 Tgl_Lahir=$Tgl_Lahir,Alamat=$Alamat WHERE NIM=$NIM ";
 if (mysqli_query($conn, $sql)) {
 echo "Data berhasil diupdate";
 } else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
 }
 ?>   
    <form action="" method="post">
        NIM: <input type="text" name="NIM"><br>
        Nama: <input type="text" name="Nama"><br>
        Jenis Kelamin: <input type="text" name="Jenis_Kelamin"><br>
        Tempat Lahir: <input type="text" name="Tempat_Lahir"><br>
        Tanggal Lahir (yyyy-mm-dd): <input type="text" name="Tgl_Lahir"><br>
        Alamat: <input type="text" name="Alamat"><br>
        <button type="submit" name="submit">Update Data</button>
    </form>


    
</div>

    <script src="./js/bootsrap.min.js"></script>
    <script src="./js/bootsrap.bundle.min.js"></script>
    <script type="text/javascript">
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
        'use strict'

        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')

        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.classList.add('was-validated')
            }, false)
        })
        })()
    </script>

</body>
</html>