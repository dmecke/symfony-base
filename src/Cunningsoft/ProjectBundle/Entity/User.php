<?php

namespace Cunningsoft\ProjectBundle\Entity;

use Cunningsoft\ChatBundle\Entity\AuthorInterface as ChatUserInterface;
use Cunningsoft\MessageBundle\Entity\UserInterface as MessageUserInterface;
use FOS\UserBundle\Entity\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class User extends BaseUser implements MessageUserInterface, ChatUserInterface
{
    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;
}
