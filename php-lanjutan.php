<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Lanjutan</title>
</head>
<body>
    <h1>Hallo Kawan Semua</h1>
    <?php
        $tipe_data = "Santai Saja"; // tipe data string
        $tipe_data = 5; // tipe data integer
    ?>

    <h2><?=$tipe_data?></h2>

    <?php
        $pecahan = 6.75; // tipe data float/pecahan
    ?>

    <h2>Saya suka dengan pecahan bilangan ini <?=$pecahan?></h2>   

    <?php
            $perbandingan = true; // tipe data boolean

           // echo $perbandingan; 
    ?>

    <?php
        /*
            $provinsi[0] = "Jawa Timur";
            $provinsi[1] = "DKI Jakarta";
            $provinsi[2] = "IKN";
        */

        $provinsi = array("Jawa Timur",
                          "DKI Jakarta",
                          "IKN");
    
        $hasil = 25;
        echo "saya mempunyai kelereng sebanyak ";
        echo $hasil*2;
        echo"<br/>";
        echo "aku mendapatkan nilai ujian matematika sebesar ";
        echo $hasil+60;

        echo"<br/>";

        if($perbandingan == true) {
            echo "aku hari ini ingin tidur";
        } else {
            echo "aku hari ini harus bekerja";
        }

        echo"<br/>";

        $perbandingan = 5;
        switch($perbandingan) {
            case 1;
                $pesan = "Bakso Beranak";
            break;
            case 2;
                $pesan = "Nasi Padang";
            break;
            default;
                $pesan = "Hayo inget nabung";
        }

        echo $pesan;

        echo"<br/>";

        $provinsi = array("Jawa Timur",
                          "DKI Jakarta",
                          "IKN");
        
        foreach($provinsi as $key) {
            echo $key;
            echo"<br/>";
        }


    ?>
    

</body>
</html>