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
    /** @var \App\Skill\Repository\SkillRepository */
    protected $skillRepository;

    /**
     * DefaultController constructor.
     *
     * @param \App\Skill\Repository\SkillRepository $skillRepository
     */
    public function __construct(\App\Skill\Repository\SkillRepository $skillRepository)
    {
        $this->skillRepository = $skillRepository;
    }


    /**
     * @Route("/", name="home")
     */
    public function home(Request $request)
    {
        return $this->render('pages/home.html.twig', [
            'skills' => $this->skillRepository->findAll()
        ]);
    }
}
