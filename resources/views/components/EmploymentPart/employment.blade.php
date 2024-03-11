<div class="tab-pane fade" id="pills-employment" role="tabpanel" aria-labelledby="pills-employment-tab" tabindex="0">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button fs-3 fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="true" aria-controls="collapseOne">
                    Employment History
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="mb-5">
                        <div class="row justify-content-lg-between">

                            <div class="col-4">
                                <div>
                                    <h6>Experience 1</h6>
                                    <br>
                                </div>
                                <div>
                                    <h6> Company Name</h6>
                                    <p>Tappware Solutions</p>
                                </div>
                                <div>
                                    <h6>Designation</h6>
                                    <p>Jr. Software Engineer</p>
                                </div>
                                <div>
                                    <h6>Employment Period</h6>
                                    <p>8/20/2023 To Continuing</p>
                                </div>
                               
                            </div>
                            <div class="col-3">
                                <div>
                                    <h6></h6>
                                    <br>
                                    <p></p>
                                </div>
                                <div>
                                    <h6>Company Business</h6>
                                    <p>Software Company</p>
                                </div>
                                <div>
                                    <h6>Department </h6>
                                    <p>Development</p>
                                    <br>
                                </div>
                                <div>
                                    <h6></h6>
                                    <p></p>
                                    <br>
                                </div>
                                
                            </div>
                            <div class="col-2 ">
                                <div class="d-flex">
                                    <button type="button" class="border-0 bg-white text-primary"
                                        data-bs-toggle="modal" data-bs-target="#educationEdit1"
                                        data-bs-whatever="@mdo"> <i class="fa-solid fa-pen-to-square"
                                            style="color: #376ac3;"></i> <span class="fw-bolder">Edit</span>
                                    </button>
                                    <!-- Button trigger modal -->
                                    <button type="button" data-bs-toggle="modal"
                                        data-bs-target="#deleteModel1" class="border-0 bg-white">
                                        <i class="fa-solid fa-trash-can" style="color: #cb1111;"></i> <span
                                            class="text-danger fw-bolder">Delete</span>
                                    </button>
                                </div>

                                <!--Delete Modal -->
                                <div class="modal fade" id="deleteModel1" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel"><i
                                                        class="fa-solid fa-trash-can fa-xl"
                                                        style="color: #cb1111;"></i> Delete!
                                                </h1>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                Are you sure, you want to delete this record?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancle</button>
                                                <button type="button"
                                                    class="btn btn-danger">Yes,Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade " id="educationEdit1" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog ">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit
                                                </h1>
                                                <button type="button" class="btn-close"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="d-flex gap-4">
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">First
                                                                Name:</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Last
                                                                Name:</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-4">
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Father's
                                                                Name:</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Mother's
                                                                Name:</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-4">
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Date
                                                                of Birth</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Gender</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-4">
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Religion</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Marital
                                                                Status</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-4">
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Nationality</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">National Id</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-4">
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Passport
                                                                Number</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Passport Issue
                                                                Date</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-4">
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Primary
                                                                Mobile</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Secondary
                                                                Mobile</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-4">
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Emergency
                                                                Contact</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Primary Email
                                                            </label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-4">
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Alternate
                                                                Email</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Blood
                                                                Group</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                    </div>
                                                    <div class="d-flex gap-4">
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Height
                                                                (meters)</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                        <div class="mb-3">
                                                            <label for="recipient-name"
                                                                class="col-form-label">Weight (kg)</label>
                                                            <input type="text" class="form-control"
                                                                id="recipient-name">
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer d-flex justify-content-start gap-3">
                                                <button type="button" class="btn btn-success"
                                                    data-bs-dismiss="modal">Save</button>
                                                <button type="button"
                                                    class="btn btn-secondary">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-lg-between" >
                            <div>
                                <h6> Responsibilities </h6>
                                <p></p>
                                <br>
                            </div>
                        </div>
                        <div class="row justify-content-lg-between" >
                            <div>
                                <h6> Area of Expertise </h6>
                                <p>PHP (Laravel) in a Software Development Company (7 Months)</p>
                                <br>
                            </div>
                        </div>
                        <div class="row justify-content-lg-between" >
                            <div>
                                <h6> Company Location </h6>
                                <p>New Polton, Dhaka</p>
                                <br>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row justify-content-lg-between">
                            <div class="col-12">
                                <div class="">
                                    <div class="text-center" id="experienceSummary">
                                        <i class="fa-solid fa-inbox fa-2xl " style="color: #2a8335;"></i>
                                        <p class="mt-4">Currently no data exists! Please click on the
                                            following <br>
                                            button to add your employment information.</p>
                                    </div>

                                    <form id="employmentHistory" style="display: none;">

                                        <div class="p-1 mb-1">
                                            <h5 class="fw-bolder">Add Experience</h5>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="Company Name" class="form-label required">Company Name</label>
                                                <input type="text" class="form-control" id="nameOfcompany">


                                            </div>
                                            <div class="col-md-6">
                                                <label for="examTitle" class="form-label">Company Business</label>
                                                <input type="text" class="form-control" id="companyBusiness">

                                            </div>

                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <label for="designation" class="form-label required">Designation</label>
                                                <input type="text" class="form-control" id="designation">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="department" class="form-label">Department</label>
                                                <input type="text" class="form-control" id="department">
                                                <!-- <select class="form-select" id="board">
                                                            <option selected>Select</option>
                                                            <option value="1">Board 1</option>
                                                            <option value="2">Board 2</option>
                                                            <option value="3">Board 3</option>
                                                            </select> -->
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label for="employmentPeriod" class="form-label required">Employment
                                                    Period</label>
                                                <div class="d-flex gap-3">
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="date" id="fromDate"
                                                            name="fromDate">

                                                        <div class="form-check mt-2">
                                                            <input type="checkbox" id="currentlyWorking"
                                                                name="currentlyWorking" onchange="toggleToDateField()">
                                                            <label class="form-check-label"
                                                                for="currentlyWorking">Currently
                                                                Working</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="date" id="toDate"
                                                            name="toDate" placeholder="MM/DD/YYYY">
                                                        <input class="form-control" type="text" id="toDateText"
                                                            name="toDate" style="display: none;">
                                                    </div>


                                                </div>



                                            </div>
                                            <!-- <div class="col-md-6">
                                                    <label for="endDate" class="form-label"></label>
                                                    <input type="date" class="form-control" id="endDate" >
                                                    
                                                </div> -->

                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label for="instituteName" class="form-label">Responsibilities</label>
                                                <textarea rows="4" class="form-control" id="instituteName"></textarea>

                                            </div>
                                        </div>



                                        <div class="row mb-3">
                                            <div class="col-md-12">
                                                <label for="companyLocation" class="form-label">Company
                                                    Location</label>
                                                <input type="text" class="form-control" id="companyLocation">

                                            </div>

                                        </div>

                                        <!-- Add the rest of the form fields here -->
                                        <div class="row p-3">
                                            <div class="col-md-12">

                                                <button type="submit" class="btn btn-success">Save</button>
                                                <button type="button" class="btn btn-secondary"
                                                    id="cancelHistorybtn">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="zoom-on-hover d-flex justify-content-center"
                                        id="addEmploymentHistorybtn" type="button">
                                        <h6 class="text-success border border-3 border-success mx-5 py-2 ">
                                            <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                            Add Experience (If Required)</ </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Employment History (For Retired Army Person)
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <div class="container">
                                <div class="row justify-content-lg-between">
                                    <div class="col-12">
                                        <div class="text-center">
                                            <div class="">
                                                <i class="fa-solid fa-inbox fa-2xl " style="color: #2a8335;"></i>
                                                <p class="mt-4">
                                                    If you are a retired army person then you can give that
                                                    information by clicking <br> on the following button.</p>
                                            </div>
                                            <div>
                                                <h6 class="text-success border border-3 border-success mx-5 py-2 ">
                                                    <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                    Add Education (If Required)</ </div>
                                            </div>
                                        </div>
                                        <div class="col-4">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->

    </div>
</div>