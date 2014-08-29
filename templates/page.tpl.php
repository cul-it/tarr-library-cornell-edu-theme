<div id="skiptocontent"><a href="#maincontent">skip to main content</a></div>
<div class="cornell-brand">
  <div class="container hidden-xs">
    <div class="row">
      <div class="cornell-logo">
        <div class="cu-logo">
          <img src="/sites/all/themes/tarr/images/layout/cul-logo-white.gif" alt="Cornell University Library">
          <a id="insignia-link" href="http://www.cornell.edu/">Cornell Insignia</a>
          <div class="unit-signature-links">
            <a id="cornell-link" href="http://www.cornell.edu/">Cornell University</a>
            <a id="unit-link" href="http://www.library.cornell.edu">Cornell University Library</a>
          </div>
        </div>
      </div>
      <div class="search-links hidden-xs">
        <ul>
          <li><a href="http://www.library.cornell.edu/accessiblesearch/">Search Library</a></li>
          <li><a href="http://www.cornell.edu/search/">Search Cornell</a></li>
        </ul>
      </div>
    </div>
  </div>
  <a class="visible-xs" href="http://www.library.cornell.edu"><img src="/sites/all/themes/tarr/images/layout/cul-mobile.png" alt="Cornell University Library"></a>
</div>
<div class="navbar" role="navigation">
  <div class="container">
    <div class="row">
      <div class="brand">
        <a class="navbar-brand" href="/">Historic Glacial Images of Alaska and Greenland</a>
        <div class="subtitle">from the Ralph Stockman Tarr expeditions (1896; 1905-1911)</div>
      </div>
      <div class="navigation">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <i class="fa fa-bars"></i> Menu
        </button>
        <div class="navbar-collapse collapse">
          <div class="nav navbar-nav">
            <?php print render($page['navigation']); ?>
          </div>
        </div><!--/.navbar-collapse-->
      </div>
    </div>
  </div>
</div>
<div class="jumbotron">
  <div class="container">
    <div class="row">
      <div class="main-text">
        <?php print render($breadcrumb); ?>
        <?php print render($page['highlighted']); ?>
        <?php print $messages; ?>
        <?php print render($tabs); ?>
        <?php print render($page['help']); ?>
        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>
        <?php if(drupal_is_front_page()) {
          unset($page['content']['system_main']['default_message']);
        }?>
        <?php if ($title): ?>
          <h1><?php print $title; ?></h1>
        <?php endif; ?>
        <?php print render($page['content']); ?>
      </div>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <div class="row">
      <div class="footer-primary">
        <?php print render($page['footer_primary']); ?>
      </div>
      <div class="footer-secondary">
        <?php print render($page['footer_secondary']); ?>
      </div>
    </div>
  </div> <!-- /container -->
</footer>

<?php print render($page['bottom']); ?>