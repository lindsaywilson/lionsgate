
<?php $base = 'http://lgrmg.ca' ?>

<div id="sharing">
      	
        <div class="fb-share-button" data-href="" data-type="button"></div>
        
        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="none">Tweet</a>
        
        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php print $base.$node_url; ?>&title=<?php print $title; ?>&summary=&source=Lions%20Gate%20Investigations" target="_new"><img src="/<?php print path_to_theme(); ?>/images/share_linkedin.png" alt="LinkedIn+" title="LinkedIn"/></a>
        
        <a href="#" onclick="openWindow('https://plus.google.com/share?url=<?php print $base.$node_url; ?>'); return false;" ><img src="/<?php print path_to_theme(); ?>/images/share_gplus.png" alt="Google+" title="Google+"/></a>
        
</div>