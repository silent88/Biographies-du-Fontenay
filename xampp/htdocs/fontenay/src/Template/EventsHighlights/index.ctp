<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Events Highlight'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Highlights'), ['controller' => 'Highlights', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Highlight'), ['controller' => 'Highlights', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventsHighlights index large-9 medium-8 columns content">
    <h3><?= __('Events Highlights') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('highlight_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventsHighlights as $eventsHighlight): ?>
            <tr>
                <td><?= $this->Number->format($eventsHighlight->id) ?></td>
                <td><?= $eventsHighlight->has('event') ? $this->Html->link($eventsHighlight->event->idEvent, ['controller' => 'Events', 'action' => 'view', $eventsHighlight->event->idEvent]) : '' ?></td>
                <td><?= $eventsHighlight->has('highlight') ? $this->Html->link($eventsHighlight->highlight->id, ['controller' => 'Highlights', 'action' => 'view', $eventsHighlight->highlight->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $eventsHighlight->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eventsHighlight->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eventsHighlight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsHighlight->id)]) ?>
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
