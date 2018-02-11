<?php

namespace App\Skill\Entity;

/**
 * Class Skill
 *
 * @package App\Skill
 */
class Skill
{
    /** @var string */
    protected $slug;

    /** @var \App\Skill\Entity\Category */
    protected $category;

    /** @var integer */
    protected $level;

    /** @var string */
    protected $logo;

    /**
     * @return string
     */
    public function getSlug(): string
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug(string $slug): void
    {
        $this->slug = $slug;
    }

    /**
     * @return \App\Skill\Entity\Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param \App\Skill\Entity\Category|null $category
     */
    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getLevel(): ?int
    {
        return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level): void
    {
        $this->level = $level;
    }

    /**
     * @return string
     */
    public function getLogo(): ?string
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo): void
    {
        $this->logo = $logo;
    }
}
