<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Page $page
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="pages index card">
    <div class="card-header">
        <div class="card-content">
        <span class="card-title"><?=__('Edit page') ?></span>
        <div class="row">
            <div class="col s12">
                
<?= $this->Form->create($page, ['class' => 'form']) ?>
<?php
    echo $this->Form->control('key');
    echo $this->Form->control('name');
    echo $this->Form->control('content');
    echo $this->Form->control('summary');
    echo $this->Form->control('created_by');
?>
<div class="form-submit d-flex jc-end">
    <?= $this->Html->link(__('Cancel'), ['controller' => 'pages', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
</div>

<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>