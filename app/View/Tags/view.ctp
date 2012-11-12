<div class="tags view">
<h2><?php  echo __('Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Keyword'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['keyword']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expense'); ?></dt>
		<dd>
			<?php echo h($tag['Tag']['expense']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tag'), array('action' => 'edit', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tag'), array('action' => 'delete', $tag['Tag']['id']), null, __('Are you sure you want to delete # %s?', $tag['Tag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recurring Transactions'), array('controller' => 'recurring_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recurring Transaction'), array('controller' => 'recurring_transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Accounts'); ?></h3>
	<?php if (!empty($tag['Account'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Currency Id'); ?></th>
		<th><?php echo __('Lower Limit'); ?></th>
		<th><?php echo __('Upper Limit'); ?></th>
		<th><?php echo __('Parser'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tag['Account'] as $account): ?>
		<tr>
			<td><?php echo $account['id']; ?></td>
			<td><?php echo $account['title']; ?></td>
			<td><?php echo $account['description']; ?></td>
			<td><?php echo $account['currency_id']; ?></td>
			<td><?php echo $account['lower_limit']; ?></td>
			<td><?php echo $account['upper_limit']; ?></td>
			<td><?php echo $account['parser']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'accounts', 'action' => 'view', $account['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'accounts', 'action' => 'edit', $account['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'accounts', 'action' => 'delete', $account['id']), null, __('Are you sure you want to delete # %s?', $account['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Recurring Transactions'); ?></h3>
	<?php if (!empty($tag['RecurringTransaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Begin Date'); ?></th>
		<th><?php echo __('End Date'); ?></th>
		<th><?php echo __('Repeat Unit'); ?></th>
		<th><?php echo __('Repeat Interval'); ?></th>
		<th><?php echo __('Transaction Partner'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tag['RecurringTransaction'] as $recurringTransaction): ?>
		<tr>
			<td><?php echo $recurringTransaction['id']; ?></td>
			<td><?php echo $recurringTransaction['title']; ?></td>
			<td><?php echo $recurringTransaction['description']; ?></td>
			<td><?php echo $recurringTransaction['account_id']; ?></td>
			<td><?php echo $recurringTransaction['amount']; ?></td>
			<td><?php echo $recurringTransaction['begin_date']; ?></td>
			<td><?php echo $recurringTransaction['end_date']; ?></td>
			<td><?php echo $recurringTransaction['repeat_unit']; ?></td>
			<td><?php echo $recurringTransaction['repeat_interval']; ?></td>
			<td><?php echo $recurringTransaction['transaction_partner']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'recurring_transactions', 'action' => 'view', $recurringTransaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'recurring_transactions', 'action' => 'edit', $recurringTransaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'recurring_transactions', 'action' => 'delete', $recurringTransaction['id']), null, __('Are you sure you want to delete # %s?', $recurringTransaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Recurring Transaction'), array('controller' => 'recurring_transactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($tag['Transaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Account Id'); ?></th>
		<th><?php echo __('Valuta Date'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Recurring Transaction Id'); ?></th>
		<th><?php echo __('Transaction Partner'); ?></th>
		<th><?php echo __('Transferal Source Id'); ?></th>
		<th><?php echo __('Transferal Target Id'); ?></th>
		<th><?php echo __('Parser Text'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tag['Transaction'] as $transaction): ?>
		<tr>
			<td><?php echo $transaction['id']; ?></td>
			<td><?php echo $transaction['title']; ?></td>
			<td><?php echo $transaction['description']; ?></td>
			<td><?php echo $transaction['account_id']; ?></td>
			<td><?php echo $transaction['valuta_date']; ?></td>
			<td><?php echo $transaction['amount']; ?></td>
			<td><?php echo $transaction['recurring_transaction_id']; ?></td>
			<td><?php echo $transaction['transaction_partner']; ?></td>
			<td><?php echo $transaction['transferal_source_id']; ?></td>
			<td><?php echo $transaction['transferal_target_id']; ?></td>
			<td><?php echo $transaction['parser_text']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transactions', 'action' => 'view', $transaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transactions', 'action' => 'edit', $transaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transactions', 'action' => 'delete', $transaction['id']), null, __('Are you sure you want to delete # %s?', $transaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tags'); ?></h3>
	<?php if (!empty($tag['Parent'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Keyword'); ?></th>
		<th><?php echo __('Expense'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tag['Parent'] as $parent): ?>
		<tr>
			<td><?php echo $parent['id']; ?></td>
			<td><?php echo $parent['title']; ?></td>
			<td><?php echo $parent['description']; ?></td>
			<td><?php echo $parent['keyword']; ?></td>
			<td><?php echo $parent['expense']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $parent['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $parent['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $parent['id']), null, __('Are you sure you want to delete # %s?', $parent['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Parent'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Tags'); ?></h3>
	<?php if (!empty($tag['Child'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Title'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Keyword'); ?></th>
		<th><?php echo __('Expense'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($tag['Child'] as $child): ?>
		<tr>
			<td><?php echo $child['id']; ?></td>
			<td><?php echo $child['title']; ?></td>
			<td><?php echo $child['description']; ?></td>
			<td><?php echo $child['keyword']; ?></td>
			<td><?php echo $child['expense']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'tags', 'action' => 'view', $child['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'tags', 'action' => 'edit', $child['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'tags', 'action' => 'delete', $child['id']), null, __('Are you sure you want to delete # %s?', $child['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
