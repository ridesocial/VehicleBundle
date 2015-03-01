<?php
namespace RideSocial\Bundle\VehicleBundle\Entity;

use \RideSocial\Bundle\CoreBundle\Traits\ORM\TimestampableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\BlameableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;

class UserVehicle
{
    use TimestampableTrait;
    use BlameableTrait;
    use SluggableTrait;
    
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
     * User
     * @var \RideSocial\Bundle\UserBundle\Entity\User
     */
    protected $user;
    
    /**
     * Vehicle
     * @var \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     */
    protected $vehicle;
    
    /**
     * Capacity
     * @var integer
     */
    protected $capacity;
    
    /**
     * Color
     * @var string
     */
    protected $color;
    
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
     * @return \RideSocial\Bundle\VehicleBundle\Entity\UserVehicle
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
     * @return \RideSocial\Bundle\VehicleBundle\Entity\UserVehicle
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * Get user
     * @return \RideSocial\Bundle\UserBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
    
    /**
     * Set user
     * @param \RideSocial\Bundle\UserBundle\Entity\User $user
     * @return \RideSocial\Bundle\VehicleBundle\Entity\UserVehicle
     */
    public function setUser(\RideSocial\Bundle\UserBundle\Entity\User $user)
    {
        $this->user = $user;
        
        return $this;
    }
    
    /**
     * Get vehicle
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }
    
    /**
     * Set vehicle
     * @param \RideSocial\Bundle\VehicleBundle\Entity\Vehicle $vehicle
     * @return \RideSocial\Bundle\VehicleBundle\Entity\UserVehicle
     */
    public function setVehicle(\RideSocial\Bundle\VehicleBundle\Entity\Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
        
        return $this;
    }
    
    /**
     * Get capacity
     * @return integer
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
    
    /**
     * Set capacity
     * @param integer $capacity
     * @return \RideSocial\Bundle\VehicleBundle\Entity\UserVehicle
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
        
        return $this;
    }
    
    /**
     * Get color
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }
    
    /**
     * Set color
     * @param string $color
     * @return \RideSocial\Bundle\VehicleBundle\Entity\UserVehicle
     */
    public function setColor($color)
    {
        $this->color = $color;
        
        return $this;
    }
}
