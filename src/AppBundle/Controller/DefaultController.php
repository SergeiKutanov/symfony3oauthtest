<?php

namespace AppBundle\Controller;

use FOS\OAuthServerBundle\Entity\ClientManager;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

//        /** @var ClientManager $clientManager */
//        $clientManager = $this->get('fos_oauth_server.client_manager.default');
//        $client = $clientManager->createClient();
//        $client->setRedirectUris([
//            'http://backoffice.local/'
//        ]);
//        $client->setAllowedGrantTypes(['token', 'authorization_code', 'password']);
//        $clientManager->updateClient($client);

        // replace this example code with whatever you need

        //YzEwMTQ4OTgyMWFiNDQ2NmM3YmYyNDk3M2JmMjc5ZmE1NTA0NmViMjFhNTdmNTkzZDM5YmEyZWU0MzgzMDI1MQ

        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }
}
