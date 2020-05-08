<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Product Entity
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $description
 * @property string|null $value
 * @property int $available
 * @property string|null $sku
 * @property int $category_id
 * @property string|null $keywords
 * @property string|null $attributes
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime|null $expiry_date
 * @property int $discounts_id
 *
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Discount $discount
 * @property \App\Model\Entity\Image[] $images
 * @property \App\Model\Entity\ShoppingCart[] $shopping_carts
 */
class Product extends Entity
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
        'value' => true,
        'available' => true,
        'sku' => true,
        'category_id' => true,
        'keywords' => true,
        'attributes' => true,
        'created' => true,
        'modified' => true,
        'expiry_date' => true,
        'discounts_id' => true,
        'category' => true,
        'discount' => true,
        'images' => true,
        'shopping_carts' => true,
    ];
}
