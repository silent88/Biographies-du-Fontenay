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
                <th scope="col"><?= $this->Paginator->sort('FuzzyDateBeginDay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FuzzyDateBeginMonth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FuzzyDateBeginYear') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FuzzyDateEndDay') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FuzzyDateEndMonth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FuzzyDateEndYear') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ResonanceLevel') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->idEvent) ?></td>
                <td><?= h($event->FuzzyDateBeginDay) ?></td>
                <td><?= h($event->FuzzyDateBeginMonth) ?></td>
                <td><?= h($event->FuzzyDateBeginYear) ?></td>
                <td><?= h($event->FuzzyDateEndDay) ?></td>
                <td><?= h($event->FuzzyDateEndMonth) ?></td>
                <td><?= h($event->FuzzyDateEndYear) ?></td>
                <td><?= h($event->Title) ?></td>
                <td><?= h($event->ResonanceLevel) ?></td>
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
