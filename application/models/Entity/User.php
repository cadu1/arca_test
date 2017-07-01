<?php

namespace Entity;

/**
 * User Model
 *
 * @Entity
 * @Table(name="user")
 * @author  Carlos Oliveira <carlos.eduardo02@gmail.com>
 */
class User
{
	/**
	 * @Id
	 * @Column(type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	protected $id;

	/**
	 * @Column(type="string", length=32, unique=true, nullable=false)
	 */
	protected $username;

	/**
	 * @Column(type="string", length=255, nullable=false)
	 */
	protected $password;

	/**
	 * Encrypt the password before we store it
	 *
	 * @param	string	$password
	 * @return	void
	 */
	public function setPassword($password)
	{
		$this->password = $this->hashPassword($password);
	}

	/**
	 * Encrypt a Password
	 *
	 * @param	string	$password
	 * @return	string
	 */
	public function hashPassword($password)
	{
		if ( ! $this->username)
		{
			throw new \Exception('The username must be set before the password can be hashed.');
		}

		return hash('md5', $password);
	}

	public function setUsername($username)
	{
		$this->username = $username;
		return $this;
	}

	public function getId()
	{
		return $this->id;
	}

	public function getUsername()
	{
		return $this->username;
	}

	public function getPassword()
	{
		return $this->password;
	}

}
