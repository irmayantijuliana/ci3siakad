<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ijazah
 extends MY_Controller
{
	
	public function index()
	{
		$crud = $this->generate_crud('ijazah', 'Data Ijazah');
        $this->mPageTitle = 'Data Ijazah';
        $this->render_crud();
	}
}
