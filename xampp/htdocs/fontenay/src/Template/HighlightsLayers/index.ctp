<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Highlights Layer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Layers'), ['controller' => 'Layers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layer'), ['controller' => 'Layers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Highlights'), ['controller' => 'Highlights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Highlight'), ['controller' => 'Highlights', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="highlightsLayers index large-9 medium-8 columns content">
    <h3><?= __('Highlights Layers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('layer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('highlight_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($highlightsLayers as $highlightsLayer): ?>
            <tr>
                <td><?= $this->Number->format($highlightsLayer->id) ?></td>
                <td><?= $highlightsLayer->has('layer') ? $this->Html->link($highlightsLayer->layer->id, ['controller' => 'Layers', 'action' => 'view', $highlightsLayer->layer->id]) : '' ?></td>
                <td><?= $highlightsLayer->has('highlight') ? $this->Html->link($highlightsLayer->highlight->id, ['controller' => 'Highlights', 'action' => 'view', $highlightsLayer->highlight->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $highlightsLayer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $highlightsLayer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $highlightsLayer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $highlightsLayer->id)]) ?>
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
