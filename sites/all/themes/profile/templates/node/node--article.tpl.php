<?php 

$node_wrapper=entity_metadata_wrapper('node', $node);
?>

<section class="<?php echo $classes; ?>">
	<div class="body">
		<?php print( $node_wrapper->body->value()['value']); ?>
	</div>
</section>