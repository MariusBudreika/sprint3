<?php

namespace Models;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="project")
 */
class Project
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;

    /** 
     * @ORM\Column(type="string") 
     */
    protected $project;
    
    /**
     * One project has many employees. This is the inverse side.
     * @ORM\OneToMany(targetEntity="Employee", mappedBy="empProject" )
     */
    private $employeesData;

    public function __construct() {
        $this->employeesData = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        return $this->id = $id;
    }

    public function setProject($project)
    {
        $this->project = $project;
    }

    public function getProject()
    {
        return $this->project;
    }

    public function getEmployeesData()
    {
        return $this->employeesData;
    }
    public function setEmployeesData($employeesData)
    {
        return $this->employeesData = $employeesData;
    }
    public function getName()
    {
        return $this->name;
    }

}