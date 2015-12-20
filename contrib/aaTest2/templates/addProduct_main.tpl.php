<section class="<?php print $class;?>">
	<div>
		<p>Let's try to add a field</p>
	</div>
	<?php
        require_once(drupal_get_path('module', 'commerce_product') . '/includes/commerce_product.forms.inc');
  		require_once(drupal_get_path('module', 'commerce_product') . '/includes/commerce_product_ui.products.inc');
		$form = commerce_product_ui_product_form_wrapper(commerce_product_new('product'));
		//$form = drupal_get_form('aaTest_form');
  		dpr($form);
		print render($form);
	?>
</section>