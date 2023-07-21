<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class taruna extends MY_Controller
{
	
	public function index()
	{
		$crud = $this->generate_crud('taruna', 'Data Taruna');
        $crud->set_relation('Tempat_Lahir', 'kota', '{nama}');
        $crud->display_as('Tempat_Lahir', 'Tempat Lahir');

		$crud->set_relation('Program_Studi', 'program_studi', '{Nama}');
        $crud->display_as('Program_Studi', 'Program Studi');

        $this->mPageTitle = 'Data Taruna';
        $this->render_crud();
	}
}
