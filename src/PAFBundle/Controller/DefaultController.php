<?php

namespace PAFBundle\Controller;

use PAFBundle\Form\LoginForm;
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

        $formLogin = $this->createForm(LoginForm::class);

        $formLogin->handleRequest($request);

        if ($formLogin->isSubmitted() && $formLogin->isValid()) {
            $data = $formLogin->getData();
            $login->set('name', $data('name'));

            $login->getFlashBag()->add('notice', 'Bienvenue !');
        }

        return $this->render('PAFBundle:login:index.html.twig');
    }
}
