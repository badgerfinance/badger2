<div class="settings view">
<h2><?php  echo __('Setting'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Level'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['level']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Key'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['key']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($setting['Setting']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Setting'), array('action' => 'edit', $setting['Setting']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Setting'), array('action' => 'delete', $setting['Setting']['id']), null, __('Are you sure you want to delete # %s?', $setting['Setting']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Settings'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setting'), array('action' => 'add')); ?> </li>
	</ul>
</div>
