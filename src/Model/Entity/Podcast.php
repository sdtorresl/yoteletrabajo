<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Podcast Entity
 *
 * @property int $id
 * @property string $title
 * @property string|null $description
 * @property string|null $keywords
 * @property int $category_id
 * @property string|null $filename
 * @property string|null $directory
 * @property string|null $size
 * @property string|null $format
 * @property string|null $type
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Category $category
 */
class Podcast extends Entity
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
        'keywords' => true,
        'category_id' => true,
        'filename' => true,
        'directory' => true,
        'size' => true,
        'format' => true,
        'type' => true,
        'created' => true,
        'modified' => true,
        'category' => true,
    ];
}
