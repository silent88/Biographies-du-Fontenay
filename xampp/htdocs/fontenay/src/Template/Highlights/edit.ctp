<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $highlight->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $highlight->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Highlights'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Layers'), ['controller' => 'Layers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Layer'), ['controller' => 'Layers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="highlights form large-9 medium-8 columns content">
    <?= $this->Form->create($highlight) ?>
    <fieldset>
        <legend><?= __('Edit Highlight') ?></legend>
        <?php
            echo $this->Form->input('Name');
            echo $this->Form->label('Color');
            echo $this->Form->radio('Color',
											[
										        ['value' => '5484ed', 'text' => 'Bold Blue', 'style' => 'color:#5484ed;'],
										        ['value' => 'a4bdfc', 'text' => 'Blue', 'style' => 'color:#a4bdfc;'],
										        ['value' => '46d6db', 'text' => 'Turquoise', 'style' => 'color:#46d6db;'],
										        ['value' => '7ae7bf', 'text' => 'Green', 'style' => 'color:#7ae7bf;'],
										        ['value' => '51b749', 'text' => 'Bold Green', 'style' => 'color:#51b749;'],
										        ['value' => 'fbd75b', 'text' => 'Yellow', 'style' => 'color:#fbd75b;'],
										        ['value' => 'ffb878', 'text' => 'Orange', 'style' => 'color:#ffb878;'],
										        ['value' => 'ff887c', 'text' => 'Red', 'style' => 'color:#ff887c;'],
										        ['value' => 'dc2127', 'text' => 'Bold Red', 'style' => 'color:#dc2127;'],
										        ['value' => 'dbadff', 'text' => 'Purple', 'style' => 'color:#dbadff;'],
										        ['value' => 'cca6ac', 'text' => 'Pink', 'style' => 'color:#cca6ac;'],
										        ['value' => 'e1e1e1', 'text' => 'Gray', 'style' => 'color:#e1e1e1;']
											]
									);
            echo $this->Form->input('OrderNo');
            echo $this->Form->input('events._ids', ['options' => $events]);
            echo $this->Form->input('layers._ids', ['options' => $layers]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
