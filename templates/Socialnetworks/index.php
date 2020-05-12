<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socialnetwork[]|\Cake\Collection\CollectionInterface $socialnetworks
 */
?>

<section class="socialnetworks index card">
    <div class="card-content">
        <span class="card-title"><?=__('Socialnetworks') ?></span>

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
                <?php foreach ($socialnetworks as $socialnetwork): ?>
                <tr>
                                                <td><?= $this->Number->format($socialnetwork->id) ?></td>
                                                            <td><?= h($socialnetwork->name) ?></td>
                                                            <td><?= h($socialnetwork->link) ?></td>
                                                            <td><?= h($socialnetwork->icon) ?></td>
            
                    <td class="actions">
                        <?= $this->Html->link('<i class="fal fa-eye"></i>', ['action' => 'view', $socialnetwork->id], ['escape' => false, 'title' => __('View')] ) ?>
                        <?= $this->Html->link('<i class="fal fa-edit"></i>', ['action' => 'edit', $socialnetwork->id], ['escape' => false, 'title' => __('Edit')] ) ?>
                        <?= $this->Form->postLink('<i class="fal fa-trash"></i>', ['action' => 'delete', $socialnetwork->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $socialnetwork->id),
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