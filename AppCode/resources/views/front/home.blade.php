@extends('layouts.simple')

@section('page-title', 'Home')
@section('content')


    <div class="content mb-4">

        <div class="row">

            <div class="col-lg-12 text-center">
                <h2>{{ __('home.home_title') }} | #PilandoAndo</h2>
            </div>

        </div>

        <div class="container mt-5">

            <div class="row justify-content-center align-items-center">

                <div class="col-lg-7">

                    <div class="row">

                        <div class="col-lg-12">

                            <h5>{{ __('home.tutors') }}</h5>

                            <p>
                                {{ __('home.tutors_description') }}
                            </p>

                        </div>
                        <div class="col-lg-12">

                            <h5>{{ __('home.students') }}</h5>

                            <p>
                                {{ __('home.students_description') }}
                            </p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-5">
                    <img src="{{ asset('media/logos/pilandoando-image.jpg   ') }}" class="img-fluid">
                </div>


            </div>


            <div class="row justify-content-center align-items-center">

                <div class="col-lg-6">
                    <div class="row justify-content-center">

                        <div class="col-lg-4">
                            <a href="{{ route("survey.index",["type"=>"student"]) }}" class="btn btn-primary">
                                {{ __('home.student_btn_text') }}
                            </a>
                        </div>


                        <div class="col-lg-4">
                            <a href="{{ route("survey.index",["type"=>"tutor"]) }}" class="btn btn-primary">
                                {{ __('home.tutor_btn_text') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
<br>
            <div class="row mt-2 justify-content-center align-items-center text-center">

                <a href="{{ route("admin.dashboard.index") }}"><b>{{ __("home.admin_btn_text") }}</b></a>

            </div>

        </div>


    </div>


@endsection

@section('js_after')

    <!-- Page JS Helpers (CKEditor 5 plugins) -->
    <script></script>
@endsection
