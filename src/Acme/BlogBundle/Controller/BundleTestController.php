<?php

namespace App\Acme\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class BundleTestController
 */
class BundleTestController extends AbstractController
{

    /**
     * @Route("/new_blog/list/",
     *     name="new_blog_list"
     *     )
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function list()
    {
        return $this->render('bundle/list.html.twig', [
            'number' => 'test bundle'
        ]);
    }
}