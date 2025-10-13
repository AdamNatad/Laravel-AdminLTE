<?php

namespace AdamNatad\LaravelAdminLte\Events;

use AdamNatad\LaravelAdminLte\Menu\Builder;

class BuildingMenu
{
    /**
     * The menu builder.
     *
     * @var Builder
     */
    public $menu;

    /**
     * Create a new event instance.
     *
     * @param  Builder  $menu
     */
    public function __construct(Builder $menu)
    {
        $this->menu = $menu;
    }
}
