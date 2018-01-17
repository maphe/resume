<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class HomeController
 *
 * @package App\Controller
 */
class DefaultController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function home(Request $request)
    {
        return $this->render('pages/home.html.twig');
    }
}
