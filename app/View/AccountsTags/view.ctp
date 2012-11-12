<div class="accountsTags view">
<h2><?php  echo __('Accounts Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountsTag['Account']['title'], array('controller' => 'accounts', 'action' => 'view', $accountsTag['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tag'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountsTag['Tag']['title'], array('controller' => 'tags', 'action' => 'view', $accountsTag['Tag']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accounts Tag'), array('action' => 'edit', $accountsTag['AccountsTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accounts Tag'), array('action' => 'delete', $accountsTag['AccountsTag']['id']), null, __('Are you sure you want to delete # %s?', $accountsTag['AccountsTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounts Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tag'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
