<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Highlight'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Layers'), ['controller' => 'Layers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layer'), ['controller' => 'Layers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="highlights index large-9 medium-8 columns content">
    <h3><?= __('Highlights') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('OrderNo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($highlights as $highlight): ?>
            <tr>
                <td><?= h($highlight->id) ?></td>
                <td><?= h($highlight->Name) ?></td>
                <td><?= h($highlight->Color) ?></td>
                <td><?= $this->Number->format($highlight->OrderNo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $highlight->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $highlight->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $highlight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $highlight->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
