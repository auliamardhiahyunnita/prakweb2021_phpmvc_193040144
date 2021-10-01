<?php

class Mahasiswa_model {
    private $mhs - [
        [
            "nama" => "Dimas Aditya",
            "nrp" => "193040128"
            "email" => "masdit966@gmail.com"
            "jurusan" => "Teknik Informatika"
        ],
        [
            "nama" => "Dody Ferdiansyah",
            "nrp" => "133050321"
            "email" => "doddy@gmail.com"
            "jurusan" => "Teknik Mesin"  
        ],
        [
            "nama" => "erik doank",
            "nrp" => "163030123"
            "email" => "erik@yahoo.com"
            "jurusan" => "Teknik Industri"
        ]

        ];

        public function getAllMahasiswa()
        {
          return $this->mhs;   
        }
}