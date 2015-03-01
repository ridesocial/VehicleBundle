<?php
namespace RideSocial\Bundle\VehicleBundle\Entity;

use \RideSocial\Bundle\CoreBundle\Traits\ORM\TimestampableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\BlameableTrait;
use \RideSocial\Bundle\CoreBundle\Traits\ORM\SluggableTrait;

class Style
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
     * Abbreviation
     * @var string
     */
    protected $abbreviation;
    
    /**
     * Models
     * @var \Doctrine\Common\Collections\ArrayCollection
     */
    protected $models;
    
    /**
     * Parent
     * @var \RideSocial\Bundle\VehicleBundle\Entity\Style
     */
    protected $parent;
    
    /**
     * Children
     * @var \Doctrine\Common\Collections\ArrayCollection 
     */
    protected $children;
    
    /**
     * Construct
     */
    public function __construct()
    {
        $this->models = new \Doctrine\Common\Collections\ArrayCollection();
        $this->children = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Style
     */
    public function setDescription($description)
    {
        $this->description = $description;
        
        return $this;
    }
    
    /**
     * Get abbreviation
     * @return string
     */
    public function getAbbreviation()
    {
        return $this->abbreviation;
    }
    
    /**
     * Set abbreviation
     * @param string $abbreviation
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Style
     */
    public function setAbbreviation($abbreviation)
    {
        $this->abbreviation = $abbreviation;
        
        return $this;
    }
    
    /**
     * Get children
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getChildren()
    {
        return $this->children;
    }
    
    /**
     * Get child
     * @param string $child
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Style
     */
    public function getChild($child)
    {
        return $this->children->get($child);
    }
    
    /**
     * Has child
     * @param string $child
     * @return boolean
     */
    public function hasChild($child)
    {
        return $this->children->contains($child);
    }
    
    /**
     * Has children
     * @return boolean
     */
    public function hasChildren()
    {
        return (0 < $this->children);
    }
    
    /**
     * Set children
     * @param array $children
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Style
     */
    public function setChildren(array $children)
    {
        if (!$children instanceof \Doctrine\Common\Collections\ArrayCollection) {
            $children = new \Doctrine\Common\Collections\ArrayCollection($children);
        }
        
        $this->children = $children;
        
        return $this;
    }
    
    /**
     * Add child
     * @param \RideSocial\Bundle\VehicleBundle\Entity\Style $child
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Style
     */
    public function addChild(\RideSocial\Bundle\VehicleBundle\Entity\Style $child)
    {
        $this->children->add($child);
        
        return $this;
    }
    
    /**
     * Get parent
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Style
     */
    public function getParent()
    {
        return $this->parent;
    }
    
    /**
     * Set parent
     * @param \RideSocial\Bundle\VehicleBundle\Entity\Style $parent
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Style
     */
    public function setParent(\RideSocial\Bundle\VehicleBundle\Entity\Style $parent)
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
     * Has model
     * @param string $model
     * @return boolean
     */
    public function hasModel($model)
    {
        return $this->models->contains($model);
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
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Style
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
     * @return \RideSocial\Bundle\VehicleBundle\Entity\Style
     */
    public function addModel(\RideSocial\Bundle\VehicleBundle\Entity\Model $model)
    {
        $this->models->add($model);
        
        return $this;
    }
}
