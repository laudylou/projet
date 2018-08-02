<?php

namespace projet1Bundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser
{

    /**
     * @var integer
     */
    protected $id;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

