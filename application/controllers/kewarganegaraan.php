<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kewarganegaraan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
         //$this->auth->validation();
        //$this->load->model('m_data_dokter');
    }

    function index()
    {
        $data['title_page']='Data Dokter';
        // $data['data_dokter'] = $this->DataDokter_model->tampil_data()->result();

		$this->load->view('master/kewarganegaraan/index', $data);

	}
}