<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>


  <div class="title">
  	<?php echo $node->title; ?>
  </div>
  <div class="body">
  	<?php echo $node->body['und'][0]['value']; ?>
  </div>
</article>
