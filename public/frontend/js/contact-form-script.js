/*==============================================================*/
// Raque Contact Form  JS
/*==============================================================*/
(function ($) {
    "use strict"; // Start of use strict
    $("#contactForm").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError($(this).attr('id'));
            submitMSG(false, "Please fill all required fields");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm($(this).attr('id'));
        }
    });
    
    $("#jobPost").validator().on("submit", function (event) {
        if (event.isDefaultPrevented()) {
            // handle the invalid form...
            formError($(this).attr('id'));
            submitMSG(false, "Please fill all required fields");
        } else {
            // everything looks good!
            event.preventDefault();
            submitForm($(this).attr('id'));
        }
    });


    
}(jQuery)); // End of use strict