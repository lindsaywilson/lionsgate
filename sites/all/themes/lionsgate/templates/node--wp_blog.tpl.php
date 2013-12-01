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
       
       <?php if($view_mode == 'full'): ?>
           <h1>Blog</h1>
           <h2<?php print $title_attributes; ?>><?php print $title; ?></h2>
       <?php else: ?>
       <h2<?php print $title_attributes;?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
       <?php endif; ?>
       
       <?php if($view_mode == 'full'): ?>
			<?php include_once DRUPAL_ROOT . '/' . path_to_theme() . '/templates/include--share.php'; ?>
       <?php endif; ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php
		  	$user = user_load($node->uid);
			$firstname = $user->field_firstname['und'][0]['value'];
			$lastname = $user->field_lastname['und'][0]['value'];
		  ?>
          <?php print format_date($node->created, 'custom', 'F jS, Y g:ia'); ?> by <?php print $firstname.' '.$lastname; ?>
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
	print render($content);
  ?>
 
  <?php if($view_mode == 'full'){
  	print render($content['links']); 
  } ?>

  <?php print render($content['comments']); ?>

</article>
