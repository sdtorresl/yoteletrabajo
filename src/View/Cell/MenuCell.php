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
            "pages" => [
                "label" => __("Inicio"),
                "icon" => "fal fa-home",
                "action" => "index"
            ],
            "categories" => [
                "label" => __("Categorías"),
                "icon" => "fal fa-users",
                "actions" => [
                    "index" => __("Listar"),
                    "add" => __("Crear")
                ]
            ],
            "products" => [
                "label" => __("Productos"),
                "icon" => "fal fa-users",
                "actions" => [
                    "index" => __("Listar"),
                    "add" => __("Crear")
                ]
            ],
            "discounts" => [
                "label" => __("Descuentos"),
                "icon" => "fal fa-users",
                "actions" => [
                    "index" => __("Listar"),
                    "add" => __("Crear")
                ]
            ],
            "users" => [
                "label" => __("Usuarios"),
                "icon" => "fal fa-users",
                "actions" => [
                    "index" => __("Listar"),
                    "add" => __("Crear")
                ]
            ],
        ];

        $this->set(compact('menuItems'));
    }
}
