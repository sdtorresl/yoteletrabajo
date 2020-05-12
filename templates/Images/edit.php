<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="images index card">
    <div class="card-header">
        <div class="card-content">
        <span class="card-title"><?=__('Edit image') ?></span>
        <div class="row">
            <div class="col s12">
                
<?= $this->Form->create($image, ['class' => 'form']) ?>
<?php
    echo $this->Form->control('title');
    echo $this->Form->control('description');
    echo $this->Form->control('filename');
    echo $this->Form->control('directory');
    echo $this->Form->control('size');
    echo $this->Form->control('format');
    echo $this->Form->control('type');
    echo $this->Form->control('categories._ids', ['options' => $categories]);
    echo $this->Form->control('products._ids', ['options' => $products]);
?>
<div class="form-submit d-flex jc-end">
    <?= $this->Html->link(__('Cancel'), ['controller' => 'images', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
</div>

<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>