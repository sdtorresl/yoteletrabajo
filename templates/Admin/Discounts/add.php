<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discount $discount
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="discounts index card">    
    <div class="card-content">
        <span class="card-title"><?=__('Add Discounts') ?></span>
        <div class="row">
            <div class="col s12">
                
<?= $this->Form->create($discount, ['class' => 'form']) ?>
<?php
    echo $this->Form->control('name');
    echo $this->Form->control('description');
    echo $this->Form->control('expiry_date', ['empty' => true]);
    echo $this->Form->control('value');
?>
<div class="form-submit d-flex jc-end">
    <?= $this->Html->link(__('Cancel'), ['controller' => 'discounts', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
</div>

<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
