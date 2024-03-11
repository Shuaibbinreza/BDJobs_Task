<!DOCTYPE html> 
<html> 

    <head> 
    <link href="multiform.bundle.css" rel="stylesheet">
	<link href= 
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />


	<script src= 
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'> 
	</script> 

	<script src= 
        'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'> 
	</script> 
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

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

        <form id="multi-step-form" 
                action="/submit-multi-form"
                {{-- action="{{route(submit-multi-form)}}" --}}
                method="POST" 
                enctype="multipart/form-data">
            @csrf
            @method('POST')
            <div class="step step-1 card">
                <!-- Step 1 form fields here -->
                <div class="card-header">
                    <h2 class="m-5">Your Present Address</h2>
                </div>
                {{-- <hr> --}}
                <div class="container card-body p-5">
                    <div class="row">
                        <div class="col-sm">
                            <label for="district" class="form-label required">District</label>
            
                            <select name="district" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select your Discrict.." 
                                class="form-select form-select-solid form-select-sm border border-secondary" id="district" required>
                                <option value="" selected="selected">Select a District</option>
                            </select>
                            <div id="district-error" class="text-danger"></div>
                        </div>
                        <div class="col-sm">
                            <label for="field1" class="form-label required">Thana/Upazila</label>
            
                            <select name="thana" aria-label="Select thana" data-control="select2" data-placeholder="Select your thana.." 
                                class="form-select form-select-solid form-select-sm border border-secondary" id="thana">
                                <option value="">Select Thana/Upazila</option>
                            </select>

                            <div id="thana-error" class="text-danger"></div>
                        </div>
                        <div class="col-sm">
                            <label for="postoffice" class="form-label required">Post Office</label>
            
                            <select name="post_office" aria-label="Select post office" data-control="select2" data-placeholder="Select your post office.." 
                                class="form-select form-select-solid form-select-sm border border-secondary" id="postoffice">
                                <option value="">Select Post office</option>
                            </select>
                            <div id="po-error" class="text-danger"></div>
                        </div>
                    </div>
                    {{-- <div id="step-1-error1" class="text-danger"></div> --}}
                    <br>
                    <div class="row">
                        <div class="col-sm">
                            <label for="houseno" class="form-label required">House No./Road/Village</label>
                            <input type="text" class="form-control form-control-sm" id="houseNo" name="houseno" placeholder="House No./Road/Village" required>
                            <div id="house-error" class="text-danger"></div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-6">
                            <label for="field1" class="form-label required">Alternat Mobile Number</label>
                            <i class="bi bi-question-circle-fill fw-bold text-dark align-item-end"></i>
                            <br>
                            <input type="text" class="form-control form-control-sm" id="altphone" name="alt_mobile" placeholder="Alternate Mobile Number">
                            <div id="phone-error" class="text-danger"></div>
                        </div>
                    </div>
                </div>
                {{-- <div class="mb-3">
                </div> --}}
                <br>

                {{-- <div class="step step-1"> --}}
                    <!-- Step 1 form fields here -->
                    {{-- <h3>Your Present Address</h3> --}}
                    <!-- Other form fields -->
                <div id="step-error" class="text-danger"></div> <!-- Error message container -->
                {{-- </div> --}}
                
                {{-- <button type="button" class="btn btn-primary next-step ms-5">Next</button> --}}
                
                <div class="p-5">
                    <button type="button" class="btn btn-primary next-step ms-5 float-end">Next <i class="fa-solid fa-arrow-right fa-2xl"></i></button>
                </div>
            </div>

            {{-- Age --}}
            <div class="step step-2 card" style="display: none">
                <!-- Step 2 form fields here -->
                <div class="card-header">
                    <h2 class="p-5">Age</h2>
                </div>
                <div class="container align-item-center w-50 card-body">
                    <h3>Date of Birth</h3>
                    <div class="row">
                        <div class="col-4">
                            <h5 class="required">Day</h5>
                            <select name="day" aria-label="Select a day" data-control="select2" data-placeholder="Date" 
                                class="form-control form-select form-select-solid form-select-lg border border-secondary"
                                id="day">
                                <option value="">Select Date</option>
                                <option value="1" class="text-primary">
                                    1</option>
                                <option value="2" class="text-primary">
                                    2</option>
                                <option value="3" class="text-primary">
                                    3</option>
                                <option value="4" class="text-primary">
                                    4</option>
                            </select>
                            <span id="error-day" class="text-danger"></span>
                        </div>
                        <div class="col-4">
                            <h5 class="required">Month</h5>
                            <select name="month" aria-label="Select Month" data-control="select2" data-placeholder="Select Month" 
                                class="form-select form-select-solid form-select-lg border border-secondary" id="month">
                                <option value="">Select Month</option>
                                <option value="January" class="text-primary">January</option>
                                <option value="February" class="text-primary">February</option>
                                <option value="March" class="text-primary">March</option>
                            </select>
                            <span id="error-month" class="text-danger"></span>
                        </div>
                        <div class="col-4">
                            <h5 class="required">Year</h5>
                            <select name="year" aria-label="Select year" data-control="select6" data-placeholder="Select Year.." 
                                class="form-select form-select-solid form-select-lg border border-secondary" id="year">
                                <option value="">Select year</option>
                                <option value="2024" class="text-primary">
                                    2024</option>
                                <option value="2023" class="text-primary">
                                    2023</option>
                                <option value="2025" class="text-primary">
                                    2025</option>
                            </select>
                            <span id="error-year" class="text-danger"></span>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div id="step-error" class="text-danger"></div>
                    <button type="button" class="btn btn-info prev-step float-start"><i class="fa-solid fa-arrow-left fa-2xl"></i> Previous</button>
                    <button type="button" class="btn btn-primary next-step float-end">Next <i class="fa-solid fa-arrow-right fa-2xl"></i></i></button>
                </div>
            </div>

            {{-- Step 3 --}}
            <div class="step step-3 card" style="display: none" >
                <!-- Step 3 form fields here -->
                <div class="card-header">
                    <h3 class="p-5">Select Your Job Type</h3>
                </div>
                <div class="container card-body">
                    <div class="row">
                        <div class="col-sm">
                            <label for="field1" class="form-label required">Select Job Category</label>

                            <select name="prefered_job_type" aria-label="Select a Country Codde" 
                                data-control="select2" data-placeholder="Select Job category.." 
                                class="form-select form-select-solid form-select-sm border border-secondary"
                                id="job-cat">
                                <option value="">Select a Job Category</option>
                                <option value="Accounting/Finance" class="text-primary">
                                    Accounting/Finance</option>
                                <option value="Education/Training" class="text-primary">
                                    Education/Training</option>
                                <option value="IT/Telecommunication" class="text-primary">
                                    IT/Telecommunication</option>
                            </select>
                            <span id="error-cat" class="text-danger"></span>
                        </div>                        
                    </div>
                    <br><br>
                    <h3 class="required">Select Work Type</h3>
                    <div class="row bg-secondary p-5 pb-10">
                        <div class="col-sm">
                            {{-- <label for="field1" class="form-label">Select Work Type</label> --}}
                            <div id="selectedValues"></div><br><br>
                            <select name="worktype" aria-label="Select Work Type" onchange="showCheckboxes()" 
                                data-control="select2" data-placeholder="Select Work Type.." 
                                class="form-select form-control form-select-solid form-select-lg border border-secondary" 
                                id="worktype">
                                <option value="">Select Work Type</option>
                                <option value="C++" class="text-primary">
                                    C++</option>
                                <option value="Laravel" class="text-primary">
                                    Laravel</option>
                                <option value="Spring Boot" class="text-primary">
                                    Spring Boot</option>
                            </select>
                            <span id="error-worktype" class="text-danger"></span>
                        </div> 
                        
                    </div>
                    <br><br>
                    <div class="row">
                        <div class="col-sm">
                            <h4 for="field1" class="form-label">Do you have any experience?</h4><br><br>
                            <input class="form-check-input" onclick="showInputField()" 
                                type="radio" name="exp" id="expradio1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                Yes
                            </label>
                            <input class="form-check-input" onclick="hideInputField()" 
                                type="radio" name="exp" id="expradio2" >
                            <label class="form-check-label" for="flexRadioDefault2">
                                No
                            </label>
                            <br><br>
                            <div id="inputFieldContainer" style="display: block;">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="name" class="text-gray-700 fw-semibold fs-20 required">Latest Company Name</label>
                                        <input type="text" id="cname" 
                                            placeholder="Company Name" 
                                            name="company_name" autocomplete="off" 
                                            class="form-control form-control-sm bg-transparent"/>
                                        <span id="error-cname" class="text-danger"></span>
                                    </div>  
                                    <div class="col-sm">
                                        <label for="designation" class="text-gray-700 fw-semibold fs-20 required">Latest Designation</label>
                                        <input type="text" id="cdes" 
                                            placeholder="designation" 
                                            name="designation" autocomplete="off" 
                                            class="form-control form-control-sm bg-transparent"/>
                                        <span id="error-cdes" class="text-danger"></span>
                                    </div>                       
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="name" class="text-gray-700 fw-semibold fs-20 required">Employment Periood</label>
                                        <input type="date" id="jobstart" 
                                            placeholder="Start Date" name="job_start" 
                                            autocomplete="off" class="form-control form-control-sm bg-transparent"/>
                                        <span id="error-jobstart" class="text-danger"></span>
                                    </div>  
                                    <div class="col-sm" style="display: block" id="expDiv">
                                        <label for="name" class="text-gray-700 fw-semibold fs-20"></label>
                                        <input type="date" placeholder="Last Date" 
                                            name="job_end" autocomplete="off" 
                                            class="form-control form-control-sm bg-transparent"
                                            id="jobend"/>
                                    </div>    
                                    <div class="form-group form-check ms-5 mt-5">
                                        <input type="checkbox" class="form-check-input" 
                                            name="experienceCK" id="jobCheck">
                                        <label class="form-check-label" for="exampleCheck1">Still Working Here</label>
                                    </div>                   
                                    <span id="error-jobend" class="text-danger"></span>                                
                                    <br>
                                </div>
                            </div>
                            <br><br>
                        </div>                        
                    </div>
                    <div>
                        <button type="button" class="btn btn-info prev-step float-start"><i class="fa-solid fa-arrow-left fa-2xl"></i> Previous</button>
                        <button type="button" class="btn btn-primary next-step float-end">Next <i class="fa-solid fa-arrow-right fa-2xl"></i></i></button>
                    </div>
                    <br>
                    {{-- <x-job_exp_radio/> --}}
                </div>
            </div>

            <div class="step step-4 card" style="display: none" >
                <!-- Step 4 form fields here -->
                <div class="card-header">
                    <h1 class="p-5">Educational Qualifications</h1>
                </div>
                <div class="container card-body">
                    <h4>Description of Institutional Education</h4>
                    <div class="row">
                        <div class="col-sm">
                            <label for="field1" class="form-label">Do you have any Academic Education?</label><br><br>
                            <input class="form-check-input" 
                                onclick="showInputFieldEdu()" 
                                type="radio" name="edu" id="yesEdu" checked>
                            <label class="form-check-label" for="flexRadioDefaultEdu1">
                                Yes
                            </label>
    
                            <input class="form-check-input" onclick="hideInputFieldEdu()" type="radio" name="edu" id="noEdu" >
                            <label class="form-check-label" for="flexRadioDefaultEdu2">
                                No
                            </label>
                            <br><br>
                            <div id="inputFieldContainerEdu" style="display: block;">
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="name" class="text-gray-700 fw-semibold fs-20 required">Latest Education</label>
                                        <input type="text" id="edutitle" 
                                            placeholder="Education" name="education_title" 
                                            autocomplete="off" class="form-control form-control-sm bg-transparent"/>
                                        <span id="error-edutitle" class="text-danger"></span>
                                    </div>  
                                    <div class="col-sm">
                                        <label for="name" class="text-gray-700 fw-semibold fs-20 required">Latest Institute</label>
                                        <input type="text" id="eduins" 
                                            placeholder="Latest Institute" 
                                            name="education_institute" autocomplete="off" 
                                            class="form-control form-control-sm bg-transparent"/>
                                        <span id="error-eduins" class="text-danger"></span>                   
                                    </div>    
                                </div>
                                <br><br>
                                <div class="row">
                                    <div class="col-sm">
                                        <label for="name" class="text-gray-700 fw-semibold fs-20 required">Educational Periood</label>
                                        <input type="date" placeholder="Educational Start" 
                                            name="education_start" 
                                            autocomplete="off" id="edustart"
                                            class="form-control form-control-sm bg-transparent"/>
                                        <span id="error-edustart" class="text-danger"></span> 
                                    </div>  
                                    <div class="col-sm edDiv" id="educationEnd" style="display: block">
                                        <label for="name" class="text-gray-700 fw-semibold fs-20"></label>
                                        <input type="date" 
                                            placeholder="Educational End" 
                                            id="edEnd" name="education_end" 
                                            autocomplete="off" 
                                            class="form-control form-control-sm bg-transparent"  />
                                    </div>                       
                                    <div class="form-group form-check ms-5 mt-5">
                                        <input type="checkbox" class="form-check-input" 
                                            id="continueCheck" name="educationCK">
                                        <label class="form-check-label" for="exampleCheck1">Still Studying Here</label>
                                    </div>
                                    <span id="error-edEnd" class="text-danger"></span> 
                                </div>
                            </div>
                            <br><br>
                        </div>                        
                    </div>
                    <button type="button" class="btn btn-info prev-step float-start"><i class="fa-solid fa-arrow-left fa-2xl"></i> Previous</button>
                    <button type="button" class="btn btn-primary next-step float-end">Next <i class="fa-solid fa-arrow-right fa-2xl"></i></i></button>
                </div>
            </div>

            <div class="step step-5 card" style="display: none">
                <!-- Step 5 form fields here -->
                <div class="card-header">
                    <h3 class="p-5">Profile Image</h3>
                </div>
                <div class="container align-item-center card-body">
                    <div class="image-input image-input-outline align-item-center" data-kt-image-input="true" style="background-image: url('assets/media/svg/avatars/blank.svg')">
                        <!--begin::Preview existing avatar-->
                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-1.jpg)"></div>
                        <!--end::Preview existing avatar-->
                        <!--begin::Label-->
                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                            <i class="ki-duotone ki-pencil fs-7">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <!--begin::Inputs-->
                            <input type="file" name="profile_image" />
                            {{-- <input type="hidden" name="profile_image_remove" /> --}}
                            <!--end::Inputs-->
                        </label>
                        <!--end::Label-->
                        <!--begin::Cancel-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Cancel-->
                        <!--begin::Remove-->
                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                            <i class="ki-duotone ki-cross fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Remove-->
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-info prev-step"><i class="fa-solid fa-arrow-left fa-2xl"></i> Previous</button>
                    <button type="submit" class="btn btn-success" onclick="submitForm()">Submit</button>
                </div>
                {{-- <x-step2/> --}}
            </div>
        </form>
    </div>

    {{-- <p>{{ config('auth.global_variable') }}</p> --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        
        
    </script>
</body> 

</html> 
