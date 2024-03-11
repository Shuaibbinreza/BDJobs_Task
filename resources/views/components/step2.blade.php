

        @extends('layout.master')

        @section('content')
        
            <!--begin::App-->
            {{-- <h1>Shuaib</h1> --}}
            <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
                <!--begin::Page-->
                <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
                    @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/_header')
                    <!--begin::Wrapper-->
                    <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                        @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/_sidebar')
                        <!--begin::Main-->
                        <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                            <!--begin::Content wrapper-->
                            <div class="d-flex flex-column flex-column-fluid">
                                @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/_toolbar')
                                <!--begin::Content-->
                                <div id="kt_app_content" class="app-content flex-column-fluid">
                                    <!--begin::Content container-->
                                    <div id="kt_app_content_container" class="app-container container-fluid">
                                        {{-- {{ $slot }} --}}
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
                                    </div>
                                    <!--end::Content container-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Content wrapper-->
                            @include(config('settings.KT_THEME_LAYOUT_DIR').'/partials/sidebar-layout/_footer')
                        </div>
                        <!--end:::Main-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Page-->
            </div>
            <!--end::App-->
        
            @include('partials/_drawers')
        
            @include('partials/_modals')
        
            @include('partials/_scrolltop')
        
        @endsection
        
