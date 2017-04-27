<?php

namespace PAFBundle\Controller;

use PAFBundle\Fom\LoginForm;
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
        $login = $request->getSession();

        $login->setName('name');
        $login->getName('name');

        $login->getFlashBag()->add('notice', 'Bienvenue !');

        $form = $this->createForm(LoginForm::class);

        $form->handleRequest($request);

        return $this->render('PAFBundle:login:index.html.twig');
    }
}
