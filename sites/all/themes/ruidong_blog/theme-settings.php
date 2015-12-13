<?php

/**
 * @file
 * Theme setting callbacks for the ruidong_blog theme.   
 * 
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function ruidong_blog_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['dem0'] = array(
    '#type' => 'fieldset',
    '#title' => t('Demo content'),
  );
  $form['dem0']['demo_content'] = array(
    '#type' => 'select',
    '#title' => t('Do you wish to enable demo reference content'),
    '#default_value' => theme_get_setting('demo_content', 'ruidong_blog'),
    '#options' => array(
      0 => t('No'),
      1 => t('Yes'),
    ),
  );
}
