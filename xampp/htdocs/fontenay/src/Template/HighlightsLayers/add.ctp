<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Highlights Layers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Layers'), ['controller' => 'Layers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layer'), ['controller' => 'Layers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Highlights'), ['controller' => 'Highlights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Highlight'), ['controller' => 'Highlights', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="highlightsLayers form large-9 medium-8 columns content">
    <?= $this->Form->create($highlightsLayer) ?>
    <fieldset>
        <legend><?= __('Add Highlights Layer') ?></legend>
        <?php
            echo $this->Form->input('layer_id', ['options' => $layers, 'empty' => true]);
            echo $this->Form->input('highlight_id', ['options' => $highlights, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
