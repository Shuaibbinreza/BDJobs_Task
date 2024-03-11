<!DOCTYPE html> 
<html> 

<head> 
	<link href= 
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'> 

	<script src= 
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'> 
	</script> 

	<script src= 
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'> 
	</script> 

    <link rel="stylesheet" href="{{ asset('css/multi.css') }}">

    <style>
        .step-container {
            position: relative;
            text-align: center;
            transform: translateY(-43%);
        }

        .step-circle {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fff;
            border: 5px solid #007bff;
            line-height: 30px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
            cursor: pointer; /* Added cursor pointer */
        }

        .step-line {
            position: absolute;
            top: 16px;
            left: 50px;
            width: calc(100% - 100px);
            height: 2px;
            background-color: #007bff;
            z-index: -1;
        }
    
    #multi-step-form{
		overflow-x: hidden;
	}
    </style>

    <script>
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

        $(document).ready(function() {
            $('#multi-step-form').find('.step').slice(1).hide();
        
            $(".next-step").click(function() {
            if (currentStep < 5) {
                $(".step-" + currentStep).addClass("animate__animated animate__fadeOutLeft");
                currentStep++;
                setTimeout(function() {
                $(".step").removeClass("animate__animated animate__fadeOutLeft").hide();
                $(".step-" + currentStep).show().addClass("animate__animated animate__fadeInRight");
                updateProgressBar();
                }, 500);
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
                }, 500);
            }
            });

            updateProgressBar = function() {
            var progressPercentage = ((currentStep - 1) / 4) * 100;
            $(".progress-bar").css("width", progressPercentage + "%");
            }
        });
    </script>

	{{-- <link rel="stylesheet" href="multi.css">  --}}
</head> 

<body> 
	<div id="container" class="container mt-5">
        <div class="progress px-1" style="height: 3px;">
            <div class="progress-bar" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="step-container d-flex justify-content-between">
            <div class="step-circle" onclick="displayStep(1)">1</div>
            <div class="step-circle" onclick="displayStep(2)">2</div>
            <div class="step-circle" onclick="displayStep(3)">3</div>
            <div class="step-circle" onclick="displayStep(4)">4</div>
            <div class="step-circle" onclick="displayStep(5)">5</div>
        </div>

        <form id="multi-step-form">
            <div class="step step-1">
            <!-- Step 1 form fields here -->
                <h3>Your Present Address</h3><br>
                <div class="container">
                    <div class="row">
                        <div class="col-sm">
                            <label for="field1" class="form-label">District</label>
            
                            <select name="district" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Discrict.." 
                                class="form-select form-select-solid form-select-sm border border-secondary">
                                <option value="">Select a Country Code</option>
                                <option value="Accounting/Finance" class="text-primary">
                                Accounting/Finance</option>
                                <option value="Education/Training" class="text-primary">
                                    Education/Training</option>
                                <option value="IT/Telecommunication" class="text-primary">
                                    IT/Telecommunication</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="field1" class="form-label">Thana/Upazila</label>
            
                            <select name="district" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Discrict.." 
                                class="form-select form-select-solid form-select-sm border border-secondary">
                                <option value="">Select a Country Code</option>
                                <option value="Accounting/Finance" class="text-primary">
                                Accounting/Finance</option>
                                <option value="Education/Training" class="text-primary">
                                    Education/Training</option>
                                <option value="IT/Telecommunication" class="text-primary">
                                    IT/Telecommunication</option>
                            </select>
                        </div>
                        <div class="col-sm">
                            <label for="field1" class="form-label">Post Office</label>
            
                            <select name="district" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Discrict.." 
                                class="form-select form-select-solid form-select-sm border border-secondary">
                                <option value="">Select a Country Code</option>
                                <option value="Accounting/Finance" class="text-primary">
                                Accounting/Finance</option>
                                <option value="Education/Training" class="text-primary">
                                    Education/Training</option>
                                <option value="IT/Telecommunication" class="text-primary">
                                    IT/Telecommunication</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm">
                            <label for="field1" class="form-label">House No./Road/Village</label>
            
                            <input type="text" class="form-control" id="field2" name="houseNo" placeholder="House No./Road/Village">
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col-6">
                            <label for="field1" class="form-label">Alternat Mobile Number</label>
                            <i class="bi bi-question-circle-fill fw-bold text-dark align-item-end"></i>
                            <br>
                            <br>
                            <input type="text" class="form-control" id="field2" name="houseNo" placeholder="House No./Road/Village">
                        </div>
                    </div>
                </div>
                {{-- <div class="mb-3">
                </div> --}}
                <br>
                <button type="button" class="btn btn-primary next-step ms-5">Next</button>
            </div>

            {{-- Age --}}
            <div class="step step-2">
                <!-- Step 2 form fields here -->
                <h3>Age</h3>
                <br>
                <div class="container align-item-center w-50">
                    <h3>Date of Birth</h3>
                    <div class="row">
                        <div class="col-4">
                            <h5>Day</h5>
                            <select name="district" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Discrict.." 
                                class="form-select form-select-solid form-select-lg border border-secondary">
                                <option value="">Select a Country Code</option>
                                <option value="Accounting/Finance" class="text-primary">
                                Accounting/Finance</option>
                                <option value="Education/Training" class="text-primary">
                                    Education/Training</option>
                                <option value="IT/Telecommunication" class="text-primary">
                                    IT/Telecommunication</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <h5>Month</h5>
                            <select name="district" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Discrict.." 
                                class="form-select form-select-solid form-select-lg border border-secondary">
                                <option value="">Select a Country Code</option>
                                <option value="Accounting/Finance" class="text-primary">
                                Accounting/Finance</option>
                                <option value="Education/Training" class="text-primary">
                                    Education/Training</option>
                                <option value="IT/Telecommunication" class="text-primary">
                                    IT/Telecommunication</option>
                            </select>
                        </div>
                        <div class="col-4">
                            <h5>Year</h5>
                            <select name="district" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Discrict.." 
                                class="form-select form-select-solid form-select-lg border border-secondary">
                                <option value="">Select a Country Code</option>
                                <option value="Accounting/Finance" class="text-primary">
                                Accounting/Finance</option>
                                <option value="Education/Training" class="text-primary">
                                    Education/Training</option>
                                <option value="IT/Telecommunication" class="text-primary">
                                    IT/Telecommunication</option>
                            </select>
                        </div>
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-primary prev-step">Previous</button>
                    <button type="button" class="btn btn-primary next-step">Next</button>
                </div>
            </div>

            <div class="step step-3">
                <!-- Step 3 form fields here -->
                <h3>Step 3</h3>
                <div class="mb-3">
                <label for="field2" class="form-label">Field 2:</label>
                <input type="text" class="form-control" id="field2" name="field2">
                </div>
                <button type="button" class="btn btn-primary prev-step">Previous</button>
                <button type="button" class="btn btn-primary next-step">Next</button>
            </div>

            <div class="step step-4">
                <!-- Step 4 form fields here -->
                <h3>Step 4</h3>
                <div class="mb-3">
                <label for="field2" class="form-label">Field 2:</label>
                <input type="text" class="form-control" id="field2" name="field2">
                </div>
                <button type="button" class="btn btn-primary prev-step">Previous</button>
                <button type="button" class="btn btn-primary next-step">Next</button>
            </div>

            <div class="step step-5">
            <!-- Step 5 form fields here -->
                <h3>Step 5</h3>
                <div class="mb-3">
                    <label for="field3" class="form-label">Field 3:</label>
                    <input type="text" class="form-control" id="field3" name="field3">
                </div>
                <button type="button" class="btn btn-primary prev-step">Previous</button>
                <button type="submit" class="btn btn-success">Submit</button>
            </div>
        </form>
    </div>
</body> 
<script src="{{ asset('js/multi.js') }}"></script> 

</html> 
