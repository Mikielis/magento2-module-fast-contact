
define([
    "jquery"
], function($) {
    "use strict";

    $.widget('mikielis.contact', {
        _create: function() {
            var el = this.options;

            $(el.contactIcon).click(function() {
                $(el.formContainer).toggle();
                if ($(this).hasClass('fa-times')) {
                    $(this).removeClass('fa fa-times').addClass(el.contactIconClass);
                } else {
                    $(this).removeClass(el.contactIconClass).addClass('fa fa-times');
                }
            });
        }
    });

    return $.mikielis.contact;
});
