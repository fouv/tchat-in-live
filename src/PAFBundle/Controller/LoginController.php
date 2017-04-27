<?php

namespace PAFBundle\Controller;

use PAFBundle\Form\LoginForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class LoginController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function loginAction(Request $request)
    {
        $login = $request->getSession();

        $formLogin = $this->createForm(LoginForm::class);
        $formLogin->handleRequest($request);
        if ($formLogin->isSubmitted() && $formLogin->isValid()) {
            $data = $formLogin->getData();
            $login->set('name', $data['name']);
            $login->getFlashBag()->add('success', 'Bienvenue '.$data['name'].' sur PAFLeChat !');

            $url = $this->generateUrl('chat');
            return $this->redirect($url);
        }

        return $this->render('PAFBundle:login:index.html.twig', array(
            'formLogin' => $formLogin->createView(),
        ));
    }
}
