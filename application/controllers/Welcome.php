<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$this->twig->display('welcome/index.html', []);
	}

	public function results()
	{
		$data['key_word'] = $this->input->post('key_word');

		$this->form_validation->set_rules('key_word', 'Search Phrase', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->twig->display('welcome/index.html', []);
		}
		else
		{
			$data['companies'] = $this->em->getRepository('Entity\Company')
				->createQueryBuilder('a')
				->join('a.city', 'b')
				->join('a.category', 'c')
				->orWhere('c.name like :key_word')
				->orWhere('a.title like :key_word')
				->orWhere('a.address like :key_word')
				->orWhere('a.zipcode like :key_word')
				->orWhere('b.name like :key_word')

				->setParameter('key_word', "%{$data['key_word']}%")
				->getQuery()->getResult();
			$this->twig->display('welcome/results.html', $data);
		}
	}

	public function company($id)
	{
		//$id = $this->uri->get_segment(3);

		$data['company'] = $this->em->find('Entity\Company', $id);
// echo '<pre>';
// echo var_dump($data);
// exit;

		$this->twig->display('welcome/form_company.html', $data);
	}
}
