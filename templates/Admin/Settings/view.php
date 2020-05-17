<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting $setting
 */
?>

<section class="settings view card">
    <div class="card-content">
        <span class="card-title"><?= h($setting->key) ?></span>
        <div class="row">
            <div class="col s12">
                <table>
                                                                                <tr>
                        <th><?= __('Identifier') ?></th>
                        <td><?= h($setting->identifier) ?></td>
                    </tr>
                                                                                <tr>
                        <th><?= __('Value') ?></th>
                        <td><?= h($setting->value) ?></td>
                    </tr>
                                                                                                                                            <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($setting->id) ?></td>
                    </tr>
                                                                                                </table>
                
                                            </div>
        </div>
        
        <div class="row">
            <div class="d-flex jc-end">
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $setting->id], ['confirm' => __('Are you sure you want to delete # {0}?', $setting->id), 'class' => ['btn', 'cancel']]); ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $setting->id], ['class' => 'btn']) ?>
            </div>
        </div>
    </div>
</section>