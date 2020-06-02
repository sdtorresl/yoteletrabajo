<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */
?>

<section class="services view card">
    <div class="card-content">
        <span class="card-title"><?= h($service->name) ?></span>
        <div class="row">
            <div class="col s12">
                <table>
                                                                                <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($service->name) ?></td>
                    </tr>
                                                                                <tr>
                        <th><?= __('Sku') ?></th>
                        <td><?= h($service->sku) ?></td>
                    </tr>
                                                                                                    <tr>
                        <th><?= __('Category') ?></th>
                        <td><?= $service->has('category') ? $this->Html->link($service->category->name, ['controller' => 'Categories', 'action' => 'view', $service->category->id]) : '' ?>
                        </td>
                    </tr>
                                                                                <tr>
                        <th><?= __('Keywords') ?></th>
                        <td><?= h($service->keywords) ?></td>
                    </tr>
                                                                                                    <tr>
                        <th><?= __('Discount') ?></th>
                        <td><?= $service->has('discount') ? $this->Html->link($service->discount->name, ['controller' => 'Discounts', 'action' => 'view', $service->discount->id]) : '' ?>
                        </td>
                    </tr>
                                                                                                                                            <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($service->id) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Value') ?></th>
                        <td><?= $this->Number->format($service->value) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Available') ?></th>
                        <td><?= $this->Number->format($service->available) ?></td>
                    </tr>
                                                                                                    <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($service->created) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($service->modified) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Expiry Date') ?></th>
                        <td><?= h($service->expiry_date) ?></td>
                    </tr>
                                                                            </table>
                                                <div class="text">
                    <strong><?= __('Description') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($service->description)); ?>
                    </blockquote>
                </div>
                                <div class="text">
                    <strong><?= __('Attributes') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($service->attributes)); ?>
                    </blockquote>
                </div>
                                
                                                                                <div class="related">
                    <h4><?= __('Related Images') ?></h4>
                    <?php if (!empty($service->images)) : ?>
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
                            <?php foreach ($service->images as $images) : ?>
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
                </div>
                            </div>
        </div>
        
        <div class="row">
            <div class="d-flex jc-end">
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $service->id], ['confirm' => __('Are you sure you want to delete # {0}?', $service->id), 'class' => ['btn', 'cancel']]); ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $service->id], ['class' => 'btn']) ?>
            </div>
        </div>
    </div>
</section>