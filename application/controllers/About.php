<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * About page
 */
class About extends MY_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_ijazah');
		$this->load->model('m_pejabat');
    }
	private static $table = 'ijazah';
	public function index()
	{
		$id_ijazah = isset($_GET['id_ijazah']) ? $_GET['id_ijazah'] : 1;//null;
		$data['ijazah'] = $this->m_ijazah->get_ijazah($id_ijazah);
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
		$where = "id = '$id_direk'";
		$where2 = "id = '$id_wadirek'";
		$pejabat = $this->m_pejabat->get_pejabat($where);
		$pejabat2 = $this->m_pejabat->get_pejabat($where2);
		$this->mViewData['direk'] = $pejabat['nama'];
		$this->mViewData['wadirek'] = $pejabat2['nama'];
		$this->mViewData['nip'] = $pejabat['nip'];
		$this->mViewData['nip2'] = $pejabat2['nip'];
		$this->render('about', 'empty');
	}
}
