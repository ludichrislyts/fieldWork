<?php
$uploadsSelected = true;
$basicsSelected = false;
$pricingSelected = false;
$detailsSelected = false;
$systemRequirementsSelected = false;
$reviewSelected = false;
$osAdminSelected = false;
?>

<aside class="<?php print $class; ?>">
  <div id="addcourse-tabs" class="l-outer-container">
      <div class="addcourse-vertical-tab-container">
        <div class="addcourse-vertical-tabs t1 <?php if ($uploadsSelected) { print 'is-active '; } ?>" id="addcourse-upload">
            <div class="tab-content-wrapper"><div class="tab-num-wrap"><i class="font-icon font-icon-check hide"></i><span class="tab-num">1</span></div><div class="tab-name">Uploads</div></div>
        </div>
        <div class="addcourse-vertical-tabs t2<?php if ($basicsSelected) { print 'is-active '; } ?>" id="addcourse-basics">
          <div class="tab-content-wrapper"><div class="tab-num-wrap"><i class="font-icon font-icon-check hide"></i><span class="tab-num">2</span></div><div class="tab-name">Basics</div></div>
        </div>
        <div class="addcourse-vertical-tabs t3<?php if ($pricingSelected) { print 'is-active '; } ?>" id="addcourse-pricing">
          <div class="tab-content-wrapper"><div class="tab-num-wrap"><i class="font-icon font-icon-check hide"></i><span class="tab-num">3</span></div><div class="tab-name">Pricing</div></div>
        </div>
        <div class="addcourse-vertical-tabs t4<?php if ($pricingSelected) { print 'is-active '; } ?>" id="addcourse-details">
          <div class="tab-content-wrapper"><div class="tab-num-wrap"><i class="font-icon font-icon-check hide"></i><span class="tab-num">4</span></div><div class="tab-name">Details</div></div>
        </div>
        <div class="addcourse-vertical-tabs t5<?php if ($pricingSelected) { print 'is-active '; } ?>" id="addcourse-system-requirements">
          <div class="tab-content-wrapper"><div class="tab-num-wrap"><i class="font-icon font-icon-check hide"></i><span class="tab-num">5</span></div><div class="tab-name">System Requirements</div></div>
        </div>
        <div class="addcourse-vertical-tabs t6<?php if ($pricingSelected) { print 'is-active '; } ?>" id="addcourse-review">
          <div class="tab-content-wrapper"><div class="tab-num-wrap"><i class="font-icon font-icon-check hide"></i><span class="tab-num">6</span></div><div class="tab-name">Review</div></div>
        </div>
        <div class="addcourse-vertical-tabs t7<?php if ($pricingSelected) { print 'is-active '; } ?>" id="os-admin-tab">
          <div class="tab-content-wrapper"><div class="tab-num-wrap"><i class="font-icon font-icon-check hide"></i><span class="tab-num">7</span></div><div class="tab-name">OS Admin</div></div>
        </div>
      </div>
      <!-- end of vertical-tabs -->
      <div class="vertical-tab-content-container">
</aside>