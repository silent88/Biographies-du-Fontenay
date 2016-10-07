<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $person->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $person->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Persons'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="persons form large-9 medium-8 columns content">
    <?= $this->Form->create($person) ?>
    <fieldset>
        <legend><?= __('Edit Person') ?></legend>
        <?php
            echo $this->Form->input('FirstName');
            echo $this->Form->input('LastName');
            echo $this->Form->input('BirthDate', ['empty' => true]);
            echo $this->Form->input('BirthHour');
            echo $this->Form->input('BirthPlace');
            echo $this->Form->input('BirthCountry');
            echo $this->Form->input('BirthTimeZone');
            echo $this->Form->input('DeathDate', ['empty' => true]);
            echo $this->Form->input('DeathHour');
            echo $this->Form->input('DeathPlace');
            echo $this->Form->input('DeathCountry');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
