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
		$user = new Entity\User;
		// $user->setUsername('wildlyinaccurate');
		// $user->setPassword('Passw0rd');
		// $user->setEmail('wildlyinaccurate@gmail.com');

		// When you have set up your database, you can persist these entities:
		// $em = $this->doctrine->em;
		// $em->persist($group);
		// $em->persist($user);
		// $em->flush();

		$data = array(
			'user' => $user
		);

		$this->twig->display('welcome/index.html', $data);
	}

	public function results()
	{
		$data['key_word'] = $this->input->post('key_word');

		$criteria = new \Doctrine\Common\Collections\Criteria();
		$criteria
			->orWhere($criteria->expr()->contains('title', $data['key_word']))
			->orWhere($criteria->expr()->contains('address', $data['key_word']))
			->orWhere($criteria->expr()->contains('zipcode', $data['key_word']));
		// ->orWhere($criteria->expr()->contains('category', $data['key_word']))
		// ->orWhere($criteria->expr()->contains('city', $data['key_word']));

		$data['companies'] = $this->em
			->getRepository('Entity\Company')
			->matching($criteria)->toArray();

		//$data['companies'] = array_map("get_object_vars", $data['companies']);
echo var_dump($data['companies']);exit;
		$this->twig->display('welcome/results.html', $data);
	}
}
