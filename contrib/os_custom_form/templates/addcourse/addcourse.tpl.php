<?php $header = render(_addcourse_header_tpl());
      $tabs = render(_addcourse_tabs_tpl());
      $forms = render(_addcourse_forms_tpl());
      $download = render(_addcourse_download_tpl());
      $footer = render(_addcourse_footer_tpl());
//      global $user;
//      print $user->uid;
//      $wrapper = entity_metadata_wrapper('commerce_product', commerce_product_new('product'));
//      $wrapper->title = "Add New Title";
//      $wrapper->save();
//      print $wrapper->getIdentifier();
//dpm( debug_backtrace() );
?>
<!--<iframe name="download-tab" id="download-tab" width="100%" height="200px" src="http://www.google.com" border="0"></iframe>-->
<section id="<?php print $section_id; ?>"  class="<?php print $section_class; ?>">
  <div class="m-row-addcourse-header">
    <?php print $header ?>
  </div>
  <div class="m-row-addcourse-content">
    <?php print $tabs; print $forms; ?>
  </div>
  <div class="m-row-addcourse-footer">
    <?php print $footer; ?>
  </div>
</section>

<!--$form['buyer_options'] = array(-->
<!--'#prefix' => '<div id="buyer_options">',-->
<!--  'contents' => array(-->
<!--  'field_buyer_type' => $form['field_buyer_type'],-->
<!--  'field_company_lms' => $form['field_company_lms'],-->
<!--  'field_company_name' => $form['field_company_name'],-->
<!--  'field_company_size' => $form['field_company_size'],-->
<!--  ),-->
<!--  '#suffix' => '</div>',-->
<!--'#weight' => 20,-->
<!--);-->