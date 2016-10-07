<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Time Dimention'), ['action' => 'edit', $timeDimention->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Time Dimention'), ['action' => 'delete', $timeDimention->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeDimention->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Time Dimention'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Time Dimention'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="timeDimention view large-9 medium-8 columns content">
    <h3><?= h($timeDimention->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('M Name') ?></th>
            <td><?= h($timeDimention->m_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wd Name') ?></th>
            <td><?= h($timeDimention->wd_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($timeDimention->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Y') ?></th>
            <td><?= $this->Number->format($timeDimention->y) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('M') ?></th>
            <td><?= $this->Number->format($timeDimention->m) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('D') ?></th>
            <td><?= $this->Number->format($timeDimention->d) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Yw') ?></th>
            <td><?= $this->Number->format($timeDimention->yw) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('W') ?></th>
            <td><?= $this->Number->format($timeDimention->w) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Q') ?></th>
            <td><?= $this->Number->format($timeDimention->q) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Wd') ?></th>
            <td><?= $this->Number->format($timeDimention->wd) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($timeDimention->date) ?></td>
        </tr>
    </table>
</div>
