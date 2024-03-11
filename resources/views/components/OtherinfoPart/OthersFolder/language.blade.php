<div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed fs-3 fw-semibold text-dark" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            Language Proficiency
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="row justify-content-lg-between mb-5">
                <div class="col-12">
                    <div class="">
                        <div class="text-center" id="languageSummary">
                            <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                            <p class="mt-4">
                                Currently no data exists! Please click on the following button
                                to add your <br>language proficiency.</p>
                        </div>

                        <form id="languageAdd" style="display: none;">
                            <div class="p-1 mb-1">
                                <h5 class="fw-bolder">Language </h5>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="language" class="form-label">Language</label>
                                    <input type="text" class="form-control" id="language"
                                        placeholder="Enter Language">
                                </div>

                                <div class="col-md-6">
                                    <label for="reading" class="form-label">Reading</label>
                                    <select class="form-select" id="reading">
                                        <option selected>Select</option>
                                        <option value="beginner">Beginner</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="advanced">Advanced</option>
                                        <option value="fluent">Fluent</option>
                                    </select>
                                </div>

                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="writing" class="form-label">Writing</label>
                                    <select class="form-select" id="writing">
                                        <option selected>Select</option>
                                        <option value="beginner">Beginner</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="advanced">Advanced</option>
                                        <option value="fluent">Fluent</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="speaking" class="form-label">Speaking</label>
                                    <select class="form-select" id="speaking">
                                        <option selected>Select</option>
                                        <option value="beginner">Beginner</option>
                                        <option value="intermediate">Intermediate</option>
                                        <option value="advanced">Advanced</option>
                                        <option value="fluent">Fluent</option>
                                    </select>
                                </div>

                            </div>


                            <div class="row p-2">
                                <div class="col-md-12">

                                    <button type="submit" class="btn btn-success">Save</button>
                                    <button type="button" class="btn btn-secondary" id="cancelbtn">Cancel</button>
                                </div>
                            </div>
                        </form>
                        <div class="d-flex justify-content-center">
                            <button
                                class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                id="addLanguagebtn">
                                <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                Add language
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
