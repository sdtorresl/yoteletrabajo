<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialNetwork[]|\Cake\Collection\CollectionInterface $socialNetworks
 */
?>

<section class="socialNetworks index card">
    <div class="card-content">
        <span class="card-title"><?=__('Social Networks') ?></span>

        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('link') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('icon') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($socialNetworks as $socialNetwork): ?>
                <tr>
                                                <td><?= $this->Number->format($socialNetwork->id) ?></td>
                                                            <td><?= h($socialNetwork->name) ?></td>
                                                            <td><?= h($socialNetwork->link) ?></td>
                                                            <td><?= h($socialNetwork->icon) ?></td>
            
                    <td class="actions">
                        <?= $this->Html->link('<i class="fal fa-eye"></i>', ['action' => 'view', $socialNetwork->id], ['escape' => false, 'title' => __('View')] ) ?>
                        <?= $this->Html->link('<i class="fal fa-edit"></i>', ['action' => 'edit', $socialNetwork->id], ['escape' => false, 'title' => __('Edit')] ) ?>
                        <?= $this->Form->postLink('<i class="fal fa-trash"></i>', ['action' => 'delete', $socialNetwork->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $socialNetwork->id),
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
                <?= $this->Html->link(__('Add socialNetwork'), ['action' => 'add'], ['class' => 'btn']) ?>
            </div>
        </div>
    </div>
</section>