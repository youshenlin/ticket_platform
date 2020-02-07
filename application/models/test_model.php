<?php

class Test_model extends CI_Model
{
    public function test12()
    {
        $this->db->select('*');
		$this->db->from('check_domain');
		$rows = $this->db->get()->result_array();

        return $rows;
    }
}