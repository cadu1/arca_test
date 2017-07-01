<?php

class Category_model extends CI_Model
{
	private $em;

	public function __construct()
	{
		parent::__construct();
		$this->em = $this->doctrine->em;
	} 

	public function getAll() 
	{
		return $this->em->getRepository('Entity\Category')
			->createQueryBuilder('a')
			->select('a.id, a.name')
			->getQuery()->getResult();
	}

	public function get($id)
	{
		return $this->em->find('Entity\Category', $id);
	}

}