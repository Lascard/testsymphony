<?php

namespace PhpprojectGeneralBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $name = "Marc";
        return $this->render('PhpprojectGeneralBundle:Default:index.html.twig',array('name' => $name));
    }
}
