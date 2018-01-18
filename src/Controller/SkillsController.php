<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class SkillsController
 *
 * @package App\Controller
 */
class SkillsController extends Controller
{
    /**
     * @Route("/skills", name="skills")
     */
    public function listing()
    {
        return $this->render('pages/skills.html.twig');
    }
}
