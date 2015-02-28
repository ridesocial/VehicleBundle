<?php
namespace RideSocial\Bundle\VehicleBundle\Entity;

class Model
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
     *Makes
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $makes;
    
    /**
     * Vehicles
     * @var \Doctrine\Common\Collections\ArrayCollection 
     */
    protected $vehicles;
    
    /**
     * Construct
     */
    public function __construct()
    {
        $this->makes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->vehicles = new \Doctrine\Common\Collections\ArrayCollection();
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
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Model
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * Get makes
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getMakes()
    {
        return $this->makes;
    }
    
    /**
     * Get make
     * @param string $make
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Make
     */
    public function getMake($make)
    {
        return $this->makes->get($make);
    }
    
    /**
     * Has make
     * @param string $make
     * @return boolean
     */
    public function hasMake($make)
    {
        return $this->makes->contains($make);
    }
    
    /**
     * Has makes
     * @return boolean
     */
    public function hasMakes()
    {
        return (0 < $this->makes);
    }
    
    /**
     * Set makes
     * @param array $makes
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Model
     */
    public function setMakes(array $makes)
    {
        if (!$makes instanceof \Doctrine\Common\Collections\ArrayCollection) {
            $makes = new \Doctrine\Common\Collections\ArrayCollection($makes);
        }
        
        $this->makes = $makes;
        
        return $this;
    }
    
    /**
     * Add make
     * @param \RideSocial\Bundle\VehicleBundle\Entity\Make $make
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Model
     */
    public function addMake(\RideSocial\Bundle\VehicleBundle\Entity\Make $make)
    {
        $this->makes->add($make);
        
        return $this;
    }
    
    /**
     * Get vehicles
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getVehicles()
    {
        return $this->vehicles;
    }
    
    /**
     * Get vehicle
     * @param string $vehicle
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Vehicle
     */
    public function getVehicle($vehicle)
    {
        return $this->vehicles->get($vehicle);
    }
    
    /**
     * Has vehicle
     * @param string $vehicle
     * @return boolean
     */
    public function hasVehicle($vehicle)
    {
        return $this->vehicles->contains($vehicle);
    }
    
    /**
     * Has vehicles
     * @return boolean
     */
    public function hasVehicles()
    {
        return (0 < $this->vehicles);
    }
    
    /**
     * Set vehicles
     * @param array $vehicles
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Model
     */
    public function setVehicles(array $vehicles)
    {
        if (!$vehicles instanceof \Doctrine\Common\Collections\ArrayCollection) {
            $vehicles = new \Doctrine\Common\Collections\ArrayCollection($vehicles);
        }
        
        $this->vehicles = $vehicles;
        
        return $this;
    }
    
    /**
     * Add vehicle
     * @param \RideSocial\Bundle\VehicleBundle\Entity\Vehicle $vehicle
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Model
     */
    public function addVehicle(\RideSocial\Bundle\VehicleBundle\Entity\Vehicle $vehicle)
    {
        $this->vehicles->add($vehicle);
        
        return $this;
    }
}
