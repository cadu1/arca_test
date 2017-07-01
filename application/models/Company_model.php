<?php

class Company_model extends CI_Model
{
	private $em;

	public function __construct()
	{
		parent::__construct();
		$this->em = $this->doctrine->em;
	} 

	public function filter($keyWord) 
	{
		return $this->em->getRepository('Entity\Company')
			->createQueryBuilder('a')
			->join('a.city', 'b')
			->join('a.category', 'c')
			->orWhere('c.name like :key_word')
			->orWhere('a.title like :key_word')
			->orWhere('a.address like :key_word')
			->orWhere('a.zipcode like :key_word')
			->orWhere('b.name like :key_word')

			->setParameter('key_word', "%{$keyWord}%")
			->getQuery()->getResult();
	}

	public function getCompany($id) 
	{
		return $this->em->find('Entity\Company', $id);
	}

	public function getAll()
	{
		return $this->em->getRepository('Entity\Company')
			->createQueryBuilder('a')
			->getQuery()->getResult();
	}
}