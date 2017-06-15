<?php

namespace AppBundle\Controller;

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
        // $lastPosts = $this->get('post_doctrine_repository')->getLast10Posts();
        $lastPosts = [];
        $params = array(
            'lastPosts' => $lastPosts
        );

        return $this->render('base.html.twig', $params);
    }
}
