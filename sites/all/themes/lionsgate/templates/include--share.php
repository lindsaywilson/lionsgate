
<?php $path = 'http://lgrmg.ca'.$_SERVER['REQUEST_URI'] ?>

<div id="sharing">
        
        <a href="#" onclick="window.open('https://www.facebook.com/dialog/feed?app_id=165166353693240&display=popup&link=<?php print $path; ?>&name=<?php print $title; ?>&redirect_uri=http://lgrmg.ca/close.html', '', 'height=236, width=516');"><img src="/<?php print path_to_theme(); ?>/images/share_facebook.png" alt="Facebook" title="Facebook"/></a>
        
        <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en" data-count="none">Tweet</a>
        
        <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php print $path; ?>&title=<?php print $title; ?>&summary=&source=Lions%20Gate%20Investigations" target="_new"><img src="/<?php print path_to_theme(); ?>/images/share_linkedin.png" alt="LinkedIn" title="LinkedIn"/></a>
        
        <a href="#" onclick="openWindow('https://plus.google.com/share?url=<?php print $base.$node_url; ?>'); return false;" ><img src="/<?php print path_to_theme(); ?>/images/share_gplus.png" alt="Google+" title="Google+"/></a>
        
</div>