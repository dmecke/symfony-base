<?php

namespace Cunningsoft\ProjectBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @return array
     *
     * @Route("/", name="index")
     * @Template
     */
    public function indexAction()
    {
        return array();
    }
}
