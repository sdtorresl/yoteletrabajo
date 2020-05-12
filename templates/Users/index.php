<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>

<section class="users index card">
    <div class="card-content">
        <span class="card-title"><?=__('Users') ?></span>

        <table class="centered responsive-table">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('login_attempts') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('recovery_token') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('token_expiry_date') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('enabled') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('role_id') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                                                                                <td><?= $this->Number->format($user->id) ?></td>
                                                                                            <td><?= h($user->first_name) ?></td>
                                                                                            <td><?= h($user->last_name) ?></td>
                                                                                            <td><?= h($user->email) ?></td>
                                                                                            <td><?= h($user->password) ?></td>
                                                                                            <td><?= $this->Number->format($user->login_attempts) ?></td>
                                                                                            <td><?= h($user->recovery_token) ?></td>
                                                                                            <td><?= h($user->token_expiry_date) ?></td>
                                                                                            <td><?= h($user->enabled) ?></td>
                                                                                            <td><?= h($user->created) ?></td>
                                                                                            <td><?= h($user->modified) ?></td>
                                                                            <td><?= $user->has('role') ? $this->Html->link($user->role->name, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                            
                    <td class="actions">
                        <?= $this->Html->link('<i class="fal fa-eye"></i>', ['action' => 'view', $user->id], ['escape' => false, 'title' => __('View')] ) ?>
                        <?= $this->Html->link('<i class="fal fa-edit"></i>', ['action' => 'edit', $user->id], ['escape' => false, 'title' => __('Edit')] ) ?>
                        <?= $this->Form->postLink('<i class="fal fa-trash"></i>', ['action' => 'delete', $user->id], [
                            'confirm' => __('Are you sure you want to delete # {0}?', $user->id),
                            'escape' => false,
                            'class' => 'delete',
                            'title' => __('Delete')]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        
        <div class="paginator center-align">
            <ul class="pagination">
                <?= $this->Paginator->first('<<') ?>
                <?= $this->Paginator->prev('<') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('>') ?>
                <?= $this->Paginator->last('>>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>
</section>