<?php

class About extends Controller {
    public function index($nama = 'Gatau', $pekerjaan = 'Kapiten', $umur = 70)
    {
        $data['nama'] = $data;
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
        $this->view('templates/header');
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['juduk'] = 'pages';
        $this->view ('template/header');
        $this->view ('about/page');
        $this->view ('template/footer');
    }
}