<?php

class Model extends CI_Model {

public function __construct() {
    parent::__construct(); $this->load->database();
}

public function count($page) {
	$this->db->select('count');
	$this->db->where('page', $page);
	$query=$this->db->get('page_view');
	if($query->num_rows() == 1) {
		$count=($query->row()->count) + 1;
		$data=array('count' => $count);
		$this->db->where('page', $page);
		$this->db->update('page_view', $data);
		return $count;
	} else {
		$data=array('page' => $page, 'count' => '1');
		$this->db->insert('page_view', $data);
		return $this->db->affected_rows();
	}
}
public function add_roadster()
	{
		$data=array(
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'age'=>$this->input->post('age'),
			'sex'=>$this->input->post('sex'),
			'q1'=>$this->input->post('q1'),
			'q2'=>$this->input->post('q2'),
			'q3'=>$this->input->post('q3'),
			'q4'=>$this->input->post('q4'),
			'q5'=>$this->input->post('q5'),
			'q6'=>$this->input->post('q6'),
			'q7'=>$this->input->post('q7'),
			'q8'=>$this->input->post('q8'),
			'q9'=>$this->input->post('q9'),
			'q10'=>$this->input->post('q10'),
			'q11'=>$this->input->post('q11')
				);
		$this->db->insert('roadster',$data);
	}

public function captcha() {
    $this->load->helper('captcha');
    $captcha_array = array(
    'img_height' => '50',
    'img_width' => '200',
    'img_path' => 'img/captcha/',
    'img_url' => base_url().'img/captcha/',
    'expiration' => 300
    );
    $captcha = create_captcha($captcha_array);
    $data['captcha_img'] = $captcha['image'];
    $this->load->view('captcha', $data);
    $this->session->set_userdata('captcha_text', $captcha['word']);
}
public function signup_captcha(){
    $this->load->helper('captcha');
    $captcha_array = array(
    
    'img_height' => '50',
    'img_width' => '200',
    'img_path' => 'img/captcha/',
    'img_url' => base_url().'img/captcha/',
    'expiration' => 300
    );
    $captcha = create_captcha($captcha_array);
    $data['captcha_img'] = $captcha['image'];
    $this->session->set_userdata('captcha_text', $captcha['word']);
    $captcha = $this->load->view('signup_captcha', $data,true);
    return $captcha;
    
}
}