<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {

	public function test()
	{
		$this->load->database();
		$this->db->select('*');
		$this->db->from('check_domain');
		$rows = $this->db->get()->result_array();
		$data['a'] = $rows;
		$this->load->view('test1', $data);
	}
}
