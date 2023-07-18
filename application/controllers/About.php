<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * About page
 */
class About extends MY_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('M_ijazah');
    }
	private static $table = 'ijazah';
	public function index()
	{
		$id_ijazah = isset($_GET['id_ijazah']) ? $_GET['id_ijazah'] : 1;//null;
		$data['ijazah'] = $this->M_ijazah->get_ijazah($id_ijazah);
	    $this->db->select('*')->from('ijazah');
        $this->db->where('id', $id_ijazah);
        $data = $this->db->get();
        $this->mViewData['data_ijazah'] = $data->row();
		$id_taruna = $data->row()->taruna;
		$id_direk = $data->row()->direktur;
		$id_wadirek = $data->row()->wakil_direktur;
		$this->db->select('*')->from('taruna');
        $this->db->where('id', $id_taruna);
        $data = $this->db->get();
        $this->mViewData['data_taruna'] = $data->row();
		$tempat_lahir = $data->row()->tempat_lahir;
		$prodi = $data->row()->program_studi;
		$this->db->select('*')->from('kota');
        $this->db->where('id', $tempat_lahir);
        $kota = $this->db->get();
        $this->mViewData['data_kota'] = $kota->row();
		$this->db->select('*')->from('program_studi');
        $this->db->where('id', $prodi);
        $data_prodi = $this->db->get();
        $this->mViewData['data_prodi'] = $data_prodi->row();
		$this->db->select('*')->from('pejabat');
        $this->db->where('id', $id_direk);
        $data_pejabat = $this->db->get();
        $this->mViewData['data_pejabat'] = $data_pejabat->row();
		$this->render('about', 'empty');
	}
}
