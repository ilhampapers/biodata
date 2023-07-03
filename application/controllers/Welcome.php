<?php
class Welcome extends CI_Controller {
    public function index() {
        
        $this->load->view('index');
    }
    public function hana() {
        $this->load->view('biodatahana');
    }
    public function ania() {
        $this->load->view('biodataania');
    }
    public function ilham() {
        $this->load->view('biodatailham');
    }
    public function devian() {
        $this->load->view('biodatadevian');
    }

}
