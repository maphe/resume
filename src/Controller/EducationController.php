<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class EducationController
 *
 * @package App\Controller
 */
class EducationController extends Controller
{
    /**
     * @Route("/education", name="education")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function workHistory()
    {
        return $this->render('pages/education.html.twig');
    }
}
