<div class="tagsTransactions view">
<h2><?php  echo __('Tags Transaction'); ?></h2>
	<dl>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tagsTransaction['Tag']['title'], array('controller' => 'tags', 'action' => 'view', $tagsTransaction['Tag']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Transaction'); ?></dt>
		<dd>
			<?php echo $this->Html->link($tagsTransaction['Transaction']['title'], array('controller' => 'transactions', 'action' => 'view', $tagsTransaction['Transaction']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tags Transaction'), array('action' => 'edit', $tagsTransaction['TagsTransaction']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Tags Transaction'), array('action' => 'delete', $tagsTransaction['TagsTransaction']['id']), null, __('Are you sure you want to delete # %s?', $tagsTransaction['TagsTransaction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags Transactions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tags Transaction'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
