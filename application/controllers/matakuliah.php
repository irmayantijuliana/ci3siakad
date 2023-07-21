<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends MY_Controller {

	public function index()
	{
        $crud = $this->generate_crud('matakuliah', 'Mata Kuliah');
        $crud->columns('ID', 'Kode', 'Matakuliah', 'SKS', 'Nilai_Angka', 'Nilai_Huruf', 'Semester');
        $crud->display_as('ID', 'No');
        $crud->display_as('Kode', 'Kode Mata Kuliah');
        $crud->display_as('Matakuliah', 'Nama Mata Kuliah');
        $crud->display_as('SKS', 'SKS');
        $crud->display_as('Nilai_Angka', 'Nilai Angka');
        $crud->display_as('Nilai_Huruf', 'Nilai Huruf');
        $crud->display_as('Semester', 'Semester');

        $this->mPageTitle = 'Data Mata Kuliah';
        $this->render_crud();
	}
}
