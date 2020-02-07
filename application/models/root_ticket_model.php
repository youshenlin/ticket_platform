<?php

class Root_ticket_model extends CI_Model
{
    //查詢資料
    public function get_ticket()
    {
        $this->db->select('*');
        $this->db->from('ticket_activty');
        $this->db->limit('10');
		$rows = $this->db->get()->result_array();
        return $rows;
    }

    //新增資料
    public function insert_ticket($system,$url,$ticke_name,$ticket_date,$start_ts,$end_ts)
    {
        $this->db->set([
            'url' => $url,
            'system' => $system,
            'ticket_name' => $ticke_name,
            'ticket_date' => $ticket_date,
            'start_ts' => $start_ts,
            'end_ts' => $end_ts,
            'update_ts' => strtotime('now')
        ]);
        $this->db->insert(('ticket_activty'));
        return $this->db->insert_id();
    }
}