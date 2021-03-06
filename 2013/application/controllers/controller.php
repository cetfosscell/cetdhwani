<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    public function index(){
        $data['user_data']="";
        $login_status = 'N';
        if($this->session->userdata('stu_id')) {
            $stu_id = $this->session->userdata('stu_id');
            $this->db->select('stu_name, college, mob_no, e_mail');
            $this->db->where('id', $stu_id);
            $query = $this->db->get('stu_profile');
            if($query->num_rows() >= 1) $login_status = 'Y';
                $login_status = 'Y';
            }
         $data['java_script'] = '<script>login_status = "'.$login_status.'";</script>';
         $this->load->view('theme', $data);
    
    }
    public function password_recovery() {
        $this->load->library('form_validation');
        if($this->form_validation->run() == TRUE) {
            $this->db->where('e_mail', $this->input->post('e_mail'));
            $query = $this->db->get('stu_profile');
            if($query->num_rows() >= 1) {
                $this->load->library('email');
                $this->email->from('admin@cetdrishti.com', 'WEB ADMIN @ DRISHTI 2K12');
                $this->email->reply_to('admin@cetdrishti.com', 'WEB ADMIN @ DRISHTI 2K12');
                $this->email->to($this->input->post('e_mail'));
                $this->email->subject('DRISHTI 2K12 Password Recovery');
                $this->email->message('Hello '.$query->row()->stu_name.', Your DISHTI 2K12 Account Password - '.$query->row()->password);
                $this->email->send();
                $this->load->view('success_noti', array('MSG' => 'E Mail successfully send to '.$this->input->post('e_mail')));
            } else $this->load->view('error_noti', array('MSG' => $this->input->post('e_mail').' - Not Registered'));
            //echo $this->input->post('e_mail').' - Not Registered';
        } else { echo validation_errors(); $this->load->view('password_recovery', array()); }
    }

    public function login() {
            $this->load->library('form_validation');
            if($this->form_validation->run() == TRUE) {
                if($this->session->userdata('login_count')) {
                $login_count = $this->session->userdata('login_count');
                $this->session->set_userdata('login_count', ($login_count + 1));
                } else {
                $login_count = 1;
                $this->session->set_userdata('login_count', $login_count);
                }
                if($login_count > 5) redirect('controller/captcha', 'refresh');
                else {
                    $this->load->model('m_login');
                    $e_mail = $this->input->post('e_mail');
                    $this->m_login->log_write($e_mail);
                    $password = $this->input->post('password');
                    $v_bit = $this->m_login->validate($e_mail, $password);
                    if($v_bit == 'Y') $this->load->view('success_noti', array('MSG' => 'LOG IN SUCCESS'));
                    if($v_bit == 'N') $this->load->view('error_noti', array('MSG' => 'ERROR IN USERNAME OR PASSWORD'));
                }
            } else {  $this->load->view('login', array('MSG' => validation_errors())); }
    }
    public function logout() {
        $this->session->unset_userdata('stu_id');
        $this->load->view('success_noti', array('MSG' => 'LOG out SUCCESS'));
    }
    public function captcha() {
        $this->load->library('form_validation');
            if($this->form_validation->run() == TRUE) {
                $this->session->userdata('captcha_text');
                if($this->input->post('captcha_text') == $this->session->userdata('captcha_text')) {
                    $this->session->unset_userdata('login_count');
                    redirect('controller/login', 'refresh');
                } else redirect('controller/captcha', 'refresh');
           } else { echo validation_errors(); $this->model->captcha(); }
    }
    public function registration() {
        $this->load->library('form_validation');
        if($this->form_validation->run() == TRUE) {
            if($this->input->post('captcha_text') == $this->session->userdata('captcha_text')){
            $data = array(
            'stu_name' => $this->input->post('stu_name'),
            'college' => $this->input->post('college'),
            'e_mail' => $this->input->post('e_mail'),
            'mob_no' => $this->input->post('mob_no'),
            'password' => $this->input->post('password')
            );
            $this->db->insert('stu_profile', $data);
            //$this->load->library(array('email', 'encrypt'));
            //$this->email->from('admin@cetdrishti.com', 'WEB ADMIN @ DRISHTI 2K12');
            //$this->email->reply_to('admin@cetdrishti.com', 'WEB ADMIN @ DRISHTI 2K12');
            //$this->email->to($this->input->post('e_mail'));
            //$this->email->subject('DRISHTI 2K12 Account Activation');
           // $this->email->message('To Activate DISHTI 2K12 Account click the link below - '.base_url().'controller/account_validate/?mob_no='.urlencode($this->input->post('mob_no')).'&key='.urlencode($this->encrypt->encode($this->input->post('mob_no'))));
            //$this->email->send();
            $this->load->view('success_noti', array('MSG' => 'Confirmation  Mail Send To Your Email, Check Your INBOX OR SPAM Folder<br /><br /><a href="http://www.cetdrishti.com">BACK TO HOME</a>'));
            }else $this->load->view('error_noti', array('MSG' => 'Captcha Text is Required'));
        } else
        $this->load->view('error_noti', array('MSG' => validation_errors()));
    }
    public function account_validate() {
        $mob_no = urldecode($this->input->get('mob_no'));
        $this->db->where('mob_no', $mob_no);
        $this->db->update('stu_profile', array('active' => 'Y'));
        $this->load->view('success_noti', array('MSG' => 'WELCOME To DRIShTI 2K12<br />Your Account Is Activated<br /><br /><a href="http://www.cetdrishti.com">BACK TO HOME</a>'));
    }
    public function event_desc($event_num='2') {
        //if($event == "online_asm")
          //  $evt = "online_asm";
        //$xml = simplexml_load_file(base_url().'xml/events.xml');

        //$p_cnt = count($xml->param); 
        //$param = $xml->param[$event];
        //========================================
        $doc = new DOMDocument();
          $doc->load( base_url().'xml/events.xml' );

          $events = $doc->getElementsByTagName( "event" );
          //echo "=>".count($books);
          $data['a']='';
          $i=1;
          foreach( $events as $book )
          {
              if($i==$event_num){
                  $data['event_num'] = $event_num;

              $names = $book->getElementsByTagName( "name" );
              $data['name'] = str_replace(";nl","<br/>",$names->item(0)->nodeValue);

              $contacts = $book->getElementsByTagName( "contact" );
              $data['contact'] = str_replace(";nl","<br/>",$contacts->item(0)->nodeValue);
              $data['contact'] = str_replace(";a;","<a ",$data['contact']);
              $data['contact'] = str_replace(";hrf;"," href='",$data['contact']);
              $data['contact'] = str_replace(";/hrf;","'>",$data['contact']);
              $data['contact'] = str_replace(";/a;","</a>",$data['contact']);

              $prizes = $book->getElementsByTagName( "prize" );
              $data['prize'] = str_replace(";nl","<br/>",$prizes->item(0)->nodeValue); 

              //$data['prize'] = str_replace(";nl","<br/>",$data['prize']);


              $descs = $book->getElementsByTagName( "desc" );
              $data['desc'] = str_replace(";nl","<br/>",$descs->item(0)->nodeValue);

              $formats = $book->getElementsByTagName( "format" );
              $data['format'] = str_replace(";nl","<br/>",$formats->item(0)->nodeValue);
              $data['format'] = str_replace(";a;","<a ",$data['format']);
              $data['format'] = str_replace(";hrf;"," href='",$data['format']);
              $data['format'] = str_replace(";/hrf;","'>",$data['format']);
              $data['format'] = str_replace(";/a;","</a>",$data['format']);

              $ps = $book->getElementsByTagName( "ps" );
              $data['ps'] = str_replace(";nl","<br/>",$ps->item(0)->nodeValue);
              $data['ps'] = str_replace(";a;","<a ",$data['ps']);
              $data['ps'] = str_replace(";hrf;"," href='",$data['ps']);
              $data['ps'] = str_replace(";/hrf;","'>",$data['ps']);
              $data['ps'] = str_replace(";/a;","</a>",$data['ps']);

              $rules = $book->getElementsByTagName( "rules" );
              $data['rules'] = str_replace(";nl","<br/>",$rules->item(0)->nodeValue);
              $data['rules'] = str_replace(";a;","<a ",$data['rules']);
              $data['rules'] = str_replace(";hrf;"," href='",$data['rules']);
              $data['rules'] = str_replace(";/hrf;","'>",$data['rules']);
              $data['rules'] = str_replace(";/a;","</a>",$data['rules']);
              //echo "$title - $author - $publisher\n";
              }
              $i++;
          }


        //;

        $this->load->view('event_desc', $data);    

    }
    public function event_reg($event_name = 'hack') {
    if($event_name != 'hack') {
        $event_name = urldecode($event_name);
        if($this->session->userdata('stu_id')) {
            $this->db->select('id');
            $array = array('user_id' => $this->session->userdata('stu_id'), 'event_id' => $event_name);

            $this->db->where($array);
            $query = $this->db->get('event_reg');
            if($query->num_rows()>=1){
                $this->load->view('success_noti', array('MSG' => 'You have already registered..'.$query->num_rows()));
            }else{
                $this->load->view('success_noti', array('MSG' => 'Before Registration SUCCESS'.$query->num_rows()));
                $this->db->insert('event_reg',array('user_id'=>$this->session->userdata('stu_id'),'event_id'=>$event_name));
                $this->load->view('success_noti', array('MSG' => 'Registration SUCCESS'));
            }
          }
        }
    }
    public function signup(){
        $this->load->model('model');
        $this->load->view('reg_form',array('signup_captcha'=> $this->model->signup_captcha()));
    }
    public function debug(){
        $this->load->view('login',array());
    }
	
	public function reg_form()
	{
		
		$data['title']= 'CET ROADSTERS | Registration Form';
		$this->load->view('cetroadster',$data);	
	}
   public function reg()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('name', 'name', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email');
		$this->form_validation->set_rules('age', 'age', 'trim|required|max_length[2]');
		$this->form_validation->set_rules('sex', 'sex', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('q1', 'q1', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('q2', 'q2', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('q3', 'q3', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('q4', 'q4', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('q5', 'q5', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('q6', 'q6', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('q7', 'q7', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('q8', 'q8', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('q9', 'q9', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('q10', 'q10', 'trim|required|min_length[5]');
		$this->form_validation->set_rules('q11', 'q11', 'trim|required|min_length[5]');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run() == FALSE)
		{
			$this->reg_form();
		}	
		else
		{
			$this->model->add_roadster();
			$data['title']= 'Registration Success';
			$this->load->view('header',$data);
			$this->load->view('cetroadster',$data);
		}
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */