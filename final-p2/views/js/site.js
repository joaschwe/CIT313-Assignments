
//ACTIVE STATE
// $(".nav li").on("click", function() {
//     $(".nav li").removeClass("lightBlue");
//     $(this).addClass("lightBlue");
// });

// $("ul.nav li a").on("click", function() {
//     $(".nav li a").removeClass("sr-only");
//     $(this).addClass("sr-only");
// });

// REGISTER FORM VALIDATE
$("form[name='signupForm']").validate({
    errorPlacement: function(error, element) {
        error.append($('.error'));
    },
    rules: {
        first_name: {
            required: true,
            lettersonly: true,
            minlength: 2
        },
        last_name: {
            required: true,
            lettersonly: true,
            minlength: 2
        },
        email: {
            required: true,
            email: true,
            minlength: 6
        },
        password: {
            required: true,
            minlength: 5,
            maxlength: 18
        },
        cpassword: {
            required: true,
            equalTo: "#password"
        }
    },
    // Specify validation error messages
    messages: {
        first_name: {
            required: "Please enter your first name.",
            lettersonly: "Your name can be letters only.",
            minlength: "You name must be at least 2 characters long."
        },
        last_name: {
            required: "Please enter your last name.",
            lettersonly: "Your name can be letters only.",
            minlength: "You name must be at least 2 characters long."
        },
        password: {
            required: "Please create a password.",
            minlength: "Your password must be between 5 and 18 characters long."
        },
        cpassword: {
            required: "Please confirm your password.",
            equalTo: "Your passwords must match."
        },
        email: {
            required: "Please enter a valid email address.",
            minlength: "Email must be at least 6 characters."
        }
    },
    errorElement : 'div',
    errorLabelContainer: '.errorTxt',
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
        form.submit();
        alert('Thank you, your account is now set up.');
    }
});


// ADD POST FORM VALIDATE
$("form[name='addpostForm']").validate({
    errorPlacement: function(error, element) {
        error.append($('.error'));
    },
    rules: {
        title: {
            required: true,
            minlength: 2
        },
        date: {
            required: true,
            minlength: 6
        },
        category: {
            required: true
        },
        tinyeditor: {
            required: true,
            minlength: 5
        }
    },
    // Specify validation error messages
    messages: {
        title: {
            required: "Please provide a title.",
            minlength: "A more descriptive title is helpful."
        },
        date: {
            required: "Please select a date.",
            minlength: "The date must be at least 6 characters long."
        },
        category: {
            required: "Please select a category."
        },
        tinyeditor: {
            required: "Please enter some content.",
            minlength: "We'd love it if your post was longer than that."
        }
    },
    errorElement : 'div',
    errorLabelContainer: '.errorTxt',
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
        form.submit();
        alert('Thank you, your account is now set up.');
    }
});



$(".nav .nav-link").on("click", function(){
    $(".nav").find(".active").removeClass("active");
    $(this).addClass("active");
    console.log('I clicked active');
});