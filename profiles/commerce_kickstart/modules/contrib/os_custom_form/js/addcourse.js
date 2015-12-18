(function($){
    $(document).ready(function() {

        var theTitle = $('.form-item-title input').val();
        console.log(theTitle);
        $('.addcourse-title').append(theTitle);
        $('.title-form-input').val(theTitle);

        $('.addcourse-pencil-icon, .addcourse-title-save-button').on('click', function(){
            $('.addcourse-title-edit, .addcourse-title-container').toggleClass('hide');
            var newTitleValue = $('.title-form-input').val();
            $('.form-item-title input').val(newTitleValue);
            $('.form-item-title input').attr('value', newTitleValue);
            $('.addcourse-title').text(newTitleValue);
        });

        var theTabs = ["addcourse-upload", "addcourse-basics", "addcourse-pricing", "addcourse-details", "addcourse-system-requirements", "addcourse-review", "os-admin-tab"];
        var theForms = ["uploads", "basics", "pricing", "details", "system-requirements", "review", "os-admin"];

        function getTab(){
            var tabClasses = $('.is-active').attr('class');
            var theTabClass = tabClasses.split(" ");
            return theTabClass[1][1] - 1;
        }

        $('.addcourse-vertical-tabs').on('click', function () {
            $(".is-active").removeClass("is-active");
            $(this).addClass("is-active");
            var tabNum = getTab();
            $('.form-content').addClass('hide');
            $("#" + theForms[tabNum]).removeClass("hide");
        });

        //Get tab number to find current tab, use number as indexed position to cycle up.
        $('.next-button').on('click', function(){
            var tabNum = getTab();
            if (tabNum < theTabs.length - 1) {
                tabNum++;
                $(".is-active").removeClass("is-active");
                $("#" + theTabs[tabNum]).addClass("is-active");
                $('.form-content').addClass('hide');
                $("#" + theForms[tabNum]).removeClass("hide");
            } else {
                tabNum = 0;
                $(".is-active").removeClass("is-active");
                $("#" + theTabs[tabNum]).addClass("is-active");
                $('.form-content').addClass('hide');
                $("#" + theForms[tabNum]).removeClass('hide');
            }
        });

        //tabNum - 2 is different here due to tab numbers already being +1 from the array numbers
        $('.previous-button').on('click', function(){
            var tabNum = getTab();
            if (tabNum == 0) {
                tabNum = theTabs.length - 1;
                $(".is-active").removeClass("is-active");
                $("#" + theTabs[tabNum]).addClass("is-active");
            } else {
                tabNum--;
                $(".is-active").removeClass("is-active");
                $("#" + theTabs[tabNum]).addClass("is-active");
                $('.form-content').addClass('hide');
                $("#" + theForms[tabNum]).removeClass('hide');
            }
        });


    });

//
//    //////// autosave attempt ///////////
//    Drupal.ajax.prototype.commands.saveField = function (ajax, response, status) {
//        alert("you made it to addcourse.js!!");
//        console.log("hey");
//        var error_div = document.getElementById('error_message');
//        var input = $('.form-item-title input');
//        if(input.length < 1){
//            return;
//        }
//        // trying to make sure to grab the right form even when drupal changes it
//        //var content_div = document.getElementsByClassName('content')[0];
//        //var form = document.getElementsByTagName('FORM')[1];
//        //var button = form.getElementsByTagName('INPUT')[3];
//        //$(button).attr("value", "Shift it!");
//        //$(button).css("color", "black");
//        //if($(button).attr("disabled")){
//        //    $(button).attr("disabled", false);
//        //}else{
//        //    $(button).attr("disabled", false);
//        //}
//        var entry = String(response.selectedValue);
//        if('left'.indexOf(entry) === 0){
//        }else if('right'.indexOf(entry) == 0){
//        }else{
//            // creating error message <p> element, disabling submit button, and changing text color
//            var errorP = document.createElement("P");
//            $(errorP).css('color', 'red');
//            var errorText = document.createTextNode("Entry must be either 'left' or 'right'");
//            errorP.appendChild(errorText);
//            document.getElementById('error_message').appendChild(errorP);
//            $(button).attr("disabled", true);
//            $(button).css("color", "red");
//            // $(button).attr("style", '!important');
//            $(button).attr("value", "Don't click here");
//        }
//        // putting focus back onto input field and populating the field with current string
//        input.focus();
//        input.value = '';
//        input.value = response.selectedValue;
//        console.log(response.selectedValue);
//        //if(response.selectedValue.length >= 5 && response.selectedValue !== 'right'){
//        //    $(button).attr("disabled", true);
//        //}else if(response.selectedValue.length <= 4 && response.selectedValue !== 'left'){
//        //    $(button).attr("disabled", true);
//        //}
//    };
//)};
})(jQuery);