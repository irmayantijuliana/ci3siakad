<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class taruna extends MY_Controller
{
	
	public function index()
	{
		$crud = $this->generate_crud('taruna', 'Data Taruna');
        $this->mPageTitle = 'Data Taruna';
        $this->render_crud();
	}
}
