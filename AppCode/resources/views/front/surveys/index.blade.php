@extends('layouts.simple')

@section('page-title', 'Survey')
@section('content')


    <div class="content mb-4">
        <survey-form :type="'{{ $type }}'"/>
    </div>


@endsection

@section('js_after')

    <!-- Page JS Helpers (CKEditor 5 plugins) -->
    <script></script>
@endsection
