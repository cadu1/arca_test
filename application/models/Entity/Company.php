<?php

namespace Entity;

/**
 * User Model
 *
 * @Entity
 * @Table(name="company")
 * @author  Carlos Olivera <carlos.eduardo02@gmail.com>
 */
class Company
{
	/**
	 * @Id
	 * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @Column(type="string", length=150, nullable=false)
	 */
	protected $title;

	/**
	 * @Column(type="string", length=15, nullable=false)
	 */
	protected $phonenumber;

	/**
	 * @Column(type="string", length=200, nullable=false)
	 */
	protected $address;

	/**
	 * @Column(type="string", length=20, nullable=false)
	 */
	protected $zipcode;

	/**
	 * @Column(type="text", nullable=false)
	 */
	protected $description;

	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}

	public function setPhonenumber($phonenumber)
	{
		$this->phonenumber = $phonenumber;
		return $this;
	}

	public function setAddress($address)
	{
		$this->address = $address;
		return $this;
	}

	public function setZipcode($zipcode)
	{
		$this->zipcode = $zipcode;
		return $this;
	}

	public function setDescription($description)
	{
		$this->description = $description;
		return $this;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getTitle()
	{
		return $this->title;
	}

	public function getPhonenumber()
	{
		return $this->phonenumber;
	}

	public function getAddress()
	{
		return $this->address;
	}

	public function getZipcode()
	{
		return $this->zipcode;
	}

	public function getDescription()
	{
		return $this->description;
	}

}
