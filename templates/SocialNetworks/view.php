<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SocialNetwork $socialNetwork
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Social Network'), ['action' => 'edit', $socialNetwork->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Social Network'), ['action' => 'delete', $socialNetwork->id], ['confirm' => __('Are you sure you want to delete # {0}?', $socialNetwork->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Social Networks'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Social Network'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="socialNetworks view content">
            <h3><?= h($socialNetwork->link) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $socialNetwork->hasValue('user') ? $this->Html->link($socialNetwork->user->name, ['controller' => 'Users', 'action' => 'view', $socialNetwork->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Link') ?></th>
                    <td><?= h($socialNetwork->link) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($socialNetwork->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($socialNetwork->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($socialNetwork->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
