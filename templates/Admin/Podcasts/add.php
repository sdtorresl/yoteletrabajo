<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Podcast $podcast
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="podcasts index card">    
    <div class="card-content">
        <span class="card-title"><?=__('Add Podcasts') ?></span>
        <div class="row">
            <div class="col s12">
                
<?= $this->Form->create($podcast, ['class' => 'form']) ?>
<?php
    echo $this->Form->control('title');
    echo $this->Form->control('description');
    echo $this->Form->control('keywords');
    echo $this->Form->control('category_id', ['options' => $categories]);
    echo $this->Form->control('filename');
    echo $this->Form->control('directory');
    echo $this->Form->control('size');
    echo $this->Form->control('format');
    echo $this->Form->control('type');
?>
<div class="form-submit d-flex jc-end">
    <?= $this->Html->link(__('Cancel'), ['controller' => 'podcasts', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
</div>

<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
