<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Category $category
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="categories index card">
    <div class="card-content">
        <span class="card-title"><?=__('Add Category') ?></span>
        <div class="row">
            <div class="col s12">

                <?= $this->Form->create($category, ['class' => 'form']) ?>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('keywords');
                    echo $this->Form->control('parent_category_id', ['options' => $categories, 'empty' => true]);
                    echo $this->Form->control('type', ['options' => $types, 'empty' => false]);
                    echo $this->Form->control('images._ids', ['options' => $images]);
                    echo $this->Form->control('enabled', ['checked' => 'checked']);
                ?>
                <div class="form-submit d-flex jc-end">
                    <?= $this->Html->link(__('Cancel'), ['controller' => 'categories', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
