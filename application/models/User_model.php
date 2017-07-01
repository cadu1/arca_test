<?php

class User_model extends CI_Model
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

	public function getUser($username, $password) 
	{
		return $this->em->getRepository('Entity\User')
			->createQueryBuilder('a')
			->andWhere('a.username=:username')
			->andWhere('a.password=:password')

			->setParameter('username', $username)
			->setParameter('password', $password)
			->getQuery()->getResult();
	}
}