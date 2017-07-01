<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	private $em;

	public function __construct()
	{
		parent::__construct();

		$this->load->model('company_model');
		$this->load->model('city_model');
		$this->load->model('category_model');

		$this->em = $this->doctrine->em;

		if(!$this->session->userdata('logged')) {
			redirect('/admin/index', 'refresh');
		}
	} 

	public function list_company() {
		$data['companies'] = $this->company_model->getAll();

		$this->twig->display('admin/list_companies.html', $data);
	}

	public function getout() {
		$this->session->sess_destroy();

		redirect('/admin/index', 'refresh');
	}

	public function add_company()
	{
		$data['states'] = $this->city_model->getStates();

		$data['categories'] = $this->category_model->getAll();

		$this->twig->display('admin/form_company.html', $data);
	}

	public function save_company()
	{
		if ($this->form_validation->run('company') == FALSE) {
			$this->add_company();
		} else {
			$company = new Entity\Company;

			$city = $this->city_model->getCity($this->input->post('city'));

			$company->setTitle($this->input->post('title'));
			$company->setPhonenumber($this->input->post('phonenumber'));
			$company->setAddress($this->input->post('address'));
			$company->setZipcode($this->input->post('zipcode'));
			$company->setDescription($this->input->post('description'));
			$company->setCity($city);

			$categories = $this->input->post('category');
			foreach($categories as $category) {
				$category = $this->category_model->get($category);
				$company->addCategory($category);
			}

			// When you have set up your database, you can persist these entities:
			$this->em->persist($company);
			$this->em->flush();

			$data['companies'] = $this->company_model->getAll();

			$this->twig->display('admin/list_companies.html', $data);
		}
	}

	public function cities() {
		$state = $this->input->post('state');

		if(empty($state)) {
			echo '<option></option>';
			return;
		}

		$cities = $this->city_model->getByState($state);

		$output = '';
		foreach($cities as $city) {
			$output .= "<option value='{$city->getId()}'>{$city->getName()}</option>";
		}

		echo $output;
	}
}
