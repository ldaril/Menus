<?php

namespace TypiCMS\Modules\Menus\Repositories;

use TypiCMS\Modules\Core\Repositories\RepositoryInterface;

interface MenuInterface extends RepositoryInterface
{
    /**
     * Render a menu.
     *
     * @param string $name menu name
     *
     * @return string html code of a menu
     */
    public function render($name);

    /**
     * Get all models.
     *
     * @param bool  $all  Show published or all
     * @param array $with Eager load related models
     *
     * @return Collection
     */
    public function all(array $with = [], $all = false);

    /**
     * Get a menu.
     *
     * @param string $name menu name
     *
     * @return Collection nested collection
     */
    public function getMenu($name);
}
