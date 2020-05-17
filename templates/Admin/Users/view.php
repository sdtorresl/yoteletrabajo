<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<section class="users view card">
    <div class="card-content">
        <span class="card-title"><?= h($user->id) ?></span>
        <div class="row">
            <div class="col s12">

                <table>
                                <tr>
                        <th><?= __('First Name') ?></th>
                        <td><?= h($user->first_name) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Last Name') ?></th>
                        <td><?= h($user->last_name) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Email') ?></th>
                        <td><?= h($user->email) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Password') ?></th>
                        <td><?= h($user->password) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Recovery Token') ?></th>
                        <td><?= h($user->recovery_token) ?></td>
                    </tr>
                                                    <tr>
                        <th><?= __('Role') ?></th>
                        <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                    </tr>
                                    <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($user->id) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Login Attempts') ?></th>
                        <td><?= $this->Number->format($user->login_attempts) ?></td>
                    </tr>
                            <tr>
                        <th><?= __('Token Expiry Date') ?></th>
                        <td><?= h($user->token_expiry_date) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($user->created) ?></td>
                    </tr>
                        <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($user->modified) ?></td>
                    </tr>
                            <tr>
                        <th><?= __('Enabled') ?></th>
                        <td><?= $user->enabled ? __('Yes') : __('No'); ?></td>
                    </tr>
                     </table>

                        <div class="related">
                    <h4><?= __('Related Shopping Carts') ?></h4>
                    <?php if (!empty($user->shopping_carts)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Created') ?></th>
                                    <th><?= __('Active') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($user->shopping_carts as $shoppingCarts) : ?>
                            <tr>
                                    <td><?= h($shoppingCarts->id) ?></td>
                                    <td><?= h($shoppingCarts->created) ?></td>
                                    <td><?= h($shoppingCarts->active) ?></td>
                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'ShoppingCarts', 'action' => 'view', $shoppingCarts->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'ShoppingCarts', 'action' => 'edit', $shoppingCarts->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ShoppingCarts', 'action' => 'delete', $shoppingCarts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $shoppingCarts->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                            <?php endif; ?>
                                    <div class="related">
                    <h4><?= __('Related Addresses') ?></h4>
                    <?php if (!empty($user->addresses)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                    <th><?= __('Id') ?></th>
                                    <th><?= __('Address') ?></th>
                                    <th><?= __('User Id') ?></th>
                                    <th><?= __('City Id') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($user->addresses as $addresses) : ?>
                            <tr>
                                    <td><?= h($addresses->id) ?></td>
                                    <td><?= h($addresses->address) ?></td>
                                    <td><?= h($addresses->user_id) ?></td>
                                    <td><?= h($addresses->city_id) ?></td>
                                        <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Addresses', 'action' => 'view', $addresses->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Addresses', 'action' => 'edit', $addresses->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Addresses', 'action' => 'delete', $addresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $addresses->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                            <?php endif; ?>
                            </div>

                <div class="row">
                    <div class="form-submit d-flex jc-end">
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => ['btn', 'cancel']]); ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn']) ?>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</dsection>