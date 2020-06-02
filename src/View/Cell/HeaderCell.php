<?php
declare(strict_types=1);

namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Header cell
 */
class HeaderCell extends Cell
{
    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [
        "title",
        "description",
        "icon",
        "highlight",
    ];

    private $title;
    private $description;
    private $icon;
    private $highlight;

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
    public function display($title, $highlight, $description, $icon)
    {
        $this->set('title', $title);
        $this->set('description', $description);
        $this->set('highlight', $highlight);
        $this->set('icon', $icon);
    }
}
