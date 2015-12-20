<?PHP //$addcourse_form = drupal_get_form("commerce_product_ui_product_form"); ?>
<section class="<?php print $class; ?>">
<?PHP //print drupal_render($addcourse_form); ?>
<?PHP
//  $wrapper = entity_metadata_wrapper('commerce_product', commerce_product_new('product'));
//        $wrapper->title = "another test";
//        $wrapper->field_description = "This is a test for the add course form";
//        $wrapper->commerce_price->amount = 355;
//        $wrapper->commerce_price->currency_code = 'USD';
//        $wrapper->save();
//        $theNode = $wrapper->getIdentifier();
//        $theReference = node_load($theNode);
//        print $theNode;
//        print $wrapper->label();
//        print $wrapper->field_description->value();
        //print drupal_render($wrapper->propertyInfo['bundles']['product']['properties']);

//required paths for loading wrapper
  require_once(drupal_get_path('module', 'commerce_product') . '/includes/commerce_product.forms.inc');
  require_once(drupal_get_path('module', 'commerce_product') . '/includes/commerce_product_ui.products.inc');
  //$passwordForm = drupal_get_form('commerce_product_ui_product_form', 'product');

  //$form = commerce_product_ui_product_form_wrapper(commerce_product_load(119000));
  //$form = entity_metadata_wrapper(commerce_product_new('product'));
//  $form['#ajax_processed'] = TRUE;
  //$productId = 119000;

//commerce product new creates a new product and load brings in it for the form to edit.
  $form = commerce_product_ui_product_form_wrapper(commerce_product_load(1));
  //kpr($form);
  //$form = (commerce_product_load(1));
  $date = getdate();
  //$form_state = array();
  //$form_state['values']['title'] = "Course Draft Started on " . $date['mon'] . "." . $date['mday'] . "." . $date['year'];
  //$renderedForm = render($newForm);
//  commerce_product_ui_product_form_submit($newForm, &$form_state);
// drupal_form_submit('commerce_product_ui_product_form', &$form_state);
  //$editForm = commerce_product_ui_product_form_wrapper(commerce_product_load($productId));
  //$passwordForm = drupal_get_form('user_pass');
//  print render($form['field_course_upload']);
//  print $newForm->get_value($newForm, 'product_id');
  print render($form);
//  print render($form['uploads']);
//  print render($form['basics']);
//  print render($form['pricing']);
//  print render($form['details']);
//  print render($form['requirements']);
//print render($form);
  ?>
  <!--<div class="form-content hide review" id="review">
    <div class="review-field f1" id="review-title">
      <?php //print $form['course_title']['#title'];?>
    </div>
    <div class="review-field f2" id="preview-length">
      <?php //print $theNode->field_preview_length[und][0][value]; ?>
    </div>
    <div class="review-field f3" id="description">
      <?php //print $theNode->field_description[und][0][value]; ?>
    </div>
    <div class="review-field f4" id="subjects-taxonomy">
      <?php //print taxonomy_term_load($theNode->field_course_subjects_taxonomy[und][0][tid])->name; ?>
    </div>
    <div class="review-field f5" id="primary-subject">
      <?php //print taxonomy_term_load($theNode->field_primary_subject[und][0][tid])->name; ?>
    </div>
    <div class="review-field f6" id="language">
      <?php //print taxonomy_term_load($theNode->field_content_language[und][0][tid])->name; ?>
    </div>
    <div class="review-field f7" id="os-description">
      <?php //print $theNode->field_opensesame_description[0]; ?>
    </div>
  </div>-->

</section>


