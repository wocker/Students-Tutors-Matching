@extends('layouts.backend')
@section('page-title', __('admin.grouping'))
@section('css_before')
<!-- Page JS Plugins CSS -->

@endsection



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
                        <dt class="fs-3 fw-bold">{{ __('admin.tutors') }}</dt>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        {{ $tutors }}

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
                        <dt class="fs-3 fw-bold">{{ __('admin.students') }}</dt>
                    </dl>
                    <div class="item item-rounded-lg bg-body-light">
                        {{ $students }}

                    </div>
                </div>

            </div>

        </div>

    </div>

    <div class="row row-deck mb-4 justify-content-center">

        <div class="col-sm-4 ">

            <form method="GET" action="{{ route('admin.grouping.index') }}">


                <label for="total_students">{{ __('admin.students_per_group') }}</label>
                <div class="input-group">
                    @php
                    $totalStudents = 5;
                    if($total_students){
                    $totalStudents = $total_students;
                    }
                    @endphp

                    <input type="number" min="1" id="total_students" value="{{ $totalStudents }}" class="form-control"
                        name="total_students" required>
                    <button type="button" onclick="generate(this)" class="btn btn-primary">{{ __('admin.generate_group')
                        }}</button>
                </div>
            </form>


        </div>
    </div>


    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                {{ __('admin.grouping') }}
            </h3>
            {{-- <a href="{{ route('admin.students.create') }}" class="btn btn-primary">Add</a> --}}

        </div>

        <div class="block-content block-content-full">
            <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
            <div class="table-responsive">

                <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                    <thead>
                        <tr>
                            <th>{{ __('admin.group_number') }}</th>
                            <th>{{ __('admin.tutor_name') }}</th>

                            @for ($i=1; $i<=$totalStudents; $i++) <th>{{ __('admin.student')." ".$i }}</th>

                                @endfor


                        </tr>

                    </thead>

                    <tbody>

                        @foreach ($groups as $ind=> $group)

                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ ucwords($group['tutor_name']) }}</td>

                            @foreach ($group['students'] as $student)
                            <td>{{ ucwords($student['student_name']) }}</td>
                            @endforeach

                            @if(count($group['students']) <$totalStudents) @for ($i=1;
                                $i<=$totalStudents-count($group['students']); $i++) <td>
                                </td>

                                @endfor
                                @endif

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>


        </div>

    </div>


    <div class="row row-deck mb-4 justify-content-center">

        <div class="block block-rounded">

            <div class="block-content pb-4">
                <div class="col-sm-12 d-flex mb-4 justify-content-between ">

                    <h5  style="margin-right: 30px !important">{{ __('admin.students_without_group') }} : </h5>

                    <div>
                        @foreach ($studentsWithoutGroup as $student)
                        <span>{{ ucwords($student['student_name']) }} ({{ ucwords($student['learning_style_name']) }}),
                        </span>
                        @endforeach

                    </div>
                </div>

                <div class="col-sm-12 d-flex justify-content-between ">

                    <div>
                        <h5>{{ __('admin.number_of_students_without_group') }} : {{ count($studentsWithoutGroup) }}</h5>
                    </div>

                    <div>
                        <h5>{{ __('admin.percentage_of_students_without_group') }} : {{
                            round((count($studentsWithoutGroup)/$students)*100,2) }}%
                        </h5>
                    </div>
                </div>


            </div>

        </div>
    </div>



    <div class="row row-deck mb-4 justify-content-center">

        <div class="block block-rounded">

            <div class="block-content pb-4">
                <div class="col-sm-12 d-flex mb-4 justify-content-between ">

                    <h5  style="margin-right: 30px !important">{{ __('admin.tutors_without_group') }} : </h5>

                    <div>
                        @foreach ($tutorsWithoutGroup as $tutor)
                        <span>{{ ucwords($tutor['tutor_name']) }} ({{ ucwords($tutor['learning_style_name']) }}),
                        </span>
                        @endforeach

                    </div>
                </div>

                <div class="col-sm-12 d-flex justify-content-between ">

                    <div>
                        <h5>{{ __('admin.number_of_tutors_without_group') }} : {{ count($tutorsWithoutGroup) }}</h5>
                    </div>

                    <div>
                        <h5>{{ __('admin.percentage_of_tutors_without_group') }} : {{
                            round((count($tutorsWithoutGroup)/$tutors)*100,2) }}%
                        </h5>
                    </div>
                </div>


            </div>

        </div>
    </div>





</div>








</div>
<!-- END Page Content -->
@endsection

@section('js_after')

<script src="{{ asset('js/pages/tables_datatables_group.js') }}"></script>

<script>
    function generate(e){

        e.disabled = true;
        // change text of button
        e.innerText = "{{ __('admin.generating') }}"+'...';

        e.form.submit();
}
</script>


@endsection
