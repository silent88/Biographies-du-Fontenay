<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Time Dimention'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="timeDimention form large-9 medium-8 columns content">
    <?= $this->Form->create($timeDimention) ?>
    <fieldset>
        <legend><?= __('Add Time Dimention') ?></legend>
        <?php
            echo $this->Form->input('date', ['empty' => true]);
            echo $this->Form->input('y');
            echo $this->Form->input('m');
            echo $this->Form->input('d');
            echo $this->Form->input('yw');
            echo $this->Form->input('w');
            echo $this->Form->input('q');
            echo $this->Form->input('wd');
            echo $this->Form->input('m_name');
            echo $this->Form->input('wd_name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
