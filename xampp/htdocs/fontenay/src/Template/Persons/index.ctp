<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="persons index large-9 medium-8 columns content">
    <h3><?= __('Persons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('FirstName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('LastName') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BirthDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BirthHour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BirthPlace') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BirthCountry') ?></th>
                <th scope="col"><?= $this->Paginator->sort('BirthTimeZone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DeathDate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DeathHour') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DeathPlace') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DeathCountry') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($persons as $person): ?>
            <tr>
                <td><?= h($person->id) ?></td>
                <td><?= h($person->FirstName) ?></td>
                <td><?= h($person->LastName) ?></td>
                <td><?= h($person->BirthDate) ?></td>
                <td><?= h($person->BirthHour) ?></td>
                <td><?= h($person->BirthPlace) ?></td>
                <td><?= h($person->BirthCountry) ?></td>
                <td><?= $this->Number->format($person->BirthTimeZone) ?></td>
                <td><?= h($person->DeathDate) ?></td>
                <td><?= h($person->DeathHour) ?></td>
                <td><?= h($person->DeathPlace) ?></td>
                <td><?= h($person->DeathCountry) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $person->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $person->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?>
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
