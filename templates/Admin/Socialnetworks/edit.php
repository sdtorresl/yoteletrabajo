<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Socialnetwork $socialnetwork
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="socialnetworks index card">
    <div class="card-header">
        <div class="card-content">
        <span class="card-title"><?=__('Edit socialnetwork') ?></span>
        <div class="row">
            <div class="col s12">
                
<?= $this->Form->create($socialnetwork, ['class' => 'form']) ?>
<?php
    echo $this->Form->control('name');
    echo $this->Form->control('link');
    echo $this->Form->control('icon');
?>
<div class="form-submit d-flex jc-end">
    <?= $this->Html->link(__('Cancel'), ['controller' => 'socialnetworks', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
</div>

<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>