<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('company_model');
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
		$this->twig->display('welcome/index.html', []);
	}

	public function results()
	{
		$data['key_word'] = $_GET['key_word'];

		if (empty($data['key_word'])) {
			redirect('/welcome/index', 'refresh');
		} else {
			$data['companies'] = $this->company_model->filter($data['key_word']);

			$this->twig->display('welcome/results.html', $data);
		}
	}

	public function company($id)
	{
		$data['company'] = $this->company_model->getCompany($id);

		$this->twig->display('welcome/form_company.html', $data);
	}
}
