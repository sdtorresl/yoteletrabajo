<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>

<section class="contacts view card">
    <div class="card-content">
        <span class="card-title"><?= h($contact->name) ?></span>
        <div class="row">
            <div class="col s12">

                <table>
                                <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($contact->name) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Email') ?></th>
                        <td><?= h($contact->email) ?></td>
                    </tr>
                                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($contact->id) ?></td>
                    </tr>
                            <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($contact->created) ?></td>
                    </tr>
                            <tr>
                        <th><?= __('Viewed') ?></th>
                        <td><?= $contact->viewed ? __('Yes') : __('No'); ?></td>
                    </tr>
                     </table>
                    <div class="text">
                    <strong><?= __('Message') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($contact->message)); ?>
                    </blockquote>
                </div>
    
                </div>

                <div class="row">
                    <div class="form-submit d-flex jc-end">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id), 'class' => ['btn', 'cancel']]); ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $contact->id], ['class' => 'btn']) ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</dsection>