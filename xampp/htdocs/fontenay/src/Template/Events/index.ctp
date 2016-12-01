<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events index large-9 medium-8 columns content">
    <h3><?= __('Events') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('idEvent') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FuzzyDateBegin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FuzzyDateEnd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ResonanceLevel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Age') ?></th>
                <th scope="col"><?= $this->Paginator->sort('person_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= h($event->idEvent) ?></td>
                <td><?= h($event->Title) ?></td>
                <td><?= h($event->FuzzyDateBegin) ?></td>
                <td><?= h($event->FuzzyDateEnd) ?></td>
                <td><?= h($event->ResonanceLevel) ?></td>
                <td><?= h($event->Age) ?></td>
                <td><?= h($event->person_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $event->idEvent]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->idEvent]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->idEvent], ['confirm' => __('Are you sure you want to delete # {0}?', $event->idEvent)]) ?>
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
