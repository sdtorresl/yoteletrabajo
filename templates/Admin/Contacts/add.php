<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="contacts index card">    
    <div class="card-content">
        <span class="card-title"><?=__('Add Contacts') ?></span>
        <div class="row">
            <div class="col s12">
                
<?= $this->Form->create($contact, ['class' => 'form']) ?>
<?php
    echo $this->Form->control('name');
    echo $this->Form->control('email');
    echo $this->Form->control('message');
    echo $this->Form->control('viewed');
?>
<div class="form-submit d-flex jc-end">
    <?= $this->Html->link(__('Cancel'), ['controller' => 'contacts', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
</div>

<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
