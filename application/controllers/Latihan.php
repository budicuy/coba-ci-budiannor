<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Latihan extends CI_Controller
{
    public function index()
    {
        $this->load->view('v_latihan');
    }

    public function tampil()
    {
        $data['nama'] = "BUDIANNOR";
        echo $data['nama'];
        $this->load->view('v_latihan', $data);
    }

    public function nilai()
    {
        $nilai1 = $this->uri->segment(3);
        $nilai2 = $this->uri->segment(4);
        echo $nilai1;
    }
}
