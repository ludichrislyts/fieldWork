<?php
$form = commerce_product_ui_product_form_wrapper(commerce_product_load(119000));
?>

<section class="<?php print $class; ?>">
  <div class="footer-nav-buttons">
    <span class="footer-nav-button" id="previous-button-span">
      <button class="m-btn-orange addcourse-nav-button previous-button">Previous Section</button>
    </span>
    <span class="footer-nav-button" id="next-button-span">
      <button class="m-btn-orange addcourse-nav-button next-button">Next Section</button>
    </span>
  </div>
</section>
<?php print render($form['save-draft']); ?>