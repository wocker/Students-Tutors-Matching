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
                    {{ __('admin.students') }}
                </h3>



                {{-- <a href="{{ route('admin.students.create') }}" class="btn btn-primary">Add</a> --}}

            </div>

            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-buttons class, functionality is initialized in js/pages/tables_datatables.js -->
                <div class="table-responsive">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-buttons">
                        <thead>
                            <tr>
                                <th>{{ __('admin.action') }}</th>

                                <th>{{ __('admin.index') }}</th>
                                <th>{{ __('admin.name') }}</th>
                                <th>{{ __('admin.email') }}</th>
                                <th>{{ __('admin.age') }}</th>
                                <th>{{ __('admin.sex') }}</th>
                                <th>{{ __('admin.teaching_style') }}</th>
                                @foreach ($questions as $ind => $question)
                                    <th>{{ __('admin.question') }} {{ ++$ind }}</th>
                                @endforeach

                                <th>{{ __('admin.created_at') }}</th>


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
                                                class="btn btn-sm btn-alt-danger" value="{{ __('admin.delete') }}">

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



                <div class="mt-4 text-center">
                    <form id="form-student-delete" {{-- action="{{ route('admin.students.destroy', $student->id) }}" --}} method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="button" onclick="confirmAllDelete('student')" class="btn btn-sm btn-alt-danger"
                            value="Eliminar datos de Estudiantes.">

                    </form>
                </div>

            </div>

        </div>

    </div>








    </div>
    <!-- END Page Content -->
@endsection

@section('js_after')

    <script src="{{ asset('js/pages/tables_datatables_students.js') }}"></script>

    <script>
        function confirmAllDelete(type) {
            Swal.fire({
                title: '¿Estás seguro',
                text: "Deseas eliminar los datos",
                icon: 'warning',
                showCancelButton: true,
                cancelButtonColor: '#198754',
                confirmButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                confirmButtonText: '¡Sí, bórralo!',
                reverseButtons: true,
                focusCancel: true,

            }).then((result) => {
                if (result.isConfirmed) {
                    // fire ask for password alert
                    askForPassword(type)

                }
            })
        }

        // ask for password alert
        function askForPassword(type) {
            Swal.fire({
                title: 'Ingresa tu contraseña de administrador.',
                input: 'password',
                inputAttributes: {
                    autocapitalize: 'off'
                },
                showCancelButton: true,
                confirmButtonText: 'Confirmar',
                confirmButtonColor: '#d33',
                showLoaderOnConfirm: true,
                cancelButtonColor: '#198754',
                confirmButtonColor: '#d33',
                cancelButtonText: 'Cancelar',
                inputValidator: (value) => {
                    if (!value) {
                        return 'Debes ingresar tu contraseña.'
                    }
                },
                preConfirm: (password) => {
                    return fetch(`/admin/dashboard/delete-all`, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'Accept': 'application/json',
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')
                                    .getAttribute('content')
                            },
                            body: JSON.stringify({
                                password: password,
                                type: type
                            })
                        })
                        .then(response => {
                            console.log(response)
                            if (!response.ok) {
                                throw new Error('Contraseña incorrecta.')
                            }
                            return response.json()
                        })
                        .catch(error => {
                            console.log("error", error)
                            Swal.showValidationMessage(

                                `Solicitud fallida: ${error}`
                            )
                        })
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                console.log("last", result)
                if (result.isConfirmed) {
                    // success alert
                    Swal.fire({
                        icon: 'success',
                        title: '¡Eliminado!',
                        text: 'Los registros han sido eliminados.',
                        showConfirmButton: false,
                        timer: 1500
                    }).then((result) => {
                        if (result.dismiss === Swal.DismissReason.timer) {
                            window.location.reload()
                        }
                    })
                }
            })
        }
    </script>


@endsection
