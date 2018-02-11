<?php

namespace App\Skill\Entity;

/**
 * Class Category
 *
 * @package App\Skill\Entity
 */
class Category
{
    /** @var string */
    protected $slug;

    /** @var string */
    protected $style;

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
     * @return string
     */
    public function getStyle(): string
    {
        return $this->style;
    }

    /**
     * @param string $style
     */
    public function setStyle(string $style): void
    {
        $this->style = $style;
    }
}
