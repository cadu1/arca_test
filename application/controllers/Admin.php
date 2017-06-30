<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	private $em;

	public function __construct()
	{
		parent::__construct();
		$this->em = $this->doctrine->em;
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
			$data['companies'] = $this->em->getRepository('Entity\Company')
				->createQueryBuilder('a')
				->getQuery()->getResult();

			$this->twig->display('admin/list_companies.html', $data);
		}
	}

	public function username_check($str)
	{
		$username = $this->input->post('username');
		$password = hash('md5', $this->input->post('password'));

		$user = $this->em->getRepository('Entity\User')
			->createQueryBuilder('a')
			->andWhere('a.username=:username')
			->andWhere('a.password=:password')

			->setParameter('username', $username)
			->setParameter('password', $password)
			->getQuery()->getResult();

			if( empty($user) ) {
					$this->form_validation->set_message('username_check', 'The {field} can not be found');
					return FALSE;
			}
			else
			{
					return TRUE;
			}
	}

	public function add_company()
	{
		$data['states'] = $this->em->getRepository('Entity\City')
			->createQueryBuilder('a')
			->select('a.state')
			->distinct()
			->getQuery()->getResult();

		$data['cities'] = $this->em->getRepository('Entity\City')
			->createQueryBuilder('a')
			->select('a.id, a.name')
			->getQuery()->getResult();

		$data['categories'] = $this->em->getRepository('Entity\Category')
			->createQueryBuilder('a')
			->select('a.id, a.name')
			->getQuery()->getResult();

		$this->twig->display('admin/form_company.html', $data);
	}

	public function save_company()
	{

		if ($this->form_validation->run('company') == FALSE) {
			//$this->twig->display('admin/form_company.html', []);
			$this->add_company();
		} else {
			$company = new Entity\Company;

			$city = $this->em->find('Entity\City', $this->input->post('city'));
// echo '<pre>';
// echo var_dump($city);
// exit;

			$company->setTitle($this->input->post('title'));
			$company->setPhonenumber($this->input->post('phonenumber'));
			$company->setAddress($this->input->post('address'));
			$company->setZipcode($this->input->post('zipcode'));
			$company->setDescription($this->input->post('description'));
			$company->setCity($city);

			$categories = $this->input->post('category');
			foreach($categories as $category) {
				$category = $this->em->find('Entity\Category', $category);
				$company->addCategory($category);
	//			$company->setCategory($this->input->post('category'));
			}

			// When you have set up your database, you can persist these entities:
			// $em = $this->doctrine->em;
			$this->em->persist($company);
			// $em->persist($user);
			$this->em->flush();

			$data['companies'] = $this->em->getRepository('Entity\Company')
				->createQueryBuilder('a')
				->getQuery()->getResult();

			$this->twig->display('admin/list_companies.html', $data);
		}
	}
}
