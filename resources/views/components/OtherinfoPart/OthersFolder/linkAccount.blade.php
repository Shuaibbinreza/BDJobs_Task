<div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
        <button class="accordion-button collapsed fs-3 fw-semibold text-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            Link Accounts
        </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="row justify-content-lg-between mb-5">
                <div class="col-12">
                    <div class="">
                        <div class="text-center" id="accountSummary">
                            <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                            <p class="mt-4">
                                There is currently no data! To add your Link, kindly click the
                                following button. <br>You can add maximum three links.</p>
                        </div>

                        <form id="accountAdd" style="display: none;">
                            <div class="p-1 mb-1">
                                <h5 class="fw-bolder">Account Link </h5>
                            </div>
                            <div class="row mb-3">

                                <div class="col-md-4">
                                    <label for="acount" class="form-label">Choose
                                        Account</label>
                                    <select class="form-select" id="account">
                                        <option selected>Facebook</option>
                                        <option value="beginner">LinkedIn</option>
                                        <option value="intermediate">GitHub</option>
                                        <option value="advanced">YouTube</option>
                                        <option value="fluent">Others</option>
                                    </select>
                                </div>

                                <div class="col-md-8">
                                    <label for="url" class="form-label">URL</label>
                                    <input type="text" class="form-control" id="url" placeholder="Enter URL">
                                </div>


                            </div>


                            <div class="row p-2">
                                <div class="col-md-12">

                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="button" class="btn btn-secondary" id="canceladdbtn">Cancel</button>
                                </div>
                            </div>
                        </form>


                        <div class="d-flex justify-content-center">
                            <button
                                class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                id="linkAccountbtn">
                                <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                Add Link
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
