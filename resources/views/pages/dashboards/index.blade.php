<x-default-layout>

    @section('title')
        Dashboard
    @endsection

    {{-- @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection --}}
    @php
        $userName = Auth::user()->profile_completed; // Retrieve the logged-in user's name
    @endphp

    @if ($userName == 0)
        <x-multiform/>
        {{-- <button>Complete Profile</button> --}}
    @else
        <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
            @include('partials/widgets/cards/profile_card')
        </div>
    @endif
    <!--begin::Row-->
    {{-- <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        @include('partials/widgets/cards/user_form')
    </div> --}}
    <!--end::Row-->
    {{-- <x-multiform/> --}}
    {{-- <x-test/>    --}}
    {{-- <div>{{ $vv->education_title }}</div> --}}
    
</x-default-layout>