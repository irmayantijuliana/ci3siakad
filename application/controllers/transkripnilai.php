<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transkripnilai extends MY_Controller {
	public function __construct()
    {
        parent::__construct();
		$this->load->model('TranskripNilaiModel');
        $this->load->model('TarunaModel');
        $this->load->model('IjazahModel');
        $this->load->model('ProgramStudiModel');
		$this->load->model('KotaModel');
		$this->load->model('NilaiModel');
		$this->load->model('MataKuliahModel');
        $this->load->model('PejabatModel');
    }
	private static $table = 'ijazah';
	public function index()
	{
		$id = isset($_GET['transkrip_nilai']) ? $_GET['transkrip_nilai'] : 1;//null;
		$data['transkrip_nilai'] = $this->TranskripNilaiModel->get_transkrip_nilai($id);
		$data['taruna'] = $this->TarunaModel->get_taruna($data['transkrip_nilai']->Taruna);
		$data['ijazah'] = $this->IjazahModel->get_ijazah($data['transkrip_nilai']->Ijazah);
		$data['program_studi'] = $this->ProgramStudiModel->get_program_studi($data['transkrip_nilai']->Program_Studi);
		$data['kota'] = $this->KotaModel->get_kota($data['taruna']->Tempat_Lahir);
		$data['nilai'] = $this->NilaiModel->get_nilai_by_taruna($data['taruna']->ID);
        $data['matakuliah'] = $this->MataKuliahModel->get_matakuliah($id);
		$direk = $data['ijazah']->Direktur;
		$wadirek = $data['ijazah']->Wakil_Direktur;
		$data['direk'] =  $this->PejabatModel->get_pejabat($direk);
		$data['wadirek'] =  $this->PejabatModel->get_pejabat($wadirek);
		$this->load->view('print', $data);

/*		$id_ijazah = isset($_GET['id_ijazah']) ? $_GET['id_ijazah'] : 1;//null;
		$data['ijazah'] = $this->IjazahModel->get_ijazah($id_ijazah);
		$data['nilai'] = $this->IjazahModel->get_ijazah($id_ijazah);
	    $this->db->select('*')->from('ijazah');
        $this->db->where('ID', $id_ijazah);
        $data = $this->db->get();
        $this->mViewData['data_ijazah'] = $data->row();
		$id_taruna = $data->row()->Taruna;
		$id_direk = $data->row()->Direktur;
		$id_wadirek = $data->row()->Wakil_Direktur;
		$this->db->select('*')->from('taruna');
        $this->db->where('ID', $id_taruna);
        $data = $this->db->get();
        // $this->mViewData['data_taruna'] = $data->row();
		$tempat_lahir = $data->row()->Tempat_Lahir;
		$prodi = $data->row()->Program_Studi;
		$this->db->select('*')->from('kota');
        $this->db->where('ID', $tempat_lahir);
        $kota = $this->db->get();
        $this->mViewData['data_kota'] = $kota->row();
		$this->db->select('*')->from('program_studi');
        $this->db->where('ID', $prodi);
        $data_prodi = $this->db->get();
        $this->mViewData['data_prodi'] = $data_prodi->row();
		$this->db->select('*')->from('pejabat');
        $this->db->where('ID', $id_direk);
        $data_pejabat = $this->db->get();
		$this->mViewData['data_pejabat'] = $data_pejabat->row();
		$where = "ID = '$id_direk'";
		$where2 = "ID = '$id_wadirek'";
		// $data['direk'] = $this->PejabatModel->get_pejabat($where);
		$pejabat2 = $this->PejabatModel->get_pejabat($where2);
		// echo $pejabat=$data['direk']->Direktur ;
		// $this->mViewData['direk'] = $pejabat['Nama'];
		// $this->mViewData['wadirek'] = $pejabat2['Nama'];
		// $this->mViewData['nip'] = $pejabat['NIP'];
		// $this->mViewData['nip2'] = $pejabat2['NIP'];
		$this->render('transkripnilai', 'empty');
		*/
	}
}
