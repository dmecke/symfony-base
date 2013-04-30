<?php

namespace CunningsoftCustom\MessageBundle\Controller;

use Cunningsoft\MessageBundle\Controller\MessageController as BaseController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/message")
 */
class MessageController extends BaseController
{
    public function findUser($id)
    {
        return $this->get('doctrine.orm.entity_manager')->getRepository('ProjectBundle:User')->find($id);
    }

    public function findAllUsers()
    {
        return $this->get('doctrine.orm.entity_manager')->getRepository('ProjectBundle:User')->findAll();
    }
}
