<?php
namespace RideSocial\Bundle\VehicleBundle\Entity;

use \RideSocial\Bundle\CoreBundle\Traits\ORM\TimestampableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\BlameableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;

class Vehicle
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
     * Year
     * @var \DateTime 
     */
    protected $year;
    
    /**
     * Make
     * @var \RideSocial\Bundle\VehicleBundle\Entity\Make
     */
    protected $make;
    
    /**
     * Model
     * @var \RideSocial\Bundle\VehicleBundle\Entity\Model
     */
    protected $model;
    
    /**
     * Style
     * @var \RideSocial\Bundle\VehicleBundle\Entity\Style
     */
    protected $style;
    
    /**
     * Capacity
     * @var integer 
     */
    protected $capacity;
    
    /**
     * Fuel consumption (mpg)
     * @var integer
     */
    protected $fuelConsumption;
    
    /**
     * Max speed (mph)
     * @var integer
     */
    protected $maxSpeed;
    
    /**
     * User vehicles
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $userVehicles;
    
    /**
     * Construct
     */
    public function __construct()
    {
        $this->userVehicles = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Get year
     * @return integer
     */
    public function getYear()
    {
        return $this->year;
    }
    
    /**
     * Set year
     * @param \DateTime $year
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     */
    public function setYear(\DateTime $year)
    {
        $this->year = $year;
        
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
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     */
    public function setModel(\RideSocial\Bundle\VehicleBundle\Entity\Model $model)
    {
        $this->model = $model;
        
        return $this;
    }
    
    /**
     * Get make
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Make
     */
    public function getMake()
    {
        return $this->make;
    }
    
    /**
     * Set make
     * @param \RideSocial\Bundle\VehicleBundle\Entity\Make $make
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     * @throws \Exception
     */
    public function setMake(\RideSocial\Bundle\VehicleBundle\Entity\Make $make)
    {
        if ($this->model == $make->getMake()) {
            $this->make = $make;
        } else {
            throw new \Exception('The given make does not match the vehicles\' model\\make');
        }
        
        return $this;
    }
    
    /**
     * Get style
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Style
     */
    public function getStyle()
    {
        return $this->style;
    }
    
    /**
     * Set style
     * @param \RideSocial\Bundle\VehicleBundle\Entity\Style $style
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     */
    public function setStyle(\RideSocial\Bundle\VehicleBundle\Entity\Style $style)
    {
        $this->style = $style;
        
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
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;
        
        return $this;
    }
    
    /**
     * Get fuel consumption
     * @return integer
     */
    public function getFuelConsumption()
    {
        return $this->fuelConsumption;
    }
    
    /**
     * Set fuel consumption
     * @param integer $fuelConsumption
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     */
    public function setFuelConsumption($fuelConsumption)
    {
        $this->fuelConsumption = $fuelConsumption;
        
        return $this;
    }
    
    /**
     * Get max speed
     * @return integer
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }
    
    /**
     * Set max speed
     * @param integer $maxSpeed
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
        
        return $this;
    }
    
    /**
     * Get user vehicles
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getUserVehicles()
    {
        return $this->userVehicles;
    }
    
    /**
     * Get user vehicles
     * @param string $userVehicle
     * @return \RideSocial\Bundle\VehicleBundle\Entity\UserVehicles
     */
    public function getUserVehicle($userVehicle)
    {
        return $this->userVehicles->get($userVehicle);
    }
    
    /**
     * Has user vehicles
     * @return boolean
     */
    public function hasUserVehicles()
    {
        return (0 < count($this->userVehicles));
    }
    
    /**
     * Has user vehicle
     * @param string $userVehicle
     * @return boolean
     */
    public function hasUserVehicle($userVehicle)
    {
        return $this->userVehicles->contains($userVehicle);
    }
    
    /**
     * Set user vehicles
     * @param array $userVehicles
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     */
    public function setUserVehicles(array $userVehicles)
    {
        if (!$userVehicles instanceof \Doctrine\Common\Collections\ArrayCollection) {
            $userVehicles = new \Doctrine\Common\Collections\ArrayCollection($userVehicles);
        }
        
        $this->userVehicles = $userVehicles;
        
        return $this;
    }
    
    /**
     * Add user vehicle
     * @param \RideSocial\Bundle\VehicleBundle\Entity\UserVehicle $userVehicle
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     */
    public function addUserVehicle(\RideSocial\Bundle\VehicleBundle\Entity\UserVehicle $userVehicle)
    {
        $this->userVehicles->add($userVehicle);
        
        return $this;
    }
}
