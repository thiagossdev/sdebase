<?php
/**
 * Created by PhpStorm.
 * User: Thiago
 * Date: 14/11/2015
 * Time: 10:17
 */

namespace Application\Entity;


use Doctrine\ORM\Mapping as ORM;
use TSS\Auth\Entity\AbstractRole;

/**
 * Role
 *
 * @ORM\Entity
 * @ORM\Table(name="roles")
 */
class Role extends AbstractRole
{

}