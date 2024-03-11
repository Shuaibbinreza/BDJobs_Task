<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown Selection Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Dropdown Selection Form</h1>
        
        <!-- Form -->
        <form id="dropdownForm" action="/submit-form" method="POST">
            @csrf <!-- CSRF protection for Laravel -->

            <!-- Container for selected values -->
            <div id="selectedValues"></div>
            
            <!-- Dropdown -->
            <div class="form-group">
                <label for="dropdown">Select Option:</label>
                <select name="worktype" aria-label="Select Work Type" onchange="showCheckboxes()" 
                    data-control="select2" data-placeholder="Select Work Type.." 
                    class="form-select form-control form-select-solid form-select-lg border border-secondary" id="worktype">
                    <option value="">Select Work Type</option>
                    <option value="C++" class="text-primary">
                        C++</option>
                    <option value="Laravel" class="text-primary">
                        Laravel</option>
                    <option value="Spring Boot" class="text-primary">
                        Spring Boot</option>
                </select>
            </div>

            <input type="email" name="email" id="email">
            @error('email')
                {{$message}}
            @enderror

            <!-- Bootstrap JS and jQuery -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

            <script>
                var selectedOptions = []; // Array to store selected options
                
                function showCheckboxes() {
                    var selectedValue = document.getElementById("worktype").value;
                    var selectedValuesContainer = document.getElementById("selectedValues");

                    // Reset dropdown to default value
                    document.getElementById("worktype").selectedIndex = 0;

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
                    selectedValueDiv.innerHTML = "<h3>Selected Work Type: " + selectedValue + "</h3>";

                    // Create remove button
                    var removeButton = document.createElement("button");
                    removeButton.innerHTML = "Remove";
                    removeButton.className = "btn btn-danger btn-sm float-right"; // Move the button to the right
                    removeButton.onclick = function () {
                        selectedValuesContainer.removeChild(valueContainer);
                        // Remove selected option from array
                        var index = selectedOptions.findIndex(obj => obj.title === selectedValue);
                        if (index > -1) {
                            selectedOptions.splice(index, 1);
                        }
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
                            <input class="form-check-input" type="checkbox" id="${selectedValue}_self" name="${selectedValue}_self" value="self" onchange="updateCheckbox('${selectedValue}', 'self', this.checked)">
                            <label class="form-check-label" for="${selectedValue}_self">Self</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="${selectedValue}_job" name="${selectedValue}_job" value="job" onchange="updateCheckbox('${selectedValue}', 'job', this.checked)">
                            <label class="form-check-label" for="${selectedValue}_job">Job</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="${selectedValue}_university" name="${selectedValue}_university" value="university" onchange="updateCheckbox('${selectedValue}', 'university', this.checked)">
                            <label class="form-check-label" for="${selectedValue}_university">University</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="${selectedValue}_training" name="${selectedValue}_training" value="training" onchange="updateCheckbox('${selectedValue}', 'training', this.checked)">
                            <label class="form-check-label" for="${selectedValue}_training">Training</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="${selectedValue}_lifeDeath" name="${selectedValue}_lifeDeath" value="lifeDeath" onchange="updateCheckbox('${selectedValue}', 'lifeDeath', this.checked)">
                            <label class="form-check-label" for="${selectedValue}_lifeDeath">Life/Death</label>
                        </div>
                        <!-- Add more checkboxes as needed -->
                    `;
                    valueContainer.appendChild(checkboxesDiv);

                    // Append value container to selected values container
                    selectedValuesContainer.appendChild(valueContainer);

                    // Add the object to the array if not already added
                    if (!selectedOptions.some(obj => obj.title === selectedValue)) {
                        selectedOptions.push(optionObject);
                    }
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
                    document.getElementById('dropdownForm').appendChild(hiddenInput);

                    // Submit the form
                    document.getElementById("dropdownForm").submit();
                }
            </script>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary" onclick="submitForm()">Submit</button>
        </form>
    </div>
</body>
</html>
