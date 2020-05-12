<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setting $setting
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="settings index card">    
    <div class="card-content">
        <span class="card-title"><?=__('Add Settings') ?></span>
        <div class="row">
            <div class="col s12">
                
<?= $this->Form->create($setting, ['class' => 'form']) ?>
<?php
    echo $this->Form->control('value');
?>
<div class="form-submit d-flex jc-end">
    <?= $this->Html->link(__('Cancel'), ['controller' => 'settings', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
</div>

<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
