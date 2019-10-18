$(document).ready(function(){
    
    (function($) {
        "use strict";

    
    jQuery.validator.addMethod('answercheck', function (value, element) {
        return this.optional(element) || /^\bcat\b$/.test(value)
    }, "type the correct answer -_-");

    // validate contactForm form
    $(function() {
        $('#contactForm').validate({
            rules: {
                prospect_firstname: {
                    required: true,
                    minlength: 2
                },
                prospect_lastname: {
                    required: true,
                    minlength: 4
                },
                prospect_phone: {
                    required: true,
                    minlength: 5
                },
                prospect_email: {
                    required: true,
                    email: true
                },
                prospect_message: {
                    required: true,
                    minlength: 20
                }
            },
            messages: {
                prospect_firstname: {
                    required: "come on, you have a name, don't you?",
                    minlength: "your name must consist of at least 2 characters"
                },
                prospect_lastname: {
                    required: "come on, you have a subject, don't you?",
                    minlength: "your subject must consist of at least 4 characters"
                },
                prospect_phone: {
                    required: "come on, you have a number, don't you?",
                    minlength: "your Number must consist of at least 5 characters"
                },
                prospect_email: {
                    required: "no email, no message"
                },
                prospect_message: {
                    required: "um...yea, you have to write something to send this form.",
                    minlength: "thats all? really?"
                }
            },
            submitHandler: function(form) {
                $(form).ajaxSubmit({
                    type:"POST",
                    data: $(form).serialize(),
                    url:"contact_process.php",
                    success: function() {
                        $('#contactForm :input').attr('disabled', 'disabled');
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $(this).find(':input').attr('disabled', 'disabled');
                            $(this).find('label').css('cursor','default');
                            $('#success').fadeIn()
                            $('.modal').modal('hide');
		                	$('#success').modal('show');
                        })
                    },
                    error: function() {
                        $('#contactForm').fadeTo( "slow", 1, function() {
                            $('#error').fadeIn()
                            $('.modal').modal('hide');
		                	$('#error').modal('show');
                        })
                    }
                })
            }
        })
    })
        
 })(jQuery)
})