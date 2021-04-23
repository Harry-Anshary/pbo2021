<?php

/*[]| - - - START KODE PERTEMUAN PERKULIAHAN - - - |[]*/
// class Pegawai
// {
//     public $nama;

//     public function sapa()
//     {
//         echo "Halo ".$this->nama." posisi anda saat ini adalah pegawai<br>";
//     }
//     public function kerja()
//     {
//         echo "Anda masuk kerja pada tanggal ".date('y-m-d'). "<br>";
//     }
// }

// class KetuaJurusan extends Pegawai
// {
    
//     public function sapa()
//     {
//         echo "Hei ".$this->nama." anda itu kan ketua jurusan ya<br>";
//     }
//     public function parentSapa()
//     {
//         return parent::sapa();
//     }
// }

// $harry = new KetuaJurusan();
// $harry->nama = "Harry Anshary";
// $harry->parentSapa();
// $harry->kerja();
/*[]| - - - END KODE PERTEMUAN PERKULIAHAN - - - |[]*/

    /* - - - - - - - B-A-T-A-S - - - - - - - */

/*[]| - - - START KODE KREASI SENDIRI UNTUK PRAKTIKUM - - - |[]*/
class Binatang
{
    public $part;
    public $klasifikasi;
    public $jenis;
    
    public function judul()
    {
        echo "<h3>Bagian ke-".$this->part." Klasifikasi <u>(".$this->klasifikasi.")</u> Jenis <u>(".$this->jenis.")</u></h3>";
    }
    public function intro()
    {
        echo "&emsp;&emsp;Binatang adalah makhluk bernyawa yang mampu bergerak (berpindah tempat)<br>";
        echo "dan mampu bereaksi terhadap rangsangan, tetapi tidak berakal budi.<br>";
    }
    public function desk()
    {
        echo "Binatang terdiri dari berbagai macam jenis, <b>".$this->jenis."</b> termasuk satu diantaranya.<br>";
    }
    public function close()
    {
        echo "<hr>";
    }
}

class Mamalia extends Binatang 
{
    function __construct($a,$b,$c)
    {
        $this->part = $a;
        $this->klasifikasi = $b;
        $this->jenis = $c;
    }
    public function intro()
    {
        echo "&emsp;&emsp;Mamalia atau yang diesbut juga dengan binatang menyusui, sesuai dengan namanya<br>";
        echo "merupakan hewan yang memiliki kelenjar susu yang pada betinanya akan menghasilkan<br>";
        echo "susu sebagai sumber makanan untuk anaknya.<br>";
    }
    public function desk()
    {
        echo "<b>".$this->jenis."</b> sesuai dengan karakteristiknya termasuk kepada jenis binatang mamalia.<br>";
    }
    public function parentIntro()
    {
        return parent::intro();
    }
    public function parentDesk()
    {
        return parent::desk();
    }
    public function info()
    {
        $this->judul();$this->parentIntro();$this->parentDesk();$this->intro();$this->desk();$this->close();
    }
}

class Reptil extends Binatang 
{
    function __construct($a,$b,$c)
    {
        $this->part = $a;
        $this->klasifikasi = $b;
        $this->jenis = $c;
    }
    public function intro()
    {
        echo "&emsp;&emsp;Reptil adalah hewan yang memiliki karakteristik utama yaitu berdarah<br>";
        echo "dingin, memiliki kulit yang bersisik, telur yang kasar, dan memiliki kemampuan<br>";
        echo "untuk berbaring dengan jarak yang agak jauh dari perairan.<br>";
    }
    public function desk()
    {
        echo "<b>".$this->jenis."</b> sesuai dengan karakteristiknya termasuk kepada jenis binatang reptil.<br>";
    }
    public function parentIntro()
    {
        return parent::intro();
    }
    public function parentDesk()
    {
        return parent::desk();
    }
    public function info()
    {
        $this->judul();$this->parentIntro();$this->parentDesk();$this->intro();$this->desk();$this->close();
    }
}

$kuc = new Mamalia(1,"Mamalia","Kucing");
$bua = new Reptil(2,"Reptil","Buaya");
$anj = new Mamalia(3,"Mamalia","Anjing");
$kur = new Reptil(4,"Reptil","Kura - kura");
$pen = new Reptil(5,"Reptil","Penyu");
$kuc->info();
$bua->info();
$anj->info();
$kur->info();
$pen->info();

/*[]| - - - END KODE KREASI SENDIRI UNTUK PRAKTIKUM - - - |[]*/