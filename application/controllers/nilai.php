<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class nilai extends MY_Controller {

	public function index()
	{
        $crud = $this->generate_crud('nilai', 'Data Nilai');
        $this->mPageTitle = 'Data Nilai';
        $this->render_crud();
	}
}
