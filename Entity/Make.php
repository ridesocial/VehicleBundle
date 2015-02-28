<?php
namespace RideSocial\Bundle\VehicleBundle\Entity;

class Make
{
    /**
     * Id
     * @var integer
     */
    protected $id;
    
    /**
     * Name
     * @var string
     */
    protected $name;
    
    /**
     * Description
     * @var string
     */
    protected $description;
    
    /**
     * Model
     * @var \RideSocial\Bundle\VehicleBundle\Entity\Model
     */
    protected $model;
    
    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Get name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     * @param string $name
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Make
     */
    public function setName($name)
    {
        $this->name = $name;
        
        return $this;
    }
    
    /**
     * Get description
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     * Set description
     * @param string $description
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Make
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * Get model
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Model
     */
    public function getModel()
    {
        return $this->model;
    }
    
    /**
     * Set model
     * @param \RideSocial\Bundle\VehicleBundle\Entity\Model $model
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Make
     */
    public function setModel(\RideSocial\Bundle\VehicleBundle\Entity\Model $model)
    {
        $this->model = $model;
        
        return $this;
    }
}
