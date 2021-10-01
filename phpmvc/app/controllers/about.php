<?php

class About {
    public function index($nama = 'Gatau', $pekerjaan = 'Kapiten')
    {
        echo "Halo, Nama saya $nama, Saya seorang $pekerjaan";
    }
    public function page()
    {
        echo 'about/page';
    }
}