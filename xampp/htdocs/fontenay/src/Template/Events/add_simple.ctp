<?php $this->layout = 'simple'; ?>
<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Add Event') ?></legend>
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
				'options' => array('Volonté' => 'Volonté', 'Consience' => 'Consience', 'Sentiment' => 'Sentiment'),
				'empty' => ' ',
				'default' => 'empty'
			));
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
