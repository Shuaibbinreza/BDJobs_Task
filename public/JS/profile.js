$(document).ready(function() {
    // Function to validate the First Name field
    function validateUserDetails() {
        
        // Check if the first name is empty
        if ($('#first_name').val().trim() === '') {
            $('#nerror-message').text('Please enter the required field').show();
            return false; // Validation failed
        }
        else if ($('#dob').val().trim() === '') {
            $('#derror-message').text('Please enter the required field').show();
            return false; // Validation failed
        }
        else if ($('#gender').val().trim() === '') {
            $('#gerror-message').text('Please enter the required field').show();
            return false; // Validation failed
        }
        else if ($('#nationality').val().trim() === '') {
            $('#naerror-message').text('Please enter the required field').show();
            return false; // Validation failed
        }
        else if ($('#p-mobile').val().trim() === '') {
            $('#pmerror-message').text('Please enter the required field').show();
            return false; // Validation failed
        }
        else if ($('#emergency-contact').val().trim() === '') {
            $('#ecerror-message').text('Please enter the required field').show();
            return false; // Validation failed
        }

        return true; // Validation passed
    }

    // Function to validate the Date of Birth field
    

    // Clear error messages when input begins
    $("#first_name").on("input", function() {
        $("#nerror-message").text("");
    });

    $("#dob").on("input", function() {
        $("#derror-message").text("");
    });

    $("#gender").on("input", function() {
        $("#gerror-message").text("");
    });

    $("#nationality").on("input", function() {
        $("#naerror-message").text("");
    });

    $("#p-mobile").on("input", function() {
        $("#pmerror-message").text("");
    });

    $("#emergency-contact").on("input", function() {
        $("#ecerror-message").text("");
    });

    // Form submission validation
    $('#myForm').submit(function(event) {
        // Perform field-wise validation
        var isUserDValid = validateUserDetails();
        
        // Check overall form validity
        var isFormValid = isUserDValid;

        // If form validation fails, prevent submission
        if (!isFormValid) {
            event.preventDefault();
        }
    });
});

document.getElementById('closeModalBtn').addEventListener('click', function() {
    var modal = new bootstrap.Modal(document.getElementById('exampleModal'));
    modal.hide();
});