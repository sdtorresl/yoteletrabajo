<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->loadHelper('Form', [
    'templates' => 'MaterializeTheme.materialize_form',
]);

?>

<section class="users index card">    
    <div class="card-content">
        <span class="card-title"><?=__('Add Users') ?></span>
        <div class="row">
            <div class="col s12">
                
<?= $this->Form->create($user, ['class' => 'form']) ?>
<?php
    echo $this->Form->control('first_name');
    echo $this->Form->control('last_name');
    echo $this->Form->control('email');
    echo $this->Form->control('password');
    echo $this->Form->control('login_attempts');
    echo $this->Form->control('recovery_token');
    echo $this->Form->control('token_expiry_date', ['empty' => true]);
    echo $this->Form->control('enabled');
    echo $this->Form->control('role_id', ['options' => $roles]);
    echo $this->Form->control('shopping_carts._ids', ['options' => $shoppingCarts]);
?>
<div class="form-submit d-flex jc-end">
    <?= $this->Html->link(__('Cancel'), ['controller' => 'users', 'action' => 'index'], ['class' => ['btn', 'cancel']]) ?>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn']) ?>
</div>

<?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</section>
