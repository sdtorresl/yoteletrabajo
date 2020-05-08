<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Category Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $keywords
 * @property int|null $parent_category_id
 * @property string|null $type
 * @property bool|null $enabled
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Podcast[] $podcasts
 * @property \App\Model\Entity\Product[] $products
 * @property \App\Model\Entity\Image[] $images
 */
class Category extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'description' => true,
        'keywords' => true,
        'parent_category_id' => true,
        'type' => true,
        'enabled' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
        'podcasts' => true,
        'products' => true,
        'images' => true,
    ];
}
