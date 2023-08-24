@extends('layouts.backend')
@section('page-title', 'Students')
@section('css_before')
    <!-- Page JS Plugins CSS -->

@endsection



@section('content')
    <!-- Page Content -->
    <div class="content">


        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">
                    {{ __("admin.students") }}
                </h3>



                {{-- <a href="{{ route('admin.students.create') }}" class="btn btn-primary">Add</a> --}}

            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                            <tr>
                                <th>{{ __("admin.action") }}</th>

                                <th>{{ __("admin.index") }}</th>
                                <th>{{ __("admin.name") }}</th>
                                <th>{{ __("admin.email") }}</th>
                                <th>{{ __("admin.age") }}</th>
                                <th>{{ __("admin.sex") }}</th>
                                <th>{{ __("admin.teaching_style") }}</th>
                                @foreach ($questions as $ind => $question)
                                    <th>{{ __("admin.question") }} {{ ++$ind }}</th>
                                @endforeach

                                <th>{{ __("admin.created_at") }}</th>


                            </tr>

                        </thead>

                        <tbody>
                            @foreach ($students as $ind => $student)
                                @php
                                    $learningStyle = $student->userLearningStyle();
                                @endphp


                                <tr>

                                    <td>
                                        <form id="form-{{ $student->id }}"
                                            action="{{ route('admin.students.destroy', $student->id) }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <input type="button" onclick="confirmDelete({{ $student->id }})"
                                                class="btn btn-sm btn-alt-danger" value="{{ __("admin.delete") }}">

                                        </form>
                                    </td>

                                    <td>{{ $ind + 1 }}</td>

                                    <td>{{ $student->name }}</td>
                                    <td>{{ $student->email }}</td>


                                    <td>{{ $student->age }}</td>

                                    <td>{{ $student->sex }}</td>

                                    <td>{{ $learningStyle['learning_style'] ? $learningStyle['learning_style']->style : '' }}
                                    </td>

                                    @foreach ($student->responses as $response)
                                    <td>{{ $response->possible_answer_id }}</td>

                                    @endforeach

                                    <td>{{ $student->created_at }}</td>


                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>

            </div>

        </div>

    </div>








    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')

<script src="{{ asset('js/pages/tables_datatables_students.js') }}"></script>


@endsection
