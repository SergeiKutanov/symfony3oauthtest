<?php

namespace SergeiK\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Class DefaultController
 * @package SergeiK\APIBundle\Controller
 *
 * @Route("/api")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/test")
     */
    public function indexAction()
    {
        return new JsonResponse(['data' => 'result']);
    }
}
