<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function index()	{
		$data['main_content'] = 'login_form.php';
		$this->load->view('includes/template', $data);
	}

	function validate_credentials(){
		//$this->load->model('user_model');
		//$query = $this->user_model->validate();

		if($query){
			$data = array(
				'username' => $this->input->post('username'),
				'is_logged_in' => true
			);

		   $this->session->set_userdata($data);
			redirect('site/members_area');
		} else {
			$this->index();
		}
	}

}

?>
