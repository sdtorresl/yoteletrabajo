<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>

<section class="images view card">
    <div class="card-content">
        <span class="card-title"><?= h($image->title) ?></span>
        <div class="row">
            <div class="col s12">

                <table>
                                <tr>
                        <th><?= __('Title') ?></th>
                        <td><?= h($image->title) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Description') ?></th>
                        <td><?= h($image->description) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Filename') ?></th>
                        <td><?= h($image->filename) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Directory') ?></th>
                        <td><?= h($image->directory) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Size') ?></th>
                        <td><?= h($image->size) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Format') ?></th>
                        <td><?= h($image->format) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Type') ?></th>
                        <td><?= h($image->type) ?></td>
                    </tr>
                                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($image->id) ?></td>
                    </tr>
                            <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($image->created) ?></td>
                    </tr>
                    </table>

                        <div class="related">
                    <h4><?= __('Related Categories') ?></h4>
                    <?php if (!empty($image->categories)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Name') ?></th>
                                    <th><?= __('Description') ?></th>
                                    <th><?= __('Keywords') ?></th>
                                    <th><?= __('Parent Category Id') ?></th>
                                    <th><?= __('Type') ?></th>
                                    <th><?= __('Enabled') ?></th>
                                    <th><?= __('Created') ?></th>
                                    <th><?= __('Modified') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($image->categories as $categories) : ?>
                            <tr>
                                    <td><?= h($categories->id) ?></td>
                                    <td><?= h($categories->name) ?></td>
                                    <td><?= h($categories->description) ?></td>
                                    <td><?= h($categories->keywords) ?></td>
                                    <td><?= h($categories->parent_category_id) ?></td>
                                    <td><?= h($categories->type) ?></td>
                                    <td><?= h($categories->enabled) ?></td>
                                    <td><?= h($categories->created) ?></td>
                                    <td><?= h($categories->modified) ?></td>
                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Categories', 'action' => 'view', $categories->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Categories', 'action' => 'edit', $categories->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Categories', 'action' => 'delete', $categories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categories->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                            <?php endif; ?>
                                    <div class="related">
                    <h4><?= __('Related Products') ?></h4>
                    <?php if (!empty($image->products)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Name') ?></th>
                                    <th><?= __('Description') ?></th>
                                    <th><?= __('Value') ?></th>
                                    <th><?= __('Available') ?></th>
                                    <th><?= __('Sku') ?></th>
                                    <th><?= __('Category Id') ?></th>
                                    <th><?= __('Keywords') ?></th>
                                    <th><?= __('Attributes') ?></th>
                                    <th><?= __('Created') ?></th>
                                    <th><?= __('Modified') ?></th>
                                    <th><?= __('Expiry Date') ?></th>
                                    <th><?= __('Discounts Id') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($image->products as $products) : ?>
                            <tr>
                                    <td><?= h($products->id) ?></td>
                                    <td><?= h($products->name) ?></td>
                                    <td><?= h($products->description) ?></td>
                                    <td><?= h($products->value) ?></td>
                                    <td><?= h($products->available) ?></td>
                                    <td><?= h($products->sku) ?></td>
                                    <td><?= h($products->category_id) ?></td>
                                    <td><?= h($products->keywords) ?></td>
                                    <td><?= h($products->attributes) ?></td>
                                    <td><?= h($products->created) ?></td>
                                    <td><?= h($products->modified) ?></td>
                                    <td><?= h($products->expiry_date) ?></td>
                                    <td><?= h($products->discounts_id) ?></td>
                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                            <?php endif; ?>
                            </div>

                <div class="row">
                    <div class="form-submit d-flex jc-end">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id), 'class' => ['btn', 'cancel']]); ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $image->id], ['class' => 'btn']) ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</dsection>