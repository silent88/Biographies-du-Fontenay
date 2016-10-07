<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Person'), ['action' => 'edit', $person->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Person'), ['action' => 'delete', $person->id], ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Persons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Person'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="persons view large-9 medium-8 columns content">
    <h3><?= h($person->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('FirstName') ?></th>
            <td><?= h($person->FirstName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('LastName') ?></th>
            <td><?= h($person->LastName) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthHour') ?></th>
            <td><?= h($person->BirthHour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthPlace') ?></th>
            <td><?= h($person->BirthPlace) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthCountry') ?></th>
            <td><?= h($person->BirthCountry) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DeathHour') ?></th>
            <td><?= h($person->DeathHour) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DeathPlace') ?></th>
            <td><?= h($person->DeathPlace) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DeathCountry') ?></th>
            <td><?= h($person->DeathCountry) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($person->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthTimeZone') ?></th>
            <td><?= $this->Number->format($person->BirthTimeZone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('BirthDate') ?></th>
            <td><?= h($person->BirthDate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DeathDate') ?></th>
            <td><?= h($person->DeathDate) ?></td>
        </tr>
    </table>
</div>
