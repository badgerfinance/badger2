<div class="settings index">
	<h2><?php echo __('Settings'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('level'); ?></th>
			<th><?php echo $this->Paginator->sort('key'); ?></th>
			<th><?php echo $this->Paginator->sort('value'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($settings as $setting): ?>
	<tr>
		<td><?php echo h($setting['Setting']['id']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['level']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['key']); ?>&nbsp;</td>
		<td><?php echo h($setting['Setting']['value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $setting['Setting']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $setting['Setting']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $setting['Setting']['id']), null, __('Are you sure you want to delete # %s?', $setting['Setting']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Setting'), array('action' => 'add')); ?></li>
	</ul>
</div>
