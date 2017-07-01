<?php

class City_model extends CI_Model
{
	private $em;
	
	public function __construct()
	{
		parent::__construct();
		$this->em = $this->doctrine->em;
	} 

	public function getCity( $id )
	{
		return $this->em->find('Entity\City', $id);
	}

	public function getStates() 
	{
		return $this->em->getRepository('Entity\City')
			->createQueryBuilder('a')
			->select('a.state')
			->distinct()
			->getQuery()->getResult();
	}

	public function getByState($state)
	{
		return $this->em->getRepository('Entity\City')
			->createQueryBuilder('a')
			->andWhere('a.state = :state')

			->setParameter('state', "$state")
			->getQuery()->getResult();
	}

}