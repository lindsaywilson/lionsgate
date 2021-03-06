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

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || $title): ?>
    <header>
      <?php print render($title_prefix); ?>
        <h1<?php print $title_attributes; ?>><?php print $title; ?></h1>
      <?php print render($title_suffix); ?>
      
      <?php include_once DRUPAL_ROOT . '/' . path_to_theme() . '/templates/include--share.php'; ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
	if(isset($node->field_page_heading['und'])){
		print '<h2>'.$node->field_page_heading['und'][0]['value'].'</h2>';
	}
	print render($content);
  ?>
  
  <?php print render($content['links']); ?>
  
  <?php include_once DRUPAL_ROOT . '/' . path_to_theme() . '/templates/include--share.php'; ?>

  <?php print render($content['comments']); ?>

</article>
