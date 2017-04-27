<?php

namespace PAFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction(Request $request)
    {

        $login->setName('Login');
        $form = $this->createForm(LoginForm::class);

        $form->handleRequest($request);

        return $this->render('PAFBundle:Default:index.html.twig');
    }
}
