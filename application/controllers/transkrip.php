<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transkrip extends MY_Controller
{
	
	public function index()
	{
		$crud = $this->generate_crud('transkrip_nilai', 'Data Transkrip Nilai');

		$crud->set_relation('taruna', 'taruna', '{nama}');
        $crud->display_as('data_taruna', 'Data Taruna');

		$crud->set_relation('ijazah', 'ijazah', '{judul_kkw}');
        $crud->display_as('ijazah', 'Ijazah');
		
		$crud->set_relation('program_studi', 'program_studi', '{nama_prodi}');
        $crud->display_as('program_studi', 'Program Studi');
		
        $this->mPageTitle = 'Data Transkrip Nilai';
        $this->render_crud();
	}
}
