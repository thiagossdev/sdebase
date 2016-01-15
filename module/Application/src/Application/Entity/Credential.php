<?php
/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 14/11/2015
 * Time: 10:17
 */

namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;
use TSS\Auth\Entity\AbstractCredential;

/**
 * Credential
 *
 * @ORM\Entity
 * @ORM\Table(name="credentials")
 */
class Credential extends AbstractCredential
{
    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="credentials")
     * @ORM\JoinColumn(nullable=false)
     **/
    protected $user;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->active = true;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }
}