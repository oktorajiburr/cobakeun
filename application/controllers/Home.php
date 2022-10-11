<?php

class Home extends CI_Controller {
    public function index()
    {
        $data['judul'] = 'BOOTCAMP';
        $this->load->view('V_home/v_home');
        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
        $this->load->view('section1/section1');
        $this->load->view('section2/section2');
        $this->load->view('section3/section3');
        $this->load->view('section4/section4');
        $this->load->view('section5/section5');

    }
}