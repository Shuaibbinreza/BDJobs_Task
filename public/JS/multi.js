var currentStep = 1;
var updateProgressBar;

function displayStep(stepNumber) {
    if (stepNumber >= 1 && stepNumber <= 5) {
        $(".step-" + currentStep).hide();
        $(".step-" + stepNumber).show();
        currentStep = stepNumber;
        updateProgressBar();
    }
}

function validateStep(stepNumber) {
    if (stepNumber === 1) {
        if ($("#district").val().trim() === '') {
            $("#district-error").text("Please Enter your district");
            return false;
        }
        else if ($("#thana").val().trim() === '') {
            $("#thana-error").text("Please Select your thana/upazila");
            return false;
        }
        else if ($("#postoffice").val().trim() === '') {
            $("#po-error").text("Please Select your post office");
            return false;
        }
        else if ($("#houseNo").val().trim() === '') {
            $("#house-error").text("Please Select your post office");
            return false;
        }
        else if ($("#altphone").val().trim() === '') {
            $("#phone-error").text("Please Select your post office");
            return false;
        }
        else {
            $("#district-error").text("");
            $("#thana-error").text("");
            $("#po-error").text("");
            $("#house-error").text("");
            $("#phone-error").text("");
        }
    } 
    else if (stepNumber === 2) {
        if ($("#day").val().trim() === '') {
            $("#error-day").text("Day is required");
            return false;
        }
        else if ($("#month").val().trim() === '') {
            $("#error-month").text("Month is required");
            return false;
        }
        else if ($("#year").val().trim() === '') {
            $("#error-year").text("Year is required");
            return false;
        }
        else {
            $("#error-day").text(""); // Clear any previous error message
            $("#error-month").text("");
            $("#error-year").text("");
        }
    }

    else if (stepNumber === 3) {
        if ($("#job-cat").val().trim() === '') {
            $("#error-cat").text("Job Category is required");
            return false;
        }
        else if ($("#worktype").val().trim() === '') {
            $("#error-worktype").text("Worktype is required");
            return false;
        }
        else {
            $("#error-cat").text(""); // Clear any previous error message
            $("#error-worktype").text("");
        }

        var yesRadioJob = document.getElementById("expradio1");
        var jobCheck = document.getElementById("jobCheck");

        if(yesRadioJob.checked){
            if ($("#cname").val().trim() === '') {
                $("#error-cname").text("Commpany Name is required");
                return false;
            }
            else if ($("#cdes").val().trim() === '') {
                $("#error-cdes").text("Designation must be entered");
                return false;
            }
            else if ($("#jobstart").val().trim() === '') {
                $("#error-jobstart").text("Start Date must be entered");
                return false;
            }
            else if ($("#jobend").val().trim() === '' && !($("#jobCheck").is(":checked"))) {
                console.log($("#jobCheck").val());
                $("#error-jobend").text("Enter End Date or select Still Working Here");
                return false;
            }
            else {
                $("#error-cdes").text(""); // Clear any previous error message
                $("#error-cname").text("");
                $("#error-jobstart").text("");
                $("#error-jobend").text("");
            }
        }

    }

    else if (stepNumber === 4) {
        var yesRadio = document.getElementById("yesEdu");
        var jobCheck = document.getElementById("jobCheck");

        if(yesRadio.checked){
            if ($("#edutitle").val().trim() === '') {
                $("#error-edutitle").text("Commpany Name is required");
                return false;
            }
            else if ($("#eduins").val().trim() === '') {
                $("#error-eduins").text("Designation must be entered");
                return false;
            }
            else if ($("#edustart").val().trim() === '') {
                $("#error-edustart").text("Start Date must be entered");
                return false;
            }
            else if ($("#edEnd").val().trim() === '' && !($("#continueCheck").is(":checked"))) {
                // console.log($("#jobCheck").val());
                $("#error-edEnd").text("Enter End Date or select Still Studying Here");
                return false;
            }
            else {
                $("#error-edEnd").text(""); // Clear any previous error message
                $("#error-edustart").text("");
                $("#error-edutitle").text("");
                $("#error-eduins").text("");
            }
        }
    }

    return true;
}

$(document).ready(function() {
    $('#multi-step-form').find('.step').slice(1).hide();

    // Add event listeners to clear error messages on input change
    $("#district").on("input", function() {
        $("#district-error").text("");
    });

    $("#thana").on("input", function() {
        $("#thana-error").text("");
    });

    $("#houseNo").on("input", function() {
        $("#house-error").text("");
    });

    $("#altphone").on("input", function() {
        $("#phone-error").text("");
    });

    $("#postoffice").on("input", function() {
        $("#po-error").text("");
    });

    $("#day").on("input", function() {
        $("#error-day").text("");
    });

    $("#month").on("input", function() {
        $("#error-month").text("");
    });

    $("#year").on("input", function() {
        $("#error-year").text("");
    });

    $("#job-cat").on("input", function() {
        $("#error-cat").text("");
    });

    $("#worktype").on("input", function() {
        $("#error-worktype").text("");
    });

    $("#cname").on("input", function() {
        $("#error-cname").text("");
    });

    $("#cdes").on("input", function() {
        $("#error-cdes").text("");
    });

    $("#jobstart").on("input", function() {
        $("#error-jobstart").text("");
    });

    $("#jobend").on("input", function() {
        $("#error-jobend").text("");
    });

    $("#jobCheck").on("input", function() {
        $("#error-jobend").text("");
    });

    $("#edustart").on("input", function() {
        $("#error-edustart").text("");
    });

    $("#edEnd").on("input", function() {
        $("#error-edEnd").text("");
    });

    $("#continueCheck").on("input", function() {
        $("#error-edEnd").text("");
    });

    $("#eduins").on("input", function() {
        $("#error-eduins").text("");
    });

    $("#edutitle").on("input", function() {
        $("#error-edutitle").text("");
    });

    $(".next-step").click(function() {
        if (currentStep < 5) {
            if (validateStep(currentStep)) {
                $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
                currentStep++;
                setTimeout(function() {
                    $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                    $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
                    updateProgressBar();
                }, 100);
            }
        }
    });

    $(".prev-step").click(function() {
        if (currentStep > 1) {
            $(".step-" + currentStep).addClass("animate__animated animate__fadeOutRight");
            currentStep--;
            setTimeout(function() {
                $(".step").removeClass("animate__animated animate__fadeOutRight").hide();
                $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInLeft");
                updateProgressBar();
            }, 100);
        }
    });

    updateProgressBar = function() {
        var progressPercentage = ((currentStep - 1) / 4) * 100;
        $(".progress-bar").css("width", progressPercentage + "%");
    }
});

var subjectObject = {
    "Dhaka": {
        "Mirpur": ["Mirpur TSO", "Kafrul"],
        "Paltan": ["New Paltan", "Old Pantan"],
        "Gulshan": ["Gulshan 1", "Gulshan 2"]    
    },
    "Rajshahi": {
        "Sadar": ["RCC"],
        "Puthia": ["Puthia"]
    },
    "Natore": {
        "Gurudaspur": ["Hat Gurudaspur", "Sabgari", "Khubjipur"],
        "Sadar": ["Sadar"]
    },
    "Barishal": {
        "Gouronodi": ["Gouronodi"],
        "Sadar": ["Sadar"]
    }
}
window.onload = function() {
    var subjectSel = document.getElementById("district");
    var topicSel = document.getElementById("thana");
    var chapterSel = document.getElementById("postoffice");
    for (var x in subjectObject) {
        subjectSel.options[subjectSel.options.length] = new Option(x, x);
    }
    subjectSel.onchange = function() {
        //empty Chapters- and Topics- dropdowns
        chapterSel.length = 1;
        topicSel.length = 1;
        //display correct values
        for (var y in subjectObject[this.value]) {
        topicSel.options[topicSel.options.length] = new Option(y, y);
        }
    }
    topicSel.onchange = function() {
        //empty Chapters dropdown
        chapterSel.length = 1;
        //display correct values
        var z = subjectObject[subjectSel.value][this.value];
        for (var i = 0; i < z.length; i++) {
        chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
        }
    }
}


function showInputField() {
    document.getElementById('inputFieldContainer').style.display = 'block';
}

function hideInputField() {
    document.getElementById('inputFieldContainer').style.display = 'none';
}

function showInputFieldEdu() {
    document.getElementById('inputFieldContainerEdu').style.display = 'block';
}

function hideInputFieldEdu() {
    document.getElementById('inputFieldContainerEdu').style.display = 'none';
    // document.getElementById('edEnd').value = 'Hello, World!';
}

//Education 
const continueCheck = document.getElementById('continueCheck');
const educationEndInput = document.getElementById('edEnd');
document.getElementById('continueCheck').addEventListener('change', function() {
    if (this.checked) {
        // educationEndInput.value = 'checked';
        $("#edEnd").val("");
        document.getElementById('educationEnd').style.display = 'none';
        // educationEndInput.disabled = true;
    } else {
        // educationEndInput.value = '';
        document.getElementById('educationEnd').style.display = 'block';
        // educationEndInput.disabled = false;
    }
});

document.getElementById('jobCheck').addEventListener('change', function() {
    if (this.checked) {
        $("#jobend").val("");
        $("#error-jobend").text("");
        document.getElementById('expDiv').style.display = 'none';
    } else {
        document.getElementById('expDiv').style.display = 'block';
    }
});

// Array to store selected values
// Work type field modify
var selectedOptions = []; // Array to store selected options
        
function showCheckboxes() {
    var selectedValue = document.getElementById("worktype").value;
    var selectedValuesContainer = document.getElementById("selectedValues");

    // Check if the selected option has already been selected
    if (document.getElementById("worktype").querySelector(`[value="${selectedValue}"]`).getAttribute("data-selected")) {
        // Show an alert or handle the situation accordingly
        alert("This option has already been selected!");
        return;
    }

    // Add custom attribute to mark the option as selected
    document.getElementById("worktype").querySelector(`[value="${selectedValue}"]`).setAttribute("data-selected", true);

    // Create a container div for each selected value and its checkboxes
    var valueContainer = document.createElement("div");
    valueContainer.className = "value-container";

    // Create an object for the selected option
    var optionObject = {
        title: selectedValue,
        self: false, // Default value for self checkbox
        job: false, // Default value for job checkbox
        university: false, // Default value for university checkbox
        training: false, // Default value for training checkbox
        lifeDeath: false // Default value for life/death checkbox
    };

    // Create div for selected value
    var selectedValueDiv = document.createElement("div");
    selectedValueDiv.className = "selected-value";

    // Add selected value
    selectedValueDiv.innerHTML = "<h5>Selected Work Type: " + selectedValue + "</h5>";

    // Create remove button
    var removeButton = document.createElement("button");
    removeButton.innerHTML = "Remove";
    removeButton.className = "btn btn-danger btn-sm float-end me-5"; // Move the button to the right
    removeButton.onclick = function () {
        selectedValuesContainer.removeChild(valueContainer);
        // Remove selected option from array
        var index = selectedOptions.findIndex(obj => obj.title === selectedValue);
        if (index > -1) {
            selectedOptions.splice(index, 1);
        }
        // Enable the selected option in the dropdown
        document.getElementById("worktype").querySelector(`[value="${selectedValue}"]`).removeAttribute("data-selected");
    };

    // Append remove button to selected value div
    selectedValueDiv.appendChild(removeButton);

    // Append selected value div to container
    valueContainer.appendChild(selectedValueDiv);

    // Add checkboxes below the selected value
    var checkboxesDiv = document.createElement("div");
    checkboxesDiv.className = "checkboxes";
    checkboxesDiv.innerHTML = `
        <br> <!-- Add line break -->
        <div class="form-check form-check-inline">
            <input class="form-check-input border border-primary" type="checkbox" id="${selectedValue}_self" name="${selectedValue}_self" value="self" onchange="updateCheckbox('${selectedValue}', 'self', this.checked)">
            <label class="form-check-label text-dark" for="${selectedValue}_self">Self</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input border border-primary" type="checkbox" id="${selectedValue}_job" name="${selectedValue}_job" value="job" onchange="updateCheckbox('${selectedValue}', 'job', this.checked)">
            <label class="form-check-label text-dark" for="${selectedValue}_job">Job</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input border border-primary" type="checkbox" id="${selectedValue}_university" name="${selectedValue}_university" value="university" onchange="updateCheckbox('${selectedValue}', 'university', this.checked)">
            <label class="form-check-label text-dark" for="${selectedValue}_university">University</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input border border-primary" type="checkbox" id="${selectedValue}_training" name="${selectedValue}_training" value="training" onchange="updateCheckbox('${selectedValue}', 'training', this.checked)">
            <label class="form-check-label text-dark" for="${selectedValue}_training">Training</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input border border-primary" type="checkbox" id="${selectedValue}_lifeDeath" name="${selectedValue}_lifeDeath" value="lifeDeath" onchange="updateCheckbox('${selectedValue}', 'lifeDeath', this.checked)">
            <label class="form-check-label text-dark" for="${selectedValue}_lifeDeath">Life/Death</label>
        </div>
        <br><br>
        <!-- Add more checkboxes as needed -->
    `;
    valueContainer.appendChild(checkboxesDiv);

    // Append value container to selected values container
    selectedValuesContainer.appendChild(valueContainer);

    // Add the object to the array if not already added
    if (!selectedOptions.some(obj => obj.title === selectedValue)) {
        selectedOptions.push(optionObject);
    }

    // document.getElementById("worktype").selectedIndex = 0;
}


// Function to update checkbox value in the object
function updateCheckbox(title, checkbox, checked) {
    var optionIndex = selectedOptions.findIndex(obj => obj.title === title);
    if (optionIndex > -1) {
        selectedOptions[optionIndex][checkbox] = checked;
    }
}

// Function to submit form and display selected options
function submitForm() {
    // Print selected options array
    console.log(selectedOptions);
    
    // Serialize the array and store it in a hidden input field
    var serializedOptions = JSON.stringify(selectedOptions);
    var hiddenInput = document.createElement('input');
    hiddenInput.type = 'hidden';
    hiddenInput.name = 'selected_options';
    hiddenInput.value = serializedOptions;
    document.getElementById('multi-step-form').appendChild(hiddenInput);

    // Submit the form
    document.getElementById("multi-step-form").submit();
}
