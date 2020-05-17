<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialNetwork $socialNetwork
 */
?>

<section class="socialNetworks view card">
    <div class="card-content">
        <span class="card-title"><?= h($socialNetwork->name) ?></span>
        <div class="row">
            <div class="col s12">
                <table>
                                                                                <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($socialNetwork->name) ?></td>
                    </tr>
                                                                                <tr>
                        <th><?= __('Link') ?></th>
                        <td><?= h($socialNetwork->link) ?></td>
                    </tr>
                                                                                <tr>
                        <th><?= __('Icon') ?></th>
                        <td><?= h($socialNetwork->icon) ?></td>
                    </tr>
                                                                                                                                            <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($socialNetwork->id) ?></td>
                    </tr>
                                                                                                </table>
                
                                            </div>
        </div>
        
        <div class="row">
            <div class="d-flex jc-end">
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socialNetwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialNetwork->id), 'class' => ['btn', 'cancel']]); ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialNetwork->id], ['class' => 'btn']) ?>
            </div>
        </div>
    </div>
</section>