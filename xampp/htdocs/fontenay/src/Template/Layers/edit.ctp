<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $layer->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $layer->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Layers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Highlights'), ['controller' => 'Highlights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Highlight'), ['controller' => 'Highlights', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="layers form large-9 medium-8 columns content">
    <?= $this->Form->create($layer) ?>
    <fieldset>
        <legend><?= __('Edit Layer') ?></legend>
        <?php
            echo $this->Form->input('Name');
            echo $this->Form->input('OrderNo');
            echo $this->Form->input('highlights._ids', ['options' => $highlights]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
