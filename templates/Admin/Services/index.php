<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service[]|\Cake\Collection\CollectionInterface $services
 */
?>

<section class="services index card">
    <div class="card-content">
        <span class="card-title"><?=__('Services') ?></span>

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
                    <th scope="col"><?= $this->Paginator->sort('discount_id') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($services as $service): ?>
                <tr>
                                                                                                    <td><?= $this->Number->format($service->id) ?></td>
                                                                                                                <td><?= h($service->name) ?></td>
                                                                                                                <td><?= $this->Number->format($service->value) ?></td>
                                                                                                                <td><?= $this->Number->format($service->available) ?></td>
                                                                                                                <td><?= h($service->sku) ?></td>
                                                                            <td><?= $service->has('category') ? $this->Html->link($service->category->name, ['controller' => 'Categories', 'action' => 'view', $service->category->id]) : '' ?></td>
                                                                                                                                                    <td><?= h($service->keywords) ?></td>
                                                                                                                <td><?= h($service->created) ?></td>
                                                                                                                <td><?= h($service->modified) ?></td>
                                                                                                                <td><?= h($service->expiry_date) ?></td>
                                                                                                <td><?= $service->has('discount') ? $this->Html->link($service->discount->name, ['controller' => 'Discounts', 'action' => 'view', $service->discount->id]) : '' ?></td>
                            
                    <td class="actions">
                        <?= $this->Html->link('<i class="fal fa-eye"></i>', ['action' => 'view', $service->id], ['escape' => false, 'title' => __('View')] ) ?>
                        <?= $this->Html->link('<i class="fal fa-edit"></i>', ['action' => 'edit', $service->id], ['escape' => false, 'title' => __('Edit')] ) ?>
                        <?= $this->Form->postLink('<i class="fal fa-trash"></i>', ['action' => 'delete', $service->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $service->id),
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

        <div class="row">
            <div class="d-flex jc-end">
                <?= $this->Html->link(__('Add service'), ['action' => 'add'], ['class' => 'btn']) ?>
            </div>
        </div>
    </div>
</section>