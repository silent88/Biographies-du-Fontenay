<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Events Highlight'), ['action' => 'edit', $eventsHighlight->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Events Highlight'), ['action' => 'delete', $eventsHighlight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsHighlight->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events Highlights'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Events Highlight'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Highlights'), ['controller' => 'Highlights', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Highlight'), ['controller' => 'Highlights', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventsHighlights view large-9 medium-8 columns content">
    <h3><?= h($eventsHighlight->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $eventsHighlight->has('event') ? $this->Html->link($eventsHighlight->event->idEvent, ['controller' => 'Events', 'action' => 'view', $eventsHighlight->event->idEvent]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Highlight') ?></th>
            <td><?= $eventsHighlight->has('highlight') ? $this->Html->link($eventsHighlight->highlight->id, ['controller' => 'Highlights', 'action' => 'view', $eventsHighlight->highlight->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($eventsHighlight->id) ?></td>
        </tr>
    </table>
</div>
