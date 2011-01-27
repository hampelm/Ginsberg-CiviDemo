<?php
// $Id$

// Include the definition of zen_theme_get_default_settings().
include_once './' . drupal_get_path('theme', 'SimplyCivi') . '/template.theme-registry.inc';


/**
 * Implementation of THEMEHOOK_settings() function.
 *
 * @param $saved_settings
 *   An array of saved settings for this theme.
 * @param $subtheme_defaults
 *   Allow a subtheme to override the default values.
 * @return
 *   A form array.
 */
function SimplyCivi_settings($saved_settings, $subtheme_defaults = array()) {
  /*
   * The default values for the theme variables. Make sure $defaults exactly
   * matches the $defaults in the template.php file.
   */

  // Add CSS to adjust the layout on the settings page
  drupal_add_css(drupal_get_path('theme', 'SimplyCivi') . '/css/theme-settings.css', 'theme');

  // Add Javascript to adjust the layout on the settings page
  // drupal_add_js(drupal_get_path('theme', 'SimplyCivi') . '/css/theme-settings.js', 'theme');

  // Get the default values from the .info file.
  $defaults = SimplyCivi_theme_get_default_settings('SimplyCivi');

  // Allow a subtheme to override the default values.
  $defaults = array_merge($defaults, $subtheme_defaults);

  // Merge the saved variables and their default values.
  $settings = array_merge($defaults, $saved_settings);

  $form['SimplyCivi_dev'] = array(
    '#type' => 'fieldset', 
    '#title' => t('Development Settings'), 
    '#weight' => 5, 
    '#collapsible' => TRUE, 
    '#collapsed' => FALSE,
  );

  // Setting for flush all caches
  $form['SimplyCivi_dev']['SimplyCivi_rebuild_registry'] = array(
     '#type'          => 'checkbox',
     '#title'         => t('Rebuild the theme registry on every page.'),
     '#default_value' => $settings['SimplyCivi_rebuild_registry'],
     '#description'   => t('During theme development, it can be very useful to continuously <a href="!link">rebuild the theme registry</a>. WARNING: this is a huge performance penalty and must be turned off on production websites.', array('!link' => 'http://drupal.org/node/173880#theme-registry')),
    );

  $form['SimplyCivi_animated_submit'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Prevent Duplicate Submits'),
    '#default_value' => $settings['SimplyCivi_animated_submit'],
    '#description'   => t('This can be helpful to prevent users from hitting the submit button twice, however the autocomplete can interfere with this and cause it not to work. <a href="!link">More Information</a>', array('!link' => 'http://drupal.org/node/579070')),
    );

  $form['SimplyCivi_block_edit_links'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Show block edit and configure links for those with appropriate permissions'),
    '#default_value' => $settings['SimplyCivi_block_edit_links'],
    '#description'   => t('This setting will display links to configure blocks, edit blocks, or modify the menus for block menus for users with the appropriate permissions.  When enabled the links may obscure small blocks like the New User block.'),
    );

  // Return the additional form widgets
  return $form;
}
