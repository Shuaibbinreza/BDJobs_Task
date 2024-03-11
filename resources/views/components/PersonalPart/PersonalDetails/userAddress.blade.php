<div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
        <button class="accordion-button collapsed fs-3 fw-semibold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
            aria-expanded="false" aria-controls="collapseTwo">
            Address Details
        </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
        data-bs-parent="#accordionExample">
        <div class="accordion-body">
            <div class="container">
                <div class="row justify-content-lg-between">
                    {{-- <div class="col-4"> --}}
                    <div class="d-flex justify-content-between">
                        <div>
                            <h6>Present Address</h6>
                            <div class="row">
                                <div class="col-sm">
                                    <p> <b>House No:</b> {{ $address->houseno }} </p>
                                </div>
                                <div class="col-sm">
                                    <p><b>Post Office:</b> {{ $address->post_office }}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm">
                                    <p> <b>Thana/Upazila:</b> {{ $address->thana }} </p>
                                </div>
                                <div class="col-sm">
                                    <p><b>District:</b> {{ $address->district }}</p>
                                </div>
                            </div>
                        </div>
                        <div>


                            <!-- Button trigger modal -->
                            {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
    Launch static backdrop modal
</button> --}}

                            <button type="button" class="border-0 bg-white text-primary" data-bs-toggle="modal"
                                data-bs-target="#addressEdit" data-bs-whatever="@mdo"> <i
                                    class="fa-solid fa-pen-to-square" style="color: #376ac3;"></i> Edit
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="addressEdit" data-bs-backdrop="static" data-bs-keyboard="false"
                                tabindex="-1" aria-labelledby="addressEditLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="addressEditLabel">User Address Edit</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="d-flex justify-content-between gap-2 mb-5">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select District</option>
                                                        <option value="1">Dhaka</option>
                                                        <option value="2">Barishal</option>
                                                        <option value="3">Khulna</option>
                                                    </select>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select Thana</option>
                                                        <option value="1">Dhaka</option>
                                                        <option value="2">Barishal</option>
                                                        <option value="3">Khulna</option>
                                                    </select>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Select P.O </option>
                                                        <option value="1">Dhaka</option>
                                                        <option value="2">Barishal</option>
                                                        <option value="3">Khulna</option>
                                                    </select>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">House
                                                            No</label>
                                                        <input type="email" class="form-control"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1" class="form-label">Post
                                                            Office</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword1">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1"
                                                            class="form-label">Thana/Upazila</label>
                                                        <input type="email" class="form-control"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp">

                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="exampleInputPassword1"
                                                            class="form-label">District</label>
                                                        <input type="password" class="form-control"
                                                            id="exampleInputPassword1">
                                                    </div>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <div class="mb-3">
                                                        <label for="exampleInputEmail1" class="form-label">Permanent
                                                            Address</label>
                                                        <input type="email" class="form-control"
                                                            id="exampleInputEmail1" aria-describedby="emailHelp">

                                                    </div>
                                                    {{-- <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">District</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                              </div> --}}
                                                </div>


                                            </form>
                                        </div>
                                        <div class="d-flex gap-3 m-5">
                                            <button type="button" class="btn btn-primary  ">Save</button>
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div>
                        <h6> Permanent Address</h6>
                        <p>Same as Present Address</p>
                    </div>
                    {{-- </div> --}}
                    <div class="col-4">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
