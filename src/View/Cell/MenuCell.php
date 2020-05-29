<?php
declare(strict_types=1);

namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Menu cell
 */
class MenuCell extends Cell
{
    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Initialization logic run at the end of object construction.
     *
     * @return void
     */
    public function initialize(): void
    {
    }

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $menuItems = [
            "categories" => [
                "label" => __("Categories"),
                "icon" => "fal fa-tags",
                "actions" => [
                    "index" => __("List"),
                    "add" => __("Add")
                ]
            ],
            "podcasts" => [
                "label" => __("Podcasts"),
                "icon" => "fal fa-podcast",
                "actions" => [
                    "index" => __("List"),
                    "add" => __("Add")
                ]
            ],
            "products" => [
                "label" => __("Products"),
                "icon" => "fal fa-shopping-bag",
                "actions" => [
                    "index" => __("List"),
                    "add" => __("Add")
                ]
            ],
            "discounts" => [
                "label" => __("Discounts"),
                "icon" => "fal fa-percent",
                "actions" => [
                    "index" => __("Ver"),
                    "add" => __("Add")
                ]
            ],
            "users" => [
                "label" => __("Users"),
                "icon" => "fal fa-users",
                "actions" => [
                    "index" => __("List"),
                    "add" => __("Add")
                ]
            ],
            "roles" => [
                "label" => __("Roles"),
                "icon" => "fal fa-users-cog",
                "actions" => [
                    "index" => __("List"),
                    "add" => __("Add")
                ]
            ],
            "images" => [
                "label" => __("Images"),
                "icon" => "fal fa-images",
                "actions" => [
                    "index" => __("List"),
                    "add" => __("Add")
                ]
            ],
            "social-networks" => [
                "label" => __("Social Networks"),
                "icon" => "fal fa-share-alt",
                "action" => "index"
            ],
            "settings" => [
                "label" => __("Settings"),
                "icon" => "fal fa-cog",
                "action" => "index"
            ],
        ];

        $this->set(compact('menuItems'));
    }
}
