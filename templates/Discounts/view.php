<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discount $discount
 */
?>

<section class="discounts view card">
    <div class="card-content">
        <span class="card-title"><?= h($discount->name) ?></span>
        <div class="row">
            <div class="col s12">

                <table>
                                <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($discount->name) ?></td>
                    </tr>
                                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($discount->id) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Value') ?></th>
                        <td><?= $this->Number->format($discount->value) ?></td>
                    </tr>
                            <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($discount->created) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($discount->modified) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Expiry Date') ?></th>
                        <td><?= h($discount->expiry_date) ?></td>
                    </tr>
                    </table>
                    <div class="text">
                    <strong><?= __('Description') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($discount->description)); ?>
                    </blockquote>
                </div>
    
                </div>

                <div class="row">
                    <div class="form-submit d-flex jc-end">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $discount->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discount->id), 'class' => ['btn', 'cancel']]); ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $discount->id], ['class' => 'btn']) ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</dsection>