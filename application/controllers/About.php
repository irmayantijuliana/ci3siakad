<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * About page
 */
class About extends MY_Controller {

	public function index()
	{
		$id_taruna = isset($_GET['id_taruna']) ? $_GET['id_taruna'] : null;
	    $this->db->select('*')->from('taruna');
        $this->db->where('id', 1);
        $mk = $this->db->get();
        $this->mViewData['data_taruna'] = $mk->row();
        $nama_taruna = $mk->row()->nama;
		$tempat_lahir = $mk->row()->tempat_lahir;
		$tanggal_lahir = $mk->row()->tanggal_lahir;

		$this->db->select('*')->from('kota');
        $this->db->where('id', $tempat_lahir);
        $kota = $this->db->get();
		
		$ttl = $kota->row()->nama;
        $this->mViewData['data_tmpt'] = $kota->row();
		$this->render('about', 'empty');
	}
}
