<div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                tabindex="0">
                <div class="accordion" id="accordionExample">

                    <!-- User Details -->
                    @include('components.PersonalPart.PersonalDetails.userDetails')
                    
                    <!-- User Address -->
                    @include('components.PersonalPart.PersonalDetails.userAddress')
                   
                    <!-- User Career -->
                    @include('components.PersonalPart.PersonalDetails.career')

                    <!-- Prefered Area -->
                    @include('components.PersonalPart.PersonalDetails.preferedArea')
                    
                    <!-- Disabality -->
                    @include('components.PersonalPart.PersonalDetails.disabality')
                   
                </div>
            </div>