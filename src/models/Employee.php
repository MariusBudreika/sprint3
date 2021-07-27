<?php

namespace Models;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="employee")
 */
class Employee
{
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;
    /** 
     * @ORM\Column(type="integer")
     */
    protected $project_id;
    /** 
     * @ORM\Column(type="string") 
     */
    protected $name;

    /**
     * Many employees have one project. This is the owning side.
     * @ORM\ManyToOne(targetEntity="Project", inversedBy="employeesData")
     * @ORM\JoinColumn(name="project_id", referencedColumnName="id")
     */
    private $empProject;

    public function getEmpProject()
    {
        return $this->empProject;
    }
    public function setEmpProject($proj)
    {
        $this->empProject = $proj;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getProject_id()
    {
        return $this->project_id;
    }
    public function setProject_id($project_id)
    {
        $this->project_id = $project_id;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        return $this->name=$name;
    }

    public function getProject()
    {
        return $this->project;
    }
    public function setProject($project)
    {
        $this->project= $project;
    }
}