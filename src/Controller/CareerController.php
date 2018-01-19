<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class CareerController
 *
 * @package App\Controller
 */
class CareerController extends Controller
{
    /**
     * @Route("/work-history", name="work_history")
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function workHistory()
    {
        return $this->render('pages/work-history.html.twig');
    }
}
