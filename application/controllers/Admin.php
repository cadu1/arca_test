<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('user_model');

		if($this->session->userdata('logged')) {
			redirect('/company/list_company', 'refresh');
		}
	} 

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->twig->display('admin/index.html', []);
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required|callback_username_check');
		$this->form_validation->set_rules('password', 'Password', 'trim|required',
			array('required' => 'You must provide a %s.')
		);

		if ($this->form_validation->run() == FALSE) {
			$this->twig->display('admin/index.html', []);
		} else {
			$this->session->set_userdata('logged', true);

			redirect('/company/list_company', 'refresh');
		}
	}

	public function username_check($str)
	{
		$username = $this->input->post('username');
		$password = hash('md5', $this->input->post('password'));

		$user = $this->user_model->getUser($username, $password);

		if( empty($user) ) {
			$this->form_validation->set_message('username_check', 'The {field} can not be found');
			return FALSE;
		} else {
			return TRUE;
		}
	}
}