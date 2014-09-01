<?php

namespace Proxies\__CG__\Ridwan\EntityBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Opportunities extends \Ridwan\EntityBundle\Entity\Opportunities implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'title', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'description', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'shortDescription', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'startDate', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'endDate', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'numberOfVolunteers', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'ageGroup', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'training', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'expenses', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'difficulty', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'systemmatch', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'interested', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'enrolled', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'id', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'project');
        }

        return array('__isInitialized__', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'title', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'description', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'shortDescription', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'startDate', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'endDate', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'numberOfVolunteers', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'ageGroup', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'training', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'expenses', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'difficulty', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'systemmatch', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'interested', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'enrolled', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'id', '' . "\0" . 'Ridwan\\EntityBundle\\Entity\\Opportunities' . "\0" . 'project');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Opportunities $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function setTitle($title)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitle', array($title));

        return parent::setTitle($title);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitle()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitle', array());

        return parent::getTitle();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setShortDescription($shortDescription)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setShortDescription', array($shortDescription));

        return parent::setShortDescription($shortDescription);
    }

    /**
     * {@inheritDoc}
     */
    public function getShortDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortDescription', array());

        return parent::getShortDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setStartDate($startDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStartDate', array($startDate));

        return parent::setStartDate($startDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getStartDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStartDate', array());

        return parent::getStartDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEndDate($endDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEndDate', array($endDate));

        return parent::setEndDate($endDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEndDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEndDate', array());

        return parent::getEndDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumberOfVolunteers($numberOfVolunteers)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumberOfVolunteers', array($numberOfVolunteers));

        return parent::setNumberOfVolunteers($numberOfVolunteers);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumberOfVolunteers()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumberOfVolunteers', array());

        return parent::getNumberOfVolunteers();
    }

    /**
     * {@inheritDoc}
     */
    public function setAgeGroup($ageGroup)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAgeGroup', array($ageGroup));

        return parent::setAgeGroup($ageGroup);
    }

    /**
     * {@inheritDoc}
     */
    public function getAgeGroup()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAgeGroup', array());

        return parent::getAgeGroup();
    }

    /**
     * {@inheritDoc}
     */
    public function setTraining($training)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTraining', array($training));

        return parent::setTraining($training);
    }

    /**
     * {@inheritDoc}
     */
    public function getTraining()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTraining', array());

        return parent::getTraining();
    }

    /**
     * {@inheritDoc}
     */
    public function setExpenses($expenses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExpenses', array($expenses));

        return parent::setExpenses($expenses);
    }

    /**
     * {@inheritDoc}
     */
    public function getExpenses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExpenses', array());

        return parent::getExpenses();
    }

    /**
     * {@inheritDoc}
     */
    public function setDifficulty($difficulty)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDifficulty', array($difficulty));

        return parent::setDifficulty($difficulty);
    }

    /**
     * {@inheritDoc}
     */
    public function getDifficulty()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDifficulty', array());

        return parent::getDifficulty();
    }

    /**
     * {@inheritDoc}
     */
    public function setSystemmatch($systemmatch)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSystemmatch', array($systemmatch));

        return parent::setSystemmatch($systemmatch);
    }

    /**
     * {@inheritDoc}
     */
    public function getSystemmatch()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSystemmatch', array());

        return parent::getSystemmatch();
    }

    /**
     * {@inheritDoc}
     */
    public function setInterested($interested)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInterested', array($interested));

        return parent::setInterested($interested);
    }

    /**
     * {@inheritDoc}
     */
    public function getInterested()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInterested', array());

        return parent::getInterested();
    }

    /**
     * {@inheritDoc}
     */
    public function setEnrolled($enrolled)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEnrolled', array($enrolled));

        return parent::setEnrolled($enrolled);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnrolled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnrolled', array());

        return parent::getEnrolled();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setProject(\Ridwan\EntityBundle\Entity\Project $project = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setProject', array($project));

        return parent::setProject($project);
    }

    /**
     * {@inheritDoc}
     */
    public function getProject()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getProject', array());

        return parent::getProject();
    }

}
