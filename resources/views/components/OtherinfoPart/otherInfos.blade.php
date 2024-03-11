<div class="tab-pane fade" id="pills-information" role="tabpanel" aria-labelledby="pills-information-tab" tabindex="0">
    <div class="accordion" id="accordionExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button fs-3 fw-semibold text-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Skill
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <div class="row justify-content-lg-between mb-5">
                        <div class="col-12">
                            <div class="text-center">
                                <div class="">
                                    <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                                    <p class="mt-4">
                                        Currently no data exists! Please click on the following button to
                                        add your skill.</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button
                                        class="text-success border border-3 border-success py-2 px-3 w-auto bg-white ">
                                        <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                        Add Skill
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-lg-between mb-5">
                        <div class="col-12">
                            <div class="text-center">
                                <div class="">
                                    <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                                    <p class="mt-4">
                                        Currently no data exists! Please click on the following button to
                                        add your Skill <br> Description.</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button
                                        class="text-success border border-3 border-success py-2 px-3 w-auto bg-white ">
                                        <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                        Add Skill Description
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-lg-between mb-5">
                        <div class="col-12">
                            <div class="text-center">
                                <div class="">
                                    <i class="fa-solid fa-inbox fa-2xl" style="color: #04710b;"></i>
                                    <p class="mt-4">
                                        Currently no data exists! Please click on the following button to
                                        add your <br>Extracurricular Activities.</p>
                                </div>
                                <div class="d-flex justify-content-center">
                                    <button
                                        class="text-success border border-3 border-success py-2 px-3 w-auto bg-white ">
                                        <i class="fa-solid fa-plus fa-sm" style="color: #04710b;"></i>
                                        Add Extracurricular Activities
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Language -->

            @include('components.OtherinfoPart.OthersFolder.language')

            <!-- Link account -->

            @include('components.OtherinfoPart.OthersFolder.linkAccount')

            <!-- Reference-->

            @include('components.OtherinfoPart.OthersFolder.reference')


        </div>
    </div>
</div>
