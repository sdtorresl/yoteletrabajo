<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="roles index card">    
    <div class="card-content">
        <span class="card-title"><?=__('Add role') ?></span>
        <div class="row">
            <div class="col s12">
                
<?= $this->Form->create($role, ['class' => 'form']) ?>
<?php
    echo $this->Form->control('name');
    echo $this->Form->control('permissions');
?>
<div class="form-submit d-flex jc-end">
    <?= $this->Html->link(__('Cancel'), ['controller' => 'roles', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
</div>

<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
