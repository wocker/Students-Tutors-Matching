@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row row-deck">

            <div class="col-sm-6 col-xxl-6 col-md-6">
                <!-- New Customers -->
                <div class="block block-rounded d-flex flex-column">

                    <div
                        class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold">{{ $tutors }}</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">{{ __('admin.tutors') }}</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="nav-main-link-icon fa fa-briefcase"></i>

                        </div>
                    </div>
                    <div class="bg-body-light rounded-bottom">

                        <div
                            class="block-content block-content-full block-content-sm  d-flex align-items-center justify-content-between">

                            <a href="{{ route('admin.tutors.index') }}">
                                <span>{{ __('admin.view_tutors') }}</span>
                                <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                            </a>



                        </div>


                    </div>

                </div>

            </div>

            <div class="col-sm-6 col-xxl-6 col-md-6">
                <!-- New Customers -->
                <div class="block block-rounded d-flex flex-column">
                    <div
                        class="block-content block-content-full flex-grow-1 d-flex justify-content-between align-items-center">
                        <dl class="mb-0">
                            <dt class="fs-3 fw-bold">{{ $students }}</dt>
                            <dd class="fs-sm fw-medium fs-sm fw-medium text-muted mb-0">{{ __('admin.students') }}</dd>
                        </dl>
                        <div class="item item-rounded-lg bg-body-light">
                            <i class="nav-main-link-icon fa fa-briefcase"></i>

                        </div>
                    </div>


                    <div
                        class="block-content block-content-full block-content-sm  d-flex align-items-center justify-content-between">

                        <a href="{{ route('admin.students.index') }}">
                            <span>{{ __('admin.view_students') }}</span>
                            <i class="fa fa-arrow-alt-circle-right ms-1 opacity-25 fs-base"></i>
                        </a>


                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')

@endsection
