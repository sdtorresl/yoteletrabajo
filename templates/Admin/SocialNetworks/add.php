<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialNetwork $socialNetwork
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="socialNetworks index card">    
    <div class="card-content">
        <span class="card-title"><?=__('Add Social Networks') ?></span>
        <div class="row">
            <div class="col s12">
                
<?= $this->Form->create($socialNetwork, ['class' => 'form']) ?>
<?php
    echo $this->Form->control('name');
    echo $this->Form->control('link');
    echo $this->Form->control('icon');
?>
<div class="form-submit d-flex jc-end">
    <?= $this->Html->link(__('Cancel'), ['controller' => 'socialNetworks', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
</div>

<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
