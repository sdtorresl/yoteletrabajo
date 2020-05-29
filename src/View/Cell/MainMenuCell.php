<?php
declare(strict_types=1);

namespace App\View\Cell;

use Cake\View\Cell;
use Cake\ORM\TableRegistry;

/**
 * MainMenu cell
 */
class MainMenuCell extends Cell
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
        $categories = TableRegistry::getTableLocator()->get('Categories');

        $podcastsCategories = $categories->find()
            ->where(['type =' => 'podcast'])
            ->all();

        $servicesCategories = $categories->find()
            ->where(['type =' => 'service'])
            ->all();

        $productsCategories = $categories->find()
            ->where(['type =' => 'products'])
            ->all();

        $this->set(compact('podcastsCategories', 'servicesCategories', 'productsCategories'));
    }
}
