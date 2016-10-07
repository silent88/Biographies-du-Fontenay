<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Highlights Layer'), ['action' => 'edit', $highlightsLayer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Highlights Layer'), ['action' => 'delete', $highlightsLayer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $highlightsLayer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Highlights Layers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Highlights Layer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Layers'), ['controller' => 'Layers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Layer'), ['controller' => 'Layers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Highlights'), ['controller' => 'Highlights', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Highlight'), ['controller' => 'Highlights', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="highlightsLayers view large-9 medium-8 columns content">
    <h3><?= h($highlightsLayer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Layer') ?></th>
            <td><?= $highlightsLayer->has('layer') ? $this->Html->link($highlightsLayer->layer->id, ['controller' => 'Layers', 'action' => 'view', $highlightsLayer->layer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Highlight') ?></th>
            <td><?= $highlightsLayer->has('highlight') ? $this->Html->link($highlightsLayer->highlight->id, ['controller' => 'Highlights', 'action' => 'view', $highlightsLayer->highlight->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($highlightsLayer->id) ?></td>
        </tr>
    </table>
</div>
