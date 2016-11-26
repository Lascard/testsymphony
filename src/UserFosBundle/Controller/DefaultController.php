<?php

namespace UserFosBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UserFosBundle:Default:index.html.twig');
    }
}
