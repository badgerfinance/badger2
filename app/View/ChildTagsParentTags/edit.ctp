<div class="childTagsParentTags form">
<?php echo $this->Form->create('ChildTagsParentTag'); ?>
	<fieldset>
		<legend><?php echo __('Edit Child Tags Parent Tag'); ?></legend>
	<?php
		echo $this->Form->input('child_tag_id');
		echo $this->Form->input('parent_tag_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ChildTagsParentTag.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ChildTagsParentTag.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Child Tags Parent Tags'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Tags'), array('controller' => 'tags', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent'), array('controller' => 'tags', 'action' => 'add')); ?> </li>
	</ul>
</div>
