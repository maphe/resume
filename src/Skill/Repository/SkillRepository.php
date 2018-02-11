<?php

namespace App\Skill\Repository;

use App\Skill\Entity\Category;
use App\Skill\Entity\Skill;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Class SkillFactory
 *
 * @package App\Skill
 */
class SkillRepository extends AbstractExtension
{
    /** @var \App\Skill\Entity\Skill[] */
    protected $skills;

    /** @var \App\Skill\Repository\CategoryRepository */
    protected $categoryRepository;

    /**
     * SkillRepository constructor.
     *
     * @param array                                    $config
     * @param \App\Skill\Repository\CategoryRepository $categoryRepository
     */
    public function __construct(array $config, CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;

        foreach ($config as $slug => $conf) {
            $this->skills[$slug] = $this->factor($slug, $conf);
        }
    }

    /**
     * @return \Twig_Function[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('fetch_skill', [$this, 'findOneBySlug'])
        ];
    }


    /**
     * @param string $slug
     * @param array  $conf
     *
     * @return \App\Skill\Entity\Skill
     */
    protected function factor(string $slug, array $conf): Skill
    {
        $skill = new Skill();
        $skill->setSlug($slug);

        if (isset($conf['category'])) {
            $skill->setCategory($this->categoryRepository->findOneBySlug($conf['category']));
        }

        if (isset($conf['level'])) {
            $skill->setLevel($conf['level']);
        }

        if (isset($conf['logo'])) {
            $skill->setLogo($conf['logo']);
        }

        return $skill;
    }

    /**
     * @return \App\Skill\Entity\Skill[]
     */
    public function findAll()
    {
        return $this->skills;
    }

    /**
     * @param string $slug
     *
     * @return \App\Skill\Entity\Skill
     */
    public function findOneBySlug(string $slug): Skill
    {
        return $this->skills[$slug];
    }

    /**
     * @param \App\Skill\Entity\Category $category
     *
     * @return \App\Skill\Entity\Skill[]|array
     */
    public function findScoredByCategory(Category $category)
    {
        return array_filter($this->skills, function(Skill $skill) use ($category) {
            return (null !== $skill->getLevel()) && ($category->getSlug() === $skill->getCategory()->getSlug());
        });
    }
}
