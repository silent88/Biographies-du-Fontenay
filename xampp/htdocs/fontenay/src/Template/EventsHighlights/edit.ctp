<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $eventsHighlight->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $eventsHighlight->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Events Highlights'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Highlights'), ['controller' => 'Highlights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Highlight'), ['controller' => 'Highlights', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventsHighlights form large-9 medium-8 columns content">
    <?= $this->Form->create($eventsHighlight) ?>
    <fieldset>
        <legend><?= __('Edit Events Highlight') ?></legend>
        <?php
            echo $this->Form->input('event_id', ['options' => $events, 'empty' => true]);
            echo $this->Form->input('highlight_id', ['options' => $highlights, 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
