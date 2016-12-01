<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Highlights'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Layers'), ['controller' => 'Layers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layer'), ['controller' => 'Layers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="highlights form large-9 medium-8 columns content">
    <?= $this->Form->create($highlight) ?>
    <fieldset>
        <legend><?= __('Add Highlight') ?></legend>
        <?php
            echo $this->Form->input('Name');
            echo $this->Form->input('Color');
            echo $this->Form->input('OrderNo');
            echo $this->Form->input('events._ids', ['options' => $events]);
            echo $this->Form->input('layers._ids', ['options' => $layers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
