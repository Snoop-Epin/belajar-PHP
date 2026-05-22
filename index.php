<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dafatar list dengan php</title>
</head>
<body>
    <h1>
        Daftar Absensi Siswa
    </h2>    
    <ol>
        <?php
        for ($i=1; $i<=1000; $i++)
            {
            echo"<li>Nama siswa ke-$i</li>";
            }
            ?>
    </ol>            
</body>
</html>