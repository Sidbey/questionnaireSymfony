<?php

namespace QuizzBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QuizzBundle:Default:questionnaire.html.twig');
    }

    public function resultAction(Request $request)
    {
        $result = 0 ;
        $reponse = [2,3,4,2,2,1,3,2,4,3];

        foreach ($reponse as $key => $value){
            if ($value == $request->get('q'.($key+1))){
                $result += 1;
            }
        }
        return $this->render('QuizzBundle:Default:resultat.html.twig',['result'=> $result]);

    }
}
