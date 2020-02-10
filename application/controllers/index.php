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
	public function insert_test()
	{
        $this->load->model(['test_model' ]);
        $data['a'] = $this->test_model->test12();
        
        $this->load->view('test1', $data);
        
    }
    public function test2()
	{
        //新增資料
        $this->load->model(['test_model','root_ticket_model' ]);
        $url = $this->input->post('url');
        $system = $this->input->post('system');
        $ticket_name = $this->input->post('ticket_name');
        $ticket_date = $this->input->post('ticket_date');
        $start_ts = strtotime($this->input->post('start_ts'));
        $end_ts = strtotime($this->input->post('end_ts'));
        //$data['a'] = strtotime($this->input->post('date_time'));
       /* if(!$this->root_ticket_model->insert_ticket($system,$url,$ticket_name,$ticket_date,$start_ts,$end_ts)){
            show_error('更新失敗');
        }*/
        
        $data['a'] = $this->root_ticket_model->get_ticket();
        $this->load->view('test2', $data);
        
    }
    
    public function push_text()
	{
        //新增資料
        $this->load->library('Sha3');
        $data['b'] = Sha3::hash(md5('123'), 256);
        $this->load->model(['test_model','root_ticket_model' ]);
        $url = $this->input->post('url');
        $system = $this->input->post('system');
        $ticket_name = $this->input->post('ticket_name');
        $ticket_date = $this->input->post('ticket_date');
        $start_ts = strtotime($this->input->post('start_ts'));
        $end_ts = strtotime($this->input->post('end_ts'));
        //$data['a'] = strtotime($this->input->post('date_time'));
       /* if(!$this->root_ticket_model->insert_ticket($system,$url,$ticket_name,$ticket_date,$start_ts,$end_ts)){
            show_error('更新失敗');
        }*/
        $data_head['tittle'] = 'push_text';
        $data['a'] = $this->root_ticket_model->get_ticket();
        $this->load->view('head',$data_head);
        $this->load->view('login', $data);
        $this->load->view('foot');
        
    }
    public function login_sub()
	{
        //新增資料
        $this->load->model(['test_model','root_ticket_model' ]);
        $url = $this->input->post('url');
        $system = $this->input->post('system');
        $ticket_name = $this->input->post('ticket_name');
        $ticket_date = $this->input->post('ticket_date');
        $start_ts = strtotime($this->input->post('start_ts'));
        $end_ts = strtotime($this->input->post('end_ts'));
        //$data['a'] = strtotime($this->input->post('date_time'));
       /* if(!$this->root_ticket_model->insert_ticket($system,$url,$ticket_name,$ticket_date,$start_ts,$end_ts)){
            show_error('更新失敗');
        }*/
        $data_head['tittle'] = 'push_text';
        $data['a'] = $this->root_ticket_model->get_ticket();
        $this->load->view('head',$data_head);
        $this->load->view('test3', $data);
        $this->load->view('foot');
        
	}

	// public function update_ticket($system = '')
    // {
    //     nimda_show_page('coupon/upload_img_byjson');
    // }
    // public function img_to_json_upload_sub()
    // {
    //     $originImagePath = $this->input->post('origin_image_path');


    //     // 檢查上傳檔案
    //     if (!empty($_FILES['image_path']['name'])) {
    //         $fileType = explode('.', $_FILES['image_path']['name']);
    //         $s3FilePath = 'app-json-to-gif';
    //         $fileName = $fileType[0].'.' . $fileType[1];
    //         $config = [
    //             'upload_path'   => '/tmp/',
    //             'file_name'     => $fileName,
    //             'allowed_types' => 'json',
    //         ];

    //         $this->load->library('upload', $config);
    //         $this->upload->do_upload('image_path');
            
    //         // 先上傳至 nimda tmp資料夾，成功後再移至 AmazonS3
    //         if (!$this->upload->do_upload('image_path')) {
    //             $data = [
    //                 'result'  => 'error',
    //                 'message' => $this->upload->display_errors(),
    //             ];
    //             show_error('上傳至nimda失敗' . json_encode($data));
    //         }
            
    //             $localFile = $this->upload->data(); // 本地端檔案資訊
    //             $remoteFileName = $fileName; // 雲端的檔名
    //             $this->load->library('AmazonS3', []);
    //             // 上傳至雲端
    //             $uploadToAmazonResult = $this->amazons3->upload_file_to_s3($s3FilePath, $localFile['full_path'], true, $remoteFileName);
    //             if (!$uploadToAmazonResult) {
    //                 show_error('上傳至雲端失敗');
    //             }
    //     }
    //     redirect('/marketing/img_to_json_upload?status=success');
    // }
}
