<?php

namespace Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category Model
 *
 * @Entity
 * @Table(name="category")
 * @author Carlos Oliveira <carlos.eduardo02@gmail.com>
 */
class Category
{

    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @Column(type="string", length=100, unique=true, nullable=false)
     */
    protected $name;

    /**
     * @OneToMany(targetEntity="Company", mappedBy="category")
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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Add companies
     *
     * @param Entity\Company $companies
     * @return Category
     */
    public function addCompany(Company $company)
    {
        $this->companies[] = $company;
        return $this;
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
