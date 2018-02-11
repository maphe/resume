<?php

namespace App\Skill\Repository;

use App\Skill\Entity\Category;

/**
 * Class CategoryRepository
 *
 * @package App\Skill
 */
class CategoryRepository
{
    /** @var \App\Skill\Entity\Category[] */
    protected $categories;

    /**
     * CategoryRepository constructor.
     *
     * @param array $categories
     */
    public function __construct(array $categories)
    {
        foreach ($categories as $slug => $conf) {
            $this->categories[$slug] = $this->factor($slug, $conf);
        }
    }

    /**
     * @param string $slug
     * @param array  $config
     *
     * @return \App\Skill\Entity\Category
     */
    protected function factor(string $slug, array $config): Category
    {
        $category = new Category();
        $category->setSlug($slug);

        if (isset($config['style'])) {
            $category->setStyle($config['style']);
        }

        return $category;
    }

    /**
     * @return \App\Skill\Entity\Category[]
     */
    public function findAll(): array
    {
        return $this->categories;
    }

    /**
     * @param string $slug
     *
     * @return \App\Skill\Entity\Category
     */
    public function findOneBySlug(string $slug): Category
    {
        return $this->categories[$slug];
    }
}
