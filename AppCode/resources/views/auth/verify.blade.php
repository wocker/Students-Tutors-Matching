@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="hero-static d-flex align-items-center">
            <div class="content">
                <div class="row justify-content-center push">
                    <div class="col-md-8 col-lg-6 col-xl-6">
                        <!-- Sign In Block -->
                        <div class="block block-rounded mb-0">

                            <div class="block-header block-header-default">
                                {{ __('admin.verify_email') }}


                            </div>
                            <div class="block-content">
                                <div class="p-sm-3 px-lg-6 px-xxl-5 py-lg-5">


                                    @if (session('resent'))
                                        <div class="alert alert-success" role="alert">
                                            {{ __('admin.fresh_verification_link') }}
                                        </div>
                                    @endif


                                    <p>{{ __('admin.before_proceeding') }}</p>


                                    <p>{{ __('admin.email_not_received') }},
                                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                        @csrf
                                        <button type="submit"
                                            class="btn btn-link p-0 m-0 align-baseline">{{ __('admin.click_here_to_request_another') }}</button>.
                                    </form>
                                </p>
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>


    </div>
@endsection
