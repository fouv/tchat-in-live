<?php

namespace PAFBundle\Controller;

use PAFBundle\Entity\Chat;
use PAFBundle\Form\ChatForm;
use PAFBundle\PAFBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class ChatController extends Controller
{
    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/chat", name="chat")
     */
    public function indexAction(Request $request)
    {
        $login = $request->getSession();
        $name = $login->get('name');

        $chats = $this->getDoctrine()->getRepository('PAFBundle:Chat')->findAll();

        $chat = new Chat();
        $formChat = $this->createForm(ChatForm::class, $chat);
        $formChat->handleRequest($request);

        if ($formChat->isValid() && $formChat->isSubmitted()) {
            $chat->setName($name);

            $em = $this->getDoctrine()->getManager();
            $em->persist($chat);
            $em->flush();

            $url = $this->generateUrl('chat');
            return $this->redirect($url);
        }

        return $this->render('@PAF/chat/index.html.twig', array(
            'name'      => $name,
            'chats'     => $chats,
            'formChat'  => $formChat->createView(),
        ));
    }

    /**
     * @param Request $reques
     *
     * @Route("/chat/{id}", name="message_delete")
     */
    public function deleteAction(Request $request, $id)
    {
        $login = $request->getSession();

        $em = $this->getDoctrine()->getManager();
        $message = $em->getRepository('PAFBundle:Chat')->find($id);
        $em->remove($message);
        $em->flush();

        $login->getFlashBag()->add('success', 'Votre message a bien été supprimé');

        $url = $this->generateUrl('chat');
        return $this->redirect($url);
    }
}
