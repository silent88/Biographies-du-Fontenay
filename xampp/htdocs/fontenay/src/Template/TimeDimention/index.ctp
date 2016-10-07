<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Time Dimention'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="timeDimention index large-9 medium-8 columns content">
    <h3><?= __('Time Dimention') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('y') ?></th>
                <th scope="col"><?= $this->Paginator->sort('m') ?></th>
                <th scope="col"><?= $this->Paginator->sort('d') ?></th>
                <th scope="col"><?= $this->Paginator->sort('yw') ?></th>
                <th scope="col"><?= $this->Paginator->sort('w') ?></th>
                <th scope="col"><?= $this->Paginator->sort('q') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wd') ?></th>
                <th scope="col"><?= $this->Paginator->sort('m_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('wd_name') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($timeDimention as $timeDimention): ?>
            <tr>
                <td><?= h($timeDimention->date) ?></td>
                <td><?= $this->Number->format($timeDimention->id) ?></td>
                <td><?= $this->Number->format($timeDimention->y) ?></td>
                <td><?= $this->Number->format($timeDimention->m) ?></td>
                <td><?= $this->Number->format($timeDimention->d) ?></td>
                <td><?= $this->Number->format($timeDimention->yw) ?></td>
                <td><?= $this->Number->format($timeDimention->w) ?></td>
                <td><?= $this->Number->format($timeDimention->q) ?></td>
                <td><?= $this->Number->format($timeDimention->wd) ?></td>
                <td><?= h($timeDimention->m_name) ?></td>
                <td><?= h($timeDimention->wd_name) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $timeDimention->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $timeDimention->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $timeDimention->id], ['confirm' => __('Are you sure you want to delete # {0}?', $timeDimention->id)]) ?>
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
