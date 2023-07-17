<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends MY_Controller {

	public function index()
	{
        $crud = $this->generate_crud('mata_kuliah', 'Mata Kuliah');
        $crud->columns('id', 'kode', 'nama_mata_kuliah', 'sks', 'nilai_angka', 'nilai_huruf', 'semester');
        $crud->display_as('id', 'No');
        $crud->display_as('kode', 'Kode Mata Kuliah');
        $crud->display_as('nama_mata_kuliah', 'Nama Mata Kuliah');
        $crud->display_as('sks', 'SKS');
        $crud->display_as('nilai_angka', 'Nilai Angka');
        $crud->display_as('nilai_huruf', 'Nilai Huruf');
        $crud->display_as('semester', 'Semester');

        $this->mPageTitle = 'Data Mata Kuliah';
        $this->render_crud();
	}
}
