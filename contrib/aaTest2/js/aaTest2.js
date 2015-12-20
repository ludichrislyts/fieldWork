/**
 * @file
 * Javascript for aaTest2.
 */

/**
 * Provides a farbtastic colorpicker for the fancier widget.
 */
(function ($) {
  Drupal.behaviors.field_example_colorpicker = {
    attach: function(context) {
      $(".edit-aaTest2-colorpicker").live("focus", function(event) {
        var edit_field = this;
        var picker = $(this).closest('div').parent().find(".aaTest2-colorpicker");
        
        // Hide all color pickers except this one.
        $(".aaTest2-colorpicker").hide();
        $(picker).show();
        $.farbtastic(picker, function(color) {
          edit_field.value = color;
        }).setColor(edit_field.value);
      });
    }
  }
})(jQuery);
