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
                        <th><?= __('Key') ?></th>
                        <td><?= h($setting->key) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Value') ?></th>
                        <td><?= h($setting->value) ?></td>
                    </tr>
                            </table>

                </div>

                <div class="row">
                    <div class="form-submit d-flex jc-end">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $setting->key], ['confirm' => __('Are you sure you want to delete # {0}?', $setting->key), 'class' => ['btn', 'cancel']]); ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $setting->key], ['class' => 'btn']) ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</dsection>