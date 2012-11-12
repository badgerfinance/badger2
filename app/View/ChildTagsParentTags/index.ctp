<div class="childTagsParentTags index">
	<h2><?php echo __('Child Tags Parent Tags'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('child_tag_id'); ?></th>
			<th><?php echo $this->Paginator->sort('parent_tag_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($childTagsParentTags as $childTagsParentTag): ?>
	<tr>
		<td>
			<?php echo $this->Html->link($childTagsParentTag['Child']['title'], array('controller' => 'tags', 'action' => 'view', $childTagsParentTag['Child']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($childTagsParentTag['Parent']['title'], array('controller' => 'tags', 'action' => 'view', $childTagsParentTag['Parent']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $childTagsParentTag['ChildTagsParentTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $childTagsParentTag['ChildTagsParentTag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $childTagsParentTag['ChildTagsParentTag']['id']), null, __('Are you sure you want to delete # %s?', $childTagsParentTag['ChildTagsParentTag']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Child Tags Parent Tag'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
