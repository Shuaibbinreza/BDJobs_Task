<div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingTwo">
        <button class="accordion-button collapsed fs-3 fw-semibold text-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
            Training Summary
        </button>
    </h2>
    <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo"
        data-bs-parent="#accordionFlushExample">
        <div class="accordion-body">
            <div class="container">
                <div class="row justify-content-lg-between">
                    <div class="col-12">
                        <div class="">
                            <div class="text-center" id="trainingSummary">
                                <i class="fa-solid fa-inbox fa-2xl " style="color: #2a8335;"></i>
                                <p class="mt-4">Currently no data exists! Please click on the
                                    following
                                    <br>
                                    button to add your training information.
                                </p>
                            </div>

                            <form class="row" id="trainingForm" style="display:   none;">
                                <div class="p-3">
                                    <h6 class="fw-bolder">Training</h6>
                                </div>
                                <div class="col-md-12">
                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-3">
                                            <label for="trainingTitle" class="form-label">Training
                                                Title</label>
                                            <input type="text" class="form-control" id="trainingTitle">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="country" class="form-label">Country</label>
                                            <input type="text" class="form-control" id="country">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-3">
                                            <label for="topicsCovered" class="form-label">Topics
                                                Covered</label>
                                            <input type="text" class="form-control" id="topicsCovered">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="trainingYear" class="form-label">Training
                                                Year</label>
                                            <select class="form-select" id="trainingYear">
                                                <option selected>Select</option>
                                                <!-- Add options for years -->
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-3">
                                            <label for="institute" class="form-label">Institute</label>
                                            <input type="text" class="form-control" id="institute">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="duration" class="form-label">Duration</label>
                                            <input type="text" class="form-control" id="duration">
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-md-6 mb-3">
                                            <label for="location" class="form-label">Location</label>
                                            <input type="text" class="form-control" id="location">
                                        </div>
                                    </div>

                                    <div class="row p-3">
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-success me-2">Save</button>
                                            <button type="button" class="btn btn-secondary"
                                                id="cancelTrainingBtn">Cancel</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="zoom-on-hover d-flex justify-content-center" id="addTrainingBtn" type="button">
                                <div class="text-success border border-3 border-success px-2 py-2 w-auto">
                                    <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                    Add
                                    Training Summary (If Required)
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
