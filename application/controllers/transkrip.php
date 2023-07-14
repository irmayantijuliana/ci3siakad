<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transkrip extends MY_Controller
{
	
	public function index()
	{
		$crud = $this->generate_crud('program_studi', 'Data Transkrip Nilai');
        $this->mPageTitle = 'Data Transkrip Nilai';
        $this->render_crud();
	}
}
