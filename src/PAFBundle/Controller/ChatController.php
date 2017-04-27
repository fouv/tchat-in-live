<?php

namespace PAFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class ChatController extends Controller
{
    /**
     * @Route("/chat", name="chat")
     */
    public function indexAction(Request $request)
    {

        return $this->render('PAFBundle:chat:chat.html.twig');
    }
}
