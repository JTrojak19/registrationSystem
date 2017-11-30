<?php
// src/AppBundle/Entity/User.php

namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $name;
    /**
     * @ORM\Column(type="string")
     */
    protected $surname;
    /**
     * @ORM\Column(type="date")
     */
    protected $birthday;
    /**
     * @ORM\Column(type="string")
     */
    protected $position;

    public function __construct()
    {
        parent::__construct();
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function setSurname()
    {
        $this->surname = $surname;
    }
    public function getBirthday()
    {
        return $this->birthday;
    }
    public function setBirthday($birtday)
    {
        $this->birthday = $birthday;
    }
    public function getPosition()
    {
        return $this->position;
    }
    public function setPosition()
    {
        $this->position = $position;
    }
}