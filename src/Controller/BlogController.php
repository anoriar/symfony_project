<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{

    /**
     * @Route("/blog/{page}",
     *     name="blog_list",
     *     requirements = {"page"="\d+"},
     *     methods={"GET"},
     *     condition="context.getMethod() in ['GET', 'HEAD']  and request.headers.get('User-Agent') matches '/chrome/i'"
     *     )
     * @param int $page
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function list(int $page = 1)
    {
        return $this->render('lucky/number.html.twig', [
            'number' => $page
        ]);
    }

    /**
     * @Route("/blog/{slug}",
     *     name="blog_show"
     * )
     * @param string $slug
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(string $slug)
    {
        return $this->render('lucky/number.html.twig', [
            'number' => $slug
        ]);
    }
}