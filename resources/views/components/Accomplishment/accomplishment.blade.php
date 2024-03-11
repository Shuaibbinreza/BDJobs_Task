<div class="tab-pane fade" id="pills-accomplishment" role="tabpanel" aria-labelledby="pills-accomplishment-tab"
    tabindex="0">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button fs-3 fw-semibold text-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Accomplishment
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="container">
                        <div class="row justify-content-lg-between">
                            <div class="">
                                <div class="">
                                    <div class="text-center" id="accomplishmentText">
                                        <i class="fa-solid fa-inbox fa-2xl " style="color: #2a8335;"></i>
                                        <p class="mt-4">Currently no data exists! Select & add your
                                            portfolio url, Papers/Journal, <br>
                                            Publications, etc to enhance your profile</p>
                                    </div>
                                    <div class="d-flex justify-content-center gap-3">

                                        <!-- Portfolio button -->
                                        <div class="" id="activeForm">
                                            <form id="portfolioForm" style="display: none;">
                                                <div class="">
                                                    <h6 class="fw-bolder">Portfolio (Max 2) </h6>


                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Title<span
                                                                class="text-danger">*</span></label>
                                                        <input type="" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="" class="form-label">URL</label>
                                                        <input type="" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Description<span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Add the rest of the form fields here -->
                                                <div class="mb-4">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        id="cancelPortfolioBtn">Close</button>
                                                </div>
                                            </form>
                                            <button
                                                class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                type="button" id="addPortfolioBtn">
                                                <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i> Portfolio
                                            </button>
                                        </div>


                                        <!-- Publications button -->
                                        <div class="" id="publicationActiveForm">

                                            <form id="publicationForm" style="display: none;">
                                                <div class="">
                                                    <h5 class="fw-bolder text-success">Publication <span
                                                            class="text-muted fw-bolder">(<span class="font-italic">Max
                                                                5</span>)</span>
                                                    </h5>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Title<span
                                                                class="text-danger">*</span></label>
                                                        <input type="" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Issued On</label>
                                                        <input type="date" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="" class="form-label">URL</label>
                                                        <input type="" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Description<span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Add the rest of the form fields here -->
                                                <div class="mb-4">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        id="cancelPublicationBtn">Close</button>
                                                </div>
                                            </form>
                                            <button
                                                class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                type="button" id="addPublicationsBtn">
                                                <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                Publication
                                            </button>

                                        </div>

                                        <!-- Awards/ Honors button -->
                                        <div class="" id="awardActiveForm">

                                            <form id="awardForm" style="display: none;">
                                                <div class="">
                                                    <h5 class="fw-bolder text-success">Awards/Honors <span
                                                            class="text-muted fw-bolder">(<span
                                                                class="font-italic">Max 5</span>)</span>
                                                    </h5>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Title<span
                                                                class="text-danger">*</span></label>
                                                        <input type="" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Issued On</label>
                                                        <input type="date" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="" class="form-label">URL</label>
                                                        <input type="" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Description<span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Add the rest of the form fields here -->
                                                <div class="mb-4">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        id="cancelAwardBtn">Close</button>
                                                </div>
                                            </form>
                                            <button
                                                class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                type="button" id="addAwardsBtn">
                                                <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                                Awards/Honors
                                            </button>

                                        </div>


                                        <!-- Projects -->

                                        <div class="" id="projectActiveForm">

                                            <form id="projectForm" style="display: none;">
                                                <div class="">
                                                    <h5 class="fw-bolder text-success">Projects <span
                                                            class="text-muted fw-bolder">(<span
                                                                class="font-italic">Max 5</span>)</span>
                                                    </h5>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Title<span
                                                                class="text-danger">*</span></label>
                                                        <input type="" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Issued On</label>
                                                        <input type="date" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="" class="form-label">URL</label>
                                                        <input type="" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Description<span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Add the rest of the form fields here -->
                                                <div class="mb-4">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        id="cancelProjectBtn">Close</button>
                                                </div>
                                            </form>
                                            <button
                                                class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                type="button" id="addProjectBtn">
                                                <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>Projects
                                            </button>

                                        </div>

                                        <!-- Others -->

                                        <div class="" id="othersActiveForm">

                                            <form id="othersForm" style="display: none;">
                                                <div class="">
                                                    <h5 class="fw-bolder text-success">Others <span
                                                            class="text-muted fw-bolder">(<span
                                                                class="font-italic">Max 5</span>)</span>
                                                    </h5>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Title<span
                                                                class="text-danger">*</span></label>
                                                        <input type="" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Issued On</label>
                                                        <input type="date" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="" class="form-label">URL</label>
                                                        <input type="" class="form-control" id=""
                                                            aria-describedby="">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="" class="form-label">Description<span
                                                                class="text-danger">*</span></label>
                                                        <div class="form-floating">
                                                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Add the rest of the form fields here -->
                                                <div class="mb-4">
                                                    <button type="submit" class="btn btn-success">Save</button>
                                                    <button type="button" class="btn btn-secondary"
                                                        id="cancelOthersBtn">Close</button>
                                                </div>
                                            </form>
                                            <button
                                                class="text-success border border-3 border-success py-2 px-3 w-auto bg-white zoom-on-hover"
                                                type="button" id="addOthersBtn">
                                                <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i> Others
                                            </button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
