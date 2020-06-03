<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Service $service
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="services index card">
    <div class="card-content">
        <span class="card-title"><?=__('Add service') ?></span>
        <div class="row">
            <div class="col s12">

                <?= $this->Form->create($service, ['class' => 'form']) ?>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('value');
                    echo $this->Form->control('available');
                    echo $this->Form->control('sku');
                    echo $this->Form->control('category_id', ['options' => $categories]);
                    echo $this->Form->control('keywords');
                    echo $this->Form->control('attributes');
                    echo $this->Form->control('expiry_date', ['empty' => true]);
                    echo $this->Form->control('discount_id', ['options' => $discounts, 'empty' => true]);
                    echo $this->Form->control('images._ids', ['options' => $images]);
                ?>
                <div class="form-submit d-flex jc-end">
                    <?= $this->Html->link(__('Cancel'), ['controller' => 'services', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
                    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
