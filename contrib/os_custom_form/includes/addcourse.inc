<?php
/**
 * addcourse menu callback
 *
 * @return array
 */
function _os_custom_form_addcourse() {
  return array(
    '#theme_wrappers' => array('os_custom_form_addcourse'),
    '#section_class' => 'm-addcourse',
    '#section_id' => 'addcourse',
    '#attached' => array(
      'css' => array(
        path_to_theme() . '/css/addcourse_application.css'
      ),
      'js' => array(
        //drupal_get_path('theme', 'os2014') . "/js/addcourse.js",
      )
    ),
    'addcourse_header' => _addcourse_header_tpl(),
    'addcourse_tabs' => _addcourse_tabs_tpl(),
    'addcourse_forms' => _addcourse_forms_tpl(),
    'addcourse_download' => _addcourse_download_tpl(),
    'addcourse_footer' => _addcourse_footer_tpl()
  );
}
/**
 * addcourse_header menu callback
 *
 * @return array
 */
function _addcourse_header_tpl() {
  return array(
    '#theme' => 'os_custom_form_addcourse_header',
    '#class' => 'm-addcourse-header',
  );
}
/**
 * addcourse_tabs menu callback
 *
 * @return array
 */
function _addcourse_tabs_tpl() {
  return array(
    '#theme' => 'os_custom_form_addcourse_tabs',
    '#class' => 'm-addcourse-tabs',
  );
}
/**
 * addcourse_forms menu callback
 *
 * @return array
 */
function _addcourse_forms_tpl() {
  // Include the forms file from the Product module.
  // module_load_include('inc', 'commerce_product', 'includes/commerce_product.forms');

//  $addcourse_form = drupal_get_form("commerce_product_ui_product_form");
  return array(
    '#theme' => 'os_custom_form_addcourse_forms',
    '#class' => 'm-addcourse-forms',
//    '#addcourse_form' => $addcourse_form,
  );
}
/**
 * addcourse_download menu callback
 *
 * @return array
 */
function _addcourse_download_tpl() {
  return array(
    '#theme' => 'os_custom_form_addcourse_download',
    '#class' => 'm-addcourse-download',
  );
}
/**
 * addcourse_footer menu callback
 *
 * @return array
 */
function _addcourse_footer_tpl() {
  return array(
    '#theme' => 'os_custom_form_addcourse_footer',
    '#class' => 'm-addcourse-footer',
  );
}

//function os_custom_form_commerce_product_ui_product_form_alter(&$form, &$form_state, $form_id) {
//  $form['uploads'] = array(
//    '#prefix' => '<div id="uploads">',
//    'contents' => array(
//      'field_course_upload' => $form['field_course_upload'],
//      'field_image_cache' => $form['field_image_cache'],
//      'field_photo_credit' => $form['field_photo_credit'],
//      'field_preview_length' => $form['field_preview_length'],
//      'field_donate_lingos' => $form['field_donate_lingos'],
//    ),
//    '#suffix' => '</div>',
//    '#weight' => 1,
//  );
//  $form['basics'] = array(
//    '#prefix' => '<div id="basics">',
//    'contents' => array(
//      'field_description' => $form['field_description'],
//      'field_learning_obj' => $form['field_learning_obj'],
//      'field_primary_subject' => $form['field_primary_subject'],
//      'field_course_subjects_taxonomy' => $form['field_course_subjects_taxonomy'],
//    ),
//    '#suffix' => '</div>',
//    '#weight' => 2,
//  );
//  $form['pricing'] = array(
//    '#prefix' => '<div id="uploads">',
//    'contents' => array(
//      'field_commerce_price' => $form['field_commerce_price'],
//      'field_package_pricing' => $form['field_package_pricing'],
//      'field_unlimited_price' => $form['field_unlimited_price'],
//    ),
//    '#suffix' => '</div>',
//    '#weight' => 3,
//  );
//}