<?php
/**
 * @file
 * Returns the HTML for a single Drupal page.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728148
 */
?>
<?php print render($page['content']['metatags']); ?>
<div id="page">

  <header class="header" id="header" role="banner">
  <div class="inner">
  <div class="wrap">
	
    <?php if (!$is_front): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" class="logo-desktop" />
      <img src="/<?php print path_to_theme().'/images/logo_mobile.png' ?>" alt="<?php print t('Home'); ?>" class="logo-mobile" />
      </a>
      <?php endif; ?>
    
    <?php if (!$is_front): ?>
		<div class="header__site-slogan" id="site-slogan">
			<div class="inner"><?php print $site_slogan; ?></div>
        </div>
	<?php endif; ?>
    
    <div id="navigation" class="clearfix">
		<div id="menu-toggle"><a href="#" class="open">Menu</a></div>
        <nav id="main-menu" role="navigation" tabindex="-1">
			<?php
            $block = module_invoke('menu_block', 'block_view', 2);
        	print render($block['content']);
			?>
        </nav>

      <?php print render($page['navigation']); ?>

    </div>

  </div>
  </div>
  </header>

  <div id="main">
  <div class="inner">
  <div class="wrap">
  
    <div id="content" class="column" role="main">
    <div class="inner">
      <a id="main-content"></a>
      <?php print $messages; ?>
      <?php print render($tabs); ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif; ?>
      <?php if ($is_front): ?>
      	<div class="logo-slogan">
        	<div id="logo-home"><img src="/<?php print path_to_theme().'/images/logo_home.png' ?>" /></div>
			<div id="home-slogan" ><?php print $site_slogan; ?></div>
        </div>
        <?php
		$block = module_invoke('views', 'block_view', 'home_promo_slides-block');
        print render($block);
		?>
	  <?php else: ?>
      <?php print render($page['content']); ?>
      <?php endif; ?>
      <?php print $feed_icons; ?>
    </div>
    </div><!-- /#content -->

  </div>
  </div>
  </div><!-- /#main -->
  
  <footer id="footer">
  <div class="wrap">
  <div class="inner">
    <?php print render($page['contact']); ?>
	<?php print render($page['footer']); ?>
    <div id="copyright">Copyright <?php print date("Y"); ?> Lions Gate Risk Management Inc  All Rights Reserved</div>
  </div>
  </div>
  </footer>

</div>

