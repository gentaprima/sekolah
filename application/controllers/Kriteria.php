<?php

Class Kriteria extends CI_Controller{

public function __construct(){
    parent::__construct();
    $this->load->model('ModelKriteria');
}
public function add_kriteria(){
    $kriteria = $this->input->post('kriteria');
    $bobot    = $this->input->post('bobot');
    $tipe_kriteria = $this->input->post('tipe_kriteria');

    $data = array(
        'kriteria' => $kriteria,
        'bobot'     => $bobot,
        'tipe_kriteria' => $tipe_kriteria,
    );
    $this->ModelKriteria->addKriteria($data);
    redirect(base_url('dashboard/kriteria'));
}
}