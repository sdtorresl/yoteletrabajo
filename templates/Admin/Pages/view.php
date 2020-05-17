<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */
?>

<section class="pages view card">
    <div class="card-content">
        <span class="card-title"><?= h($page->name) ?></span>
        <div class="row">
            <div class="col s12">

                <table>
                                <tr>
                        <th><?= __('Key') ?></th>
                        <td><?= h($page->key) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($page->name) ?></td>
                    </tr>
                                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($page->id) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Created By') ?></th>
                        <td><?= $this->Number->format($page->created_by) ?></td>
                    </tr>
                            <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($page->created) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($page->modified) ?></td>
                    </tr>
                    </table>
                    <div class="text">
                    <strong><?= __('Content') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($page->content)); ?>
                    </blockquote>
                </div>
                    <div class="text">
                    <strong><?= __('Summary') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($page->summary)); ?>
                    </blockquote>
                </div>
    
                </div>

                <div class="row">
                    <div class="form-submit d-flex jc-end">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $page->id], ['confirm' => __('Are you sure you want to delete # {0}?', $page->id), 'class' => ['btn', 'cancel']]); ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $page->id], ['class' => 'btn']) ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</dsection>