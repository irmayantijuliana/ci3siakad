<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai extends MY_Controller {

	public function index()
	{
        $crud = $this->generate_crud('nilai', 'Data Nilai');

        $crud->set_relation('Taruna', 'taruna', '{Nama}');
        $crud->display_as('Taruna', 'Data Taruna');

        $crud->set_relation('Matakuliah', 'matakuliah', '{Matakuliah}');
        $crud->display_as('Matakuliah', 'Mata Kuliah');

        $this->mPageTitle = 'Data Nilai';
        $this->render_crud();
	}
}
