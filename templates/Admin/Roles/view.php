<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */
?>

<section class="roles view card">
    <div class="card-content">
        <span class="card-title"><?= h($role->name) ?></span>
        <div class="row">
            <div class="col s12">
                <table>
                                                                                <tr>
                        <th><?= __('Name') ?></th>
                        <td><?= h($role->name) ?></td>
                    </tr>
                                                                                                                                            <tr>
                        <th><?= __('Id') ?></th>
                        <td><?= $this->Number->format($role->id) ?></td>
                    </tr>
                                                                                                    <tr>
                        <th><?= __('Created') ?></th>
                        <td><?= h($role->created) ?></td>
                    </tr>
                                        <tr>
                        <th><?= __('Modified') ?></th>
                        <td><?= h($role->modified) ?></td>
                    </tr>
                                                                            </table>
                                                <div class="text">
                    <strong><?= __('Permissions') ?></strong>
                    <blockquote>
                        <?= $this->Text->autoParagraph(h($role->permissions)); ?>
                    </blockquote>
                </div>
                                
                                                                                <div class="related">
                    <h4><?= __('Related Users') ?></h4>
                    <?php if (!empty($role->users)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                                                <th><?= __('Id') ?></th>
                                                                <th><?= __('First Name') ?></th>
                                                                <th><?= __('Last Name') ?></th>
                                                                <th><?= __('Email') ?></th>
                                                                <th><?= __('Password') ?></th>
                                                                <th><?= __('Login Attempts') ?></th>
                                                                <th><?= __('Recovery Token') ?></th>
                                                                <th><?= __('Token Expiry Date') ?></th>
                                                                <th><?= __('Enabled') ?></th>
                                                                <th><?= __('Created') ?></th>
                                                                <th><?= __('Modified') ?></th>
                                                                <th><?= __('Role Id') ?></th>
                                                                <th class="actions"><?= __('Actions') ?></th>
                            </tr>
                            <?php foreach ($role->users as $users) : ?>
                            <tr>
                                                                <td><?= h($users->id) ?></td>
                                                                <td><?= h($users->first_name) ?></td>
                                                                <td><?= h($users->last_name) ?></td>
                                                                <td><?= h($users->email) ?></td>
                                                                <td><?= h($users->password) ?></td>
                                                                <td><?= h($users->login_attempts) ?></td>
                                                                <td><?= h($users->recovery_token) ?></td>
                                                                <td><?= h($users->token_expiry_date) ?></td>
                                                                <td><?= h($users->enabled) ?></td>
                                                                <td><?= h($users->created) ?></td>
                                                                <td><?= h($users->modified) ?></td>
                                                                <td><?= h($users->role_id) ?></td>
                                                                                                <td class="actions">
                                    <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                    <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    <?php endif; ?>
                </div>
                            </div>
        </div>
        
        <div class="row">
            <div class="d-flex jc-end">
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id), 'class' => ['btn', 'cancel']]); ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->id], ['class' => 'btn']) ?>
            </div>
        </div>
    </div>
</section>