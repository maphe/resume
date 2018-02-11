<?php

namespace App\Controller;

use App\Skill\Repository\CategoryRepository;
use App\Skill\Repository\SkillRepository;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

/**
 * Class SkillsController
 *
 * @package App\Controller
 */
class SkillsController extends Controller
{
    /** @var \App\Skill\Repository\SkillRepository */
    protected $skillRepository;

    /** @var \App\Skill\Repository\CategoryRepository */
    protected $categoryRepository;

    /**
     * SkillsController constructor.
     *
     * @param \App\Skill\Repository\SkillRepository    $skillRepository
     * @param \App\Skill\Repository\CategoryRepository $categoryRepository
     */
    public function __construct(SkillRepository $skillRepository, CategoryRepository $categoryRepository)
    {
        $this->skillRepository    = $skillRepository;
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * @Route("/skills", name="skills")
     */
    public function listing()
    {
        return $this->render('pages/skills.html.twig', [
            'categories'      => $this->categoryRepository->findAll(),
            'skillRepository' => $this->skillRepository
        ]);
    }
}
