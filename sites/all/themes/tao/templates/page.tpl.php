<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>

    <?php print $styles ?>

    
    <style type="text/css" media="screen">
        @import url(<?php print url(); ?>sites/all/themes/tao/drupal.css);
    </style>
    
    <?php print $scripts ?>
    <title><?php print $title; if($title) print ' - Ginsberg Center'; if(!$title) print 'The Ginsberg Center for Community Service and Learning'; ?> </title>
  </head>
  
  <?php
  $classes = '';
  ?>
  <body class="<?php print $attr['class']; print $classes ?>" >

  <?php print $skipnav ?>
  
  <div id="header-wrap">
      <div id="header" class="clear-block">

          <ul id="nav-groups" class="clear-block"> 
          <li id="nav-about"><a href="<?php print url() ?>about">About Ginsberg</a> </li> 
          <li id="nav-students"> <a href="<?php print url() ?>students">For Students &amp; Student Orgs</a></li> 
          <li id="nav-partners"><a href="<?php print url() ?>partners">For Community Partners</a></li> 
          <li id="nav-faculty"><a href="<?php print url() ?>teaching">Research &amp; Faculty Resources</a></li> 

          <li id="nav-search">
<!--
              <?php
              print drupal_get_form('search_theme_form');
              ?>
-->
            <form action="http://www.google.com/cse" id="cse-search-box">
              <div>
                <input type="hidden" name="cx" value="001760569728741144314:vbsoldxq5gg" />
                <input type="hidden" name="ie" value="UTF-8" />
                <input type="text" name="q" size="18" class="field" />
                <input type="submit" name="sa" value="Search" class="button" />
              </div>
            </form>
          </li>
          
          </ul> 
          
          <h1><a href="<?php print url() ?>">Ginsberg Center</a></h1> 
          <ul id="nav" class="clear-block"> 
              <li id="nav-ar"><a href="<?php print url() ?>americareads">America Reads</a></li>  
              <li id="nav-americorps"><a href="<?php print url() ?>americorps">AmeriCorps</a></li> 
              <li id="nav-ia"><a href="<?php print url() ?>interfaith-action">Interfaith Action</a></li> 
              <li id="nav-pc"><a href="<?php print url() ?>projectcommunity">Project Community</a></li> 
              <li id="nav-sid"><a href="<?php print url() ?>semester-in-detroit">Semester in Detroit</a></li> 
              <li id="nav-serve"><a href="<?php print url() ?>serve">SERVE</a>
              <ul class="clear-block"> 
                  <li><a href="<?php print url() ?>serve/asb">Alternative Spring Break</a></li> 
                  <li><a href="<?php print url() ?>serve/aw">Alternative Weekends</a></li> 
                  <li><a href="<?php print url() ?>serve/nasst">North American Summer Service Team</a></li> 
                  <li><a href="<?php print url() ?>serve/pwst">Pangea World Service Team</a></li> 
                  <li><a href="<?php print url() ?>serve/view">Volunteers Involved Every Week</a></li> 
              </ul>
          </li> 
          </ul> 
          

      </div>
  </div>
  
  
  <div id="container">
    <?php if ($help_toggler) print $help_toggler ?>
       <?php
            $node = menu_get_object();
            
            $tax = taxonomy_node_get_terms($node->nid);
       
       ?> 
       
        
    <?php
    if (!$is_front) {
    ?>
    <div id="section-title-wrap">
        <div id="section-title">
        <h1 class='page-title <?php print $page_icon_class ?>'>
             <?php 
             # var_dump($variables['search_box']);
             #$variables['title']
             if ($node->type == "section") {
                 print $title;
             }elseif ($node->type == "story" || $template_files[0] == "page-news"){
                 print "<a href=\"" . url() . "news/\">News &amp; Opportunities from Ginsberg </a>";
             }elseif ($node->type == "event" || $template_files[0] == "page-events"){
                 if ($template_files[0] == "page-events") {
                     print "Upcoming Events";
                 }else {
                     print "<a href=\"" . url() . "events/\">Upcoming Events</a>";
                 }
             }elseif ($node->type == "page" || $node->type == "webform"){
                    try {
                        foreach ($node->og_groups_both as $key => $value) {
                            print "<a href=\"" . url() . drupal_get_path_alias('node/' . $key) . "\">" . $value . "</a>";
                            
                            
                        }
                    } catch (Exception $e) {
                        print "e";
                    }

             } elseif( arg(0) == 'admin' || arg(0) == 'node'){
                 print $breadcrumb;                 
            } elseif ($variables['search_box']){
                 print "<a href=\"" . url() . "search/\">Search</a>";

             }else{
                 print "<a href=\"/drupal/" . $node->taxonomy[12]->name . "\">" . $node->taxonomy[12]->name . "</a>";
             }
         
            if($node = menu_get_object()){
                # print $node->field_program[0]['view']; 
            }
            ?>
        </h1>
        </div>
    </div>  
    <?php
    }   
    ?>
    <?php 
    $interb = $node->field_header['0']['value'];
    if($interb){ 
    ?>
    <div id="inter-wrap">
        <div id="inter" class="clear-block">
            <?php print $interb; ?>
        </div>
    </div><!-- end inter-wrap -->
    <?php } ?>
    
    <?php if($inter) { ?>
        <div id="inter-wrap">
            <div id="inter" class="clear-block">
                <?php print $inter; ?>
            </div>
        </div><!-- end inter-wrap -->
    <?php } ?>
  
  <div id="main-wrap">
  <div id="main" class="clear-block">
      
    <?php if($left) { ?>
        <div id="one">
            <?php print $left ?>
        </div>
    <?php } ?>

  <div id='page'>
        <?php
            if($node->field_teaser[0]["value"]){
        ?>
            <h2 class="theme"><?php print $node->field_teaser[0]["value"]; ?></h2>
        <?php
            }
        ?>
        
        
    <?php 
    if($node->type != 'section') {
    ?>
        <h2>   
            <?php         
                if ($title) print $title;
            ?>
        </h2>
    <?php
    }
    ?>

    
    
    <?php if ($tabs2): ?><div class='secondary-tabs clear-block'><?php print $tabs2 ?></div><?php endif; ?>
    <?php if ($help) print $help ?>
    
      <?php if ($show_messages && $messages): ?>
        <div id='console' class='clear-block'><?php print $messages; ?></div>
      <?php endif; ?>

        <?php if (!empty($content)): ?>
          <div id='content'><?php print $content ?></div>
        <?php endif; ?>
        
        
        
  </div>
  
  
    <?php if($two){ ?>
        <div id="two">
        <?php print $two ?>
        </div>
    <?php } ?>
    
    <?php if($right){ ?>
        <div id="right">
        <?php print $right ?>
        </div>
    <?php } ?>
    
    
    <?php if($bottom){ ?>
        <div id="bottom">
        <?php print $bottom ?>
        </div>
    <?php } ?>
    
  </div> <!-- end clear block -->
  
  </div> <!-- end main wrap -->
  </div> <!-- end container -->
  
  <div id="footer-wrap">
      <div id='footer' class='clear-block'>
          
          <div id="house">
              <div class="one">
                  Ginsberg Center<br />
                  1024 Hill Street<br />
                  Ann Arbor, MI 48104<br /><br />
                  phone: (734)647-7402 <br />
                  fax:(734)647-7464<br /><br />
                  <a href="http://studentaffairs.umich.edu/" style="border:0px none"><img src="<?php print url() ?>sites/all/themes/tao/images/logos/wordlogoDSA.gif" alt="University of Michigan Division of Student Affairs" /></a>
              </div>
              <div class="two">
                  
              </div>
                
              <?php if ($tabs): ?><?php print $tabs ?><?php endif; ?>
              <?php print $footer ?>
              
          
          </div>
      
<!--
        <?php if ($feed_icons): ?>
          <div class='feed-icons clear-block'>
            <label><?php print t('Feeds') ?></label>
            <?php print $feed_icons ?>
          </div>
        <?php endif; ?>
-->
<!--
        <?php if ($footer_message): ?><div class='footer-message'><?php print $footer_message ?></div><?php endif; ?>
-->
      </div>
  </div>
  <?php print $closure ?>
  
  <script type="text/javascript" src="http://www.google-analytics.com/ga.js"></script>
  <script type="text/javascript">
  var pageTracker = _gat._getTracker("UA-5078479-14");
  pageTracker._trackPageview();

  </script>

  </body>
</html>
