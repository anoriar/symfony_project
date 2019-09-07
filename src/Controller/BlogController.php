<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/blog", name="blog_")
 * Class BlogController
 * @package App\Controller
 */
class BlogController extends AbstractController
{

    /**
     * @Route("/{page}",
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
        $generatedUrl = $this->generateUrl('blog_show', ['slug' => 'test']);

        return $this->render('blog/show.html.twig', [
            'number' => $page
        ]);
    }

    /**
     * @Route("/{page}", name="mobile_homepage", host="m.example.com")
     */
    public function mobileList()
    {

    }

    /**
     * @Route("/{slug}",
     *     name="show"
     * )
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function show(Request $request)
    {

        return $this->render('lucky/number.html.twig', [
            'number' => 'test'
        ]);
    }

    /**
     * @Route("/{_locale}/test.{_format}",
     *     locale="en",
     *     format="html",
     *     name="blog_search",
     *     requirements = {"_locale" = "en|fr", "_format" = "html"}
     *     )
     */
    public function search()
    {
        return $this->render('lucky/number.html.twig', [
            'number' => 'search'
        ]);
    }
}