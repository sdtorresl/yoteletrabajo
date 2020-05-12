<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Podcast[]|\Cake\Collection\CollectionInterface $podcasts
 */
?>

<section class="podcasts index card">
    <div class="card-content">
        <span class="card-title"><?=__('Podcasts') ?></span>

        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('keywords') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('category_id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('filename') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('directory') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('format') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($podcasts as $podcast): ?>
                <tr>
                                                                                <td><?= $this->Number->format($podcast->id) ?></td>
                                                                                            <td><?= h($podcast->title) ?></td>
                                                                                            <td><?= h($podcast->keywords) ?></td>
                                                                            <td><?= $podcast->has('category') ? $this->Html->link($podcast->category->name, ['controller' => 'Categories', 'action' => 'view', $podcast->category->id]) : '' ?></td>
                                                                                                            <td><?= h($podcast->filename) ?></td>
                                                                                            <td><?= h($podcast->directory) ?></td>
                                                                                            <td><?= h($podcast->size) ?></td>
                                                                                            <td><?= h($podcast->format) ?></td>
                                                                                            <td><?= h($podcast->type) ?></td>
                                                                                            <td><?= h($podcast->created) ?></td>
                                                                                            <td><?= h($podcast->modified) ?></td>
            
                    <td class="actions">
                        <?= $this->Html->link('<i class="fal fa-eye"></i>', ['action' => 'view', $podcast->id], ['escape' => false, 'title' => __('View')] ) ?>
                        <?= $this->Html->link('<i class="fal fa-edit"></i>', ['action' => 'edit', $podcast->id], ['escape' => false, 'title' => __('Edit')] ) ?>
                        <?= $this->Form->postLink('<i class="fal fa-trash"></i>', ['action' => 'delete', $podcast->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $podcast->id),
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