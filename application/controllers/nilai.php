<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai extends MY_Controller {

	public function index()
	{
        $crud = $this->generate_crud('nilai', 'Data Nilai');

        $crud->set_relation('taruna', 'taruna', '{nama}');
        $crud->display_as('data_taruna', 'Data Taruna');

        $crud->set_relation('mata_kuliah', 'mata_kuliah', '{nama_mata_kuliah}');
        $crud->display_as('mata_kuliah', 'Mata Kuliah');

        $this->mPageTitle = 'Data Nilai';
        $this->render_crud();
	}
}
