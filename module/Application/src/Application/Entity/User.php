<?php
/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 14/11/2015
 * Time: 10:16
 */

namespace Application\Entity;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use TSS\Auth\Entity\AbstractUser;

/**
 * User
 *
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends AbstractUser
{
    const STATUS_INACTIVE = 1;
    const STATUS_ACTIVE = 2;

    /**
     * @var Credential[]
     *
     * @ORM\OneToMany(targetEntity="Credential", mappedBy="user", cascade={"all"}, fetch="EXTRA_LAZY")
     */
    protected $credentials;

    /**
     * @var Role
     *
     * @ORM\ManyToOne(targetEntity="Role")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $role;

    /**
     * Construct
     */
    public function __construct()
    {
        $this->credentials = new ArrayCollection();
        $this->status = self::STATUS_ACTIVE;
        $this->active = true;
        $this->confirmedEmail = false;
    }

    /**
     * @return Credential[]
     */
    public function getCredentials()
    {
        return $this->credentials;
    }

    /**
     * Add credential to credentials
     *
     * @param Credential $credential
     */
    public function addCredential($credential)
    {
        $this->credentials->add($credential);
    }

    /**
     * Remove credential to credentials
     *
     * @param Credential $credential
     */
    public function removeCredential($credential)
    {
        $this->credentials->removeElement($credential);
    }

    /**
     * @return Role
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param Role $role
     */
    public function setRole($role)
    {
        $this->role = $role;
    }
}