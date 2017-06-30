<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

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

	/**
     * Many Companies have Many Categories.
     * @var ArrayCollection|Category[]
     * @ManyToMany(targetEntity="Category")
     * @JoinTable(name="company_category",
     *      joinColumns={@JoinColumn(name="company_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="category_id", referencedColumnName="id")}
     *      )
     */
    protected $category;

	/**
     * Many Companies have One City.
     * @ManyToOne(targetEntity="City")
     * @JoinColumn(name="city_id", referencedColumnName="id")
     */
    protected $city;

	/**
     * Initialize any collection properties as ArrayCollections
     *
     * http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#initializing-collections
     *
     */
    public function __construct()
    {
        $this->category = new ArrayCollection;
    }

	/**
	 * Assign the company to a city
	 *
	 * @param Entity\City $city
	 * @return void
	 */
	public function setCity(City $city)
	{
		$this->city = $city;

		// The association must be defined in both directions
		if ( !$city->getCompanies()->contains($this))
		{
			$city->addCompany($this);
		}
	}

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

	/**
	 * Get category
	 *
	 * @return Entity\Category
	 */
	public function getCategory()
	{
		return $this->category;
	}

	/**
	 * Get city
	 *
	 * @return Entity\City
	 */
	public function getCity()
	{
		return $this->city;
	}

	/**
     * @param Category $category
     */
    public function removeCategory(Category $category)
    {
        if (false === $this->category->contains($category)) {
            return;
        }
        $this->category->removeElement($category);
        $category->removeCompany($this);
    }

    /**
     * @param Category $category
     */
    public function addCategory(Category $category)
    {
        if (true === $this->category->contains($category)) {
            return;
        }
        $this->category->add($category);
        $category->addCompany($this);
    }

}
