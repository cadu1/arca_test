<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * City Model
 *
 * @Entity
 * @Table(name="city")
 * @author Carlos Oliveira <carlos.eduardo02@gmail.com>
 */
class City
{

    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="string", length=255, nullable=false)
     */
    protected $name;

    /**
     * @Column(type="string", length=2, nullable=false)
     */
    protected $state;

    /**
     * @OneToMany(targetEntity="Company", mappedBy="city")
     */
    protected $companies;

    /**
     * Initialize any collection properties as ArrayCollections
     *
     * http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/association-mapping.html#initializing-collections
     *
     */
    public function __construct()
    {
        $this->companies = new ArrayCollection;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Add companies
     *
     * @param Entity\Company $companies
     * @return City
     */
    public function addCompany(Company $company)
    {
        $this->companies[] = $company;
        return $this;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return City
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return City
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Get companies
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getCompanies()
    {
        return $this->companies;
    }

}
