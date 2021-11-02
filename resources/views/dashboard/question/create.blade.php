@extends('dashboard.master')
@section('content')
 @include('dashboard.partials.validation-error')
<form action="{{ route('question.store') }}" method="post">
    @include('dashboard.question._form')
</form>

@endsection
