<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\SocialNetwork> $socialNetworks
 */
?>
<div class="socialNetworks index content">
    <?= $this->Html->link(__('New Social Network'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Social Networks') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('link') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($socialNetworks as $socialNetwork): ?>
                <tr>
                    <td><?= $this->Number->format($socialNetwork->id) ?></td>
                    <td><?= $socialNetwork->hasValue('user') ? $this->Html->link($socialNetwork->user->name, ['controller' => 'Users', 'action' => 'view', $socialNetwork->user->id]) : '' ?></td>
                    <td><?= h($socialNetwork->link) ?></td>
                    <td><?= h($socialNetwork->created) ?></td>
                    <td><?= h($socialNetwork->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $socialNetwork->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $socialNetwork->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $socialNetwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialNetwork->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
