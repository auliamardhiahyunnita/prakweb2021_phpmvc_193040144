<?php

class Home extend Controller {
    public function index()
    {
        $data['judul'] = 'Home' ;
        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer', $data);
    }
}