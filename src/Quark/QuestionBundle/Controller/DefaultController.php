<?php

namespace Quark\QuestionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{
    
    public function indexAction($name)
    {
        return $this->render('QuarkQuestionBundle:Default:index.html.twig', array('name' => $name));
    }
}
