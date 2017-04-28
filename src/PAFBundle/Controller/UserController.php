<?php

namespace PAFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
{
    /**
     * @param string $name
     * @return string
     * @Route("/show/{name}", name="show")
     */
    public function showAction($name)
    {
        // TODO : count
        $chat = $this->getDoctrine()->getRepository('PAFBundle:Chat')->findOneBy(array('name' => $name));
        $chats = $this->getDoctrine()->getRepository('PAFBundle:Chat')->findAll();

        return $this->render('PAFBundle:user:show.html.twig', array(
            'name'      => $name,
            'chat'     => $chat,
            'chats'     => $chats,
        ));
    }

    /**
     * @param Request $request
     * @return string
     * @Route("/edit/{name}", name="edit")
     */
    public function editAction(Request $request, $name)
    {
        // TODO
        $chat = $this->getDoctrine()->getRepository('PAFBundle:Chat')->findOneBy(array('name' => $name));

        return $this->render('PAFBundle:user:edit.html.twig', array(
            'name'      => $name,
            'chat'     => $chat,
        ));
    }

    /**
     * @param Request $request
     *
     * @Route("/avatar/{name}", name="avatar")
     */
    public function avatarAction(Request $request)
    {
        // TODO
    }

    /**
     * @param Request $request
     *
     * @Route("/clear/{name}", name="clear")
     */
    public function clearAction(Request $request)
    {
        // TODO
    }
}
