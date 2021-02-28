<?php
require_once 'User.php';
require_once 'Mahasiswa.php';
require_once 'Pegawai.php';
require_once 'MahasiswaBaru.php';
require_once 'Dosen.php';

$user1 = new User('username1','password123');
$user2 = new User('username2','password321');

$harry = new Mahasiswa('H1101191040','Harry Anshary','2001-03-31','Pria');
$irvan = new Mahasiswa('H1101191062','Muhammad Pramudia Irvan Chaniago','2001-05-05','Pria');
$fadil = new Mahasiswa('H1101191034','Muhammad Fadilah','2001-01-03','Pria');

$peg1 = new Pegawai('123456789012345678','Pegawai 1','089612344321','Rp.4000000');
$peg2 = new Pegawai('876543210987654321','Pegawai 2','089643211234','Rp.4500000');

$maba1 = new MahasiswaBaru('H1101201077','Bujang','2002-08-21','Pria',8938971);
$maba2 = new MahasiswaBaru('H1101201003','Putri','2002-06-01','Wanita',7832689);

$dos1 = new Dosen('898989898989898989','Dosen 1','089612314300','Rp.5000000','0318107601','Kepala Jurusan');
$dos2 = new Dosen('123456789987654321','Dosen 2','089617434376','Rp.5000000','0698109331','Sekretaris Jurusan');
?>
<html>
    <head>
        <title>Praktikum PHP 03</title>
    </head>
    <body>
        <?php echo '<h3>Data Mahasiswa</h3>'; ?>
        
        <?php
            $harry->tampilkanNama();
            $harry->tampilkanUmur();
            $harry->tampilkanAngkatan();
        ?><br>
        <?php
            $fadil->tampilkanNama();
            $fadil->tampilkanUmur();
            $fadil->tampilkanAngkatan();
        ?><br>
        <?php
            $irvan->tampilkanNama();
            $irvan->tampilkanUmur();
            $irvan->tampilkanAngkatan();
        ?><br>

    </body>
</html>




