<?php

class UvaOmekaModsPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array(
        'public_head'
    );

    public function hookPublicHead($args)
    {
        $html = '<script src="//use.typekit.net/tgy5tlj.js"></script>'
              . '<script>try{Typekit.load();}catch(e){}</script>'
              . '<!-- Piwik -->
              <script type="text/javascript">
    var _paq = _paq || [];
    _paq.push(["trackPageView"]);
    _paq.push(["enableLinkTracking"]);
    (function() {
      var u="//analytics.lib.virginia.edu/";
      _paq.push(["setTrackerUrl", u+"piwik.php"]);
      _paq.push(["setSiteId", 33]);
      var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0];
      g.type="text/javascript"; g.async=true; g.defer=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
    })();
  </script>
  <noscript><p><img src="//analytics.lib.virginia.edu/piwik.php?idsite=33" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->';

        echo $html;
    }
}
