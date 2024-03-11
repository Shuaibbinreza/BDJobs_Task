<x-default-layout>

    @section('title')
        Dashboard
    @endsection

    {{-- @section('breadcrumbs')
        {{ Breadcrumbs::render('dashboard') }}
    @endsection --}}

    <!--begin::Row-->
    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        @include('partials/widgets/cards/profile_card')
    </div>
    {{-- <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        @include('partials/widgets/cards/user_form')
    </div> --}}
    <!--end::Row-->
    {{-- <x-multiform/> --}}
</x-default-layout>
