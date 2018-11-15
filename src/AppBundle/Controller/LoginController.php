<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class LoginController extends Controller
{
    /**
     * @Route("/login", name="loginpage")
     */
    public function indexAction(Request $request)
    {

        $session = $this->container->get('session');
        //$session->set('user','rgz');
        //var_export($session->get('user'));
        // replace this example code with whatever you need
        return $this->render('default/login.html.twig', [
            'user' => $session->get('user'),
        ]);
    }
}
