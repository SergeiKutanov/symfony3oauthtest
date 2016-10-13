<?php
/**
 * Created by PhpStorm.
 * User: sergei
 * Date: 10/13/16
 * Time: 3:02 PM
 */

namespace AppBundle\Controller;


use AppBundle\Entity\User;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RestController extends FOSRestController
{

    public function getUsersAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository(User::class)->findAll();

        $view = View::create();
        $view->setData($users)->setStatusCode(200);

        return $view;
    }

    public function findUserAction($id) {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(User::class)->find($id);

        if (!$user) {
            throw new NotFoundHttpException("User not found");
        }

        $view = View::create();
        $view->setData($user)->setStatusCode(200);

        return $view;
    }

}