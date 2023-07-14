<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kota extends MY_Controller {

	public function index()
	{
        $crud = $this->generate_crud('kota', 'Daftar Kota');
        $this->mPageTitle = 'Data Kota';
        $this->render_crud();
	}
}
