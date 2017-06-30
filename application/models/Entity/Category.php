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
     * @var ArrayCollection|Company[]
     * @ManyToMany(targetEntity="Company", mappedBy="category")
     */
    protected $company;

    public function __construct()
    {
        $this->company = new ArrayCollection();
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
     * @return ArrayCollection|Company[]
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param Company $company
     */
    public function removeCompany(Company $company)
    {
        if (false === $this->company->contains($company)) {
            return;
        }
        $this->company->removeElement($company);
        $company->removeCategory($this);
    }

    /**
     * @param Company $company
     */
    public function addCompany(Company $company)
    {
        if (true === $this->company->contains($company)) {
            return;
        }
        $this->company->add($company);
        $company->addCategory($this);
    }

}
