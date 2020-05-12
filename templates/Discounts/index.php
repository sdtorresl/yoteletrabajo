<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discount[]|\Cake\Collection\CollectionInterface $discounts
 */
?>

<section class="discounts index card">
    <div class="card-content">
        <span class="card-title"><?=__('Discounts') ?></span>

        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('expiry_date') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('value') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($discounts as $discount): ?>
                <tr>
                                                <td><?= $this->Number->format($discount->id) ?></td>
                                                            <td><?= h($discount->name) ?></td>
                                                            <td><?= h($discount->created) ?></td>
                                                            <td><?= h($discount->modified) ?></td>
                                                            <td><?= h($discount->expiry_date) ?></td>
                                                            <td><?= $this->Number->format($discount->value) ?></td>
            
                    <td class="actions">
                        <?= $this->Html->link('<i class="fal fa-eye"></i>', ['action' => 'view', $discount->id], ['escape' => false, 'title' => __('View')] ) ?>
                        <?= $this->Html->link('<i class="fal fa-edit"></i>', ['action' => 'edit', $discount->id], ['escape' => false, 'title' => __('Edit')] ) ?>
                        <?= $this->Form->postLink('<i class="fal fa-trash"></i>', ['action' => 'delete', $discount->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $discount->id),
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