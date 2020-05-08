<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */
?>

<section class="categories view card">
    <div class="card-content">
        <span class="card-title"><?= h($category->name) ?></span>
        <div class="row">
            <div class="col s12">

                <table>
                                <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($category->name) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Keywords') ?></th>
                        <td><?= h($category->keywords) ?></td>
                    </tr>
                                                    <tr>
                        <th><?= __('Category') ?></th>
                        <td><?= $category->has('category') ? $this->Html->link($category->category->name, ['controller' => 'Categories', 'action' => 'view', $category->category->id]) : '' ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Type') ?></th>
                        <td><?= h($category->type) ?></td>
                    </tr>
                                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($category->id) ?></td>
                    </tr>
                            <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($category->created) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($category->modified) ?></td>
                    </tr>
                            <tr>
                        <th><?= __('Enabled') ?></th>
                        <td><?= $category->enabled ? __('Yes') : __('No'); ?></td>
                    </tr>
                     </table>
                    <div class="text">
                    <strong><?= __('Description') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($category->description)); ?>
                    </blockquote>
                </div>
    
                        <div class="related">
                    <h4><?= __('Related Images') ?></h4>
                    <?php if (!empty($category->images)) : ?>
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
                            <?php foreach ($category->images as $images) : ?>
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
                    <h4><?= __('Related Podcasts') ?></h4>
                    <?php if (!empty($category->podcasts)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Title') ?></th>
                                    <th><?= __('Description') ?></th>
                                    <th><?= __('Keywords') ?></th>
                                    <th><?= __('Category Id') ?></th>
                                    <th><?= __('Filename') ?></th>
                                    <th><?= __('Directory') ?></th>
                                    <th><?= __('Size') ?></th>
                                    <th><?= __('Format') ?></th>
                                    <th><?= __('Type') ?></th>
                                    <th><?= __('Created') ?></th>
                                    <th><?= __('Modified') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($category->podcasts as $podcasts) : ?>
                            <tr>
                                    <td><?= h($podcasts->id) ?></td>
                                    <td><?= h($podcasts->title) ?></td>
                                    <td><?= h($podcasts->description) ?></td>
                                    <td><?= h($podcasts->keywords) ?></td>
                                    <td><?= h($podcasts->category_id) ?></td>
                                    <td><?= h($podcasts->filename) ?></td>
                                    <td><?= h($podcasts->directory) ?></td>
                                    <td><?= h($podcasts->size) ?></td>
                                    <td><?= h($podcasts->format) ?></td>
                                    <td><?= h($podcasts->type) ?></td>
                                    <td><?= h($podcasts->created) ?></td>
                                    <td><?= h($podcasts->modified) ?></td>
                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Podcasts', 'action' => 'view', $podcasts->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Podcasts', 'action' => 'edit', $podcasts->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Podcasts', 'action' => 'delete', $podcasts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $podcasts->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                            <?php endif; ?>
                                    <div class="related">
                    <h4><?= __('Related Products') ?></h4>
                    <?php if (!empty($category->products)) : ?>
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
                            <?php foreach ($category->products as $products) : ?>
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
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $category->id], ['confirm' => __('Are you sure you want to delete # {0}?', $category->id), 'class' => ['btn', 'cancel']]); ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $category->id], ['class' => 'btn']) ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</dsection>