<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->idEvent],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->idEvent)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
        	echo $this->Form->input('Title');
			echo $this->Form->input('Description', array('type' =>'textarea'));
			
			echo "<div class='fuzzydatebox'>";
            echo $this->Form->input('FuzzyDateBeginDay');
            echo $this->Form->input('FuzzyDateBeginMonth');
			echo $this->Form->input('FuzzyDateBeginYear');
			echo "</div>";
			
			echo "<div class='fuzzydatebox'>";
            echo $this->Form->input('FuzzyDateEndDay');
            echo $this->Form->input('FuzzyDateEndMonth');
            echo $this->Form->input('FuzzyDateEndYear');
            echo "</div>";
			
            echo $this->Form->input('ResonanceLevel', array(
				'options' => array('Volonté' => 'Volonté', 'Consience' => 'Consience', 'Sentiment' => 'Sentiment',
									 'Corps Physique' => 'Corps Physique', 'Corps Eterique' => 'Corps Eterique', 'Corps Astrale' => 'Corps Astrale', 'Corps de Vie' => 'Corps de Vie',
									 'Psychisme' => 'Psychisme', 'Soi-Esprit' => 'Soi-Esprit', 'Je' => 'Je', 'Atma' => 'Atma', 'Buddhi' => 'Buddhi'
									),
				'empty' => ' ',
				'default' => 'empty'
			));
            echo $this->Form->input('person_id');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
