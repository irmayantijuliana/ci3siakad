<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transkrip extends MY_Controller
{
	
	public function index()
	{
		$crud = $this->generate_crud('transkrip_nilai', 'Data Transkrip Nilai');

		$crud->set_relation('Taruna', 'taruna', '{Nama}');
        $crud->display_as('Taruna', 'Data Taruna');

		$crud->set_relation('Ijazah', 'ijazah', '{Judul_KKW}');
        $crud->display_as('Ijazah', 'Ijazah');
		
		$crud->set_relation('Program_Studi', 'program_studi', '{Nama}');
        $crud->display_as('Program_Studi', 'Program Studi');
		
        $this->mPageTitle = 'Data Transkrip Nilai';
        $this->render_crud();
	}
}
