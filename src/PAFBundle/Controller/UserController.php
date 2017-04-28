<?php

namespace PAFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;


class UserController extends Controller
{
    /**
     * @param Request $request
     *
     * @Route("/show/{name}", name="show")
     */
    public function showAction(Request $request)
    {
        // TODO
    }

    /**
     * @param Request $request
     *
     * @Route("/edit/{name}", name="edit")
     */
    public function editAction(Request $request)
    {
        // TODO
    }

    /**
     * @param Request $request
     *
     * @Route("/avatar/{name}", name="show")
     */
    public function avatarAction(Request $request)
    {
        // TODO
    }

    /**
     * @param Request $request
     *
     * @Route("/clear/{name}", name="show")
     */
    public function clearAction(Request $request)
    {
        // TODO
    }
}
