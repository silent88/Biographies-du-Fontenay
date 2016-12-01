<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Highlight'), ['action' => 'edit', $highlight->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Highlight'), ['action' => 'delete', $highlight->id], ['confirm' => __('Are you sure you want to delete # {0}?', $highlight->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Highlights'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Highlight'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Layers'), ['controller' => 'Layers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Layer'), ['controller' => 'Layers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="highlights view large-9 medium-8 columns content">
    <h3><?= h($highlight->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($highlight->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($highlight->Name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($highlight->Color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('OrderNo') ?></th>
            <td><?= $this->Number->format($highlight->OrderNo) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Events') ?></h4>
        <?php if (!empty($highlight->events)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('IdEvent') ?></th>
                <th scope="col"><?= __('FuzzyDateBeginDay') ?></th>
                <th scope="col"><?= __('FuzzyDateBeginMonth') ?></th>
                <th scope="col"><?= __('FuzzyDateBeginYear') ?></th>
                <th scope="col"><?= __('FuzzyDateEndDay') ?></th>
                <th scope="col"><?= __('FuzzyDateEndMonth') ?></th>
                <th scope="col"><?= __('FuzzyDateEndYear') ?></th>
                <th scope="col"><?= __('Title') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('ResonanceLevel') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($highlight->events as $events): ?>
            <tr>
                <td><?= h($events->idEvent) ?></td>
                <td><?= h($events->FuzzyDateBeginDay) ?></td>
                <td><?= h($events->FuzzyDateBeginMonth) ?></td>
                <td><?= h($events->FuzzyDateBeginYear) ?></td>
                <td><?= h($events->FuzzyDateEndDay) ?></td>
                <td><?= h($events->FuzzyDateEndMonth) ?></td>
                <td><?= h($events->FuzzyDateEndYear) ?></td>
                <td><?= h($events->Title) ?></td>
                <td><?= h($events->Description) ?></td>
                <td><?= h($events->ResonanceLevel) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->idEvent]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->idEvent]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->idEvent], ['confirm' => __('Are you sure you want to delete # {0}?', $events->idEvent)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Layers') ?></h4>
        <?php if (!empty($highlight->layers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('OrderNo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($highlight->layers as $layers): ?>
            <tr>
                <td><?= h($layers->id) ?></td>
                <td><?= h($layers->Name) ?></td>
                <td><?= h($layers->OrderNo) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Layers', 'action' => 'view', $layers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Layers', 'action' => 'edit', $layers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Layers', 'action' => 'delete', $layers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $layers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
