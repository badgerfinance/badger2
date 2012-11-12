<div class="accountProperties view">
<h2><?php  echo __('Account Property'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accountProperty['AccountProperty']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountProperty['Account']['title'], array('controller' => 'accounts', 'action' => 'view', $accountProperty['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Key'); ?></dt>
		<dd>
			<?php echo h($accountProperty['AccountProperty']['key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($accountProperty['AccountProperty']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account Property'), array('action' => 'edit', $accountProperty['AccountProperty']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Account Property'), array('action' => 'delete', $accountProperty['AccountProperty']['id']), null, __('Are you sure you want to delete # %s?', $accountProperty['AccountProperty']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Properties'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Property'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>
