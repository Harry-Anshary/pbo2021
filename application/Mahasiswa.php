<?php

namespace App;

class Mahasiswa extends User{
    protected $nim;
    protected $nama;
    protected $tanggal_lahir;
    protected $jenis_kelamin;
    const AKTIF = 1;
    const NON_AKTIF = 0;
    public static $status= self::AKTIF;
 
    function __construct($nim,$nama,$tgl,$jk){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->tanggal_lahir = $tgl;
        $this->jenis_kelamin = $jk;
    }
        
    public function tampilkanAngkatan(){ 
    echo "Angkatan : Tahun 20".substr($this->nim,5,-4).'<br>';
    }
    public function tampilkanUmur(){
    $thn = date_diff(date_create($this->tanggal_lahir), date_create('today'))->y;
    echo "Umur : ".$thn." Tahun<br>";
    }  
    public function tampilkanNama(){
    echo "Nama : ".$this->nama."<br>";
    }

    public function setNim($nim){
        $this->nim = $nim;
    }
    public function setNama($nama){
        $this->nama = $nama;
    }
    public function setTanggalLahir($tanggal_lahir){
        $this->tanggal_lahir = $tanggal_lahir;
    }
    public function setJenisKelamin($jenis_kelamin){
        $this->jenis_kelamin = $jenis_kelamin;
    }

    public function getNim($nim){
        return $this->nim;
    }
    public function getNama($nama){
        return $this->nama;
    }
    public function getTanggalLahir($tanggal_lahir){
        return $this->tanggal_lahir;
    }
    public function getJenisKelamin($jenis_kelamin){
        return $this->jenis_kelamin;
    }

    public static function bergerak()
    {
        echo "Agen solusi, bukan agen perubahan<br/>";
    }
    final public function tuntaskan()
    {
        //$this->bergerak(); (kalau tidak static)
        self::bergerak();
        echo " memperbaiki menjadi lebih baik";
    }
    // Buat fungsi dengan nama hitungSks dengan tipe static
    /**
     * Parameternya adalah $sks dan $bobot
     * Mengitung $sks * $bobot
     * Mengembalikan hasil dari perkalian tersebut
     * git add .
     * git commit -m "Praktikum 08 - Final Static"
     * git push
     */
    public static function hitungSks($sks,$bobot)
    {
        $total_sks = $sks * $bobot;
        echo "Bobot yang dimiliki bernilai = ".$bobot."<br>";
        echo "Total sks dengan bobot bernilai ".$bobot." adalah = ".$sks." SKS<br>";
        echo "Total sks x bobot = ";
        return $total_sks;
    }
}