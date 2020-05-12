<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
 */
?>

<section class="products index card">
    <div class="card-content">
        <span class="card-title"><?=__('Products') ?></span>

        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('available') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('sku') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('keywords') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('expiry_date') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('discounts_id') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                                                                                                    <td><?= $this->Number->format($product->id) ?></td>
                                                                                                                <td><?= h($product->name) ?></td>
                                                                                                                <td><?= $this->Number->format($product->value) ?></td>
                                                                                                                <td><?= $this->Number->format($product->available) ?></td>
                                                                                                                <td><?= h($product->sku) ?></td>
                                                                            <td><?= $product->has('category') ? $this->Html->link($product->category->name, ['controller' => 'Categories', 'action' => 'view', $product->category->id]) : '' ?></td>
                                                                                                                                                    <td><?= h($product->keywords) ?></td>
                                                                                                                <td><?= h($product->created) ?></td>
                                                                                                                <td><?= h($product->modified) ?></td>
                                                                                                                <td><?= h($product->expiry_date) ?></td>
                                                                                                <td><?= $product->has('discount') ? $this->Html->link($product->discount->name, ['controller' => 'Discounts', 'action' => 'view', $product->discount->id]) : '' ?></td>
                            
                    <td class="actions">
                        <?= $this->Html->link('<i class="fal fa-eye"></i>', ['action' => 'view', $product->id], ['escape' => false, 'title' => __('View')] ) ?>
                        <?= $this->Html->link('<i class="fal fa-edit"></i>', ['action' => 'edit', $product->id], ['escape' => false, 'title' => __('Edit')] ) ?>
                        <?= $this->Form->postLink('<i class="fal fa-trash"></i>', ['action' => 'delete', $product->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $product->id),
                            'escape' => false,
                            'class' => 'delete',
                            'title' => __('Delete')]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div class="paginator center-align">
            <ul class="pagination">
                <?= $this->Paginator->first('<<') ?>
                <?= $this->Paginator->prev('<') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('>') ?>
                <?= $this->Paginator->last('>>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>
</section>