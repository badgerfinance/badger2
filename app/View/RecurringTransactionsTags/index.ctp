<div class="recurringTransactionsTags index">
	<h2><?php echo __('Recurring Transactions Tags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('recurring_transaction_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tag_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($recurringTransactionsTags as $recurringTransactionsTag): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($recurringTransactionsTag['RecurringTransaction']['title'], array('controller' => 'recurring_transactions', 'action' => 'view', $recurringTransactionsTag['RecurringTransaction']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($recurringTransactionsTag['Tag']['title'], array('controller' => 'tags', 'action' => 'view', $recurringTransactionsTag['Tag']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recurringTransactionsTag['RecurringTransactionsTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recurringTransactionsTag['RecurringTransactionsTag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recurringTransactionsTag['RecurringTransactionsTag']['id']), null, __('Are you sure you want to delete # %s?', $recurringTransactionsTag['RecurringTransactionsTag']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Recurring Transactions Tag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Recurring Transactions'), array('controller' => 'recurring_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurring Transaction'), array('controller' => 'recurring_transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
