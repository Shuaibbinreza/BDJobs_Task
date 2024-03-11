<x-auth-layout>

    <div class="card p-10"> 
        <!--begin::Form-->
        <form class="form w-100" novalidate="novalidate" id="kt_sign_up_form" data-kt-redirect-url="{{ route('login') }}" action="{{ route('register') }}">
            @csrf
            <!--begin::Heading-->
            <div class="text-center mb-11">
                <!--begin::Title-->
                <h1 class="text-dark fw-bolder mb-3">
                    Sign Up
                </h1>
            </div>
            
            <div class="separator separator-content my-14">
                <span class="w-125px text-gray-500 fw-semibold fs-7">Register with Your Email</span>
            </div>
            <!--end::Separator-->
    
            <!--begin::Input group--->
            <div class="fv-row mb-8">
                <!--begin::Name-->
                <label for="name" class="text-gray-700 fw-semibold fs-20">Name</label>
                <input type="text" placeholder="Name" name="name" autocomplete="off" class="form-control bg-transparent"/>
                <!--end::Name-->
            </div>
    
            <div class="fv-row mb-8">
                <!--begin::Name-->
                <label for="name" class="text-gray-700 fw-semibold fs-20">Gender</label>
    
                <input type="radio" class="btn-check" name="options" id="option1" autocomplete="off" checked>
                <label class="btn btn-secondary fw-bold" for="option1">
                    <i class="bi bi-gender-male"></i>
                    Male
                </label>
    
                <input type="radio" class="btn-check" name="options" id="option2" autocomplete="off">
                <label class="btn btn-secondary" for="option2">
                    <i class="bi bi-gender-female"></i>
                    Female
                </label>
    
                <input type="radio" class="btn-check" name="options" id="option4" autocomplete="off">
                <label class="btn btn-secondary" for="option4">
                    <i class="bi bi-gender-female"></i>
                    Others
                </label>
            </div>
    
            <div class="row mb-8">
                <!--begin::Label-->
                <label class="text-gray-700 fw-semibold fs-20">Select your skill from following list
                </label><br>
                <select name="countrycode" aria-label="Select a Country Codde" data-control="select2" data-placeholder="Select a skill.." 
                    class="form-select form-select-solid form-select-lg border border-secondary">
                    <option value="">Select a Country Code</option>
                    <option value="Accounting/Finance" class="text-primary">
                    Accounting/Finance</option>
                    <option value="Education/Training" class="text-primary">
                        Education/Training</option>
                    <option value="IT/Telecommunication" class="text-primary">
                        IT/Telecommunication</option>
                </select>
            </div>
    
            <!--begin::Input group--->
            <div class="fv-row mb-8">
                <!--begin::Email-->
                <label for="name" class="text-gray-700 fw-semibold fs-20">Email Address</label>
                <input type="text" placeholder="Email" name="email" autocomplete="off" class="form-control bg-transparent"/>
                <!--end::Email-->
            </div>
    
            <div class="fv-row mb-8">
                <!--begin::Email-->
                <label for="name" class="text-gray-700 fw-semibold fs-20">Mobile Number</label><br>
                <select name="skill" aria-label="Select a skill" data-control="select2" data-placeholder="Select a country code.." 
                    class="form-select form-select-solid form-select-lg border border-secondary">
                    <option value="">Select a skill</option>
                    <option value="BD" class="text-primary">
                    Bangladesh(+88)</option>
                    <option value="IND" class="text-primary">
                        India(91)</option>
                    <option value="USA" class="text-primary">
                        USA(1)</option>
                </select>
                
                <br>
                <br>
                <input type="text" placeholder="Phone" name="phone" autocomplete="on" class="form-control bg-transparent"/>
            </div>
    
            <!--begin::Input group-->
            <div class="fv-row mb-8" data-kt-password-meter="true">
                <!--begin::Wrapper-->
                <div class="mb-1">
                    <!--begin::Input wrapper-->
                    <div class="position-relative mb-3">
                        <label for="name" class="text-gray-700 fw-semibold fs-20">Name</label>
                        <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" autocomplete="off"/>
    
                        <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                            <i class="bi bi-eye-slash fs-2"></i>
                            <i class="bi bi-eye fs-2 d-none"></i>
                        </span>
                    </div>
                    <!--end::Input wrapper-->
    
                    <!--begin::Meter-->
                    <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                        <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                    </div>
                    <!--end::Meter-->
                </div>
                <!--end::Wrapper-->
    
                <!--begin::Hint-->
                <div class="text-muted">
                    Use 8 or more characters with a mix of letters, numbers & symbols.
                </div>
                <!--end::Hint-->
            </div>
            <!--end::Input group--->
    
            <!--end::Input group--->
            <div class="fv-row mb-8">
                <!--begin::Repeat Password-->
                <label for="name" class="text-gray-700 fw-semibold fs-20">Name</label>
                <input placeholder="Repeat Password" name="password_confirmation" type="password" autocomplete="off" class="form-control bg-transparent"/>
                <!--end::Repeat Password-->
            </div>
            <!--end::Input group--->
    
            <!--begin::Input group--->
            <div class="fv-row mb-10">
                <div class="form-check form-check-custom form-check-solid form-check-inline">
                    <input class="form-check-input" type="checkbox" name="toc" value="1"/>
    
                    <label class="form-check-label fw-semibold text-gray-700 fs-6">
                        I Agree &
    
                        <a href="#" class="ms-1 link-primary">Terms and conditions</a>.
                    </label>
                </div>
            </div>
            <!--end::Input group--->
    
            <!--begin::Submit button-->
            <div class="d-grid mb-10">
                <button type="submit" id="kt_sign_up_submit" class="btn btn-primary">
                    @include('partials/general/_button-indicator', ['label' => 'Sign Up'])
                </button>
            </div>
            <!--end::Submit button-->
    
            <!--begin::Sign up-->
            <div class="text-gray-500 text-center fw-semibold fs-6">
                Already have an Account?
    
                <a href="/login" class="link-primary fw-semibold">
                    Sign in
                </a>
            </div>
            <!--end::Sign up-->
        </form>
        <!--end::Form-->
    </div>
        
    

</x-auth-layout>
