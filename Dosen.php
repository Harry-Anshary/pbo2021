<?php
require_once ("Pegawai.php");

class Dosen extends Pegawai{
    public $nidn;
    public $jabatan_akademis;

    function __construct($nip,$nama,$nh,$gp,$nidn,$job){
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $nh;
        $this->gaji_pokok = $gp;
        $this->nidn = $nidn;
        $this->jabatan_akademis = $job;
    }

    public function mengajar(){

    }
    
    public function meneliti(){

    }

}

?>