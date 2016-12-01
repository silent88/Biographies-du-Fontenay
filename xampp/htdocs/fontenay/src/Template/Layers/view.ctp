<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Layer'), ['action' => 'edit', $layer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Layer'), ['action' => 'delete', $layer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Layers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Layer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Highlights'), ['controller' => 'Highlights', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Highlight'), ['controller' => 'Highlights', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="layers view large-9 medium-8 columns content">
    <h3><?= h($layer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($layer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($layer->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OrderNo') ?></th>
            <td><?= $this->Number->format($layer->OrderNo) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Highlights') ?></h4>
        <?php if (!empty($layer->highlights)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Color') ?></th>
                <th scope="col"><?= __('OrderNo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($layer->highlights as $highlights): ?>
            <tr>
                <td><?= h($highlights->id) ?></td>
                <td><?= h($highlights->Name) ?></td>
                <td><?= h($highlights->Color) ?></td>
                <td><?= h($highlights->OrderNo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Highlights', 'action' => 'view', $highlights->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Highlights', 'action' => 'edit', $highlights->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Highlights', 'action' => 'delete', $highlights->id], ['confirm' => __('Are you sure you want to delete # {0}?', $highlights->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
