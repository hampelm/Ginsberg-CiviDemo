<?php
// $Id: page.tpl.php,v 1.0 kylejaster Exp $ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>">
<head>
  <title><?php print $head_title ?></title>
  <meta http-equiv="content-language" content="<?php print $language->language ?>" />
  <?php print $meta; ?>
  <?php print $head; ?>
  <?php print $styles; ?>
  <!--[if lte IE 7]>
    <link rel="stylesheet" href="<?php print $path_parent; ?>framework/ie.css" type="text/css" media="screen, projection">
    <link href="<?php print $path_parent; ?>css/ie.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
    <?php $styles_ie_rtl['ie']; ?>
  <![endif]-->
  <!--[if lte IE 6]>
    <link href="<?php print $path_parent; ?>css/ie6.css" rel="stylesheet"  type="text/css"  media="screen, projection" />
    <?php $styles_ie_rtl['ie6']; ?>
  <![endif]-->
  <?php print $scripts ?>

</head>

<body class="<?php print $body_classes; ?>">

<div class="container">
  
  <div id="header-wrapper">
  <div id="header">
      <div id="status">
   	    <div class="messages-container">
        <?php	if ($messages != '') :?>
   		   <div id="messages">
   	        <?php print $messages; ?>
   		   </div>
       <?php endif; ?>
       </div>
      </div>
      <div id="logo">
        <?php if ($logo): ?>
          <img src="<?php print $logo; ?>" />
        <?php endif; ?>
      </div> <!-- logo -->
      <?php /* Design layout expects a site name, so include div for structure and style with min-height */ ?>
      <div id="site_name">
        <?php if ($site_name): ?>
          <h1>
            <?php print $site_name; ?>
          </h1>
        <?php endif; ?>
      </div> <!-- site_name -->      
      
      <?php if ($search_box): ?>
        <div id="search-box" class="span-8 last prepend-16">
          <?php print $search_box; ?>
        </div> <!-- /#search-box -->
      <?php endif; ?>
    <?php print $header; ?>
    <?php if ($breadcrumb != '') :?>
      <?php print $breadcrumb; ?>
  <?php endif; ?>
  </div>
  </div>
  <div id="container-wrapper">
  <div id="container">
    <?php
      
      if ($tabs != '') {
        print '<div class="tabs">'. $tabs .'</div>';
      }

      if ($messages != '') {
        print '<div id="messages">'. $messages .'</div>';
      }

      if ($title != '') {
        print '<h2>'. $title .'</h2>';
      }

      print $help; // Drupal already wraps this one in a class

      print $content;
      print $feed_icons;
    ?>

    <?php if ($footer_message || $footer): ?>
      <div id="footer" class="clear">
        <?php if ($footer): ?>
          <?php print $footer; ?>
        <?php endif; ?>
        <?php if ($footer_message): ?>
          <div id="footer-message"><?php print $footer_message; ?></div>
        <?php endif; ?>
      </div>
    <?php endif; ?>

  </div>
  
  </div>
  <?php if ($left || isset($primary_links) || isset($secondary_links)): ?>
    <div id="left-sidebar" class="sidebar-wrapper">
        <div id="left-sidebar-handle"><span class="ui-icon ui-icon-arrowthickstop-1-e"></span></div>
        <div class="sidebar-contents">
            <?php if (isset($primary_links)) : ?>
              <?php print theme('links', $primary_links, array('id' => 'nav', 'class' => 'links primary-links')) ?>
            <?php endif; ?>
            <?php if (isset($secondary_links)) : ?>
              <?php print theme('links', $secondary_links, array('id' => 'subnav', 'class' => 'links secondary-links')) ?>
            <?php endif; ?>
            <?php print $left; ?>
        </div>
    </div>
  <?php endif ?>
  <?php if ($right): ?>
    <div id="right-sidebar" class="sidebar-wrapper">
        <div id="right-sidebar-handle"><span class="ui-icon ui-icon-arrowthickstop-1-w"></span></div>
        <div class="sidebar-contents">
            <?php print $right; ?>
        </div>
    </div>
  <?php endif ?>
  <?php if ($create_new_record | $quickadd | $recent_items): ?>
    <div id="bottom-wrapper">
    <div id="bottom">
      
      <?php if ($quickadd): ?>
          <div id="quickadd" class="bottom-element"><?php print $quickadd; ?></div>
      <?php endif ?>
      
      <?php if ($create_new_record): ?>
          <div id="create-new-record" class="bottom-element"><?php print $create_new_record; ?></div>
      <?php endif ?>
      
      <?php if ($recent_items): ?>
          <div id="recent-items" class="bottom-element"><?php print $recent_items; ?></div>
      <?php endif ?>
      <div class="clear"></div>
    </div>
    </div>
  <?php endif; ?>
  

  <?php print $closure; ?>

</div>

</body>
</html>
