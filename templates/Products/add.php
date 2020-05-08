<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="products index card">    
    <div class="card-content">
        <span class="card-title"><?=__('Add Products') ?></span>
        <div class="row">
            <div class="col s12">
                
<?= $this->Form->create($product, ['class' => 'form']) ?>
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
    echo $this->Form->control('discounts_id', ['options' => $discounts]);
    echo $this->Form->control('images._ids', ['options' => $images]);
    echo $this->Form->control('shopping_carts._ids', ['options' => $shoppingCarts]);
?>
<div class="form-submit d-flex jc-end">
    <?= $this->Html->link(__('Cancel'), ['controller' => 'products', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
</div>

<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
