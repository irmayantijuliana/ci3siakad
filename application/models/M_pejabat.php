<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_pejabat extends MY_Model {
    private static $table = 'pejabat';
	private static $pk = 'id';

    public function is_exist($where)
	{
		return $this->db->where($where)->get(self::$table)->row_array();
	}

    public function get_pejabat($where)
	{
		$query = $this
					->db
					->select('*')
					->from(self::$table)
					->where($where)
					->get();

		if ($query->num_rows() > 0) {
			return $query->row_array();
		} else {
			return NULL;
		}
	}
}