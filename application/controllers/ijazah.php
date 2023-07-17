<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ijazah
 extends MY_Controller
{
	
	public function index()
	{
		$crud = $this->generate_crud('ijazah', 'Data Ijazah');
		
		$crud->set_relation('taruna', 'taruna', '{nama}');
        $crud->display_as('data_taruna', 'Data Taruna');

		$crud->set_relation('program_studi', 'program_studi', '{nama_prodi}');
        $crud->display_as('program_studi', 'Program Studi');

		$crud->set_relation('wakil_direktur', 'pejabat', '{nama}');
        $crud->display_as('wakil_direktur', 'Wakil Direktur');

		$crud->set_relation('direktur', 'pejabat', '{nama}');
        $crud->display_as('direktur', 'Direktur');

        $this->mPageTitle = 'Data Ijazah';
        $this->render_crud();
	}
}
