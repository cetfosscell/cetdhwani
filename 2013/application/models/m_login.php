<?php

class M_login extends CI_Model {

public function __construct() {
    parent::__construct();
    $this->load->database();
}

public function log_write($e_mail = 'hack') {
    $this->load->helper('file');
    write_file('log/login.txt', $e_mail.'|'.$this->input->ip_address().'|'.date('Y-m-d H:i:s').'~', 'a');
}

public function validate($e_mail, $password) {
    $this->db->select('active, id');
    $this->db->where('e_mail', $e_mail);
    $this->db->where('password', $password);
    $qA = $this->db->get('stu_profile');
    if($qA->num_rows() >= 1) {
        if($qA->row()->active == 'Y') {
            $this->session->unset_userdata('login_count');
            $this->session->set_userdata('stu_id', $qA->row()->id);
            return 'Y';
        } else { echo "activate ur account by click email"; return 'N'; }
    } else return 'N';
}

}