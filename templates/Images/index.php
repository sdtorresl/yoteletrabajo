<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $images
 */
?>

<section class="images index card">
    <div class="card-header">
        <div class="card-content">
        <span class="card-title"><?=__('Images') ?></span>

        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('filename') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('directory') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('size') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('format') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('type') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($images as $image): ?>
                <tr>
                                                <td><?= $this->Number->format($image->id) ?></td>
                                                            <td><?= h($image->title) ?></td>
                                                            <td><?= h($image->description) ?></td>
                                                            <td><?= h($image->filename) ?></td>
                                                            <td><?= h($image->directory) ?></td>
                                                            <td><?= h($image->size) ?></td>
                                                            <td><?= h($image->format) ?></td>
                                                            <td><?= h($image->type) ?></td>
                                                            <td><?= h($image->created) ?></td>
            
                    <td class="actions">
                        <?= $this->Html->link('<i class="fal fa-eye"></i>', ['action' => 'view', $image->id], ['escape' => false, 'title' => __('View')] ) ?>
                        <?= $this->Html->link('<i class="fal fa-edit"></i>', ['action' => 'edit', $image->id], ['escape' => false, 'title' => __('Edit')] ) ?>
                        <?= $this->Form->postLink('<i class="fal fa-trash"></i>', ['action' => 'delete', $image->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $image->id),
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