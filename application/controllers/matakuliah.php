<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class matakuliah extends MY_Controller {

	public function index()
	{
        $crud = $this->generate_crud('mata_kuliah', 'Mata Kuliah');
        $this->mPageTitle = 'Data Mata Kuliah';
        $this->render_crud();
	}
}
