<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Podcast $podcast
 */
?>

<section class="podcasts view card">
    <div class="card-content">
        <span class="card-title"><?= h($podcast->title) ?></span>
        <div class="row">
            <div class="col s12">

                <table>
                                <tr>
                        <th><?= __('Title') ?></th>
                        <td><?= h($podcast->title) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Keywords') ?></th>
                        <td><?= h($podcast->keywords) ?></td>
                    </tr>
                                                    <tr>
                        <th><?= __('Category') ?></th>
                        <td><?= $podcast->has('category') ? $this->Html->link($podcast->category->name, ['controller' => 'Categories', 'action' => 'view', $podcast->category->id]) : '' ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Filename') ?></th>
                        <td><?= h($podcast->filename) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Directory') ?></th>
                        <td><?= h($podcast->directory) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Size') ?></th>
                        <td><?= h($podcast->size) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Format') ?></th>
                        <td><?= h($podcast->format) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Type') ?></th>
                        <td><?= h($podcast->type) ?></td>
                    </tr>
                                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($podcast->id) ?></td>
                    </tr>
                            <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($podcast->created) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($podcast->modified) ?></td>
                    </tr>
                    </table>
                    <div class="text">
                    <strong><?= __('Description') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($podcast->description)); ?>
                    </blockquote>
                </div>
    
                </div>

                <div class="row">
                    <div class="form-submit d-flex jc-end">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $podcast->id], ['confirm' => __('Are you sure you want to delete # {0}?', $podcast->id), 'class' => ['btn', 'cancel']]); ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $podcast->id], ['class' => 'btn']) ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</dsection>