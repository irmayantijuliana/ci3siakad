<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pejabat extends MY_Controller {

	public function index()
	{
        $crud = $this->generate_crud('pejabat', 'Data Pejabat');
        $this->mPageTitle = 'Data Pejabat';
        $this->render_crud();
	}
}
