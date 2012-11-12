<div class="recurringTransactions index">
	<h2><?php echo __('Recurring Transactions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('begin_date'); ?></th>
			<th><?php echo $this->Paginator->sort('end_date'); ?></th>
			<th><?php echo $this->Paginator->sort('repeat_unit'); ?></th>
			<th><?php echo $this->Paginator->sort('repeat_interval'); ?></th>
			<th><?php echo $this->Paginator->sort('transaction_partner'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($recurringTransactions as $recurringTransaction): ?>
	<tr>
		<td><?php echo h($recurringTransaction['RecurringTransaction']['id']); ?>&nbsp;</td>
		<td><?php echo h($recurringTransaction['RecurringTransaction']['title']); ?>&nbsp;</td>
		<td><?php echo h($recurringTransaction['RecurringTransaction']['description']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recurringTransaction['Account']['title'], array('controller' => 'accounts', 'action' => 'view', $recurringTransaction['Account']['id'])); ?>
		</td>
		<td><?php echo h($recurringTransaction['RecurringTransaction']['amount']); ?>&nbsp;</td>
		<td><?php echo h($recurringTransaction['RecurringTransaction']['begin_date']); ?>&nbsp;</td>
		<td><?php echo h($recurringTransaction['RecurringTransaction']['end_date']); ?>&nbsp;</td>
		<td><?php echo h($recurringTransaction['RecurringTransaction']['repeat_unit']); ?>&nbsp;</td>
		<td><?php echo h($recurringTransaction['RecurringTransaction']['repeat_interval']); ?>&nbsp;</td>
		<td><?php echo h($recurringTransaction['RecurringTransaction']['transaction_partner']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $recurringTransaction['RecurringTransaction']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $recurringTransaction['RecurringTransaction']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $recurringTransaction['RecurringTransaction']['id']), null, __('Are you sure you want to delete # %s?', $recurringTransaction['RecurringTransaction']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Recurring Transaction'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
