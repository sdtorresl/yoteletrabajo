<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socialnetwork $socialnetwork
 */
?>

<section class="socialnetworks view card">
    <div class="card-content">
        <span class="card-title"><?= h($socialnetwork->name) ?></span>
        <div class="row">
            <div class="col s12">

                <table>
                                <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($socialnetwork->name) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Link') ?></th>
                        <td><?= h($socialnetwork->link) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Icon') ?></th>
                        <td><?= h($socialnetwork->icon) ?></td>
                    </tr>
                                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($socialnetwork->id) ?></td>
                    </tr>
                    </table>

                </div>

                <div class="row">
                    <div class="form-submit d-flex jc-end">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socialnetwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialnetwork->id), 'class' => ['btn', 'cancel']]); ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialnetwork->id], ['class' => 'btn']) ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</dsection>