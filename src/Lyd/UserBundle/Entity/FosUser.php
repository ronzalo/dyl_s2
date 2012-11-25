<?php

namespace Lyd\UserBundle\Entity;

use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * Lyd\UserBundle\Entity\FosUser
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Lyd\UserBundle\Entity\FosUserRepository")
 */
class FosUser extends BaseUser
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
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