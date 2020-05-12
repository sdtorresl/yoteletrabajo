<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Image Entity
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string $filename
 * @property string $directory
 * @property string|null $size
 * @property string|null $format
 * @property string $type
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Category[] $categories
 * @property \App\Model\Entity\Product[] $products
 */
class Image extends Entity
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
        'title' => true,
        'description' => true,
        'filename' => true,
        'directory' => true,
        'size' => true,
        'format' => true,
        'type' => true,
        'created' => true,
        'categories' => true,
        'products' => true,
    ];
}
