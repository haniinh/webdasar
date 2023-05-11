<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbs = "mahasiswa";

$conn = new mysql($host, $user, $pass, $dbs);

if ($conn->connect_error) {
    die("No Connection to Database");
}

$sql = "SELECT * FROM data_diri";

if ($conn->query($sql)) {
    $hasil = $conn->query($sql);

    if ($hasil->num_rows > 0) {
?>


        <tabel border="1" cellpadding="10" cellsp
        <?php
        while($row = $hasil->fetch_assoc()) {
        ?>
        <tr>
        <?php
            echo "<td>".$row['NIM']."</td><td>"
            .$row['Nama']."</td><td>"
            .$row['Jenis_Kelamin']."</td><td>"
            .$row['Tempat_Lahir']."</td><td>"
            .$row['Tgl_Lahir']."</td><td>"
            .$row['Alamat']."</td>";
            ?>
        </tr>
        <?php
        }
        ?>
        </table>
        <?php

    }
} else {
    echo "perintah gagal dijalankan"
}