<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>

<section class="products view card">
    <div class="card-content">
        <span class="card-title"><?= h($product->name) ?></span>
        <div class="row">
            <div class="col s12">

                <table>
                                <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($product->name) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Sku') ?></th>
                        <td><?= h($product->sku) ?></td>
                    </tr>
                                                    <tr>
                        <th><?= __('Category') ?></th>
                        <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Keywords') ?></th>
                        <td><?= h($product->keywords) ?></td>
                    </tr>
                                                    <tr>
                        <th><?= __('Discount') ?></th>
                        <td><?= $product->has('discount') ? $this->Html->link($product->discount->name, ['controller' => 'Discounts', 'action' => 'view', $product->discount->id]) : '' ?></td>
                    </tr>
                                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($product->id) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Value') ?></th>
                        <td><?= $this->Number->format($product->value) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Available') ?></th>
                        <td><?= $this->Number->format($product->available) ?></td>
                    </tr>
                            <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($product->created) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($product->modified) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Expiry Date') ?></th>
                        <td><?= h($product->expiry_date) ?></td>
                    </tr>
                    </table>
                    <div class="text">
                    <strong><?= __('Description') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($product->description)); ?>
                    </blockquote>
                </div>
                    <div class="text">
                    <strong><?= __('Attributes') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($product->attributes)); ?>
                    </blockquote>
                </div>
    
                        <div class="related">
                    <h4><?= __('Related Images') ?></h4>
                    <?php if (!empty($product->images)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Title') ?></th>
                                    <th><?= __('Description') ?></th>
                                    <th><?= __('Filename') ?></th>
                                    <th><?= __('Directory') ?></th>
                                    <th><?= __('Size') ?></th>
                                    <th><?= __('Format') ?></th>
                                    <th><?= __('Type') ?></th>
                                    <th><?= __('Created') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($product->images as $images) : ?>
                            <tr>
                                    <td><?= h($images->id) ?></td>
                                    <td><?= h($images->title) ?></td>
                                    <td><?= h($images->description) ?></td>
                                    <td><?= h($images->filename) ?></td>
                                    <td><?= h($images->directory) ?></td>
                                    <td><?= h($images->size) ?></td>
                                    <td><?= h($images->format) ?></td>
                                    <td><?= h($images->type) ?></td>
                                    <td><?= h($images->created) ?></td>
                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Images', 'action' => 'view', $images->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Images', 'action' => 'edit', $images->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Images', 'action' => 'delete', $images->id], ['confirm' => __('Are you sure you want to delete # {0}?', $images->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                            <?php endif; ?>
                                    <div class="related">
                    <h4><?= __('Related Shopping Carts') ?></h4>
                    <?php if (!empty($product->shopping_carts)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Created') ?></th>
                                    <th><?= __('Active') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($product->shopping_carts as $shoppingCarts) : ?>
                            <tr>
                                    <td><?= h($shoppingCarts->id) ?></td>
                                    <td><?= h($shoppingCarts->created) ?></td>
                                    <td><?= h($shoppingCarts->active) ?></td>
                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'ShoppingCarts', 'action' => 'view', $shoppingCarts->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'ShoppingCarts', 'action' => 'edit', $shoppingCarts->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShoppingCarts', 'action' => 'delete', $shoppingCarts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingCarts->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                            <?php endif; ?>
                            </div>

                <div class="row">
                    <div class="form-submit d-flex jc-end">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id), 'class' => ['btn', 'cancel']]); ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id], ['class' => 'btn']) ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</dsection>