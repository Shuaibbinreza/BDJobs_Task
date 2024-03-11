<div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
        <button class="accordion-button collapsed fs-3 fw-semibold text-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
            References
        </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="row justify-content-lg-between mb-5">
                <div class="col-12">
                    <div class="">
                        <div class="text-center" id="referenceSummary">
                            <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                            <p class="mt-4">
                                Currently no data exists! Please click on the following button
                                to add your <br>reference.</p>
                        </div>

                        <form class="" id="referenceAdd" style="display: none;">
                            <div class="p-1 mb-1">
                                <h5 class="fw-bolder">Reference </h5>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter Name">
                                </div>
                                <div class="col-md-6">
                                    <label for="designation" class="form-label">Designation</label>
                                    <input type="text" class="form-control" id="designation"
                                        placeholder="Enter Designation">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="organization" class="form-label">Organization</label>
                                    <input type="text" class="form-control" id="organization"
                                        placeholder="Enter Organization">
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter Email">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="relation" class="form-label">Relation</label>
                                    <select class="form-select" id="relation">
                                        <option selected>Relative</option>
                                        <option value="father">Family Friend</option>
                                        <option value="mother">Academic</option>
                                        <option value="sibling">Professional</option>
                                        <option value="spouse">Others</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="mobile" class="form-label">Mobile</label>
                                    <input type="text" class="form-control" id="mobile"
                                        placeholder="Enter Mobile Number">
                                </div>

                            </div>
                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <label for="phoneOff" class="form-label">Phone (Off)</label>
                                    <input type="text" class="form-control" id="phoneOff"
                                        placeholder="Enter Office Phone Number">
                                </div>

                                <div class="col-md-6">
                                    <label for="phoneRes" class="form-label">Phone (Res)</label>
                                    <input type="text" class="form-control" id="phoneRes"
                                        placeholder="Enter Residential Phone Number">
                                </div>
                            </div>
                            <div class="row mb-3">

                                <div class="col-md-6">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea type="text" class="form-control" id="address" rows="3" placeholder="Enter Address"></textarea>
                                </div>
                            </div>
                            <!-- Add the rest of the form fields here -->
                            <div class="row p-1">
                                <div class="col-md-12">

                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="button" class="btn btn-secondary"
                                        id="referanceCancelBtn">Cancel</button>
                                </div>
                            </div>
                        </form>


                        <div class="d-flex justify-content-center">
                            <button
                                class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover "
                                id="referanceAddBTN">
                                <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                Add Reference
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
