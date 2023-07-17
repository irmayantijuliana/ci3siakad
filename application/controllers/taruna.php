<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class taruna extends MY_Controller
{
	
	public function index()
	{
		$crud = $this->generate_crud('taruna', 'Data Taruna');
        $crud->set_relation('tempat_lahir', 'kota', '{nama}');
        $crud->display_as('tempat_lahir', 'Tempat Lahir');

		$crud->set_relation('program_studi', 'program_studi', '{nama_prodi}');
        $crud->display_as('program_studi', 'Program Studi');

        $this->mPageTitle = 'Data Taruna';
        $this->render_crud();
	}
}
