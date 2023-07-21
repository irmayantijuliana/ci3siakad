<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ijazah
 extends MY_Controller
{
	
	public function index()
	{
		$crud = $this->generate_crud('ijazah', 'Data Ijazah');
		
		$crud->set_relation('Taruna', 'taruna', '{Nama}');
        $crud->display_as('Taruna', 'Data Taruna');

		$crud->set_relation('Program_Studi', 'Program_Studi', '{Nama}');
        $crud->display_as('Program_Studi', 'Program Studi');

		$crud->set_relation('wakil_direktur', 'Pejabat', '{Nama}');
        $crud->display_as('wakil_direktur', 'Wakil Direktur');

		$crud->set_relation('direktur', 'Pejabat', '{Nama}');
        $crud->display_as('direktur', 'Direktur');

        $this->mPageTitle = 'Data Ijazah';
        $this->render_crud();
	}
}
