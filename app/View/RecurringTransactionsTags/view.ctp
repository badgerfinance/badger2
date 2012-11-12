<div class="recurringTransactionsTags view">
<h2><?php  echo __('Recurring Transactions Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Recurring Transaction'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recurringTransactionsTag['RecurringTransaction']['title'], array('controller' => 'recurring_transactions', 'action' => 'view', $recurringTransactionsTag['RecurringTransaction']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($recurringTransactionsTag['Tag']['title'], array('controller' => 'tags', 'action' => 'view', $recurringTransactionsTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recurring Transactions Tag'), array('action' => 'edit', $recurringTransactionsTag['RecurringTransactionsTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Recurring Transactions Tag'), array('action' => 'delete', $recurringTransactionsTag['RecurringTransactionsTag']['id']), null, __('Are you sure you want to delete # %s?', $recurringTransactionsTag['RecurringTransactionsTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurring Transactions Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurring Transactions Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurring Transactions'), array('controller' => 'recurring_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurring Transaction'), array('controller' => 'recurring_transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
