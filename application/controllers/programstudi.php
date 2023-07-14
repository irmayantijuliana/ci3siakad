<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class programstudi extends MY_Controller
{
	
	public function index()
	{
		$crud = $this->generate_crud('program_studi', 'Data Program Studi');
		$this->mPageTitle = 'Data Program Studi';
        $this->render_crud();
	}
}
