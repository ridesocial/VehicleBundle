<?php
namespace RideSocial\Bundle\VehicleBundle\Entity;

use \RideSocial\Bundle\CoreBundle\Traits\ORM\TimestampableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\BlameableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;

class Make
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
     * Parent
     * @var \RideSocial\Bundle\VehicleBundle\Entity\Make
     */
    protected $parent;
    
    /**
     * Models
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $models;
    
    /**
     * Construct
     */
    public function __construct()
    {
        $this->models = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Get parent
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Make
     */
    public function getParent()
    {
        return $this->parent;
    }
    
    /**
     * Set parent
     * @param \RideSocial\Bundle\VehicleBundle\Entity\Make $parent
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Make
     */
    public function setParent(\RideSocial\Bundle\VehicleBundle\Entity\Make $parent)
    {
        $this->parent = $parent;
        
        return $this;
    }
    
    /**
     * Get models
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getModels()
    {
        return $this->models;
    }
    
    /**
     * Get model
     * @param string $model
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Model
     */
    public function getModel($model)
    {
        return $this->models->get($model);
    }
    
    /**
     * Has models
     * @return boolean
     */
    public function hasModels()
    {
        return (0 < $this->models);
    }
    
    /**
     * Set models
     * @param array $models
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Make
     */
    public function setModels(array $models)
    {
        if (!$models instanceof \Doctrine\Common\Collections\ArrayCollection) {
            $models = new \Doctrine\Common\Collections\ArrayCollection($models);
        }
        
        $this->models = $models;
        
        return $this;
    }
    
    /**
     * Add model
     * @param \RideSocial\Bundle\VehicleBundle\Entity\Model $model
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Make
     */
    public function addModel(\RideSocial\Bundle\VehicleBundle\Entity\Model $model)
    {
        $this->models->add($model);
        
        return $this;
    }
}
