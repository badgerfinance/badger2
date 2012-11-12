<div class="childTagsParentTags view">
<h2><?php  echo __('Child Tags Parent Tag'); ?></h2>
	<dl>
		<dt><?php echo __('Child'); ?></dt>
		<dd>
			<?php echo $this->Html->link($childTagsParentTag['Child']['title'], array('controller' => 'tags', 'action' => 'view', $childTagsParentTag['Child']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent'); ?></dt>
		<dd>
			<?php echo $this->Html->link($childTagsParentTag['Parent']['title'], array('controller' => 'tags', 'action' => 'view', $childTagsParentTag['Parent']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Child Tags Parent Tag'), array('action' => 'edit', $childTagsParentTag['ChildTagsParentTag']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Child Tags Parent Tag'), array('action' => 'delete', $childTagsParentTag['ChildTagsParentTag']['id']), null, __('Are you sure you want to delete # %s?', $childTagsParentTag['ChildTagsParentTag']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Child Tags Parent Tags'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Child Tags Parent Tag'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
