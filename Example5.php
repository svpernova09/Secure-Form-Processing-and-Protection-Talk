<?php
$escaper = new Zend\Escaper\Escaper('utf-8');
?>

<h4>Project</h4>

<div class="well clearfix">
	<div class="col-md-8">
		<p><strong>Title</strong>:
			<?php echo $escaper->escapeHtml($project->title); ?></p>
		<p><strong>Description</strong>:
			<?php echo $escaper->escapeHtml($project->description); ?></p>
		<p><strong>Status</strong>:
			<?php echo $escaper->escapeHtml($project->status.title); ?></p>
		<p><strong>Priority</strong>:
			<?php echo $escaper->escapeHtml($project->priority.title); ?></p>
		<p><strong>Owner</strong>:
			<?php echo $escaper->escapeHtml($project->owner.username); ?></p>
	</div>




